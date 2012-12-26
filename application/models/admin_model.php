<?php
class Admin_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		
	}
	
	public function tampil_where_level_dosen() {
		$query=$this->db->get_where('tb_user', array('ID_LEVEL_USER'=>2));
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
	
	public function pilihIdUserDosen($id){
		$this->db->select('ID_USER,NAMA_USER,NO_INDUK_USER,ID_FACEBOOK_USER');
		$query=$this->db->get_where('tb_user',array('ID_USER' => $id));
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}
	
	public function editUserDosen($id){
		$update = array(
		'NAMA_USER'=>$this->input->post('nama_user'),
		'NO_INDUK_USER'=>$this->input->post('no_induk_user'),
		'ID_FACEBOOK_USER'=>$this->input->post('id_facebook'));
		
		$this->db->where('ID_USER', $id);
		$this->db->update('tb_user',$update);
	}
	
	public function deleteUserDosen($id){
		$this->db->delete('tb_user', array('ID_USER'=>$id));
	}
	
	
	
	
	//User Mahasiswa
	public function tampil_where_level_mahasiswa() {
		$query=$this->db->get_where('tb_user', array('ID_LEVEL_USER'=>3));
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}
	
		public function insertUserMahasiswa(){
		// validasi;
		$nama = $this->input->post('nama_user');
		$induk = $this->input->post('no_induk_user');
		$facebook = $this->input->post('id_facebook');
		
		if (empty($induk)) return FALSE;
		if (empty($facebook)) return FALSE;
		if (strlen($nama) < 3) return FALSE;
		
		$insert = array(
		'ID_LEVEL_USER'=>'3',
		'NAMA_USER'=>$this->input->post('nama_user'),
		'NO_INDUK_USER'=>$this->input->post('no_induk_user'),
		'ID_FACEBOOK_USER'=>$this->input->post('id_facebook'));
		
		$this->db->insert('tb_user',$insert);
		return TRUE;
	}
	
	public function pilihIdUserMahasiswa($id){
		$this->db->select('ID_USER,NAMA_USER,NO_INDUK_USER,ID_FACEBOOK_USER');
		$query=$this->db->get_where('tb_user',array('ID_USER' => $id));
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}
	
	public function editUserMahasiswa(){
		$update = array(
		'ID_LEVEL_USER'=>'2',
		'NAMA_USER'=>$this->input->post('nama_user'),
		'NO_INDUK_USER'=>$this->input->post('no_induk_user'),
		'ID_FACEBOOK_USER'=>$this->input->post('id_facebook'));
		
		$this->db->where('ID_USER', $id);
		$this->db->update('tb_user',$update);
	}
	
	public function deleteUserMahasiswa($id){
		$this->db->delete('tb_user', array('ID_USER'=>$id));
	}
	
//DOKUMEN
//jurnal

	public function insertJurnal($namafile,$namafoto,$ekstensi)
	{
		// cek 
		$kategori=$this->input->post('kategori_jurnal');
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
				$kategori=$this->input->post('kategori_jurnal');
		}
		$insert=array(
			'ID_KATEGORI_DOKUMEN'=>$kategori,
			'ID_JENIS_DOKUMEN'=>$ekstensi,
			'ID_STATUS_DOKUMEN'=>'1',
			'ID_USER'=>'9',
			'JUDUL_DOKUMEN'=>$this->input->post('judul_jurnal'),
			'PENGARANG_DOKUMEN'=>$this->input->post('pengarang_jurnal'),
			'PROLOG_DOKUMEN'=>$this->input->post('prolog_jurnal'),
			'TAHUN_PENERBITAN_DOKUMEN'=>$this->input->post('tahun_penerbitan_jurnal'),
			'KATA_KUNCI_DOKUMEN'=>$this->input->post('kata_kunci_jurnal'),
			'UKURAN_FILE_DOKUMEN'=>'100','RATE_DOKUMEN'=>'10',
			'JUMLAH_DOWNLOAD_DOKUMEN'=>'9','JUMLAH_BACA_DOKUMEN'=>'10',
			'FOTO_DOKUMEN'=>$namafoto,
			'FILE_DOKUMEN'=>$namafile);
	
		$this->db->insert('tb_dokumen',$insert);
	}
	
	public function tampil_where_kategori_jurnal() {
		$query=$this->db->get_where('tb_dokumen', array('ID_KATEGORI_DOKUMEN'=>1));
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}
	
// buku
	public function insertBuku($namafile,$namafoto,$ekstensi)
	{
		// cek 
		$kategori=$this->input->post('kategori_buku');
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
				$kategori=$this->input->post('kategori_buku');
		}
		$insert=array(
			'ID_KATEGORI_DOKUMEN'=>$kategori,
			'ID_JENIS_DOKUMEN'=>$ekstensi,
			'ID_STATUS_DOKUMEN'=>'1',
			'ID_USER'=>'9',
			'JUDUL_DOKUMEN'=>$this->input->post('judul_buku'),
			'PENGARANG_DOKUMEN'=>$this->input->post('pengarang_buku'),
			'PROLOG_DOKUMEN'=>$this->input->post('prolog_buku'),
			'TAHUN_PENERBITAN_DOKUMEN'=>$this->input->post('tahun_penerbitan_buku'),
			'KATA_KUNCI_DOKUMEN'=>$this->input->post('kata_kunci_buku'),
			'UKURAN_FILE_DOKUMEN'=>'100','RATE_DOKUMEN'=>'10',
			'JUMLAH_DOWNLOAD_DOKUMEN'=>'9','JUMLAH_BACA_DOKUMEN'=>'10',
			'FOTO_DOKUMEN'=>$namafoto,
			'FILE_DOKUMEN'=>$namafile);
	
		$this->db->insert('tb_dokumen',$insert);
	}
	
	public function tampil_where_kategori_buku() {
		$query=$this->db->get_where('tb_dokumen', array('ID_KATEGORI_DOKUMEN'=>2));
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}

// Modul
	public function insertModul($namafile,$namafoto,$ekstensi)
	{
		// cek 
		$kategori=$this->input->post('kategori_modul');
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
				$kategori=$this->input->post('kategori_modul');
		}
		$insert=array(
			'ID_KATEGORI_DOKUMEN'=>$kategori,
			'ID_JENIS_DOKUMEN'=>$ekstensi,
			'ID_STATUS_DOKUMEN'=>'1',
			'ID_USER'=>'9',
			'JUDUL_DOKUMEN'=>$this->input->post('judul_modul'),
			'PENGARANG_DOKUMEN'=>$this->input->post('pengarang_modul'),
			'PROLOG_DOKUMEN'=>$this->input->post('prolog_modul'),
			'TAHUN_PENERBITAN_DOKUMEN'=>$this->input->post('tahun_penerbitan_modul'),
			'KATA_KUNCI_DOKUMEN'=>$this->input->post('kata_kunci_modul'),
			'UKURAN_FILE_DOKUMEN'=>'100','RATE_DOKUMEN'=>'10',
			'JUMLAH_DOWNLOAD_DOKUMEN'=>'9','JUMLAH_BACA_DOKUMEN'=>'10',
			'FOTO_DOKUMEN'=>$namafoto,
			'FILE_DOKUMEN'=>$namafile);
	
		$this->db->insert('tb_dokumen',$insert);
	}
	
	public function tampil_where_kategori_modul() {
		$query=$this->db->get_where('tb_dokumen', array('ID_KATEGORI_DOKUMEN'=>3));
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}
}