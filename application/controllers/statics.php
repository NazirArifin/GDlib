<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Statics Class
 *
 * This controller for page that request javascript and css file within the
 * static directory. All content will be cached and optimized
 *
 * @package		Harmoni
 * @subpackage	controller
 * @category	statics
 * @author		M. Nazir Arifin
 */

class Statics extends CI_Controller {
	/**
	 * Constructor
	 */
	public function __construct() {
		parent::__construct();
		
	}
	
	// --------------------------------------------------------------------

	/**
	 * Fungsi untuk menampilkan file javascript
	 */
	public function js() {
		/*
		if (func_num_args() != 1)
			return;
			
		$arg	= func_get_arg(0);
		$path 	= BASEPATH . 'static/javascript/' . $arg;
		$uri	= implode('/', $this->router->fetch_segments());
		$file	= basename($path);
		
		// Apakah file javascript ada
		if ( ! file_exists($path)) {
			log_message('error', 'URI passed seems invalid and manually typed');
			show_404($uri);
		}
		
		// Set Header
		if (@stripos($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip') !== FALSE)
			ob_start("ob_gzhandler");
		else
			ob_start();
		header('Content-Type: application/x-javascript');
		header('Charset: UTF-8');
		header(date(DATE_COOKIE, time()+18144000));
		
		if ($this->config->get_item('cache_js')) {
			$this->load->library('iofiles');
			
			// Cache
			$cpath	= 'static/cache/' . $file . '.gz';
			
			if (file_exists(BASEPATH . $cpath)) {
				echo $this->iofiles->read($cpath);
				
			} else {
				if ( ! class_exists('jsloc')) {
					include(BASEPATH . 'libraries/jsloc.php');
				}
				// Minify JS
				$minify	 = jsloc::minJS(@file_get_contents($path));
				
				// Write to file and then echo it
				
				$this->iofiles->write($cpath, $minify, 'wb');
				echo $minify;
			}
		} else {
			if ( ! class_exists('jsloc')) {
				include(BASEPATH . 'libraries/jsloc.php');
			}
			// Minify JS
			$minify	 = jsloc::minJS(@file_get_contents($path));
			echo $minify;
		}
		*/
	}
	
	// --------------------------------------------------------------------

	/**
	 * Fungsi untuk menampilkan file CSS
	 */
	public function css() {
		if (func_num_args() != 1)
			return;
			
		$arg	= func_get_arg(0);
		$path 	= APPPATH . 'static/css/' . $arg;
		$file	= basename($path);
		
		// Apakah file css ada
		if ( ! file_exists($path)) {
			log_message('error', 'URI passed seems invalid and manually typed');
			show_404($arg);
		}
		
		header('Content-Type: text/css');
		header('Charset: UTF-8');
		header(date(DATE_COOKIE, time()+18144000));
		
		if ( ! class_exists('jsloc'))
			include(APPPATH . 'libraries/jsloc.php');
		
		// Minify CSS
		$minify	 = jsloc::minCSS(@file_get_contents($path));
		echo $minify;
	}
	
	// --------------------------------------------------------------------

	/**
	 * Fungsi untuk menampilkan file gambar
	 */
	public function images() {
		/*
		$args	= func_get_args();
		$path 	= BASEPATH . 'static/images/' . implode('/', $args);
		$file	= basename($path);
		
		$this->load->library('iofiles');
		
		$ext	= strtolower($this->iofiles->get_type($file));
		
		if ( ! in_array($ext, array('jpg', 'gif', 'png'))) {
			log_message('error', 'Invalid extension ' . $ext . ' for image');
			show_404();
		}
		
		if ( ! file_exists($path)) {
			show_404('', FALSE);
		} else {
			$size	= getimagesize($path);
			if ($size) {
				header("Content-Type: {$size['mime']}");
				$fsize = filesize($path);
				header("Content-Length: " . $fsize);
				
				if ($fsize < 1024) {
					echo file_get_contents($path);
					return;
				}
				
				$file = fopen($path, 'rb');
				while ( ! feof($file) ) {
					echo fread($file, 1024);
				}
				@fclose($file);
				//@fpassthru($path);
				//@fclose($path);
				//@readfile($path);
			}
		}
		*/
	}
}

/* End of file statics.php */
/* Location: ./controllers/statics.php */