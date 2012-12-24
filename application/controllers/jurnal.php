<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jurnal extends CI_Controller {
	public function index()
	{
		include(APPPATH . 'libraries/jsloc.php');
		//$this->load->view('admin/jurnal/index');
		//jsloc::show();
	}
}