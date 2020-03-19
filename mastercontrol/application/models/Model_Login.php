<?php
	class Model_Login extends CI_Model{
		function __construct(){
			parent:: __construct();
			$this->load->model('Model_Login');
		}
		function cek_login($table,$where){
			return $this->db->get_where($table,$where);
		}
	}
?>