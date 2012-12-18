<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function __construct() {
		parent::__construct();
		include(APPPATH . 'libraries/jsloc.php');
		$this->load->model('dosen_model');
	}
	
	public function index()
	{
		$this->load->view('dosen/index');
		jsloc::show();
	}
	
	public function jurnal($param= '',$extra= '')
	{
		$this->load->library('session');
		$this->load->database();
		
		switch ($param){
			case 'add':
				if ($this->input->post('judul_dokumen')){
					$this->dosen_model->insertJurnal();
					header('location:/dosen');
				}
				break;	
			case 'view':
				break;
			default:
			$this->load->view('/dosen/index', array('controller' => $this));
			jsloc::show();
		}
	}
	
}