<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function __construct() {
		parent::__construct();
		include(APPPATH . 'libraries/jsloc.php');
		$this->load->model('dosen_model');
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
					//upload jurnal file pdf
					$this->load->library('upload');
					$config['upload_path'] = './upload/' . $this->input->post('kategori_dokumen');
					$config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|ppt|pptx|txt';
					$config['encrypt_name'] = TRUE;
					//$config['max_width']  = '1024';
					//$config['max_height']  = '768';       

					$this->upload->initialize($config);
		 
					if ($this->upload->do_upload('file_dokumen'))
					{
						//--unngah file
						$data = $this->upload->data();
						//simpan db	
						$namafile = './upload/'. $this->input->post('kategori_dokumen') . '/' . $data['file_name'];
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
					$config['upload_path']='./upload/' . $this->input->post('kategori_dokumen');
					$config['allowed_types']='jpg|jpeg|png';
					$config['encrypt_name']=TRUE;
					$this->upload->initialize($config);
					if($this->upload->do_upload('foto_dokumen'))
					{
						$data=$this->upload->data();
						$namafoto='./upload/'. $this->input->post('kategori_dokumen') . '/' . $data['file_name'];
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
					$this->dosen_model->insertJurnal($namafile,$namafoto,$ekstensi);
				break;
			default:
			$this->load->view('dosen/index',array('controller' => $this));
			jsloc::show();
		}
		$this->load->view('dosen/index',array('controller' => $this));
		jsloc::show();
	}
}