<?php
class Soal_Model extends CI_Model {
	function __construct(){
		parent:: __construct();
	}
	function simpan_soal($table,$value){
		return $this->db->insert($table,$value);
	}
	function qw($cel,$table,$property){
		return $this->db->query("SELECT $cel FROM $table $property");
	}
	function edit_soal($table,$where,$value){
		$this->db->where('id_soal',$where);
		return $this->db->update($table,$value);
	}
	function hapus_soal($table,$where){
		$this->db->where('id_soal',$where);
		return $this->db->delete($table);
	}
}
?>