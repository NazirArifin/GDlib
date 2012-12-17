<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function __construct() {
		parent::__construct();
		include(APPPATH . 'libraries/jsloc.php');
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
				$judul=$this->input->post('judul_dokumen');
				if(!empty($judul)){
					$hasil = $this->dosen_model->insertJurnal();
					$pesan = array(
						'success' => ($hasil ? 1 : 0),
						'error' => ($hasil ? 0 : 1)
					);
					echo json_encode($pesan);
				}else
					echo '{ "success": 0, "error": 1 }';
				break;	
			case 'view':	
			default:
			$this->load->view('/dosen/index', array('controller' => $this));
			jsloc::show();
		}
	}
	
}