<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		include(APPPATH . 'libraries/jsloc.php');
		$this->load->database();
		$this->load->helper();
		$this->load->model('admin_model');
		$this->load->library();
	}

	public function index()
	{
		$this->load->view('admin/index', array('controller' => $this));
		jsloc::show();
	}
	
	public function dosen($param = '', $extra = '')
	{		
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
				$pilih = $this->admin_model->pilihIdUserDosen($extra);
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
	}
	
	public function mahasiswa($param='', $extra='')
	{
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
				$pilih = $this->admin_model->pilihIdUserMahasiswa($extra);
				echo json_encode($pilih);
				break;
			case 'update':
				$id = $this->input->post('id_user');
				if ( ! empty($id)){
					$this->admin_model->editUserMahasiswa($id);
					echo '{ "error": 0, "success": 1 }';
				}
				break;
			case 'delete':
				$this->admin_model->deleteUserMahasiswa($extra);
				echo '{ "error": 0, "success": 1 }';
				break;
			default:
				$this->load->view('admin/mahasiswa/index', array('controller' => $this));
				jsloc::show();
		}
	}
	
	public function jurnal($param = '', $extra = '')
	{	
		switch ($param) {
			case 'add':
					//upload jurnal file pdf
					$this->load->library('upload');
					$config['upload_path'] = './upload/' . $this->input->post('kategori_jurnal');
					$config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|ppt|pptx|txt';
					$config['encrypt_name'] = TRUE;
					//$config['max_width']  = '1024';
					//$config['max_height']  = '768';       

					$this->upload->initialize($config);
		 
					if ($this->upload->do_upload('file_jurnal'))
					{
						//--unngah file
						$data = $this->upload->data();
						//simpan db	
						$namafile = './upload/'. $this->input->post('kategori_jurnal') . '/' . $data['file_name'];
						//tipe file
						$ekstensi= $data['file_ext'];
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
					
					//upload jurnal file foto
					$this->load->library('upload');
					$config['upload_path']='./upload/' . $this->input->post('kategori_jurnal');
					$config['allowed_types']='jpg|jpeg|png';
					$config['encrypt_name']=TRUE;
					$this->upload->initialize($config);
					if($this->upload->do_upload('foto_jurnal'))
					{
						$data=$this->upload->data();
						$namafoto='./upload/'. $this->input->post('kategori_jurnal') . '/' . $data['file_name'];
						$ekstensi= $data['file_ext'];
						switch ($ekstensi){
									case '.jpg':
										$ekstensi='6';
									case '.jpeg':
										$ekstensi='6';
									case '.png':
										$ekstensi='6';
									break;	
								default:	
								$ekstensi= $data['file_ext'];
								}
					}
					else
					{
						echo $this->upload->display_errors();
					}
					$this->admin_model->insertJurnal($namafile,$namafoto,$ekstensi);
					header('location:/admin/jurnal');
				break;
			case 'data':
					$pilih = $this->admin_model->pilihIdDokumen($extra);
					echo json_encode($pilih);
					return;
				break;
			case 'update':
				$id = $this->input->post('id_dokumen');
				if ( ! empty($id)){
					$this->admin_model->editDokumenJurnal($id);
					echo '{ "error": 0, "success": 1 }';
				}
				break;
			case 'delete':
				$this->admin_model->deleteDokumenJurnal($extra);
				echo '{ "error": 0, "success": 1 }';
				return;
			case 'download':
				$this->load->helper('download');
				
				break;
			default:
			$this->load->view('admin/jurnal/index',array('controller' => $this));
			jsloc::show();
		}
	}
	
	public function buku($param = '', $extra= '')
	{
		switch ($param) {
			case 'add':
					//upload buku file pdf
					$this->load->library('upload');
					$config['upload_path'] = './upload/' . $this->input->post('kategori_buku');
					$config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|ppt|pptx|txt';
					$config['encrypt_name'] = TRUE;
					//$config['max_width']  = '1024';
					//$config['max_height']  = '768';       

					$this->upload->initialize($config);
		 
					if ($this->upload->do_upload('file_buku'))
					{
						//--unngah file
						$data = $this->upload->data();
						//simpan db	
						$namafile = './upload/'. $this->input->post('kategori_buku') . '/' . $data['file_name'];
						//tipe file
						$ekstensi= $data['file_ext'];
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
					
					//upload buku file foto
					$this->load->library('upload');
					$config['upload_path']='./upload/' . $this->input->post('kategori_buku');
					$config['allowed_types']='jpg|jpeg|png';
					$config['encrypt_name']=TRUE;
					$this->upload->initialize($config);
					if($this->upload->do_upload('foto_buku'))
					{
						$data=$this->upload->data();
						$namafoto='./upload/'. $this->input->post('kategori_buku') . '/' . $data['file_name'];
						$ekstensi= $data['file_ext'];
						switch ($ekstensi){
									case '.jpg':
										$ekstensi='6';
									case '.jpeg':
										$ekstensi='6';
									case '.png':
										$ekstensi='6';
									break;	
								default:	
								$ekstensi= $data['file_ext'];
								}
					}
					else
					{
						echo $this->upload->display_errors();
					}
					$this->admin_model->insertBuku($namafile,$namafoto,$ekstensi);
					header('location:/admin/buku');
				break;
			case 'data':
					$pilih = $this->admin_model->pilihIdDokumen($extra);
					echo json_encode($pilih);
					return;
				break;
			case 'update':
				$id = $this->input->post('id_dokumen');
				if ( ! empty($id)){
					$this->admin_model->editDokumenBuku($id);
					echo '{ "error": 0, "success": 1 }';
				}
				break;
			case 'delete';
				$this->admin_model->deleteDokumenBuku($extra);
				echo '{ "error": 0, "success": 1 }';
				return;
			default:
			$this->load->view('admin/buku/index',array('controller' => $this));
			jsloc::show();
		}
	}
	
	public function modul($param = '', $extra= '')
	{
		switch ($param) {
			case 'add':
					//upload modul file pdf
					$this->load->library('upload');
					$config['upload_path'] = './upload/' . $this->input->post('kategori_modul');
					$config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|ppt|pptx|txt';
					$config['encrypt_name'] = TRUE;
					//$config['max_width']  = '1024';
					//$config['max_height']  = '768';       

					$this->upload->initialize($config);
		 
					if ($this->upload->do_upload('file_modul'))
					{
						//--unngah file
						$data = $this->upload->data();
						//simpan db	
						$namafile = './upload/'. $this->input->post('kategori_modul') . '/' . $data['file_name'];
						//tipe file
						$ekstensi= $data['file_ext'];
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
					
					//upload modul file foto
					$this->load->library('upload');
					$config['upload_path']='./upload/' . $this->input->post('kategori_modul');
					$config['allowed_types']='jpg|jpeg|png';
					$config['encrypt_name']=TRUE;
					$this->upload->initialize($config);
					if($this->upload->do_upload('foto_modul'))
					{
						$data=$this->upload->data();
						$namafoto='./upload/'. $this->input->post('kategori_modul') . '/' . $data['file_name'];
						$ekstensi= $data['file_ext'];
						switch ($ekstensi){
									case '.jpg':
										$ekstensi='6';
									case '.jpeg':
										$ekstensi='6';
									case '.png':
										$ekstensi='6';
									break;	
								default:	
								$ekstensi= $data['file_ext'];
								}
					}
					else
					{
						echo $this->upload->display_errors();
					}
					$this->admin_model->insertModul($namafile,$namafoto,$ekstensi);
					header('location:/admin/modul');
				break;
			case 'data':
					$pilih = $this->admin_model->pilihIdDokumen($extra);
					echo json_encode($pilih);
					return;
				break;
			case 'update':
				$id = $this->input->post('id_dokumen');
				if ( ! empty($id)){
					$this->admin_model->editDokumenModul($id);
					echo '{ "error": 0, "success": 1 }';
				}
				break;
			case 'delete';
				$this->admin_model->deleteDokumenModul($extra);
				echo '{ "error": 0, "success": 1 }';
				return;
			default:
			$this->load->view('admin/modul/index',array('controller' => $this));
			jsloc::show();
		}
	}
	
	public function buletin()
	{
		$this->load->view('admin/buletin/index');
		jsloc::show();
	}
	
	//public function news()
	//{
	//	$this->load->view('admin/news/index');
	//	jsloc::show();
	//}
	
	public function dokumen()
	{
		$this->load->database();
		$this->load->model('dokumen_model');
		$this->dokumen_model->search_document();
	}
	
	public function user()
	{
		$this->load->database();
		$this->load->model('user_model');
		$this->user_model->search_user();
	}
}