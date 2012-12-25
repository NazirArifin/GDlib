<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct() {
		parent::__construct();
		include(APPPATH . 'libraries/jsloc.php');
	}
	
	public function index()
	{
		$this->load->view('mahasiswa/index',array('controller' => $this));
		jsloc::show();
		
	}
	public function jurnal()
	{
		$this->load->view('mahasiswa/jurnal/index',array('controller' => $this));
		jsloc::show();
	}
	
}