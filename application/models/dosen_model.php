<?php

class Dosen_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	
	public function insertDokumen($namafile,$namafoto,$ekstensi)
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
		$this->db->select('ID_DOKUMEN,JUDUL_DOKUMEN,PENGARANG_DOKUMEN,PROLOG_DOKUMEN,TAHUN_PENERBITAN_DOKUMEN,FILE_DOKUMEN,KATA_KUNCI_DOKUMEN');
		$query=$this->db->get_where('tb_dokumen',array('ID_DOKUMEN' => $id));
		if ($query->num_rows()==0){
			return false;
		}
		else{
			return $query->result();
		}
	}
	
	public function editDokumen($id){
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
	//upload dokumen
					$this->load->library('upload');
					$config['upload_path'] = './upload/' . $this->input->post('kategori_dokumen');
					$config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|ppt|pptx|txt';
					$config['encrypt_name'] = TRUE;

					$this->upload->initialize($config);
		 
					if ($this->upload->do_upload('file_dokumen'))
					{
						//--unngah file
						$data = $this->upload->data();
						//simpan db	
						$namafile ='./upload/' . $this->input->post('kategori_dokumen').'/'.$data['file_name'];
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
					
					//upload dokumen file foto
					$this->load->library('upload');
					$config['upload_path']='./upload/' . $this->input->post('kategori_dokumen');
					$config['allowed_types']='jpg|jpeg|png';
					$config['encrypt_name']=TRUE;
					$this->upload->initialize($config);
					
					if($this->upload->do_upload('foto_dokumen'))
					{
						$data=$this->upload->data();
						$gambar['image_library'] = 'gd2';
						$gambar['source_image'] = './upload/'. $this->input->post('kategori_dokumen').'/' . $data['file_name'];
						$gambar['create_thumb'] = FALSE;
						$gambar['maintain_ratio'] = FALSE;
						$gambar['width'] = 150;
						$gambar['height'] = 150;
						$this->load->library('image_lib',$gambar);
						$this->image_lib->resize();
						$namafoto='./upload/'. $this->input->post('kategori_dokumen').'/' .$data['file_name'];
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
			'JUDUL_DOKUMEN'=>$this->input->post('judul_dokumen'),
			'PENGARANG_DOKUMEN'=>$this->input->post('pengarang_dokumen'),
			'PROLOG_DOKUMEN'=>$this->input->post('prolog_dokumen'),
			'TAHUN_PENERBITAN_DOKUMEN'=>$this->input->post('tahun_penerbitan_dokumen'),
			'KATA_KUNCI_DOKUMEN'=>$this->input->post('kata_kunci_dokumen'),
			'UKURAN_FILE_DOKUMEN'=>'100','RATE_DOKUMEN'=>'10',
			'JUMLAH_DOWNLOAD_DOKUMEN'=>'9','JUMLAH_BACA_DOKUMEN'=>'10',
			'FOTO_DOKUMEN'=>$namafoto,
			'FILE_DOKUMEN'=>$namafile);
			
		$this->db->where('ID_DOKUMEN',$id);
		$this->db->update('tb_dokumen',$update);
		return true;
	}
	
	public function deleteDokumen($id){
		$this->db->delete('tb_dokumen', array('ID_DOKUMEN'=>$id));
	}
	public function pilihIdDokumen($id){
		$this->db->select('ID_DOKUMEN');
		$query=$this->db->get_where('tb_dokumen',array('ID_DOKUMEN' => $id));
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}


		// profil dosen
	public function tampil_profil_dosen() {
		$query=$this->db->get_where('tb_profil', array('ID_USER'=>10));
		if($query->num_rows()==0){
			return false;
		} else {
			return $query->result();
		}
	}
	
	public function pilihIdProfil($id){
		$this->db->select('*');
		$query=$this->db->get_where('tb_profil',array('ID_PROFIL' => $id));
		if ($query->num_rows()==0){
			return false;
		}
		else{
			return $query->result();
		}
	}
	
	public function updateFotoProfil($id){
		$this->load->library('upload');
		$config['upload_path']='./upload/profil/dosen';
		$config['allowed_types']='jpg|jpeg|png';
		$config['encrypt_name']=TRUE;
		$this->upload->initialize($config);
		if($this->upload->do_upload('change_foto'))
		{
			$data=$this->upload->data();
			$gambar['image_library'] = 'gd2';
			$gambar['source_image'] = './upload/profil/dosen/' . $data['file_name'];
			$gambar['create_thumb'] = FALSE;
			$gambar['maintain_ratio'] = FALSE;
			$gambar['width'] = 600;
			$gambar['height'] = 550;
			$this->load->library('image_lib',$gambar);
			$this->image_lib->resize();
			$namafoto='./upload/profil/dosen/' . $data['file_name'];
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
	
	public function updateDataProfil($id){
		$update=array(
			'NAMA_PROFIL'=> $this->input->post('nama'),
			'JENIS_KELAMIN'=> $this->input->post('gender'),
			'TEMPAT_LAHIR'=> $this->input->post('tempat'),
			'TGL_LAHIR'=> $this->input->post('tanggal'),
			'ALAMAT_PROFIL'=> $this->input->post('alamat'),
			'EMAIL_PROFIL'=> $this->input->post('mail'),
			'TAMPIL_EMAIL_PROFIL'=> $this->input->post('email'),
			'NO_HP_PROFIL'=> $this->input->post('no_hp'),
			'TAMPIL_NO_HP_PROFIL'=> $this->input->post('hp'));
			
		$this->db->where('ID_PROFIL',$id);
		$this->db->update('tb_profil',$update);
		return true;
	}
}