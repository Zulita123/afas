<?php
class Mapel_Controller extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('Mapel_Model');
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
		if($page=='mapel'){
			$data['tmp_mp']=$this->Mapel_Model->qw("*","mapel","")->result();
			$this->load->view('index',$data);
		}elseif($page=='f_mapel'){
			$yy=$this->uri->segment(4);
				if(empty($yy)){
					$data['status']='simpan';
					$data['open']='Mapel_Controller/simpan_mapel';
				}else{
					$data['status']='edit';
					$data['open']='Mapel_Controller/edit_mapel';
					$data['hsl']=$this->Mapel_Model->qw("*","mapel","WHERE id_mapel='$yy'");
				}				
			$this->load->view('index',$data);
		}else{
			$this->load->view('index',$data);
		}
	}
	function simpan_mapel(){
		$ar=array(
					'mapel'=>$this->input->post('mapel'),
					'jumlah_soal'=>$this->input->post('jumlah_soal'),
					'kkm1'=>$this->input->post('kkm1'),
					'kkm2'=>$this->input->post('kkm2'),
					'kkm3'=>$this->input->post('kkm3')
				);
		$this->Mapel_Model->simpan_mapel('mapel',$ar);
		redirect('Mapel_Controller/page/mapel');
	}
	function edit_mapel(){
		$id_mapel=$this->input->post('id_mapel');
		$ar=array(
					'mapel'=>$this->input->post('mapel'),
					'jumlah_soal'=>$this->input->post('jumlah_soal'),
					'kkm1'=>$this->input->post('kkm1'),
					'kkm2'=>$this->input->post('kkm2'),
					'kkm3'=>$this->input->post('kkm3')
				);
		$this->Mapel_Model->edit_mapel('mapel',$id_mapel,$ar);
		redirect('Mapel_Controller/page/mapel');
	}
	function hapus_mapel($id_mapel){
		$this->Mapel_Model->hapus_mapel('mapel',$id_mapel);
		redirect('Mapel_Controller/page/mapel');
	}
}
?>