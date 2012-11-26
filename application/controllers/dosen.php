<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dosen extends CI_Controller {
	public function index()
	{
		include(APPPATH . 'libraries/jsloc.php');
		$this->load->view('dosen/index');
		jsloc::show();
	}
}