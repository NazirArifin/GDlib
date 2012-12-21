<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function __construct() {
		parent::__construct();
		include(APPPATH . 'libraries/jsloc.php');
		$this->load->model('dosen_model');
		$this->load->helper();
	}
	
	public function index()
	{
		$this->load->view('dosen/index',array ('error'=>' '));
		jsloc::show();
	}
	
	public function dokumen($param = '', $extra = '') {
		
		$this->load->library('session');
		$this->load->database();
		switch ($param) {
			case 'add':
					//upload jurnal file pdf
					$this->load->library('upload');
					$config['upload_path'] = './upload/' . $this->input->post('kategori_dokumen');
					$config['allowed_types'] = 'pdf';
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
						$ekstensi= $this->input->post('kategori_dokumen').$data['file_ext'];
						
						
					}
					else
					{
						echo $this->upload->display_errors();
					}
					
					//upload jurnal file foto
					$this->load->library('upload');
					$config['upload_path']='./upload/' . $this->input->post('kategori_dokumen');
					$config['allowed_types']='jpg';
					$config['encrypt_name']=TRUE;
					$this->upload->initialize($config);
					if($this->upload->do_upload('foto_dokumen'))
					{
						$data=$this->upload->data();
						$namafoto='./upload/'. $this->input->post('kategori_dokumen') . '/' . $data['file_name'];
					}
					else
					{
						echo $this->upload->display_errors();
					}
					$this->dosen_model->insertJurnal($namafile,$namafoto,$ekstensi);
					var_dump($config['upload_path']);
		}
	}
}