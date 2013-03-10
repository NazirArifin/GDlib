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
	
	public function tampilDokumenJurnal(){
		$this->load->helper('download');
		$query=$this->db->query("SELECT * FROM tb_dokumen WHERE ID_KATEGORI_DOKUMEN = 1 ORDER BY ID_DOKUMEN DESC LIMIT 0,4");
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}
	
	public function tampilDokumenBuku(){
		$this->load->helper('download');
		$query=$this->db->query("SELECT * FROM tb_dokumen WHERE ID_KATEGORI_DOKUMEN = 2 ORDER BY ID_DOKUMEN DESC LIMIT 0,4");
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}
	
	public function tampilDokumenModul(){
		$this->load->helper('download');
		$query=$this->db->query("SELECT * FROM tb_dokumen WHERE ID_KATEGORI_DOKUMEN = 3 ORDER BY ID_DOKUMEN DESC LIMIT 0,4");
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}
	
	public function tampilDokumenBuletin(){
		$this->load->helper('download');
		$query=$this->db->query("SELECT * FROM tb_dokumen WHERE ID_KATEGORI_DOKUMEN = 4 ORDER BY ID_DOKUMEN DESC LIMIT 0,4");
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}
}