<?php

class Dosen_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		
	}
	
	public function insertJurnal()
	{
		$judul=$this->input->post('judul_dokumen');
		$pengarang=$this->input->post('pengarang_dokumen');
		$prolog=$this->input->post('prolog_dokumen');
		$tahun=$this->input->post('tahun_penerbitan_dokumen');
		//$file=$this->input->post('file_dokumen');
		$foto=$this->input->post('foto_dokumen');
		$kata=$this->input->post('kata_kunci_dokumen');
		
		if (empty($judul)) return false;
		if (empty($pengarang)) return false;
		if (empty($prolog)) return false;
		if (empty($tahun)) return false;
		if (empty($file)) return false;
		$insert=array(
			'ID_KATEGORI_DOKUMEN'=>'1',
			'ID_JENIS_DOKUMEN'=>'1',
			'ID_STATUS_DOKUMEN'=>'1',
			'ID_USER'=>'1',
			'JUDUL_DOKUMEN'=>$this->input->post('judul_dokumen'),
			'PENGARANG_DOKUMEN'=>$this->input->post('pengarang_dokumen'),
			'PROLOG_DOKUMEN'=>$this->input->post('prolog_dokumen'),
			'TAHUN_PENERBITAN_DOKUMEN'=>$this->input->post('tahun_penerbitan_dokumen'),
			'FOTO_DOKUMEN'=>$this->input->post('foto_dokumen'),
			'KATA_KUNCI_DOKUMEN'=>$this->input->post('kata_kunci_dokumen'),
			'UKURAN_FILE_DOKUMEN'=>'100','RATE_DOKUMEN'=>'10',
			'JUMLAH_DOWNLOAD_DOKUMEN'=>'9','JUMLAH_BACA_DOKUMEN'=>'10');
		
		$this->db->insert('tb_dokumen',$insert);
		return TRUE;	
	}
}
