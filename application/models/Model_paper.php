<?php
	Class Model_paper extends CI_Model {
		function mapel(){
			return $this->db->get("mapel");
		}
		function jenis_tes(){
			return $this->db->get("jenis_tes");
		}
		function qw($cel,$table,$prop){
			return $this->db->query("SELECT $cel FROM $table $prop");
		}
	}
?>