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
	
	public function dokumen($param = '', $extra = '') {
		
		
		switch ($param) {
			case 'add':
				
		}
	}
	
	public function jurnal($param= '',$extra= '')
	{
		$this->load->library('session');
		$this->load->database();
		switch ($param){
			case 'add':
				
				
				$config['upload_path'] = './upload/' . $this->input->post('jenis_dokumen');
				$config['allowed_types'] = 'pdf';
				$config['encrypt_name'] = TRUE;
				
				$this->load->library('upload', $config);
				$this->upload->do_upload('');
				$error = $this->upload->display_errors();
				$data = $this->upload->data();
				
				$namafile = '/upload/'. $this->input->post('jenis_dokumen') . '/' . $data['file_name'];
				
				/*
				if ($this->input->post('judul_dokumen')){
						$this->dosen_model->insertJurnal();
						header('location:/dosen');
				}
				*/
				//img src="/upload/folder/file.jpg"
				
				break;	
			case 'view':
				break;
			default:
			$this->load->view('/dosen/index', array('controller' => $this));
			jsloc::show();
		}
	}
	
}