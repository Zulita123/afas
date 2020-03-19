<?php
	class Login extends CI_Controller{
		function __construct(){
			parent:: __construct();
			$this->load->model('Model_login');
		}
		function index(){
			$this->load->view('login');
		}
		function aksi_login(){
			$nis=$this->input->post('nis');
			$password=$this->input->post('password');
			$where=array(
					'nis' 	   =>$nis,
					'password' =>$password
				);
			$cek=$this->Model_login->cek_login('siswa',$where)->num_rows();
			$query=$this->db->where('nis',$nis)->get('siswa');
			$que=$this->db->where('nis',$nis)->get('siswa');
			$row=$query->row();
			$cka=$que->row();
			if($cka->status=="on"){
				echo "onn";
			}else{
				
				if($cek > 0){
					$data_session=array(
						'nis'	=>$nis,
						'status' => 'login'
						);
					$this->session->set_userdata($data_session);
					echo "masuk";	
				}else{
					echo "kembali";
				}
			}
		}
		function logout(){
				$this->session->sess_destroy();
				$this->db->update("siswa",array("status"=>"off"));
				redirect('Login');
			}
	}
?>