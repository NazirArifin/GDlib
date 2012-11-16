<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* IOFILES CLASS
 *
 * Class ini menghandle beberapa hal umum yang berhubungan dengan files.
 * Tidak semua fungsi dalam Filesystem PHP ada dalam class ini.
 *
 * Beberapa fungsi diadaptasi dari kode di CodeIgniter
 * license	http://codeigniter.com/user_guide/license.html
 * link		http://codeigniter.com
 */
 
class IOFiles {
    protected $zip = NULL,
			  $upload_params = array(),
			  $image_params = array();
    
    /*
     * Constructor
     */
    public function __construct() { }
	
	// --------------------------------------------------------------------

    /**
     * Public copy()
     * Copy one file to another place.
     *
     * @param 	string 	$sourcefile
     * @param 	string 	$destfile
     * @return 	boolean TRUE on success, FALSE on failure
     */
    final public function copy($sourcefile, $destfile) {
        return ( ! @copy($sourcefile, $destfile) ? FALSE : TRUE);
    }

	// --------------------------------------------------------------------

    /**
     * Public delete()
     * This is a dummy method to satisfy those people who are looking 
	 * for unlink() in the wrong place ;)
     *
     * @param 	string 	$filename
     * @return 	boolean TRUE on success, FALSE on failure
     */
    final public function delete($file) {
        return ( ! @unlink($file) ? FALSE : TRUE);
    }

	// --------------------------------------------------------------------

    /**
     * Public download()
     * Force to download file.
     *
     * @param 	string 	$file
     * @return 	mixed	void on success (start download), FALSE on failure
     */
    public function download($file) {
        header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename="'.basename($file).'"');
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: no-cache');
		header('Content-Length: ' . filesize($file));

		ob_clean();
		flush();
		readfile($file);
    }
	
	// --------------------------------------------------------------------

	/**
     * Public get_attrib()
     * Get attribut of file. Returning in array or string
     *
     * Since this method do chdir, please use with caution 
	 * ! PATH OF PARAM FILE MUST BELOW THE CALLING SCRIPT DIRECTORY !
	 * do not use for tmp_file in uploading for example
     *
     * @param 	string 	$file
     * @param 	mixed	$flags (case-sensitif)
     *  	Valid value: "size", "name", "type", "dir", "path",
	 *					 "perms", "read", "write", "access", "modify"
     * 		You may use more than one flags, eg: array('name', 'type');
     * @return 	mixed	array if flags unset, string if flags set, false on failure
     */
    public function get_attrib($file, $flags = array()) {
        $arrflags 		= array(
			'size',
			'name',
			'type',
			'dir',
			'path',
			'perms',
			'read',
			'write',
			'accessed',
			'modified'
		);
		
		// If flags doesnt match with keyword or $file doesnt exists
		if ((is_string($flags) 
			&& ! in_array($flags, $arrflags)) 
			OR ! file_exists($file)) {
			return FALSE;
		}

        $rarray 		= array();
		$is_dirchange	= FALSE;

		// Check flags parameter
		if (is_array($flags)) {
			if ( ! empty($flags)) {
				foreach ($flags as $val) {
					if (isset($arrflags[$val]))
						$rarray[$val] = '';
				}
			} else {
				// set all value to array, so we return all atrrib
				foreach ($arrflags as $key => $val) {
					$rarray[$val] = '';
				}
			}
		}
        
        // Ready to chdir
        $curdir 	= basename($this->_get_cwdir());
        $todir		= dirname(ltrim(ltrim($file, './'), '/'));
		$file		= basename($file);

		if ($curdir != $todir && $todir != '.') {
			$is_dirchange 	= TRUE;
			// ! Change active directory
			@chdir($todir);
		}
		
		// Filesize
        if ($flags == 'size' OR isset($rarray['size'])) {
			$rarray['size'] = filesize($file);
        }

        // Name
        if ($flags == 'name' OR isset($rarray['name'])){
			$rarray['name'] = basename($file);
        }

        // Type (based on extension only)
        if ($flags == 'type' OR isset($rarray['type'])) {
			$rarray['type'] = $this->get_type($file);
        }

        // Direktori
        if ($flags == 'dir' OR isset($rarray['dir'])) {
			$rarray['dir'] = ($todir == '.' ? basename($this->_get_cwdir()) : $todir);
        }
		
		// Realpath
		if ($flags == 'path' OR isset($rarray['path'])) {
			$rarray['path'] = dirname(realpath($file));
        }

        // File permission
        if ($flags == 'perms' OR isset($rarray['perms'])) {
			$rarray['perms'] = $this->_perms($file);
        }

        // Is Readable
        if ($flags == 'read' OR isset($rarray['read'])) {
            $can_read 	= (is_readable($file) ? 1 : 0);
			$rarray['read'] = $can_read;
		}

        // Is Writable
        if ($flags == 'write' OR isset($rarray['write'])) {
            $can_write 	= (is_writeable($file) ? 1 : 0);
			$rarray['write'] = $can_write;
        }

        // Last access, format 'Y-m-d H:i:s'
        if ($flags == 'accessed' OR isset($rarray['accessed'])) {
            $laccess 	= date("Y-m-d H:i:s", fileatime($file));
			$rarray['accessed'] = $laccess;
		}

        // Last modified/change, format 'Y-m-d H:i:s'
        if ($flags == 'modified' OR isset($rarray['modified'])) {
            $lchanged 	= date("Y-m-d H:i:s", filemtime($file));
			$rarray['modified'] = $lchanged;
		}
		
		// Returning
        if ($is_dirchange === TRUE)
			$this->_back2BaseDir($is_dirchange, $todir);
		
		return ( is_string($flags) ? $rarray[$flags] : $rarray);
    }

	// --------------------------------------------------------------------

	/**
     * Public type()
     * Get file's extension
     *
     * @param 	string 	$file
     * @return 	string 	Empty string on failure, Extension -> uppercased on success.
     */
    public function get_type($file) {
        preg_match('/^.*\.([^\.]+)$/', $file, $matches);
		
		return (isset($matches[1]) ? strtoupper($matches[1]) : '');
    }

