<?php
class Aktifasi_Model extends CI_Model {
	function __construct(){
		parent:: __construct();
	}
	function simpan_aktifasi($table,$value){
		return $this->db->insert($table,$value);
	}
	function qw($cel,$table,$property){
		return $this->db->query("SELECT $cel FROM $table $property");
	}
}
?>