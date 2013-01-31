<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct() {
		parent::__construct();
		include(APPPATH . 'libraries/jsloc.php');
		$this->load->model('mahasiswa_model');
		$this->load->helper();
		$this->load->database();
		$this->load->library();
	}
	
	public function index()
	{
		$this->load->view('mahasiswa/index',array('controller' => $this));
		jsloc::show();
		
	}
	
	
	public function jurnal($param = '', $extra = '')
	{
		switch ($param) {
			case 'detail':
				$this->load->view('mahasiswa/jurnal/detail',array('controller' => $this));
				jsloc::show();
			break;
			default:
				$this->load->view('mahasiswa/jurnal/index',array('controller' => $this));
				jsloc::show();
		}
	}

	public function buku($param = '', $extra = '')
	{
		switch ($param) {
			case 'detail':
				$this->load->view('mahasiswa/buku/detail',array('controller' => $this));
				jsloc::show();
			break;
			default:
				$this->load->view('mahasiswa/buku/index',array('controller' => $this));
				jsloc::show();
		}
	}
	
	public function modul($param = '', $extra = '')
	{
		switch ($param) {
			case 'detail':
				$this->load->view('mahasiswa/modul/detail',array('controller' => $this));
				jsloc::show();
			break;
			default:
				$this->load->view('mahasiswa/modul/index',array('controller' => $this));
				jsloc::show();
		}
	}
	public function buletin($param = '', $extra = '')
	{
		switch ($param) {
			case 'detail':
				$this->load->view('mahasiswa/buletin/detail',array('controller' => $this));
				jsloc::show();
			break;
			default:
				$this->load->view('mahasiswa/buletin/index',array('controller' => $this));
				jsloc::show();
		}
	}	
}