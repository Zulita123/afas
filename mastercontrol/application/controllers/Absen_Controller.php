<?php
class Absen_Controller extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('Absen_Model');
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
		if($page=='absensi'){
			$kls=$this->input->post('kelas');
			if(empty($kls)){
				$data['tmp_siswa']=$this->Absen_Model->qw("siswa.nis,siswa.nama,siswa.absen,siswa.password,siswa.jk,siswa.kelas,urutan_kelas.urutan_kelas,siswa.status","siswa","inner join urutan_kelas on siswa.id_uk=urutan_kelas.id_uk")->result();
			}else{
				$data['tmp_siswa']=$this->Absen_Model->qw("siswa.nis,siswa.nama,siswa.absen,siswa.password,siswa.jk,siswa.kelas,urutan_kelas.urutan_kelas,siswa.status","siswa","inner join urutan_kelas on siswa.id_uk=urutan_kelas.id_uk WHERE siswa.kelas='$kls'")->result();

			}
			$this->load->view('index',$data);
		}else{
			$this->load->view('index',$data);
		}
	}
	function eabsen(){
		if(isset($_POST['abs'])){
			$na=$this->input->post('absen');
			$jml=count($na);
			for($x=0;$x<$jml;$x++){
				$this->db->where('nis',$na[$x]);
				$this->db->update("siswa",array("absen"=>"Sudah"));
			}
			redirect('Absen_Controller/page/absensi');
		}else{
			$na=$this->input->post('absen');
			$jml=count($na);
			for($x=0;$x<$jml;$x++){
				$this->db->where('nis',$na[$x]);
				$this->db->update("siswa",array("absen"=>"belum"));
			}
			redirect('Absen_Controller/page/absensi');
		}
	}
}
?>