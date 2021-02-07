<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mblog extends CI_Model {

	function tampil_blog(){

		$this->db->order_by('id_blog', 'desc');
		return $this->db->get('blog')->result_array();
	}

	function tampil_buku_guru($id){

		$this->db->order_by('id_buku', 'desc');
		return $this->db->get_where('buku',array('id_guru'=>$id))->result_array();
	}

	function ambil_blog($id){

		$this->db->where('id_blog', $id);
		return $this->db->get('blog')->row_array();
	}

	function tambah_blog($inputan){

		$config['upload_path'] = './pengunjung/blog/';
		$config['allowed_types'] = 'pdf|jpg|png|gif|jpeg';
		
		$this->load->library('upload', $config);
		if($this->upload->do_upload('gambar')){
			$inputan['gambar'] = $this->upload->data('file_name');	
		}

		$inputan['tgl_waktu'] = date("Y-m-d H:i:s");

		$this->db->insert('blog', $inputan);
	}

	function edit_blog($inputan,$id){

		$detail = $this->ambil_blog($id);

		$config['upload_path'] = './pengunjung/blog/';
		$config['allowed_types'] = 'pdf|jpg|png|gif|jpeg';
		
		$this->load->library('upload', $config);
		if($this->upload->do_upload('gambar')){

			if(file_exists("./pengunjung/blog/".$detail['gambar'])){

				unlink("./pengunjung/blog/".$detail['gambar']);
			}

			$inputan['gambar'] = $this->upload->data('file_name');
			
		}

		$inputan['tgl_waktu'] = date("Y-m-d H:i:s");

		$this->db->update('blog', $inputan,array('id_blog'=>$id));
	}

	function hapus_blog($id){

		$detail = $this->ambil_blog($id);

		if(file_exists("./pengunjung/blog/".$detail['gambar'])){

			unlink("./pengunjung/blog/".$detail['gambar']);
		}

		$this->db->delete('blog',array('id_blog'=>$id));
	}

}

/* End of file Mblog.php */
/* Location: ./application/models/Mblog.php */