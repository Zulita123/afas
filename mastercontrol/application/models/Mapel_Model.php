<?php
class Mapel_Model extends CI_Model {
	function __construct(){
		parent:: __construct();
	}
	function simpan_mapel($table,$value){
		return $this->db->insert($table,$value);
	}
	function qw($cel,$table,$property){
		return $this->db->query("SELECT $cel FROM $table $property");
	}
	function edit_mapel($table,$where,$value){
		$this->db->where('id_mapel',$where);
		return $this->db->update($table,$value);
	}
	function hapus_mapel($table,$where){
		$this->db->where('id_mapel',$where);
		return $this->db->delete($table);
	}
}
?>