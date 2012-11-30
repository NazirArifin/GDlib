<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		include(APPPATH . 'libraries/jsloc.php');
	}

	public function index()
	{
		$this->load->view('admin/index');
		jsloc::show();
	}
	
	public function dosen()
	{
		$this->load->view('admin/dosen/index', array('controller' => $this));
		jsloc::show();
	}
	
	public function mahasiswa()
	{
		
	}
	
	public function modul()
	{
		
	}
	
	public function jurnal()
	{
		
	}
	
	public function buletin()
	{
		
	}
	
	public function buku()
	{
		
	}
}