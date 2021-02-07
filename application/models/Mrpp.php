<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mrpp extends CI_Model {

	function tampil_rpp(){

		$this->db->order_by('id_rpp', 'desc');
		return $this->db->get('rpp')->result_array();
	}

	function tampil_rpp_guru($id){

		$this->db->order_by('id_rpp', 'desc');
		return $this->db->get_where('rpp',array('id_guru'=>$id))->result_array();
	}

	function ambil_rpp($id){

		$this->db->where('id_rpp', $id);
		$this->db->join('user', 'buku.id_guru = user.id_user', 'left');
		return $this->db->get('rpp')->row_array();
	}

	function tambah_rpp($inputan){

		$config['upload_path'] = './pengunjung/rpp/';
		$config['allowed_types'] = 'pdf|jpg|png|gif|jpeg|doc|docx|xlx|xlxs';
		
		$this->load->library('upload', $config);
		if($this->upload->do_upload('cover')){
			$inputan['cover'] = $this->upload->data('file_name');
			
		}

		if($this->upload->do_upload('file')){
			$inputan['file'] = $this->upload->data('file_name');
			
		}

		$this->db->insert('rpp', $inputan);
	}

	function edit_rpp($inputan,$id){

		$detail = $this->ambil_rpp($id);

		$config['upload_path'] = './pengunjung/rpp/';
		$config['allowed_types'] = 'pdf|jpg|png|gif|jpeg|doc|docx|xlx|xlsx';
		
		$this->load->library('upload', $config);
		if($this->upload->do_upload('cover')){

			if(file_exists("./pengunjung/rpp/".$detail['cover'])){

				unlink("./pengunjung/rpp/".$detail['cover']);
			}

			$inputan['cover'] = $this->upload->data('file_name');
			
		}

		if($this->upload->do_upload('file')){

			if(file_exists("./pengunjung/rpp/".$detail['file'])){

				unlink("./pengunjung/rpp/".$detail['file']);
			}
			$inputan['file'] = $this->upload->data('file_name');
			
		}

		$this->db->update('rpp', $inputan,array('id_rpp'=>$id));
	}

	function hapus_rpp($id){

		$detail = $this->ambil_rpp($id);

		if(file_exists("./pengunjung/rpp/".$detail['cover'])){

			unlink("./pengunjung/rpp/".$detail['cover']);
		}

		if(file_exists("./pengunjung/rpp/".$detail['file'])){

			unlink("./pengunjung/rpp/".$detail['file']);
		}

		$this->db->delete('rpp',array('id_rpp'=>$id));
	}

}

/* End of file Mrpp.php */
/* Location: ./application/models/Mrpp.php */