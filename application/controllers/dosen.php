<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dosen extends CI_Controller {
	public function __construct() {
		parent::__construct();
		
	}
	public function index()
	{
		include(APPPATH . 'libraries/jsloc.php');
		$this->load->view('admin/dosen/index');
		jsloc::show();
	}
	public function tampil_user_dosen(){
		$dosen=$this->dosen_model->tampil_dosen();
		if ($dosen==0){
			printf("Data Dosen tidak ada");
		}
	}
}