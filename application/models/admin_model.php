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
		
		// validasi;
		$nama = $this->input->post('nama_user');
		$induk = $this->input->post('no_induk_user');
		$facebook = $this->input->post('id_facebook');
		
		if (empty($induk)) return FALSE;
		if (empty($facebook)) return FALSE;
		if (strlen($nama) < 3) return FALSE;
		
		$insert = array(
		'ID_LEVEL_USER'=>'2',
		'NAMA_USER'=>$this->input->post('nama_user'),
		'NO_INDUK_USER'=>$this->input->post('no_induk_user'),
		'ID_FACEBOOK_USER'=>$this->input->post('id_facebook'));
		
		$this->db->insert('tb_user',$insert);
		return TRUE;
	}
	
	public function pilihIdUser($id){
		$this->db->select('ID_USER,NAMA_USER,NO_INDUK_USER,ID_FACEBOOK_USER');
		$query=$this->db->get_where('tb_user',array('ID_USER' => $id));
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}
	
	public function editUserDosen(){
		$update = array(
		'ID_LEVEL_USER'=>'2',
		'NAMA_USER'=>$this->input->post('nama_user'),
		'NO_INDUK_USER'=>$this->input->post('no_induk_user'),
		'ID_FACEBOOK_USER'=>$this->input->post('id_facebook'));
		
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('tb_user',$update);
	}
	/*User Mahasiswa*/
	public function tampilUserMahasiswa() {
		$query=$this->db->get('tb_user');
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}
}