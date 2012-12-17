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
	
	public function dosen($param = '', $extra = '')
	{
		$this->load->library('session');
		$this->load->database();
		
		switch ($param) {
			case 'add':
				$nama = $this->input->post('nama_user');
				if ( ! empty($nama)){
					$hasil = $this->admin_model->insertUserDosen();
					$pesan = array(
						'success' => ($hasil ? 1 : 0),
						'error' => ($hasil ? 0 : 1)
					);
					echo json_encode($pesan);
				} else
					echo '{ "success": 0, "error": 1 }';
				break;
			case 'data':
				$pilih = $this->admin_model->pilihIdUser($extra);
				echo json_encode($pilih);
				break;
			case 'update':
				
				
				$id = $this->input->post('id_user');
				if ( ! empty($id)){
					$this->admin_model->editUserDosen($id);
					echo '{ "error": 0, "success": 1 }';
				}
				break;
			case 'delete':
				$this->admin_model->deleteUserDosen($extra);
				
				// EDITED BY NAZIR
				// $admin_model->deleteUserDosen seharusnya mereturn sesuatu jika ingin dimasukkan $hapus
				echo '{ "error": 0, "success": 1 }';
				//echo json_encode($hapus);
				break;
			default:
				$this->load->view('admin/dosen/index', array('controller' => $this));
				jsloc::show();
		}
		/*
		else {
			$this->load->vars($this->admin_model->insert);
			$this->session->set_flashdata('message','Data gagal disimpan');
		}
		*/
		
	}
	
	public function mahasiswa($param='', $extra='')
	{
		$this->load->library('session');
		$this->load->database();
		
		switch ($param) {
			case 'add':
				$nama = $this->input->post('nama_user');
				if ( ! empty($nama)){
					$hasil = $this->admin_model->insertUserMahasiswa();
					$pesan = array(
						'success' => ($hasil ? 1 : 0),
						'error' => ($hasil ? 0 : 1)
					);
					echo json_encode($pesan);
				} else
					echo '{ "success": 0, "error": 1 }';
				break;
			case 'data':
				$pilih = $this->admin_model->pilihIdUser($extra);
				echo json_encode($pilih);
				break;
			case 'update':
				if ($this->input->post('id_level_user')){
					$hasil = $this->admin_model->insertUserMahasiswa();
					$this->session->set_flashdata('message','Data Sudah TerEdit');
					header('location:/admin/mahasiswa');
				}
				break;
			default:
				$this->load->view('admin/mahasiswa/index', array('controller' => $this));
				jsloc::show();
		}
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