<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {
	public function index() {
		$this->load->view('test/pagination.php');
	}
	
	public function pagination() {
		$this->load->database();
		$this->load->model('test_model');
		$this->test_model->search_document();
	}
}