	// --------------------------------------------------------------------

    /**
     * Public find()
     * Alias of search()
	 * Search for files that have name like the keyword.
     *
     * @param 	string 	$keyword (keyword of file name)
     * @param 	string 	$dirloc (specific directory)
     * @return 	mixed 	array on found, false on failure or no result
     */
    public function find($keyword, $dir = '.') {
        return $this->search($keyword, $dir);
    }

	// --------------------------------------------------------------------

    /**
     * Public gz_file()
     * Create Gziped version of file. The gzipped file will put reside the original file with
     * name "oldfilename.gz"
     *
     * @param 	string 	$sourcefile (file to read)
     * @return 	mixed	void on success, FALSE on failure
     */
    public function gz_file($sourcefile) {
        // read a file
        $content 	= $this->read($sourcefile);
		$destfile 	= $sourcefile.'.gz';

		// open file for writing
        $zp 		= gzopen($destfile, "wb");

		gzwrite($zp, $content); // write string to file
        gzclose($zp); // close file
    }

	// --------------------------------------------------------------------

    /**
     * Public move()
     * Move a file into a new place.
     *
     * @param 	string 	$oldfile
     * @param 	string 	$newfile
     * @return 	boolean TRUE on success, FALSE on failure
     */
    final public function move($oldfile, $newfile) {
        return ( ! @rename($oldfile, $newfile) ? FALSE : TRUE);
    }
	
	// --------------------------------------------------------------------
    
    /**
     * Public read()
     * Read content of file. This method support gzip filetype
     *
     * @param 	string 	$file
     * @param 	integer $rtype (1 return as string, 2 return as array)
     * @param 	integer $length 
     * @param 	integer $ftype (1 text file, 2 binary file)
     * @return 	boolean False on failure, Content of file on success.
     */
    public function read($file = '', $rtype = 1, $length = 0, $ftype = 1) {
        // If file doesnt exists
		if( ! file_exists($file))
			return FALSE;
        
        $ext 		= $this->get_type($file); 
		$filesize 	= ($length == 0 ? filesize($file) : $length);
		
        if ( ! empty($ext)) {
            // file binary
            if ($ftype != 1)
                return $this->_read_bfile($file,$filesize);
            
            if ($ext != 'GZ') {
                // file text
                if($rtype == 1)
                    return file_get_contents($file , TRUE, NULL, 0, $filesize);
                else
                    return file($file);
					
            } else {
                // file gzip, ignoring $length
                $zd			= gzopen($file, "r"); 
				$contents 	= gzread($zd, 1024000); 
				gzclose($zd);
                return $contents;
            }
        } else {
            // assume binary file
            return $this->_read_bfile($file, $filesize);
        }
    }

	// --------------------------------------------------------------------

    /**
     * Public rename()
     * Renaming file. Returning boolean TRUE or FALSE.
     *
     * @param 	string 	$oldfilename
     * @param 	string 	$newfilename
     * @return 	boolean TRUE on success, false on failure
     */
    final public function rename($oldfile, $newfile) {
        return @rename($oldfile, $newfile);
    }
    
	// --------------------------------------------------------------------
	
    /**
     * Public search()
     * Search for files that have name like the keyword.
     *
     * @param 	string 	$keyword (keyword of file name)
     * @param 	string 	$dirloc (specific directory)
     * @return 	mixed 	array on found, false on failure or no result
     */
    public function search($keyword, $dir = '.') {
        if( ! is_dir($dir))
			return FALSE;
            
        $res 	= $this->_scan_dir($dir, $keyword);
        return (empty($res) ? FALSE : $res);
    }
	
	// --------------------------------------------------------------------
	
    /**
     * Public write()
     * Write content to file. This method support gzip filetype if extension is specified
     *
     * @param 	string 	$file (output file)
     * @param 	string 	$content (content to be written)
     * @param 	string	$mode
     *   -- default value is 'ab' -- append
     *   -- this method will not check mode for unknown mode
     * @return 	boolean False on failure, Void on success.
     */
    public function write($file = '', $content = '', $mode = 'ab') {
		$ext = $this->get_type($file);
		
        if ($ext == 'GZ') {
            $gz = gzopen($file,'wb9'); 
			gzwrite($gz, $content); 
			gzclose($gz);
        } else {
            // Default mode 'ab'
            if ( ! $handle = @fopen($file, $mode))
				return FALSE;
				
			if (@fwrite($handle, $content) === FALSE)
				return FALSE;

			@fclose($handle);
        }
    }
	
	// --------------------------------------------------------------------
	
	/**
	 * Image Processing Methods
	 */
	
	// --------------------------------------------------------------------
	
