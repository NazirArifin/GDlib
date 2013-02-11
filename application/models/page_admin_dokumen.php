<?php
class Page_admin_dokumen extends CI_Model {
	public function __construct() {
		parent::__construct();
		
	}
	
	public function ambil_dokumen($num, $offset)
	{
		$this->db->order_by('JUDUL_DOKUMEN', 'ASC');
		$data = $this->db->get('tb_dokumen', $num, $offset);
		return $data->result();
	}
}