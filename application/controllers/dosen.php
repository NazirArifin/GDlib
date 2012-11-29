<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dosen extends CI_Controller {
	public function __construct() {
		parent::__construct();
			$this->load->helper(array('url','form'));
			$this->load->model('dosen_model');
	}
	public function index()
	{
		include(APPPATH . 'libraries/jsloc.php');
		$this->load->view('admin/dosen/index');
		jsloc::show();
	}
	
	public function tampil_user(){
		$this->load->database();
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
			
		}
	}
}