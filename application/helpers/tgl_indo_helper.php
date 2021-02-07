<?php
function tgl_indo($tgl){

	return date("d/m/Y H:i:s",strtotime($tgl));
}
function ambil_isi_pengaturan($kolom)
{
	$CI =& get_instance();
	$CI->db->where('kolom_pengaturan', $kolom);
	$pecah = $CI->db->get('pengaturan')->row_array();
	return $pecah["isi_pengaturan"];
}
?>