	/**
	 * Public image_config()
	 * Set some configurations for image processing
	 *
	 * @param	array	configs parameter
	 * @return	void
	 */
	public function image_config($config = array()) {
		$defaults = array(
			'dynamic_output'	=> FALSE,
			'source_image'		=> '',
			'new_image'			=> '',
			'width'				=> '',
			'height'			=> '',
			'quality'			=> '90',
			'maintain_ratio'	=> TRUE,
			'master_dim'		=> 'auto',
			'rotation_angle'	=> '',
			'x_axis'			=> '',
			'y_axis'			=> '',
			'error_msg'			=> '',
			'wm_use_drop_shadow'=> FALSE,
			'wm_use_truetype'	=> FALSE,

			// Watermark Vars
			'wm_text'			=> '',
			'wm_type'			=> 'text',		// Type of watermarking.  Options:  text/overlay
			'wm_x_transp'		=> 4,
			'wm_y_transp'		=> 4,
			'wm_overlay_path'	=> '',
			'wm_font_path'		=> '',
			'wm_font_size'		=> 17,
			'wm_vrt_alignment'	=> 'B',			// Vertical alignment:   T M B
			'wm_hor_alignment'	=> 'C',			// Horizontal alignment: L R C
			'wm_padding'		=> 0,
			'wm_hor_offset'		=> 0,			// Lets you push text to the right
			'wm_vrt_offset'		=> 0,			// Lets you push  text down
			'wm_font_color'		=> '#ffffff',
			'wm_shadow_color'	=> '',
			'wm_shadow_distance'=> 2,
			'wm_opacity'		=> 50,			// Image opacity: 1 - 100  Only works with image
			
			// Private data, shouldnt' modify
			'orig_width'		=> '',
			'orig_height'		=> '',
			'image_type'		=> '',
			'mime_type'			=> '',
		);
		
		$this->image_params = $defaults;
		$p	=& $this->image_params;
		
		if (count($config) > 0) {
			foreach ($config as $key => $val) {
				if (isset($p[$key]))
					$p[$key] = $val;
			}
		}
		
		if (empty($p['source_image'])) {
			$this->image_set_error('source_image_required');
			return FALSE;
		}
		
		if ( ! function_exists('getimagesize')) {
			$this->image_set_error('gd_required');
			return FALSE;
		}
		
		// Get image properties
		$vals = @getimagesize($p['source_image']);
		$type = array(1 => 'gif', 2 => 'jpeg', 3 => 'png');
		$mime = (isset($type[$vals['2']])) ? 'image/' . $type[$vals['2']] : 'image/jpg';
		
		$p['orig_width'] 	= $vals['0'];
		$p['orig_height'] 	= $vals['1'];
		$p['image_type'] 	= $vals['2'];
		$p['mime_type'] 	= $mime;
		
		if (empty($p['new_image']))
			$p['new_image'] = $p['source_image'];
		
		// Get name and extension for dest image
		if ($p['new_image'] != $p['source_image']) {
			$ext	= strtolower($this->get_type($p['source_image']));
			if (strtolower($this->get_type($p['new_image'])) != $ext)
				$p['new_image'] .= '.' . $ext;
		}
		
		if ($p['maintain_ratio'] === TRUE && ($p['width'] != '' AND $p['height'] != ''))
			$this->image_reproportion();
		
		if ($p['width'] == '')
			$p['width'] = $p['orig_width'];
			
		if ($p['height'] == '')
			$p['height'] = $p['orig_height'];
			
		$p['quality'] = trim(str_replace('%', '', $p['quality']));
		
		if ($p['quality'] == '' OR $p['quality'] == 0 OR ! is_numeric($p['quality']))
			$p['quality'] = 90;
		
		$p['x_axis'] = ($p['x_axis'] == '' OR ! is_numeric($p['x_axis'])) ? 0 : $p['x_axis'];
		$p['y_axis'] = ($p['y_axis'] == '' OR ! is_numeric($p['y_axis'])) ? 0 : $p['y_axis'];
		
		// Watermark related
		if ($p['wm_font_color'] != '') {
			if (strlen($p['wm_font_color']) == 6)
				$p['wm_font_color'] = '#' . $p['wm_font_color'];
		}
		
		if ($p['wm_shadow_color'] != '') {
			if (strlen($p['wm_shadow_color']) == 6)
				$p['wm_shadow_color'] = '#'.$p['wm_shadow_color'];
		}

		if ($p['wm_shadow_color'] != '')
			$p['wm_use_drop_shadow'] = TRUE;

		if ($p['wm_font_path'] != '')
			$p['wm_use_truetype'] = TRUE;
		
		return TRUE;
	}
	
	/**
	 * Private image_reproportion
	 *
	 * @return 	void
	 */
	private function image_reproportion() {
		$width =& $this->image_params['width'];
		$orig_width =& $this->image_params['orig_width'];
		$height =& $this->image_params['height'];
		$orig_height =& $this->image_params['orig_height'];
		$master_dim =& $this->image_params['master_dim'];
		
		if ( ! is_numeric($width) OR ! is_numeric($height) OR $width == 0 OR $height == 0)
			return;

		if ( ! is_numeric($orig_width) OR ! is_numeric($orig_height) OR $orig_width == 0 OR $orig_height == 0)
			return;

		$new_width	= ceil($orig_width * $height / $orig_height);
		$new_height	= ceil($width * $orig_height / $orig_width);
		
		$ratio = (($orig_height / $orig_width) - ($height / $width));

		if ($master_dim != 'width' AND $master_dim != 'height') {
			$master_dim = ($ratio < 0) ? 'width' : 'height';
		}
		
		if (($width != $new_width) AND ($height != $new_height)) {
			if ($master_dim == 'height') {
				$width = $new_width;
			} else {
				$height = $new_height;
			}
		}
	}
	
	/**
	 * Public image_clear()
	 * Clear the current config parameter
	 *
	 * @return	void
	 */
	public function image_clear() {
		$props = array('source_image', 'new_image', 'image_type', 'quality', 'orig_width', 'orig_height', 'rotation_angle', 'x_axis', 'y_axis', 'wm_overlay_path', 'wm_use_truetype', 'dynamic_output', 'wm_font_size', 'wm_text', 'wm_vrt_alignment', 'wm_hor_alignment', 'wm_padding', 'wm_hor_offset', 'wm_vrt_offset', 'wm_font_color', 'wm_use_drop_shadow', 'wm_shadow_color', 'wm_shadow_distance', 'wm_opacity');

		foreach ($props as $val)
			$this->image_params[$val] = '';

		$this->image_params['master_dim'] = 'auto';
	}
	
	/**
	 * Public image_crop()
	 * Interface for cropping image. This will call image_process()
	 *
	 * @return	boolean	TRUE on success FALSE on failure
	 */
	public function image_crop() {
		return $this->image_process('crop');
	}
	
	/**
	 * Public image_resize()
	 * Interface for resizing image. This will call image_process()
	 *
	 * @return	boolean	TRUE on success FALSE on failure
	 */
	public function image_resize() {
		return $this->image_process('resize');
	}
	
