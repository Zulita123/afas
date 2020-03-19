<?php
class Absen_Model extends CI_Model {
	function __construct(){
		parent:: __construct();
	}
	function qw($cel,$table,$property){
		return $this->db->query("SELECT $cel FROM $table $property");
	}
	function edit_siswa($table,$where,$value){
		$this->db->where('nis',$where);
		return $this->db->update($table,$value);
	}
}
?>