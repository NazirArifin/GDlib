<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Creator extends CI_Controller {
	public function index()
	{
		include(APPPATH . 'libraries/jsloc.php');
		$this->load->view('creator/index');
		jsloc::show();
	}
}