	/**
	 * Public image_rotate()
	 * Rotating image
	 *
	 * @return	void
	 */
	public function image_rotate() {
		$p =& $this->image_params;
		
		$degs = array(90, 180, 270, 'vrt', 'hor');
		
		if ($p['rotation_angle'] == '' OR ! in_array($p['rotation_angle'], $degs)) {
			$this->image_set_error('rotation_angle_required');
			return FALSE;
		}
		
		if ($p['rotation_angle'] == 90 OR $p['rotation_angle'] == 270) {
			$p['width'] 	= $p['orig_height'];
			$p['height']	= $p['orig_width'];
		} else {
			$p['width']		= $p['orig_width'];
			$p['height']	= $p['orig_height'];
		}
		
		if ($p['rotation_angle'] == 'hor' OR $p['rotation_angle'] == 'vrt')
			return $this->image_mirror();
		
		$image 	= $this->image_create();
		
		if ($image === FALSE)
			return FALSE;
			
		$white 	= imagecolorallocate($image, 255, 255, 255);
		
		$image_p = imagerotate($image, $this->image_params['rotation_angle'], $white);
		
		$this->image_get_result($image_p);
		
		return TRUE;
	}
	
	/**
	 * Public image_show_error()
	 * Show error for protected property error_msg
	 *
	 * @return	string	error message in error_msg
	 */
	public function image_show_error() {
		return $this->image_params['error_msg'];
	}
	
	/**
	 * Public image_watermark()
	 * This public method will choose appropriate method for watermark
	 *
	 * @return	boolean	TRUE on success FALSE on failure
	 */
	public function image_watermark() {
		if ($this->image_params['wm_type'] == 'overlay')
			return $this->image_overlay_watermark();
		else
			return $this->image_text_watermark();
	}
	
	/**
	 * Protected image_mirror()
	 * Rotate image with mirroring
	 *
	 * @return	mixed	TRUE/void on success, FALSE on failure
	 */
	protected function image_mirror() {
		$p =& $this->image_params;
		
		$image = $this->image_create();
		if ($image === FALSE)
			return FALSE;
			
		$width	= $p['orig_width'];
		$height	= $p['orig_height'];
		
		if ($p['rotation_angle'] == 'hor') {
			for ($i = 0; $i < $height; $i++) {
				$left 	= 0;
				$right	= $width - 1;
				
				while ($left < $right) {
					$cl	= imagecolorat($image, $left, $i);
					$cr = imagecolorat($image, $right, $i);
					
					imagesetpixel($image, $left, $i, $cr);
					imagesetpixel($image, $right, $i, $cl);
					
					$left++;
					$right--;
				}
			}
		} else {
			for ($i = 0; $i < $width; $i++) {
				$top	= 0;
				$bot	= $height - 1;
				
				while ($top < $bot) {
					$ct	= imagecolorat($image, $i, $top);
					$cb	= imagecolorat($image, $i, $bot);
					
					imagesetpixel($image, $i, $top, $cb);
					imagesetpixel($image, $i, $bot, $ct);
					
					$top++;
					$bot--;
				}
			}
		}
		
		$this->image_get_result($image);
		
		return TRUE;
	}
	
	/**
	 * Protected image_overlay_watermark()
	 * Add image watermark to another image
	 *
	 * @return	boolean	TRUE on success false on failure
	 */
	protected function image_overlay_watermark() {
		$p =& $this->image_params;
		
		if ( ! function_exists('imagecolortransparent')) {
			$this->image_set_error('gd_required');
			return FALSE;
		}
		
		// Fetch watermark image properties
		$vals = @getimagesize($p['wm_overlay_path']);
		$wm_img_type	= $vals['2'];
		$wm_width		= $vals['0'];
		$wm_height		= $vals['1'];
		
		//  Create two image resources
		$wm_img  = $this->image_create($p['wm_overlay_path'], $wm_img_type);
		$src_img = $this->image_create();

		$p['wm_vrt_alignment'] = strtoupper(substr($p['wm_vrt_alignment'], 0, 1));
		$p['wm_hor_alignment'] = strtoupper(substr($p['wm_hor_alignment'], 0, 1));

		if ($p['wm_vrt_alignment'] == 'B')
			$p['wm_vrt_offset'] = $p['wm_vrt_offset'] * -1;

		if ($p['wm_hor_alignment'] == 'R')
			$p['wm_hor_offset'] = $p['wm_hor_offset'] * -1;

		//  Set the base x and y axis values
		$x_axis = $p['wm_hor_offset'] + $p['wm_padding'];
		$y_axis = $p['wm_vrt_offset'] + $p['wm_padding'];

		//  Set the vertical position
		switch ($p['wm_vrt_alignment']) {
			case 	'T':
				break;
			case 	'M':	
				$y_axis += ($p['orig_height'] / 2) - ($wm_height / 2);
				break;
			case 	'B':	
				$y_axis += $p['orig_height'] - $wm_height;
				break;
		}

		//  Set the horizontal position
		switch ($p['wm_hor_alignment']) {
			case 	'L':
				break;
			case 	'C':	
				$x_axis += ($p['orig_width'] / 2) - ($wm_width / 2);
				break;
			case 	'R':	
				$x_axis += $p['orig_width'] - $wm_width;
				break;
		}

		//  Build the finalized image
		if ($wm_img_type == 3 AND function_exists('imagealphablending')) {
			@imagealphablending($src_img, TRUE);
		}

		// Set RGB values for text and shadow
		$rgba = imagecolorat($wm_img, $p['wm_x_transp'], $p['wm_y_transp']);
		$alpha = ($rgba & 0x7F000000) >> 24;

		// make a best guess as to whether we're dealing with an image with alpha transparency or no/binary transparency
		if ($alpha > 0) {
			// copy the image directly, the image's alpha transparency being the sole determinant of blending
			imagecopy($src_img, $wm_img, $x_axis, $y_axis, 0, 0, $wm_width, $wm_height);
		} else {
			// set our RGB value from above to be transparent and merge the images with the specified opacity
			imagecolortransparent($wm_img, imagecolorat($wm_img, $p['wm_x_transp'], $p['wm_y_transp']));
			imagecopymerge($src_img, $wm_img, $x_axis, $y_axis, 0, 0, $wm_width, $wm_height, $p['wm_opacity']);
		}
		
		//  Output the image
		$this->image_get_result($src_img);
		
		return TRUE;
	}
	
