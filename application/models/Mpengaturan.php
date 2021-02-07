<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpengaturan extends CI_Model {

	function tampil_pengaturan()
	{
		$data = $this->db->get('pengaturan');
		return $data->result_array();
	}
	function detail_pengaturan($id)
	{
		$this->db->where('id_pengaturan', $id);
		$data = $this->db->get('pengaturan');
		return $data->row_array();
	}

	function edit_pengaturan($input, $id)
	{
		$this->db->where('id_pengaturan',$id);
		$this->db->update('pengaturan',$input);
	}
	function simpan_pengaturan($input)
	{
		$this->db->insert('pengaturan', $input);
	}
	function hapus_pengaturan($id)
	{
		$this->db->where('id_pengaturan', $id);
		$this->db->delete('pengaturan');
	}
}

/* End of file Mservis.php */
/* Location: ./application/models/Mservis.php */