<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mreferensi extends CI_Model {

	function tampil_referensi(){

		$this->db->order_by('id_referensi', 'desc');
		return $this->db->get('referensi')->result_array();
	}

	function tampil_referensi_guru($id){

		$this->db->order_by('id_referensi', 'desc');
		return $this->db->get_where('referensi',array('id_guru'=>$id))->result_array();
	}

	function ambil_referensi($id){

		$this->db->where('id_referensi', $id);
		$this->db->join('user', 'buku.id_guru = user.id_user', 'left');
		return $this->db->get('referensi')->row_array();
	}

	function tambah_referensi($inputan){

		$config['upload_path'] = './pengunjung/referensi/';
		$config['allowed_types'] = 'pdf|jpg|png|gif|jpeg|doc|docx|xlx|xlxs';
		
		$this->load->library('upload', $config);
		if($this->upload->do_upload('cover')){
			$inputan['cover'] = $this->upload->data('file_name');
			
		}

		if($this->upload->do_upload('file')){
			$inputan['file'] = $this->upload->data('file_name');
			
		}

		$this->db->insert('referensi', $inputan);
	}

	function edit_referensi($inputan,$id){

		$detail = $this->ambil_referensi($id);

		$config['upload_path'] = './pengunjung/referensi/';
		$config['allowed_types'] = 'pdf|jpg|png|gif|jpeg|doc|docx|xlx|xlxs';
		
		$this->load->library('upload', $config);
		if($this->upload->do_upload('cover')){

			if(file_exists("./pengunjung/referensi/".$detail['cover'])){

				unlink("./pengunjung/referensi/".$detail['cover']);
			}

			$inputan['cover'] = $this->upload->data('file_name');
			
		}

		if($this->upload->do_upload('file')){

			if(file_exists("./pengunjung/referensi/".$detail['file'])){

				unlink("./pengunjung/referensi/".$detail['file']);
			}
			$inputan['file'] = $this->upload->data('file_name');
			
		}

		$this->db->update('referensi', $inputan,array('id_referensi'=>$id));
	}

	function hapus_referensi($id){

		$detail = $this->ambil_referensi($id);

		if(file_exists("./pengunjung/referensi/".$detail['cover'])){

			unlink("./pengunjung/referensi/".$detail['cover']);
		}

		if(file_exists("./pengunjung/referensi/".$detail['file'])){

			unlink("./pengunjung/referensi/".$detail['file']);
		}

		$this->db->delete('referensi',array('id_referensi'=>$id));
	}

}

/* End of file Mreferensi.php */
/* Location: ./application/models/Mreferensi.php */