	/**
	 * Protected image_text_watermark()
	 * Add text as watermark to an image
	 *
	 * @return 	boolean TRUE on success false on failure
	 */
	protected function image_text_watermark() {
		$p =& $this->image_params;
		
		$image = $this->image_create();
		if ($image === FALSE)
			return FALSE;
		
		if ($p['wm_use_truetype'] == TRUE AND ! file_exists($p['wm_font_path'])) {
			$this->image_set_error('missing_font');
			return FALSE;
		}

		// Set RGB values for text and shadow
		$p['wm_font_color']		= str_replace('#', '', $p['wm_font_color']);
		$p['wm_shadow_color']	= str_replace('#', '', $p['wm_shadow_color']);

		$R1 = hexdec(substr($p['wm_font_color'], 0, 2));
		$G1 = hexdec(substr($p['wm_font_color'], 2, 2));
		$B1 = hexdec(substr($p['wm_font_color'], 4, 2));

		$R2 = hexdec(substr($p['wm_shadow_color'], 0, 2));
		$G2 = hexdec(substr($p['wm_shadow_color'], 2, 2));
		$B2 = hexdec(substr($p['wm_shadow_color'], 4, 2));

		$txt_color	= imagecolorclosest($image, $R1, $G1, $B1);
		$drp_color	= imagecolorclosest($image, $R2, $G2, $B2);

		if ($p['wm_vrt_alignment'] == 'B')
			$p['wm_vrt_offset'] = $p['wm_vrt_offset'] * -1;

		if ($p['wm_hor_alignment'] == 'R')
			$p['wm_hor_offset'] = $p['wm_hor_offset'] * -1;

		if ($p['wm_use_truetype'] === TRUE) {
			if ($p['wm_font_size'] == '')
				$p['wm_font_size'] = '17';

			$fontwidth  = $p['wm_font_size']-($p['wm_font_size']/4);
			$fontheight = $p['wm_font_size'];
			$p['wm_vrt_offset'] += $p['wm_font_size'];
		} else {
			$fontwidth  = imagefontwidth($p['wm_font_size']);
			$fontheight = imagefontheight($p['wm_font_size']);
		}

		// Set base X and Y axis values
		$x_axis = $p['wm_hor_offset'] + $p['wm_padding'];
		$y_axis = $p['wm_vrt_offset'] + $p['wm_padding'];

		// Set verticle alignment
		if ($p['wm_use_drop_shadow'] == FALSE)
			$p['wm_shadow_distance'] = 0;

		$p['wm_vrt_alignment'] = strtoupper(substr($p['wm_vrt_alignment'], 0, 1));
		$p['wm_hor_alignment'] = strtoupper(substr($p['wm_hor_alignment'], 0, 1));

		switch ($p['wm_vrt_alignment']) {
			case	 'T' :
				break;
			case 	'M':	
				$y_axis += ($p['orig_height']/2)+($fontheight/2);
				break;
			case 	'B':	
				$y_axis += ($p['orig_height'] - $fontheight - $p['wm_shadow_distance'] - ($fontheight/2));
				break;
		}

		$x_shad = $x_axis + $p['wm_shadow_distance'];
		$y_shad = $y_axis + $p['wm_shadow_distance'];

		// Set horizontal alignment
		switch ($p['wm_hor_alignment']) {
			case 	'L':
				break;
			case 	'R':
						if ($p['wm_use_drop_shadow'])
							$x_shad += ($p['orig_width'] - $fontwidth*strlen($p['wm_text']));
							$x_axis += ($p['orig_width'] - $fontwidth*strlen($p['wm_text']));
				break;
			case 	'C':
						if ($p['wm_use_drop_shadow'])
							$x_shad += floor(($p['orig_width'] - $fontwidth*strlen($p['wm_text']))/2);
							$x_axis += floor(($p['orig_width']  -$fontwidth*strlen($p['wm_text']))/2);
				break;
		}

		//  Add the text to the source image
		if ($p['wm_use_truetype']) {
			if ($p['wm_use_drop_shadow'])
				imagettftext($image, $p['wm_font_size'], 0, $x_shad, $y_shad, $drp_color, $p['wm_font_path'], $p['wm_text']);
				imagettftext($image, $p['wm_font_size'], 0, $x_axis, $y_axis, $txt_color, $p['wm_font_path'], $p['wm_text']);
		} else {
			if ($p['wm_use_drop_shadow'])
				imagestring($image, $p['wm_font_size'], $x_shad, $y_shad, $p['wm_text'], $drp_color);
				imagestring($image, $p['wm_font_size'], $x_axis, $y_axis, $p['wm_text'], $txt_color);
		}

		//  Output the final image
		$this->image_get_result($image);

		return TRUE;
	}
	
	/**
	 * Protected image_process()
	 * Doing resizing or cropping image
	 *
	 * @param	string	action taken
	 * @return	mixed	TRUE on success save to disk, void on displaying image
	 */
	protected function image_process($action = 'resize') {
		$p =& $this->image_params;
		
		// If target has same dimension
		if ($p['dynamic_output'] === FALSE) {
			if ($p['orig_width'] == $p['width'] && $p['orig_height'] == $p['height']) {
				if ($p['source_image'] != $p['new_image']) {
					$this->copy($p['source_image'], $p['new_image']);
				}
				return TRUE;
			}
		}
		
		if ($action == 'crop') {
			$p['orig_width'] 	= $p['width'];
			$p['orig_height']	= $p['height'];
		} else {
			$p['x_axis'] = $p['y_axis']	= 0;
		}
		
		$image = $this->image_create();
		if ($image === FALSE)
			return FALSE;
		
		$image_p = imagecreatetruecolor($p['width'], $p['height']);
		
		if ($p['image_type'] == 3) {
			imagealphablending($image_p, FALSE);
			imagesavealpha($image_p, TRUE);
		}
		
		imagecopyresampled($image_p, $image, 0, 0, $p['x_axis'], $p['y_axis'], $p['width'], $p['height'], $p['orig_width'], $p['orig_height']);
		
		$this->image_get_result($image_p);
		
		return TRUE;
	}
	
