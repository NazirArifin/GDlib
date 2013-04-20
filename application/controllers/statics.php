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
		if (func_num_args() != 1) return;
		
		$arg	= func_get_arg(0);
		$path	= APPPATH . 'static/js/' . $arg;
		$file	= basename($path);
		
		if ( ! file_exists($path)) {
			log_message('error', 'URI passed seems invalid and manually typed');
			show_404($arg);
		}
		
		header('Content-Type: application/x-javascript');
		header('Charset: UTF-8');
		header(date(DATE_COOKIE, time()+18144000));
		
		if ( ! class_exists('jsloc'))
			include(APPPATH . 'libraries/jsloc.php');
			
		$minify	 = jsloc::minJS(@file_get_contents($path));
		echo $minify;
	}
	
	// --------------------------------------------------------------------

	/**
	 * Fungsi untuk menampilkan file CSS
	 */
	public function css() {
		if (func_num_args() != 1) return;
			
		$arg	= func_get_arg(0);
		$path 	= APPPATH . 'static/css/' . $arg;
		$file	= basename($path);
		
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
		$args	= func_get_args();
		$path	= APPPATH . 'static/images/' . implode('/', $args);
		$file	= basename($path);
		
		$fparts	= explode('.', $file);
		$ext	= strtolower(end($fparts));
		if ( ! in_array($ext, array('jpg', 'gif', 'png', 'wbem'))) {
			log_message('error', 'Invalid extension ' . $ext . ' for image');
			show_404();
		}
		
		if (file_exists($path)) {
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
			}
		} else
			show_404();
	}
	
	/**
	 * Untuk thirdparty
	 */
	public function thirdparty() {
		$args 	= func_get_args();
		$path	= APPPATH . 'third_party/' . implode('/', $args);
		$file	= basename($path);
		$efile	= explode('.', $file);
		$ext	= strtolower(end($efile));
		
		switch ($ext) {
			case 'css':
				header('Content-Type: text/css');
				header('Charset: UTF-8');
				break;
			case 'js':
				header('Content-Type: application/x-javascript');
				header('Charset: UTF-8');
				break;
			case 'svg':
				header('Content-Type: image/svg+xml');
				break;
			case 'ttf':
				header('Content-Type: application/x-font-ttf');
				break;
			case 'eot':
				header('Content-Type: application/vnd.ms-fontobject');
				break;
			case 'woff':
				header('Content-Type: application/x-font-woff');
				break;
			case 'otf':
				header('Content-Type: font/opentype');
				break;
			case 'jpg': case 'png': case 'gif':
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
				}
				return;
				break;
		}
		
		echo file_get_contents($path);
	}
}

/* End of file statics.php */
/* Location: ./controllers/statics.php */