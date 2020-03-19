<?php
class Master_Model extends CI_Model {
	function __construct(){
		parent:: __construct();
	}
	function simpan_uk($table,$value){
		return $this->db->insert($table,$value);
	}
	function simpan_sesi($table,$value){
		return $this->db->insert($table,$value);
	}
	function simpan_siswa($table,$value){
		return $this->db->insert($table,$value);
	}
	function simpan_thj($table,$value){
		return $this->db->insert($table,$value);
	}
	function simpan_mg($table,$value){
		return $this->db->insert($table,$value);
	}
	function simpan_guru($table,$value){
		return $this->db->insert($table,$value);
	}
	function qw($cel,$table,$property){
		return $this->db->query("SELECT $cel FROM $table $property");
	}
	function edit_uk($table,$where,$value){
		$this->db->where('id_uk',$where);
		return $this->db->update($table,$value);
	}
	function edit_sesi($table,$where,$value){
		$this->db->where('id_sesi',$where);
		return $this->db->update($table,$value);
	}
	function edit_thj($table,$where,$value){
		$this->db->where('id_thj',$where);
		return $this->db->update($table,$value);
	}
	function edit_siswa($table,$where,$value){
		$this->db->where('nis',$where);
		return $this->db->update($table,$value);
	}
	function edit_guru($table,$where,$value){
		$this->db->where('id_guru',$where);
		return $this->db->update($table,$value);
	}
	function hapus_uk($table,$where){
		$this->db->where('id_uk',$where);
		return $this->db->delete($table);
	}
	function hapus_sesi($table,$where){
		$this->db->where('id_sesi',$where);
		return $this->db->delete($table);
	}
	function hapus_siswa($table,$where){
		$this->db->where('nis',$where);
		return $this->db->delete($table);
	}
	function hapus_thj($table,$where){
		$this->db->where('id_thj',$where);
		return $this->db->delete($table);
	}
	function hapus_mpg($table,$where){
		$this->db->where('id_mpg',$where);
		return $this->db->delete($table);
	}
	function truncate_jawab(){
		$this->db->truncate('jawaban');
	}
	function truncate_waktu(){
		$this->db->empty_table('waktu');
	}
}
?>