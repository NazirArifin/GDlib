<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function __construct() {
		parent::__construct();
		include(APPPATH . 'libraries/jsloc.php');
		$this->load->model('dosen_model');
		$this->load->model('dosen_paging_model');
		$this->load->helper();
		$this->load->database();
		$this->load->library();
	}
	
	public function index()
	{
		$this->load->view('dosen/index',array('controller' => $this));
		jsloc::show();
	}
	
	public function dokumen($param = '', $extra = '') {
		switch ($param) {
			case 'add':
					//upload dokumen
					$this->load->library('upload');
					$config['upload_path'] = './upload/' . $this->input->post('kategori_dokumen');
					$config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|ppt|pptx|txt';
					$config['encrypt_name'] = TRUE;

					$this->upload->initialize($config);
		 
					if ($this->upload->do_upload('file_dokumen'))
					{
						//--unngah file
						$data = $this->upload->data();
						//simpan db	
						$namafile ='./upload/' . $this->input->post('kategori_dokumen').'/'.$data['file_name'];
						//tipe file
						$ekstensi=$data['file_ext'];
								switch ($ekstensi){
									case '.pdf':
										$ekstensi='1';
									break;
									case '.doc':
										$ekstensi='2';
									case '.docx':
										$ekstensi='2';
									break;	
									case '.xls':
										$ekstensi='3';
									case '.xlsx':
										$ekstensi='3';
									break;	
									case '.ppt':
										$ekstensi='4';
									case '.pptx':
										$ekstensi='4';
									break;	
									case '.txt':
										$ekstensi='5';
									break;	
								default:	
								$ekstensi= $data['file_ext'];
								}
										
					}
					else
					{
						echo $this->upload->display_errors();
					}
					
					//upload dokumen file foto
					$this->load->library('upload');
					$config['upload_path']='./upload/' . $this->input->post('kategori_dokumen');
					$config['allowed_types']='jpg|jpeg|png';
					$config['encrypt_name']=TRUE;
					$this->upload->initialize($config);
					
					if($this->upload->do_upload('foto_dokumen'))
					{
						$data=$this->upload->data();
						$gambar['image_library'] = 'gd2';
						$gambar['source_image'] = './upload/'. $this->input->post('kategori_dokumen').'/' . $data['file_name'];
						$gambar['create_thumb'] = FALSE;
						$gambar['maintain_ratio'] = FALSE;
						$gambar['width'] = 150;
						$gambar['height'] = 150;
						$this->load->library('image_lib',$gambar);
						$this->image_lib->resize();
						$namafoto='./upload/'. $this->input->post('kategori_dokumen').'/' .$data['file_name'];
						
					}
					else
					{
						echo $this->upload->display_errors();
					}
					$this->dosen_model->insertDokumen($namafile,$namafoto,$ekstensi);
				break;
				
			case 'data':
				$pilih = $this->dosen_model->idDokumen($extra);
				echo json_encode($pilih);
				return;
			case 'update':
				$id = $this->input->post('id_dokumen');
				if ( ! empty($id)){
					$this->dosen_model->editDokumen($id);
					echo '{ "error": 0, "success": 1 }';
				}
				break;
			case 'delete':
				$this->dosen_model->deleteDokumen($extra);
				echo '{ "error": 0, "success": 1 }';
				return;
				
			default:
			$this->load->view('dosen/index',array('controller' => $this));
			jsloc::show();
		}
		$this->load->view('dosen/index',array('controller' => $this));
		jsloc::show();
	}
	
	public function jurnal($param='',$ekstra=''){
		switch($param){
			case 'download':
				$this->load->helper('download');
				$pilih = $this->dosen_paging_model->download($ekstra);
				break;
				
			default:	
			$this->load->view('dosen/jurnal/index',array('controller'=>$this));
			jsloc::show();
		}
		
	}
	public function buku($param='',$ekstra=''){
		switch ($param){
			case 'download':
				$this->load->helper('download');
				$pilih=$this->dosen_paging_model->download($ekstra);
				break;
			default:
				$this->load->view('dosen/buku/index',array('controller'=>$this));
				jsloc::show();
		}
	}
	public function modul($param='',$ekstra=''){
		switch($param){
			case'download':
				$this->load->helper('download');
				$pilih=$this->dosen_paging_model->download($ekstra);
			default:
				$this->load->view('dosen/modul/index',array('controller'=>$this));
				jsloc::show();
		}
	}
	public function buletin($param='',$ekstra=''){
		
		$this->load->view('dosen/buletin/index',array('controller'=>$this));
		jsloc::show();
	}
	
	//profil dosen di sini
	public function profildosen($param='',$ekstra=''){	
		switch($param){
			case 'ambil':
				$pilih = $this->dosen_model->pilihIdProfil($extra);
				echo json_encode($pilih);
				return;
			break;
			case 'foto':
				$id = $this->input->post('id_profil');
				if ( ! empty($id)){
					$this->dosen_model->updateFotoProfil($id);
					echo '{ "error": 0, "success": 1 }';
				}
				header('location:/dosen/profildosen');
			break;
			case 'data':
				$id = $this->input->post('profil_id');
				if ( ! empty($id)){
					$hasil = $this->dosen_model->updateDataProfil($id);
					$pesan = array(
						'success' => ($hasil ? 1 : 0),
						'error' => ($hasil ? 0 : 1)
					);
					echo json_encode($pesan);
				} else
					echo '{ "success": 0, "error": 1 }';
			break;
			default:
			$this->load->view('dosen/profildosen',array('profil' => $this));
			jsloc::show();
		}
	}
	//controller dosen paging
	public function tampilDokumen($param = '')
	{
		switch($param){
			case 'jurnal':
				$this->load->database();
				$this->load->model('dosen_paging_model');
				$this->dosen_paging_model->search_jurnal();
			break;
			case 'buku':
				$this->load->database();
				$this->load->model('dosen_paging_model');
				$this->dosen_paging_model->search_buku();
			break;
			case 'modul':
				$this->load->database();
				$this->load->model('dosen_paging_model');
				$this->dosen_paging_model->search_modul();
			break;
			
			case 'dokumenjurnal':
				$this->load->database();
				$this->load->model('dosen_paging_model');
				$this->dosen_paging_model->search_dokumen_jurnal();
			break;
			
			case 'dokumenbuku':
				$this->load->database();
				$this->load->model('dosen_paging_model');
				$this->dosen_paging_model->search_dokumen_buku();
			break;
			case 'dokumenmodul':
				$this->load->database();
				$this->load->model('dosen_paging_model');
				$this->dosen_paging_model->search_dokumen_modul();
			break;
			
		}
	}
}