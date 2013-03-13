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
	public function index()
	{
		include(APPPATH . 'libraries/jsloc.php');
		$this->load->library('session');
		
		$this->load->database();
		$this->load->model('front_model');
		$this->load->model('news_model');
		$this->load->model('admin_model');
		
		// cari dokumen terbaru
		$type = array('jurnal', 'buku', 'modul', 'bulletin');
		foreach ($type as $v)	
			$data[$v] = $this->front_model->cariDokumenTerbaru($v);
		
		// cari news
		$data['news'] = $this->front_model->cariNews();
		
		$this->load->view('index', $data);
		jsloc::show();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */