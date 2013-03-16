<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {
	public function __construct() {
		parent::__construct();
		include(APPPATH . 'libraries/jsloc.php');
		$this->load->model('mahasiswa_model');
		$this->load->model('mahasiswa_paging_model');
		$this->load->helper();
		$this->load->database();
		$this->load->library();
	}
	
	public function index()
	{
		$this->load->view('mahasiswa/index',array('controller' => $this));
		jsloc::show();
		
	}
	public function profilmahasiswa($param = '', $extra = '')
	{
		switch($param){
			case 'ambil':
				$pilih = $this->mahasiswa_model->pilihIdProfil($extra);
				echo json_encode($pilih);
				return;
			break;
			case 'foto':
				$id = $this->input->post('id_profil');
				if ( ! empty($id)){
					$this->mahasiswa_model->updateProfil($id);
					echo '{ "error": 0, "success": 1 }';
				}
				header('location:/mahasiswa/profilmahasiswa');
			break;
			case '':
				$id = $this->input->post('id_profil');
				if ( ! empty($id)){
					$this->mahasiswa_model->updateProfil($id);
					echo '{ "error": 0, "success": 1 }';
				}
				header('location:/mahasiswa/profilmahasiswa');
			break;
			default:
			$this->load->view('mahasiswa/profilmahasiswa',array('profil' => $this));
			jsloc::show();
		}
	}
	
	public function jurnal($param = '', $extra = '')
	{
		switch ($param) {
			case 'jurnal':
				$this->load->database();
				$this->load->model('mahasiswa_paging_model');
				$this->mahasiswa_paging_model->search_document_jurnal();
			break;
			case 'detail':
				$this->load->view('mahasiswa/jurnal/detail',array('controller' => $this));
				jsloc::show();
			break;
			case 'download':
				$this->load->helper('download');
				$pilih = $this->mahasiswa_model->downloadFile($extra);
				echo json_encode($pilih);
				return;
			break;
			default:
				$this->load->view('mahasiswa/jurnal/index',array('controller' => $this));
				jsloc::show();
		}
	}

	public function buku($param = '', $extra = '')
	{
		switch ($param) {
			case 'buku':
				$this->load->database();
				$this->load->model('mahasiswa_paging_model');
				$this->mahasiswa_paging_model->search_document_buku();
			break;
			case 'detail':
				$this->load->view('mahasiswa/buku/detail',array('controller' => $this));
				jsloc::show();
			break;
			case 'download':
				$this->load->helper('download');
				$pilih = $this->mahasiswa_model->downloadFile($extra);
				echo json_encode($pilih);
				return;
			break;
			default:
				$this->load->view('mahasiswa/buku/index',array('controller' => $this));
				jsloc::show();
		}
	}
	
	public function modul($param = '', $extra = '')
	{
		switch ($param) {
			case 'modul':
				$this->load->database();
				$this->load->model('mahasiswa_paging_model');
				$this->mahasiswa_paging_model->search_document_modul();
			break;
			case 'detail':
				$this->load->view('mahasiswa/modul/detail',array('controller' => $this));
				jsloc::show();
			break;
			case 'download':
				$this->load->helper('download');
				$pilih = $this->mahasiswa_model->downloadFile($extra);
				echo json_encode($pilih);
				return;
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