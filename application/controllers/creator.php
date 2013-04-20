<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Creator extends CI_Controller {
	public function __construct() {
		parent::__construct();
		include(APPPATH . 'libraries/jsloc.php');
		$this->load->library('session');
			if ( ! $session_id = $this->session->userdata('nama')) 
				header("location:/login");
	}

	public function index()
	{
		include(APPPATH . 'libraries/jsloc.php');
		$this->load->view('creator/index');
		jsloc::show();
	}
	public function nazir()
	{
		$this->load->view('creator/nazir/index');
	}
	public function rudi()
	{
		$this->load->view('creator/rudi/index');
	}
	public function fajrul()
	{
		$this->load->view('creator/fajrul/index');
	}
	public function deki()
	{
		$this->load->view('creator/deki/index');
	}
	public function habib()
	{
		$this->load->view('creator/habib/index');
	}
	public function fawait()
	{
		$this->load->view('creator/fawait/index');
	}
}