<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {
	public function index()
	{
		include(APPPATH . 'libraries/jsloc.php');
		$this->load->view('welcome_message');
		jsloc::show();
	}
	
	public function ajax() {
		echo 'aku dari ajax';
	}
}