<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_page extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		include(APPPATH . 'libraries/jsloc.php');
		$this->load->database();
		$this->load->helper();
		$this->load->library('pagination');
		$this->load->model('page_admin_dokumen');
	}
	public function news($id=NULL)
	{
		$jml = $this->db->get('tb_dokumen');
		//pengaturan pagination
		$config['base_url'] = '/admin_page/news';
		$config['total_rows'] = $jml->num_rows();
		$config['per_page'] = '1';
		$config['first_page'] = 'Awal';
		$config['last_page'] = 'Akhir';
		$config['next_page'] = '&laquo;';
		$config['prev_page'] = '&raquo;';
		//inisialisasi config
		$this->pagination->initialize($config);
		//buat pagination
		$data['halaman'] = $this->pagination->create_links();
		//tamplikan data
		$data['query'] = $this->page_admin_dokumen->ambil_dokumen($config['per_page'], $id);
		$this->load->view('admin/news/index', $data);
	}
}