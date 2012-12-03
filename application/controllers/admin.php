<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		include(APPPATH . 'libraries/jsloc.php');
	}

	public function index()
	{
		$this->load->view('admin/index');
		jsloc::show();
	}
	
	public function dosen()
	{
		$this->load->model('admin_model');
		//$this->load->view('admin/dosen/index', array('controller' => $this));
		$this->load->database();
		$dosen=$this->admin_model->tampilUserDosen();
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
		jsloc::show();
	}
	
	public function mahasiswa()
	{
		$this->load->view('admin/mahasiswa/index');
		jsloc::show();
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