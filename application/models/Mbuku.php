<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mbuku extends CI_Model {

	function tampil_buku(){

		$this->db->order_by('id_buku', 'desc');
		return $this->db->get('buku')->result_array();
	}

	function tampil_buku_guru($id){

		$this->db->order_by('id_buku', 'desc');
		return $this->db->get_where('buku',array('id_guru'=>$id))->result_array();
	}

	function ambil_buku($id){

		$this->db->where('id_buku', $id);
		$this->db->join('user', 'buku.id_guru = user.id_user', 'left');
		return $this->db->get('buku')->row_array();
	}

	function tambah_buku($inputan){

		$config['upload_path'] = './pengunjung/buku/';
		$config['allowed_types'] = 'pdf|jpg|png|gif|jpeg';
		
		$this->load->library('upload', $config);
		if($this->upload->do_upload('cover')){
			$inputan['cover'] = $this->upload->data('file_name');
			
		}

		if($this->upload->do_upload('file')){
			$inputan['file'] = $this->upload->data('file_name');
			
		}

		$this->db->insert('buku', $inputan);
	}

	function edit_buku($inputan,$id){

		$detail = $this->ambil_buku($id);

		$config['upload_path'] = './pengunjung/buku/';
		$config['allowed_types'] = 'pdf|jpg|png|gif|jpeg';
		
		$this->load->library('upload', $config);
		if($this->upload->do_upload('cover')){

			if(file_exists("./pengunjung/buku/".$detail['cover'])){

				unlink("./pengunjung/buku/".$detail['cover']);
			}

			$inputan['cover'] = $this->upload->data('file_name');
			
		}

		if($this->upload->do_upload('file')){

			if(file_exists("./pengunjung/buku/".$detail['file'])){

				unlink("./pengunjung/buku/".$detail['file']);
			}
			$inputan['file'] = $this->upload->data('file_name');
			
		}

		$this->db->update('buku', $inputan,array('id_buku'=>$id));
	}

	function hapus_buku($id){

		$detail = $this->ambil_buku($id);

		if(file_exists("./pengunjung/buku/".$detail['cover'])){

			unlink("./pengunjung/buku/".$detail['cover']);
		}

		if(file_exists("./pengunjung/buku/".$detail['file'])){

			unlink("./pengunjung/buku/".$detail['file']);
		}

		$this->db->delete('buku',array('id_buku'=>$id));
	}

}

/* End of file Mbuku.php */
/* Location: ./application/models/Mbuku.php */