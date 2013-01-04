<?php

class Dosen_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		
	}
	public function tampilJurnal(){
		$query=$this->db->get_where('tb_dokumen', array('ID_KATEGORI_DOKUMEN'=>1));
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}
	
	public function tampilBuku(){
		$query=$this->db->get_where('tb_dokumen', array('ID_KATEGORI_DOKUMEN'=>2));
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}
	
	public function tampilModul(){
		$query=$this->db->get_where('tb_dokumen', array('ID_KATEGORI_DOKUMEN'=>3));
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}
	
	public function insertJurnal($namafile,$namafoto,$ekstensi)
	{
		// cek 
		$kategori=$this->input->post('kategori_dokumen');
		switch ($kategori){
			case 'jurnal':
				$kategori='1';
				break;
			case 'buku':
				$kategori='2';
				break;
			case 'modul':
				$kategori='3';
				break;
			default:	
				$kategori=$this->input->post('kategori_dokumen');
		}
		$insert=array(
			'ID_KATEGORI_DOKUMEN'=>$kategori,
			'ID_JENIS_DOKUMEN'=>$ekstensi,
			'ID_STATUS_DOKUMEN'=>'1',
			'ID_USER'=>'9',
			'JUDUL_DOKUMEN'=>$this->input->post('judul_dokumen'),
			'PENGARANG_DOKUMEN'=>$this->input->post('pengarang_dokumen'),
			'PROLOG_DOKUMEN'=>$this->input->post('prolog_dokumen'),
			'TAHUN_PENERBITAN_DOKUMEN'=>$this->input->post('tahun_penerbitan_dokumen'),
			'KATA_KUNCI_DOKUMEN'=>$this->input->post('kata_kunci_dokumen'),
			'UKURAN_FILE_DOKUMEN'=>'100','RATE_DOKUMEN'=>'10',
			'JUMLAH_DOWNLOAD_DOKUMEN'=>'9','JUMLAH_BACA_DOKUMEN'=>'10',
			'FOTO_DOKUMEN'=>$namafoto,
			'FILE_DOKUMEN'=>$namafile);
	
		$this->db->insert('tb_dokumen',$insert);
		return TRUE;
	}
	
	public function idDokumen($id){
		$this->db->select('ID_DOKUMEN,JUDUL_DOKUMEN,PENGARANG_DOKUMEN,PROLOG_DOKUMEN,TAHUN_PENERBITAN_DOKUMEN,FILE_DOKUMEN,FOTO_DOKUMEN,KATA_KUNCI_DOKUMEN');
		$query=$this->db->get_where('tb_dokumen',array('ID_DOKUMEN' => $id));
		if ($query->num_rows()==0){
			return false;
		}
		else{
			return $query->result();
		}
	}
	
	public function editDokumen($id){
		$update =array(
			'JUDUL_DOKUMEN'=>$this->input->post('judul_dokumen'));
		$this->db->where('ID_DOKUMEN',$id);
		$this->db->update('tb_dokumen',$update);
		
	}
}