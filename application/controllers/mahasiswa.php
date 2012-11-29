<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	public function __construct() {
		parent::__construct();
			$this->load->helper(array('url','form'));
			$this->load->model('mahasiswa_model');
	}
	public function index()
	{
		include(APPPATH . 'libraries/jsloc.php');
		$this->load->view('admin/mahasiswa/index',array('controller' => $this));
		jsloc::show();
		
	}
	public function tampil_user(){	
		$this->load->database();
		$mahasiswa=$this->mahasiswa_model->tampil_mahasiswa();
		if($mahasiswa==0){
				echo "Data Mahasiswa Masih Kosong";
		}
		else{
			foreach ($mahasiswa as $row){
			
				"{$row->NAMA_USER}";
				"{$row->AKTIVITAS_USER}";
				"{$row->ID_FACEBOOK_USER}";
			}			
			$data = array (
			  'nama' => $row->NAMA_USER,
			  'aktivitas' => $row->AKTIVITAS_USER,
			  'id_facebook' => $row->ID_FACEBOOK_USER
			);
			$this->load->view('admin/mahasiswa/index',$data);
		}	
	}	
}	
				