	/**
	 * Protected image_create
	 * Creating image resource for next operation
	 *
	 * @param	string	path to image
	 * @param	int		image type from getimagesize()
	 * @return	mixed	resource on success and FALSE on failure
	 */
	protected function image_create($path = '', $image_type = 0) {
		if (empty($path))
			$file = $this->image_params['source_image'];
		else
			$file = $path;
			
		if (empty($image_type))
			$type = $this->image_params['image_type'];
		else
			$type = $image_type;
		
		switch ($type) {
			case 1	:
				if ( ! function_exists('imagecreatefromgif')) {
					$this->image_set_error('gif_unsupported');
					return FALSE;
				}
				$image 	= imagecreatefromgif($file);
				break;
				
			case 2	:
				if ( ! function_exists('imagecreatefromjpeg')) {
					$this->image_set_error('jpeg_unsupported');
					return FALSE;
				}
				$image = imagecreatefromjpeg($file);
				break;
				
			case 3:
				if ( ! function_exists('imagecreatefrompng')) {
					$this->image_set_error('png_unsupported');
					return FALSE;
				}
				$image = imagecreatefrompng($file);
				break;
				
		}
		
		return $image;
	}
	
	/**
	 * Private image_get_result
	 * Whether display output or save to disk
	 *
	 * @param	resource	image creation resource
	 * @return 	void
	 */
	private function image_get_result($image_p = NULL) {
		$p =& $this->image_params;
		
		if ($p['dynamic_output'] === TRUE) {
			header("Content-Disposition: filename={$p['source_image']};");
			header("Content-Type: {$p['mime_type']}");
			header('Content-Transfer-Encoding: binary');
			header('Last-Modified: '.gmdate('D, d M Y H:i:s', time()).' GMT');
		}
		
		switch ($p['image_type']) {
			case 1	: imagegif($image_p, ($p['dynamic_output'] ? NULL : $p['new_image']));
				break;
			case 2	: imagejpeg($image_p, ($p['dynamic_output'] ? NULL : $p['new_image']), $p['quality']);
				break;
			case 3	: imagepng($image_p, ($p['dynamic_output'] ? NULL : $p['new_image']));
				break;
		}
	}
	
