<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msoal extends CI_Model {

	function tampil_soal(){

		$this->db->order_by('id_soal', 'desc');
		return $this->db->get('soal')->result_array();
	}

	function tampil_soal_guru($id){

		$this->db->order_by('id_soal', 'desc');
		return $this->db->get_where('soal',array('id_guru'=>$id))->result_array();
	}

	function ambil_soal($id){

		$this->db->where('id_soal', $id);
		$this->db->join('user', 'buku.id_guru = user.id_user', 'left');
		return $this->db->get('soal')->row_array();
	}

	function tambah_soal($inputan){

		$config['upload_path'] = './pengunjung/soal/';
		$config['allowed_types'] = 'pdf|jpg|png|gif|jpeg|doc|docx|xlx|xlxs';
		
		$this->load->library('upload', $config);
		if($this->upload->do_upload('cover')){
			$inputan['cover'] = $this->upload->data('file_name');
			
		}

		if($this->upload->do_upload('file')){
			$inputan['file'] = $this->upload->data('file_name');
			
		}

		$this->db->insert('soal', $inputan);
	}

	function edit_soal($inputan,$id){

		$detail = $this->ambil_soal($id);

		$config['upload_path'] = './pengunjung/soal/';
		$config['allowed_types'] = 'pdf|jpg|png|gif|jpeg|doc|docx|xlx|xlsx';
		
		$this->load->library('upload', $config);
		if($this->upload->do_upload('cover')){

			if(file_exists("./pengunjung/soal/".$detail['cover'])){

				unlink("./pengunjung/soal/".$detail['cover']);
			}

			$inputan['cover'] = $this->upload->data('file_name');
			
		}

		if($this->upload->do_upload('file')){

			if(file_exists("./pengunjung/soal/".$detail['file'])){

				unlink("./pengunjung/soal/".$detail['file']);
			}
			
			$inputan['file'] = $this->upload->data('file_name');
			
		}

		$this->db->update('soal', $inputan,array('id_soal'=>$id));
	}

	function hapus_soal($id){

		$detail = $this->ambil_soal($id);

		if(file_exists("./pengunjung/soal/".$detail['cover'])){

			unlink("./pengunjung/soal/".$detail['cover']);
		}

		if(file_exists("./pengunjung/soal/".$detail['file'])){

			unlink("./pengunjung/soal/".$detail['file']);
		}

		$this->db->delete('soal',array('id_soal'=>$id));
	}

}

/* End of file Msoal.php */
/* Location: ./application/models/Msoal.php */