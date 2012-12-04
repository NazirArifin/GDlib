<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		include(APPPATH . 'libraries/jsloc.php');
		$this->load->model('admin_model');
	}

	public function index()
	{
		$this->load->view('admin/index');
		jsloc::show();
	}
	
	public function dosen()
	{
		$this->load->database();
		$this->load->view('admin/dosen/index', array('controller' => $this));
		jsloc::show();
	}
	
	public function mahasiswa()
	{
		$this->load->view('admin/mahasiswa/index', array('controller' => $this));
		jsloc::show();
	}
	
	public function modul()
	{
		$this->load->view('admin/modul/index');
		jsloc::show();
	}
	
	public function jurnal()
	{
		$this->load->view('admin/jurnal/index');
		jsloc::show();
	}
	
	public function buletin()
	{
		$this->load->view('admin/buletin/index');
		jsloc::show();
	}
	
	public function buku()
	{
		$this->load->view('admin/buku/index');
		jsloc::show();
	}
	
	public function news()
	{
		$this->load->view('admin/news/index');
		jsloc::show();
	}
}