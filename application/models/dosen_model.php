<?php

class Dosen_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		
	}
	
	public function insertJurnal($namafile,$namafoto,$ekstensi)
	{
		// cek 
		$insert=array(
			'ID_KATEGORI_DOKUMEN'=>$this->input->post('kategori_dokumen'),
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
	}
}
