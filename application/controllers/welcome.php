<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		include(APPPATH . 'libraries/jsloc.php');
		$this->load->library('session');
		$this->load->database();
		$this->load->model('front_model');
		$this->load->model('news_model');
		$this->load->model('admin_model');	
		$this->load->model('login_user');
		$this->load->view('login');
		jsloc::show();
	}
	
	public function home(){
		include(APPPATH . 'libraries/jsloc.php');
		$this->load->model('front_model');
		$this->load->model('news_model');
		$this->load->model('admin_model');	
		$this->load->model('login_user');
		$this->load->database();
		$nama = $this->input->post('nama');
		//echo json_encode($nama);
		$sesi = $this->login_user->loginku($nama);
		if($sesi){
			$data = array('nama' => $sesi['nama'], 'level' => $sesi['level']);
			switch($sesi['level']){
			case '1':
				$kirim = array('siapa' => 'admin');
			break;
			case '2':
				$kirim = array('siapa' => 'dosen');
			break;
			case '3':
				$kirim = array('siapa' => 'mahasiswa');
			break;
			}
		$this->session->set_userdata($data);
		$this->load->view('index', $kirim);
		jsloc::show();
		}
		else {
		$kirim = array('siapa' => '<div class="alert alert-error" style="text-align:center">Username Salah</div>');
		$this->load->view('login', $kirim);
		jsloc::show();
		}
	}

	public function login(){
		include(APPPATH . 'libraries/jsloc.php');
		$this->load->library('session');
		$this->load->view('login');
		jsloc::show();
	}
	
	public function logout(){
		include(APPPATH . 'libraries/jsloc.php');
		$this->load->library('session');
		$this->session->unset_userdata('nama');
		$this->session->sess_destroy();
		header("location:/login");
		jsloc::show();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */