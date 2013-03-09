<?php

class Mahasiswa_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		
	}
	
	public function tampil_profil_mahasiswa() {
		$query=$this->db->get_where('tb_profil', array('ID_USER'=>9));
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}
	
	public function pilihIdProfil($id){
		$this->db->select('ID_PROFIL,FOTO_PROFIL');
		$query=$this->db->get_where('tb_profil',array('ID_PROFIL' => $id));
		if ($query->num_rows()==0){
			return false;
		}
		else{
			return $query->result();
		}
	}
	
	public function updateProfil($id){
		$this->load->library('upload');
		$config['upload_path']='./upload/profil/mahasiswa';
		$config['allowed_types']='jpg|jpeg|png';
		$config['encrypt_name']=TRUE;
		$this->upload->initialize($config);
		if($this->upload->do_upload('change_foto'))
		{
			$data=$this->upload->data();
			$namafoto='./upload/profil/mahasiswa/' . $data['file_name'];
		}
		else
		{
			echo $this->upload->display_errors();
		}
		$update=array(
			'FOTO_PROFIL'=>$namafoto);
			
		$this->db->where('ID_PROFIL',$id);
		$this->db->update('tb_profil',$update);
		return true;
	}
	
	public function tampilJurnal(){
	$this->load->helper('download');
		$query=$this->db->get_where('tb_dokumen', array('ID_KATEGORI_DOKUMEN'=>1));
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}

	
}