<?php
class Aktifasi_Controller extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('Aktifasi_Model');
		if($this->session->userdata('status') != "loginadmin"){
			redirect('Login_Controller');
				
		}else{
				
		}
	}
	function page(){
		$page=$this->uri->segment(3);
		if(empty($page)){
			$page='home';
		}
		$data['home']=$page;
		$this->load->view('index',$data);
	}
	function aktif_soal(){
	    		$jenis = $this->input->post("jenis");
	    		$mapel = $this->input->post("mapel");
	    		$kelas = $this->input->post("kelas");
	    		$thj = $this->input->post("thj");
	    		$token = $this->input->post("token");
	    			$this->db->from("soal_aktif");
	    			/*$this->db->truncate();*/
	    			$qwsoal = $this->Aktifasi_Model->qw("*","soal","WHERE id_jenis='$jenis' AND id_mapel='$mapel' AND kelas='$kelas' AND id_thj='$thj'")->result();
	    			foreach ($qwsoal as $dsoal) {
	    				$ary = array(
	    					"id_soal" => $dsoal->id_soal,
	    					"soal" => $dsoal->soal,
	    					"kunci"=> $dsoal->kunci,
	    					"kelas"=> $dsoal->kelas,
	    					"id_mapel"=> $dsoal->id_mapel,
	    					"id_jenis"=> $dsoal->id_jenis,
	    					"listening"=> $dsoal->listening,
	    					"id_thj"=> $dsoal->id_thj
	    				);
	    				$this->db->insert("soal_aktif",$ary);
	    			}
	    			$qw=$this->db->get('token')->num_rows();
	    			if($qw ==0){
	    				$ara = array(
	    					"id_token"=>1,
	    					"token" =>$token,
	    				);
	    				$this->db->insert("token",$ara);
	    			}else{
	    				$id_token=1;
	    				$ara = array(
	    					"id_token"=>1,
	    					"token" =>$token,
	    				);
	    				$this->db->where('id_token',$id_token);
	    				$this->db->update("token",$ara);
	    			}
	    			redirect('Aktifasi_Controller/page/f_aktifasi');
	    	
	}
	function kosong(){
		$this->db->from("soal_aktif");
	   $this->db->truncate();
	   redirect('Aktifasi_Controller/page/f_aktifasi');
	}
}
?>