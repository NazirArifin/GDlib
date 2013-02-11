<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_page extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		include(APPPATH . 'libraries/jsloc.php');
		$this->load->database();
		$this->load->helper();
		$this->load->library();
		$this->load->model('page_admin_dokumen');
	}

	public function get_users() {

        // pagination
        $this->load->library('pagination_ajax');
        $pages = new paginator.class.2;
        $num_rows = $this->page_admin_dokumen->user_stats(); // this is the COUNT(*) query that gets the total record count from the table you are querying
        $pages->items_total = $num_rows[0];
        $pages->mid_range = 10; // number of links you want to show in the pagination before the "..."
        $pages->paginate();

        $users = $this->page_admin_dokumen->get_users($pages->limit); // your query

        echo json_encode(array(
            'users' => $users,
            'pagination' => $pages->display_pages()
        ));

    }