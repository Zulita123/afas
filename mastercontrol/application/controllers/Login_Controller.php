<?php
class Login_Controller extends CI_Controller {
	function __construct(){
		parent:: __construct();	
		$this->load->model('Model_Login');
	}
	function index(){
		if($this->session->userdata('status') == "loginadmin"){
			redirect('Master_Controller/page');
		}else{
				
		}
		$this->load->view('login');
	}
	function aksi_login(){
			$username=$this->input->post('nama');
			$password=$this->input->post('password');
			$psw=base64_encode($password);
			$where=array(
					'nama' =>$username,
					'password' =>$psw
				);
			$cek=$this->Model_Login->cek_login('guru',$where)->num_rows();
			$query=$this->db->where('nama',$username)->get('guru');
			$row=$query->row();
			if($cek > 0){
				$data_session=array(
					'nama'	=>$username,
					'id_guru'	=>$row->id_guru,
					'status' => 'loginadmin',
					'level'=>$row->level
					);
				$this->session->set_userdata($data_session);
				redirect('Master_Controller/page');
			}else{
				redirect('Login_Controller');
			}
		}
	function logout(){
				$this->session->sess_destroy();
				redirect('Login_Controller');
			}
}
?>