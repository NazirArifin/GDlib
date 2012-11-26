<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	public function index()
	{
		include(APPPATH . 'libraries/jsloc.php');
		$this->load->view('user/index');
		jsloc::show();
	}
}