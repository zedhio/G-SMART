<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlkpd extends CI_Model {

	function tampil_lkpd(){

		$this->db->order_by('id_lkpd', 'desc');
		return $this->db->get('lkpd')->result_array();
	}

	function tampil_lkpd_guru($id){

		$this->db->order_by('id_lkpd', 'desc');
		return $this->db->get_where('lkpd',array('id_guru'=>$id))->result_array();
	}

	function ambil_lkpd($id){

		$this->db->where('id_lkpd', $id);
		$this->db->join('user', 'buku.id_guru = user.id_user', 'left');
		return $this->db->get('lkpd')->row_array();
	}

	function tambah_lkpd($inputan){

		$config['upload_path'] = './pengunjung/lkpd/';
		$config['allowed_types'] = 'pdf|jpg|png|gif|jpeg|doc|docx|xlx|xlxs';
		
		$this->load->library('upload', $config);
		if($this->upload->do_upload('cover')){
			$inputan['cover'] = $this->upload->data('file_name');
			
		}

		if($this->upload->do_upload('file')){
			$inputan['file'] = $this->upload->data('file_name');
			
		}

		$this->db->insert('lkpd', $inputan);
	}

	function edit_lkpd($inputan,$id){

		$detail = $this->ambil_lkpd($id);

		$config['upload_path'] = './pengunjung/lkpd/';
		$config['allowed_types'] = 'pdf|jpg|png|gif|jpeg|doc|docx|xlx|xlsx';
		
		$this->load->library('upload', $config);
		if($this->upload->do_upload('cover')){

			if(file_exists("./pengunjung/lkpd/".$detail['cover'])){

				unlink("./pengunjung/lkpd/".$detail['cover']);
			}

			$inputan['cover'] = $this->upload->data('file_name');
			
		}

		if($this->upload->do_upload('file')){

			if(file_exists("./pengunjung/lkpd/".$detail['file'])){

				unlink("./pengunjung/lkpd/".$detail['file']);
			}
			$inputan['file'] = $this->upload->data('file_name');
			
		}

		$this->db->update('lkpd', $inputan,array('id_lkpd'=>$id));
	}

	function hapus_lkpd($id){

		$detail = $this->ambil_lkpd($id);

		if(file_exists("./pengunjung/lkpd/".$detail['cover'])){

			unlink("./pengunjung/lkpd/".$detail['cover']);
		}

		if(file_exists("./pengunjung/lkpd/".$detail['file'])){

			unlink("./pengunjung/lkpd/".$detail['file']);
		}

		$this->db->delete('lkpd',array('id_lkpd'=>$id));
	}

}

/* End of file Mlkpd.php */
/* Location: ./application/models/Mlkpd.php */