	/**
	 * Private image_set_error()
	 * Set error
	 *
	 * @param	string	error message
	 * @return 	void
	 */
	private function image_set_error($msg = '') {
		$this->image_params['error_msg'] = $msg;
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Upload Methods
	 */
	
	// --------------------------------------------------------------------

    /**
     * Public upload_config()
     * Set upload configuration that will set for upload process. Call this
	 * function before uploading process.
     *
     * @param 	array 	$config
     * @return 	void
     */
	public function upload_config($config = array()) {
		$defaults = array(
			'max_size'		=> 0,
			'max_filename'	=> 0,
			'allowed_types'	=> '',
			'file_temp'		=> '',
			'file_name'		=> '',
			'orig_name'		=> '',
			'file_type'		=> '',
			'file_size'		=> '',
			'file_ext'		=> '',
			'upload_path'	=> '',
			'overwrite'		=> FALSE,
			'encrypt_name'	=> FALSE,
			'error_msg'		=> '',
			'remove_spaces'	=> TRUE
		);
		
		// let assign default to $this->upload_params
		$this->upload_params = $defaults;
		
		foreach ($config as $key => $val) {
			if (isset($this->upload_params[$key]))
				$this->upload_params[$key] = $val;
		}
	}
	
	// --------------------------------------------------------------------

    /**
     * Public upload_get_param($name)
     * Return value of upload_param
     *
     * @param 	string 	$name
     * @return 	mixed
     */
	public function upload_get_param($name = '') {
		if ( ! isset($this->upload_params[$name]))
			return '';
		else {
			return $this->upload_params[$name];
		}
	}
	
	// --------------------------------------------------------------------

    /**
     * Public upload()
     * Upload file processing
     *
     * @param 	string 	$field	HTML name for $_FILES
     * @return 	boolean	TRUE on success and FALSE on failure
     */
	public function upload($field = 'userfile') {
		if ( ! isset($_FILES[$field])) {
			$this->upload_set_error('no_file');
			return FALSE;
		}
		
		if ( ! is_dir($this->upload_params['upload_path'])) {
			$this->upload_set_error('path_invalid');
			return FALSE;
		}
		
		if ( ! is_uploaded_file($_FILES[$field]['tmp_name'])) {
			$error = ( ! isset($_FILES[$field]['error']) ? 4 : $_FILES[$field]['error']);
			switch ($error) {
				
				case 1:
					$this->upload_set_error('exceed_size');
					break;
				case 2:
					$this->upload_set_error('exceed_form_limit');
					break;
				case 3:
					$this->upload_set_error('file_partial');
					break;
				case 4:
					$this->upload_set_error('no_file');
					break;
				case 6:
					$this->upload_set_error('no_temp');
					break;
				case 7:
					$this->upload_set_error('unable_write');
					break;
				case 8:
					$this->upload_set_error('ext_error');
					break;
				default:
					$this->upload_set_error('no_file');
					break;
			
			}
			
			return FALSE;
		}
		
		$this->upload_params['file_temp']	= $_FILES[$field]['tmp_name'];
		$this->upload_params['file_size']	= $_FILES[$field]['size'];
		$this->upload_params['file_type']	= $_FILES[$field]['type'];
		$this->upload_params['orig_name']	= $_FILES[$field]['name'];
		$this->upload_params['file_ext']	= strtolower($this->get_type($this->upload_params['orig_name']));
		
		// Is file allowed by type
		$types	= array();
		$allow	= strtolower($this->upload_params['allowed_types']);
		$name	=& $this->upload_params['file_name'];
		$ext	= $this->upload_params['file_ext'];
		
		if ($allow != '') {
			$types = explode('|', $allow);
			if ( ! in_array($ext, $types)) {
				$this->upload_set_error('ext_error');
				return FALSE;
			}
			
			// For image
			$image_types = array('gif', 'jpg', 'jpeg', 'png', 'jpe');
			if (in_array($ext, $image_types)) {
				if (getimagesize($this->upload_params['file_temp']) === FALSE) {
					return FALSE;
				}
			}
		}
		
		$ext = '.' . $ext;
		if ( ! empty($name)) {
			// If no extension
			if (strpos($name, '.') === FALSE)
				$name .= $ext;
		} else {
			$name = $this->upload_params['orig_name'];
		}
		
		// Is exceed maximum size (in bytes)
		if (filesize($this->upload_params['file_temp']) > $this->upload_params['max_size'] && $this->upload_params['max_size'] != 0) {
			$this->upload_set_error('exceed_size');
			return FALSE;
		}
		
		// Max Length for name
		$max_len = $this->upload_params['max_filename'];
		if ($max_len > 0) {
			if (strlen($name) > $max_len) {
				$name = substr($name, 0, ($max_len - strlen($ext))) . ext;
			}
		}
		
		//encrypt_name
		if ($this->upload_params['encrypt_name'] === TRUE) {
			mt_srand();
			$name = md5(uniqid(mt_rand())) . $ext;
		} else {
			// Validate file name
			$bad = array('<!--', '-->', "'", '<', '>', '"', '&', '$', '=', ';', '?', '/', '%20', '%22', 
			'%3c', '%253c', '%3e', '%0e', '%28', '%29', '%2528', '%26', '%24', '%3f', '%3b', '%3d');
			$name = str_replace($bad, '', $name);
			$name = preg_replace('/\s/', '_', $name);
		}
		
		$path 	= $this->upload_params['upload_path'];
		
		if ($this->upload_params['overwrite'] === FALSE) {
			if (file_exists($path . $name)) {
				$filename = str_replace($ext, '', $name);
				$new_filename = '';
				for ($i = 1; $i < 100; $i++) {
					if ( ! file_exists($path . $filename . $i . $ext)) {
						$new_filename = $filename . $i . $ext;
						break;
					}
				}
				
				if ($new_filename == '') {
					$this->upload_set_error('bad_filename');
					return FALSE;
				}
				
				$name = $filename;
			}
		}
		
		if ( ! @move_uploaded_file($_FILES[$field]['tmp_name'], $path . $name)) {
			$this->set_error('error_dest');
			return FALSE;
		}
		
		return TRUE;
	}
	
	// --------------------------------------------------------------------
	
	/**
     * Private _upload_show_error()
     * Show error message to $upload_params
     *
     * @return 	string
     */
	public function upload_show_error() {
		return $this->upload_params['error_msg'];
	}
	
	// --------------------------------------------------------------------

    /**
     * Private _upload_set_error()
     * Setting error message to $upload_params
     *
     * @param 	string 	$msg String of error message
     * @return 	void
     */
	private function upload_set_error($msg) {
		$this->upload_params['error_msg'] = $msg;
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Zip Archive Methods
	 */
	
	// --------------------------------------------------------------------
	
	/**
     * Public zip_compress()
     * Create a zip file that contains a single file in parameter.
     * New file will be put beside the source file
     *
     * @param 	mixed	$file string if only one file, array if more than one files
         -- Note: all files must be in the same directory
     * @param 	string	$zipfile (name of new zipped file)
     * @return	boolean TRUE on success, FALSE on failure
     */
	public function zip_compress($file, $zipfile = '') {
        // Return early if zip module not loaded
		if ( ! $this->_zip_mod_load())
			return FALSE;
		
		if (empty($zipfile)) {
			if (is_array($file)) {
                // If name is empty, use first file name
				foreach ($file as $val) {
                    $destfile = $val.'.zip'; 
					break;
                }
            } else {
                $destfile = $file.'.zip';
            }
        } else {
            if ( ! is_dir(dirname($zipfile)))
				return FALSE;
				
            preg_match('/^.*\.([^\.]+)$/', $zipfile, $matches);
            
			if ( ! isset($matches[1])) {
				$destfile 	= $zipfile.'.zip';
            } else {
                $ext 		= strtoupper($matches[1]);
                if ($ext != 'ZIP')
					$destfile = $zipfile . '.zip'; 
				else
					$destfile = $zipfile;
            }
        }
        
		// Try to create
        $res 	= $this->zip->open($destfile, ZipArchive::CREATE);
        if ($res !== TRUE)
			return FALSE;
		
		if (is_array($file)) {
            // Iterate file
            foreach ($file as $key => $val) {
                if ( ! file_exists($val))
					continue;
					
                $this->zip->addFile($val, basename($val));
            }
        } else {
            if ( ! is_file($file))
				return FALSE;
            
			$this->zip->addFile($file, basename($file));
        }
		
		$this->zip->close(); 
		return TRUE;
    }

	// --------------------------------------------------------------------

	/**
     * Public zip_extract()
     * Extract a zip file into a specified directory.
     *
     * @param 	string 	$zipfile
     * @param 	string 	$destdir
     * @return 	boolean TRUE on success, FALSE on failure
     */
    public function zip_extract($zipfile, $destdir) {
        if ( ! $this->_zip_mod_load()) {
			return FALSE;
        } else {
			if ( ! $this->zip->open($zipfile))
				return FALSE;

			if ( ! $this->zip->extractTo($destdir))
				return FALSE;

			$this->zip->close();
			return TRUE;
        }
    }
	
	// --------------------------------------------------------------------
	
    /**
     * Private _zip_mod_load()
     * Load zip module to $zip property
     *
     * @return 	boolean	TRUE on success
     */
	private function _zip_mod_load() {
		if (is_object($this->zip)) {
			return TRUE;
		} else {
			if (class_exists('ZipArchive')) {
				$this->zip = new ZipArchive;
				return TRUE;
			} else {
				return FALSE;
			}
		}
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Common Private Methods
	 */
	
	// --------------------------------------------------------------------
	
    /**
     * Private back2BaseDir()
     * Return to base directory. This is usually do after getting file attr
     *
     * @param 	boolean	$is_change
     * @param 	string 	$dir_to
     * @param 	string	$mode
     * @return 	void
     */
	private function _back2BaseDir($is_change, $dir_to) {
        if ($is_change === TRUE) {
            $path 		= preg_replace('/[^\/]/', '', $dir_to);
            $path 		= str_replace('/', '.', $path).'..'; 
            $pathlen 	= strlen($path);
            
			if ($pathlen > 2) {
                $path 	= '';
                for ($i = 1; $i < $pathlen; $i++) {
                    $path 	.= '..'; 
					$path 	.= ($i < $pathlen-1 ? '/' : '');
                }
            }
			
			//pindahkan ke direktori utama lagi
            @chdir($path); 
        }
    }
	
	// --------------------------------------------------------------------
    
    /**
     * Private get_cwdir()
     * Get current working directori
	 *
     * @return 	string 	current working directory
     */
    private function _get_cwdir() {
        $dirnow 	= @getcwd(); 
		
        if ($dirnow === FALSE)
            $dirnow = pathinfo($_SERVER['SCRIPT_FILENAME'], PATHINFO_DIRNAME);
		
        return $dirnow;
    }
	
	// --------------------------------------------------------------------
    
    /**
     * Private _read_bfile()
     * Read file using fopen() for binary file;
	 *
	 * @param	string	$file
	 * @param	integer	$size Size of file
	 * @return	string	Content of file
     */
    private function _read_bfile($file, $size) {
        if ( ! $handle = fopen($file, "rb"))
			return FALSE;
				
		$content	= @fread($handle, $size);
		@fclose($handle);
		
		return $content;
    }
    
	// --------------------------------------------------------------------
	
    /**
     * Private _perms()
     * Replace file permission
	 *
	 * @param	string	$file
	 * @return	string	Info of file
     */
    private function _perms($file) {
      	$perms 		= fileperms($file);
        
        if (($perms & 0xC000) == 0xC000) {
    		$info = 's'; /* Socket */
    	} elseif (($perms & 0xA000) == 0xA000) {
    		$info = 'l'; /* Symbolic Link */
    	} elseif (($perms & 0x8000) == 0x8000) {
    		$info = '-'; /* Regular */
    	} elseif (($perms & 0x6000) == 0x6000) {
    		$info = 'b'; /* Block special */
    	} elseif (($perms & 0x4000) == 0x4000) {
    		$info = 'd'; /* Directory */
    	} elseif (($perms & 0x2000) == 0x2000) {
    		$info = 'c'; /* Character special */
    	} elseif (($perms & 0x1000) == 0x1000) {
    		$info = 'p'; /* FIFO pipe */
    	} else {
    		$info = 'u'; /* Unknown */
    	}
		
    	/*  Owner */
    	$info .= (($perms & 0x0100) ? 'r' : '-');
    	$info .= (($perms & 0x0080) ? 'w' : '-');
    	$info .= (($perms & 0x0040) ?
        		 (($perms & 0x0800) ? 's' : 'x' ) :
    			 (($perms & 0x0800) ? 'S' : '-'));
    	
		/*  Group */
    	$info .= (($perms & 0x0020) ? 'r' : '-');
    	$info .= (($perms & 0x0010) ? 'w' : '-');
    	$info .= (($perms & 0x0008) ?
    			 (($perms & 0x0400) ? 's' : 'x' ) :
    			 (($perms & 0x0400) ? 'S' : '-'));
    	
		/*  World */
    	$info .= (($perms & 0x0004) ? 'r' : '-');
    	$info .= (($perms & 0x0002) ? 'w' : '-');
    	$info .= (($perms & 0x0001) ?
    			 (($perms & 0x0200) ? 't' : 'x' ) :
    			 (($perms & 0x0200) ? 'T' : '-'));
    	
		return $info;
    }
	
	// --------------------------------------------------------------------
    
    /**
     * Private _scan_dir()
     * Scanning specified directory.
	 *
	 * @param	string	$dir Directory
	 * @param	string	$filename
	 * @return	mixed	Array on success, FALSE on failure
     */
    private function _scan_dir($dir, $filename) {
    	static $fileArray = array();
    	
		$dir 	= preg_replace('/\/$/', '', $dir);
		
    	// if is not dir or file just return
    	if ( ! file_exists($dir) OR ! is_dir($dir)) {
    		return FALSE;
			
    	} elseif (is_readable($dir)) {
    		$files = scandir($dir);
    		
			foreach ($files as $val) {
    			if ($val != '.' && $val != '..') {
    				// new path to scan
					$path = $dir.'/'.$val;
					
    				// if path is readable
    				if (is_readable($path)) {
    					$subdir = explode('/', $path);
						
    					if (is_dir($path)) {
    						// scan new path
    						set_time_limit(30); 
							$this->_scan_dir($path, $filename);
							
    					} elseif (is_file($path)) {
    						$file = end($subdir);
                            if (stripos($file,$filename) !== FALSE)
								$fileArray[] = $path;
    					}
    				}
    			}
    		}
			
    		// return File(s)
    		return $fileArray;
			
    	} else {
            // if the path is not readable
    		return FALSE;
    	}
    }
}

/* End of file iofiles.php */