<?php
class Soal_Controller extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('Soal_Model');
		if($this->session->userdata('status') != "loginadmin"){
			redirect('Login_Controller');
				
		}else{
				
		}
	}
	function page(){
		if($this->session->userdata('status') == "loginadmin"){
				
		}else{
				redirect('Login_Controller');
		}
		$page=$this->uri->segment(3);
		if(empty($page)){
			$page='home';
		}
		$data['home']=$page;
		if($page=='f_soal'){
				$kl=$this->session->userdata('id_guru');
				$data['mpl']=$this->Soal_Model->qw("mapel_guru.id_mapel,mapel.mapel","mapel_guru"," inner join mapel on mapel.id_mapel = mapel_guru.id_mapel WHERE mapel_guru.id_guru = '$kl'")->result();
									
			$this->load->view('index',$data);
		}elseif($page=="e_soal"){
			$yy=$this->uri->segment(4);
			$kl=$this->session->userdata('id_guru');
				$data['mpl']=$this->Soal_Model->qw("mapel_guru.id_mapel,mapel.mapel","mapel_guru"," inner join mapel on mapel.id_mapel = mapel_guru.id_mapel WHERE mapel_guru.id_guru = '$kl'")->result();
			$data['hsl']=$this->Soal_Model->qw("soal.soal,soal.kunci,soal.kelas,mapel.mapel,mapel.id_mapel,jenis_ujian.jenis_ujian,jenis_ujian.id_jenis,soal.id_soal,tahun_ajaran.tahun_ajaran,tahun_ajaran.id_thj","soal","inner join mapel on soal.id_mapel=mapel.id_mapel inner join jenis_ujian on soal.id_jenis=jenis_ujian.id_jenis inner join tahun_ajaran on tahun_ajaran.id_thj=soal.id_thj WHERE soal.id_soal='$yy'")->row_array();	
			$this->load->view('index',$data);	
		}else{
			$this->load->view('index',$data);
		}
	}
	function lihat_soal(){
			$urs = $this->uri->segment(3);
			if(empty($urs)){
				$data['pel'] = "";
				$kl = $this->session->userdata('id_guru');
				$data['var'] = $this->Soal_Model->qw("mapel_guru.id_mapel,mapel.mapel","mapel_guru"," inner join mapel on mapel.id_mapel = mapel_guru.id_mapel WHERE mapel_guru.id_guru = '$kl'")->result();	
				$data['jns'] = $this->db->get("jenis_ujian")->result();
				$data['thj'] = $this->db->get("tahun_ajaran")->result();
				$data['soal'] = "";
				$this->load->view("content/lihat_soal.php", $data);
			}else{
				$id_map = $this->input->post("id_mapel");
				$kelas = $this->input->post("kelas");
				$jenis = $this->input->post("id_jenis");
				$id_thj = $this->input->post("id_thj");
				$dtm = $this->Soal_Model->qw("mapel","mapel","WHERE id_mapel = '$id_map'")->row_array();
				$data['pel'] = $dtm['mapel'];
				$kl = $this->session->userdata('id_guru');
				$data['var'] = $this->Soal_Model->qw("mapel.mapel,mapel_guru.id_mapel","mapel_guru"," inner join mapel on mapel.id_mapel = mapel_guru.id_mapel WHERE mapel_guru.id_guru = '$kl'")->result();
				$data['jns'] = $this->db->get("jenis_ujian")->result();
				$data['thj'] = $this->db->get("tahun_ajaran")->result();
				$data['soal'] = $this->Soal_Model->qw("*","soal","WHERE kelas = '$kelas' AND id_mapel = '$id_map' AND id_jenis = '$jenis' AND id_thj='$id_thj'")->result();
				$this->load->view("content/lihat_soal.php", $data);
			}
		}
	function lihat_soala(){
			$urs = $this->uri->segment(3);
			if(empty($urs)){
				$data['pel'] = "";
				$kl = $this->session->userdata('id_guru');
				$data['var'] = $this->Soal_Model->qw("*","mapel","")->result();	
				$data['jns'] = $this->db->get("jenis_ujian")->result();
				$data['thj'] = $this->db->get("tahun_ajaran")->result();
				$data['soal'] = "";
				$this->load->view("content/lihat_soala.php", $data);
			}else{
				$id_map = $this->input->post("id_mapel");
				$kelas = $this->input->post("kelas");
				$jenis = $this->input->post("id_jenis");
				$id_thj = $this->input->post("id_thj");
				$dtm = $this->Soal_Model->qw("mapel","mapel","WHERE id_mapel = '$id_map'")->row_array();
				$data['pel'] = $dtm['mapel'];
				$kl = $this->session->userdata('id_guru');
				$data['var'] = $this->Soal_Model->qw("*","mapel","")->result();	
				$data['jns'] = $this->db->get("jenis_ujian")->result();
				$data['thj'] = $this->db->get("tahun_ajaran")->result();
				$data['soal'] = $this->Soal_Model->qw("*","soal","WHERE kelas = '$kelas' AND id_mapel = '$id_map' AND id_jenis = '$jenis' AND id_thj='$id_thj'")->result();
				$this->load->view("content/lihat_soala.php", $data);
			}
		}
	function simpan_soal(){
		$config['upload_path']='assets/listening';
		$config['allowed_types']='mp3|wav';
		$config['max_size']='1000';
		$config['encrypt_name']=true;
		$this->load->library('upload',$config);
		$this->upload->do_upload('listening');
		$data=$this->upload->data();
		$listen=$data['file_name'];
		$data_session=array(
					'kelas'=>$this->input->post('kelas'),
					'id_mapel'=>$this->input->post('id_mapel'),
					'id_jenis'=>$this->input->post('id_ju'),
					'id_thj'=>$this->input->post('id_thj')
					);
		$this->session->set_userdata($data_session);	
		$ar=array(
					'soal'=>$this->input->post('soal'),
					'kunci'=>$this->input->post('kunci'),
					'kelas'=>$this->input->post('kelas'),
					'id_mapel'=>$this->input->post('id_mapel'),
					'id_jenis'=>$this->input->post('id_ju'),
					'listening'=>$listen,
					'id_thj'=>$this->input->post('id_thj')
				);
		$simpan=$this->Soal_Model->simpan_soal('soal',$ar);
		if($simpan){
			echo "Berhasil";
		}else{
			echo "Gagal";
		}
	}
	function edit_soal(){
		$filename=$_FILES['listening']['name'];
		$config['upload_path']='assets/listening';
		$config['allowed_types']='mp3|wav';
		$config['max_size']='1000';
		$config['encrypt_name']=true;
		$this->load->library('upload',$config);
		$this->upload->do_upload('listening');
		$data=$this->upload->data();
		$listen=$data['file_name'];	
		if(empty($filename)){
			$id_soal=$this->input->post('id_soal');
			$ar=array(
					'soal'=>$this->input->post('soal'),
					'kunci'=>$this->input->post('kunci'),
					'kelas'=>$this->input->post('kelas'),
					'id_mapel'=>$this->input->post('id_mapel'),
					'id_jenis'=>$this->input->post('id_ju'),
					'id_thj'=>$this->input->post('id_thj')
				);
			$simpan=$this->Soal_Model->edit_soal('soal',$id_soal,$ar);
			if($simpan){
				echo "Berhasil diedit";
			}else{
				echo "Gagal";
			}
		}else{
			$id_soal=$this->input->post('id_soal');
		$ar=array(
					'soal'=>$this->input->post('soal'),
					'kunci'=>$this->input->post('kunci'),
					'kelas'=>$this->input->post('kelas'),
					'id_mapel'=>$this->input->post('id_mapel'),
					'id_jenis'=>$this->input->post('id_ju'),
					'listening'=>$listen,
					'id_thj'=>$this->input->post('id_thj')
				);
		$simpan=$this->Soal_Model->edit_soal('soal',$id_soal,$ar);
		if($simpan){
			echo "Berhasil diedit";
		}else{
			echo "Gagal";
		}
		}
	}
	function l_soal(){
				$kl=$this->session->userdata('id_guru');
				$data['mpl']=$this->Soal_Model->qw("mapel_guru.id_mapel,mapel.mapel","mapel_guru"," inner join mapel on mapel.id_mapel = mapel_guru.id_mapel WHERE mapel_guru.id_guru = '$kl'")->result();		
		$this->load->view('content/l_soal',$data);
	}
	function le_soal(){
		$yy=$this->uri->segment(4);
			$data['hsl']=$this->Soal_Model->qw("soal.soal,soal.kunci,soal.kelas,mapel.mapel,mapel.id_mapel,jenis_ujian.jenis_ujian,jenis_ujian.id_jenis,soal.id_soal,tahun_ajaran.tahun_ajaran,tahun_ajaran.id_thj","soal","inner join mapel on soal.id_mapel=mapel.id_mapel inner join jenis_ujian on soal.id_jenis=jenis_ujian.id_jenis inner join tahun_ajaran on tahun_ajaran.id_thj=soal.id_thj WHERE soal.id_soal='$yy'")->row_array();	
			$this->load->view('content/le_soal',$data);
	}
	function hapus_soal(){
		$id_soal=$this->input->post('id_soal');
		$this->Soal_Model->hapus_soal('soal',$id_soal);
	}
}
?>