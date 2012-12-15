<?php

class Admin_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		
	}
	
	public function tampilUserDosen() {
		$query=$this->db->get('tb_user');
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}
	
	public function tampil_level_user() {
		$query=$this->db->get('tb_level_user');
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}
	
	public function insertUserDosen(){
	$insert = array(
	'ID_LEVEL_USER'=>$this->input->post('id_level_user'),
	'NAMA_USER'=>$this->input->post('nama_user'),
	'AKTIVITAS_USER'=>$this->input->post('aktivitas'),
	'NO_INDUK_USER'=>$this->input->post('no_induk_user'),
	'ID_FACEBOOK_USER'=>$this->input->post('id_facebook'));
	
	$this->db->insert('tb_user',$insert);
	return array($insert);
	}
}