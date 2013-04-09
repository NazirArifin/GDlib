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
		$facebook = $this->input->post('id_facebook');	
		if(filter_var($facebook, FILTER_VALIDATE_EMAIL) == FALSE)return FALSE;
		
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
		$facebook = $this->input->post('id_facebook');	
		if(filter_var($facebook, FILTER_VALIDATE_EMAIL) == FALSE)return FALSE;
		
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
	
//edit jurnal
	public function pilihIdDokumen($id){
		$this->db->select('ID_DOKUMEN,JUDUL_DOKUMEN,PENGARANG_DOKUMEN,PROLOG_DOKUMEN,TAHUN_PENERBITAN_DOKUMEN,FILE_DOKUMEN,KATA_KUNCI_DOKUMEN');
		$query=$this->db->get_where('tb_dokumen',array('ID_DOKUMEN' => $id));
		if ($query->num_rows()==0){
			return false;
		}
		else{
			return $query->result();
		}
	}
	
	public function editDokumenJurnal($id){
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
		//upload jurnal file pdf
					$this->load->library('upload');
					$config['upload_path'] = './upload/' . $this->input->post('kategori_jurnal');
					$config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|ppt|pptx|txt';
					$config['encrypt_name'] = TRUE;
					//$config['max_width']  = '1024';
					//$config['max_height']  = '768';       

					$this->upload->initialize($config);
		 
					if ($this->upload->do_upload('file_jurnal'))
					{
						//--unngah file
						$data = $this->upload->data();
						//simpan db	
						$namafile = './upload/'. $this->input->post('kategori_jurnal') . '/' . $data['file_name'];
						//tipe file
						$ekstensi= $data['file_ext'];
								switch ($ekstensi){
									case '.pdf':
										$ekstensi='1';
									break;
									case '.doc':
										$ekstensi='2';
									case '.docx':
										$ekstensi='2';
									break;	
									case '.xls':
										$ekstensi='3';
									case '.xlsx':
										$ekstensi='3';
									break;	
									case '.ppt':
										$ekstensi='4';
									case '.pptx':
										$ekstensi='4';
									break;	
									case '.txt':
										$ekstensi='5';
									break;	
								default:	
								$ekstensi= $data['file_ext'];
								}
										
					}
					else
					{
						echo $this->upload->display_errors();
					}
					
					//upload jurnal file foto
					$this->load->library('upload');
					$config['upload_path']='./upload/' . $this->input->post('kategori_jurnal');
					$config['allowed_types']='jpg|jpeg|png';
					$config['encrypt_name']=TRUE;
					$this->upload->initialize($config);
					if($this->upload->do_upload('foto_jurnal'))
					{
						$data=$this->upload->data();
						$namafoto='./upload/'. $this->input->post('kategori_jurnal') . '/' . $data['file_name'];
						$ekstensi= $data['file_ext'];
					switch ($ekstensi){
							case '.jpg':
								$ekstensi='6';
							case '.jpeg':
								$ekstensi='6';
							case '.png':
								$ekstensi='6';
							break;	
							default:	
								$ekstensi= $data['file_ext'];
							}
					}
					else
					{
						echo $this->upload->display_errors();
					}
		$update=array(
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
			
		$this->db->where('ID_DOKUMEN',$id);
		$this->db->update('tb_dokumen',$update);
		return true;
	}
	
	public function deleteDokumenJurnal($id){
		$this->db->delete('tb_dokumen', array('ID_DOKUMEN'=>$id));
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

	
	public function editDokumenBuku($id){
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
		//upload buku file pdf
					$this->load->library('upload');
					$config['upload_path'] = './upload/' . $this->input->post('kategori_buku');
					$config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|ppt|pptx|txt';
					$config['encrypt_name'] = TRUE;
					//$config['max_width']  = '1024';
					//$config['max_height']  = '768';       

					$this->upload->initialize($config);
		 
					if ($this->upload->do_upload('file_buku'))
					{
						//--unngah file
						$data = $this->upload->data();
						//simpan db	
						$namafile = './upload/'. $this->input->post('kategori_buku') . '/' . $data['file_name'];
						//tipe file
						$ekstensi= $data['file_ext'];
								switch ($ekstensi){
									case '.pdf':
										$ekstensi='1';
									break;
									case '.doc':
										$ekstensi='2';
									case '.docx':
										$ekstensi='2';
									break;	
									case '.xls':
										$ekstensi='3';
									case '.xlsx':
										$ekstensi='3';
									break;	
									case '.ppt':
										$ekstensi='4';
									case '.pptx':
										$ekstensi='4';
									break;	
									case '.txt':
										$ekstensi='5';
									break;	
								default:	
								$ekstensi= $data['file_ext'];
								}
										
					}
					else
					{
						echo $this->upload->display_errors();
					}
					
					//upload buku file foto
					$this->load->library('upload');
					$config['upload_path']='./upload/' . $this->input->post('kategori_buku');
					$config['allowed_types']='jpg|jpeg|png';
					$config['encrypt_name']=TRUE;
					$this->upload->initialize($config);
					if($this->upload->do_upload('foto_buku'))
					{
						$data=$this->upload->data();
						$namafoto='./upload/'. $this->input->post('kategori_buku') . '/' . $data['file_name'];
						$ekstensi= $data['file_ext'];
						switch ($ekstensi){
									case '.jpg':
										$ekstensi='6';
									case '.jpeg':
										$ekstensi='6';
									case '.png':
										$ekstensi='6';
									break;	
								default:	
								$ekstensi= $data['file_ext'];
								}
					}
					else
					{
						echo $this->upload->display_errors();
					}
		$update=array(
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
			
		$this->db->where('ID_DOKUMEN',$id);
		$this->db->update('tb_dokumen',$update);
		return true;
	}
	
	public function deleteDokumenBuku($id){
		$this->db->delete('tb_dokumen', array('ID_DOKUMEN'=>$id));
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
	
	public function editDokumenModul($id){
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
		//upload buku file pdf
					$this->load->library('upload');
					$config['upload_path'] = './upload/' . $this->input->post('kategori_modul');
					$config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|ppt|pptx|txt';
					$config['encrypt_name'] = TRUE;
					//$config['max_width']  = '1024';
					//$config['max_height']  = '768';       

					$this->upload->initialize($config);
		 
					if ($this->upload->do_upload('file_modul'))
					{
						//--unngah file
						$data = $this->upload->data();
						//simpan db	
						$namafile = './upload/'. $this->input->post('kategori_modul') . '/' . $data['file_name'];
						//tipe file
						$ekstensi= $data['file_ext'];
								switch ($ekstensi){
									case '.pdf':
										$ekstensi='1';
									break;
									case '.doc':
										$ekstensi='2';
									case '.docx':
										$ekstensi='2';
									break;	
									case '.xls':
										$ekstensi='3';
									case '.xlsx':
										$ekstensi='3';
									break;	
									case '.ppt':
										$ekstensi='4';
									case '.pptx':
										$ekstensi='4';
									break;	
									case '.txt':
										$ekstensi='5';
									break;	
								default:	
								$ekstensi= $data['file_ext'];
								}
										
					}
					else
					{
						echo $this->upload->display_errors();
					}
					
					//upload modul file foto
					$this->load->library('upload');
					$config['upload_path']='./upload/' . $this->input->post('kategori_modul');
					$config['allowed_types']='jpg|jpeg|png';
					$config['encrypt_name']=TRUE;
					$this->upload->initialize($config);
					if($this->upload->do_upload('foto_modul'))
					{
						$data=$this->upload->data();
						$namafoto='./upload/'. $this->input->post('kategori_modul') . '/' . $data['file_name'];
						$ekstensi= $data['file_ext'];
						switch ($ekstensi){
									case '.jpg':
										$ekstensi='6';
									case '.jpeg':
										$ekstensi='6';
									case '.png':
										$ekstensi='6';
									break;	
								default:	
								$ekstensi= $data['file_ext'];
								}
					}
					else
					{
						echo $this->upload->display_errors();
					}
		$update=array(
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
			
		$this->db->where('ID_DOKUMEN',$id);
		$this->db->update('tb_dokumen',$update);
		return true;
	}
	
	public function deleteDokumenModul($id){
		$this->db->delete('tb_dokumen', array('ID_DOKUMEN'=>$id));
	}
	
// ========= NEWS ============
	public function insertNews($namafoto,$tanggal)
	{
		$insert=array(
			'JUDUL_NEWS'=>$this->input->post('judul_news'),
			'ISI_NEWS'=>$this->input->post('isi_news'),
			'GAMBAR_NEWS'=>$namafoto,
			'STATUS_NEWS'=>'1',
			'JAM_NEWS'=>$tanggal);
		$this->db->insert('tb_news',$insert);
	}
	
	public function pilihIdNews($id){
		$this->db->select('ID_NEWS,JUDUL_NEWS,ISI_NEWS,GAMBAR_NEWS,STATUS_NEWS,JAM_NEWS');
		$query=$this->db->get_where('tb_news',array('ID_NEWS' => $id));
		if ($query->num_rows()==0){
			return false;
		}
		else{
			return $query->result();
		}
	}
	
	public function editNews($id){
		$this->load->library('upload');
		$config['upload_path']='./upload/news';
		$config['allowed_types']='jpg|jpeg|png';
		$config['encrypt_name']=TRUE;
		$this->upload->initialize($config);
		if($this->upload->do_upload('gambar_news'))
		{
			$data=$this->upload->data();
			$gambar['image_library'] = 'gd2';
			$gambar['source_image'] = './upload/news/' . $data['file_name'];
			$gambar['create_thumb'] = FALSE;
			$gambar['maintain_ratio'] = FALSE;
			$gambar['width'] = 600;
			$gambar['height'] = 300;
			$this->load->library('image_lib',$gambar);
			$this->image_lib->resize();
			$namafoto='./upload/news/' . $data['file_name'];
			
			// ==== SET JAM UPLOAD =====
			$waktu1 = "%d-%m-%Y %H:%i";
			$time = time()+60*60*6;
			$tanggal = mdate($waktu1, $time);
			//$jam = mdate($waktu2, $time);
		}
		else
		{
			echo $this->upload->display_errors();
		}
		
		$update=array(
			'ID_NEWS'=>$this->input->post('id_news'),
			'JUDUL_NEWS'=>$this->input->post('judul_news'),
			'ISI_NEWS'=>$this->input->post('isi_news'),
			'GAMBAR_NEWS'=>$namafoto,
			'STATUS_NEWS'=>'1',
			'JAM_NEWS'=>$tanggal);
			
		$this->db->where('ID_NEWS',$id);
		$this->db->update('tb_news',$update);
		return true;
	}
	
	public function deleteNews($id){
		$this->db->delete('tb_news', array('ID_NEWS'=>$id));
	}
	
	//halaman depan
	public function tampilDokumenJurnal(){
		$query=$this->db->query("SELECT * FROM tb_dokumen WHERE ID_KATEGORI_DOKUMEN = 1 ORDER BY ID_DOKUMEN DESC LIMIT 0,4");
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}
	public function tampilDokumenBuku(){
		$query=$this->db->query("SELECT * FROM tb_dokumen WHERE ID_KATEGORI_DOKUMEN = 2 ORDER BY ID_DOKUMEN DESC LIMIT 0,4");
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}
	public function tampilDokumenModul(){
		$query=$this->db->query("SELECT * FROM tb_dokumen WHERE ID_KATEGORI_DOKUMEN = 3 ORDER BY ID_DOKUMEN DESC LIMIT 0,4");
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}
}