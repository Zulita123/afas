<?php
class Ju_Model extends CI_Model {
	function __construct(){
		parent:: __construct();
	}
	function simpan_ju($table,$value){
		return $this->db->insert($table,$value);
	}
	function qw($cel,$table,$property){
		return $this->db->query("SELECT $cel FROM $table $property");
	}
	function edit_ju($table,$where,$value){
		$this->db->where('id_jenis',$where);
		return $this->db->update($table,$value);
	}
	function hapus_ju($table,$where){
		$this->db->where('id_jenis',$where);
		return $this->db->delete($table);
	}
}
?>