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
	'ID_USER'=>$this->input->post('id_user'),
	'NAMA_PROFIL'=>$this->input->post('nama_profil'),
	'JENIS_KELAMIN'=>$this->input->post('jk'),
	'TEMPAT_LAHIR'=>$this->input->post('tempat'),
	'TGL_LAHIR'=>$this->input->post('tanggal'),
	'ALAMAT_PROFIL'=>$this->input->post('alamat'),
	'EMAIL_PROFIL'=>$this->input->post('email'),
	'TAMPIL_EMAIL_PROFIL'=>$this->input->post('tampil_email'),
	'NO_HP_PROFIL'=>$this->input->post('no_hp'),
	'TAMPIL_NO_HP_PROFIL'=>$this->input->post('tampil_no_hp'),
	'FOTO_PROFIL'=>$this->input->post('foto_profil'));
	
	$this->db->insert('tb_profil',$insert);
	return array($insert);
	}
}