<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kudosen extends CI_Controller {
	public function __construct() {
		parent::__construct();
			$this->load->helper(array('url','form'));
	}
	public function index()
	{
		include(APPPATH . 'libraries/jsloc.php');
		$this->load->view('dosenku');
		jsloc::show();
	}
	
	public function tampil_user_dosen(){
		$this->load->database();
		$this->load->model('dosen_model');
		$data['title'] = 'Ini adalah aplikasi sederhana menggunakan CodeIgniter';
		$data['tb_user'] = $this->tb_user->tampil_dosen();
		$this->load->view('dosenku',$data);

		/*
		$dosen=$this->dosen_model->tampil_dosen();
		if ($dosen==0){
			printf("Data Dosen tidak ada");
		}
		else {
			echo "<table border='1'>";
			echo "<tr><td>NAMA</td><td>AKTIVITAS</td><td>ID Facebook</td></tr>";
			foreach ($dosen as $row){
				echo "<tr>";
				echo "<td>{$row->NAMA_USER}</td>";
				echo "<td>{$row->AKTIVITAS_USER}</td>";
				echo "<td>{$row->ID_FACEBOOK_USER}</td>";
				echo "</tr>";
			}
			echo "</table>";
			
		}*/
	}
}