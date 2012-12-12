<?php

class Admin_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		
	}
	
	public function tampilUserDosen() {
		$query=$this->db->get('tb_profil');
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}
	
	public function tampil_ID_user() {
		$query=$this->db->get('tb_user');
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}
	
	public function insertUserDosen(){
	$insert = array(
	'ID_USER'=>$this->input->post('id-user'),
	'NAMA_PROFIL'=>$this->input->post('nama-profil'),
	'JENIS_KELAMIN'=>$this->input->post('jk'),
	'TEMPAT_LAHIR'=>$this->input->post('tempat'),
	'TGL_LAHIR'=>$this->input->post('tanggal'),
	'ALAMAT_PROFIL'=>$this->input->post('alamat'),
	'EMAIL_PROFIL'=>$this->input->post('email'),
	'NO_HP_PROFIL'=>$this->input->post('no-hp'),
	'FOTO_PROFIL'=>$this->input->post('foto'));
	
	$this->db->insert('tb_profil',$insert);
	return $query;
	}
}