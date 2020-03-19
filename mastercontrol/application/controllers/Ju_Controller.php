<?php
class Ju_Controller extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('Ju_Model');
	}
	function page(){
		$page=$this->uri->segment(3);
		if(empty($page)){
			$page='home';
		}
		$data['home']=$page;
		if($page=='jenis_ujian'){
			$data['tmp_ju']=$this->Ju_Model->qw("*","jenis_ujian","")->result();
			$this->load->view('index',$data);
		}elseif($page=='f_ju'){
			$yy=$this->uri->segment(4);
				if(empty($yy)){
					$data['status']='simpan';
					$data['open']='Ju_Controller/simpan_ju';
				}else{
					$data['status']='edit';
					$data['open']='Ju_Controller/edit_ju';
					$data['hsl']=$this->Ju_Model->qw("*","jenis_ujian","WHERE id_jenis='$yy'");
				}				
			$this->load->view('index',$data);
		}else{
			$this->load->view('index',$data);
		}
	}
	function simpan_ju(){
		$ar=array(
					'jenis_ujian'=>$this->input->post('jenis_ujian'),
					'tgl_awal'=>$this->input->post('tgl_awal'),
					'tgl_akhir'=>$this->input->post('tgl_akhir'),
					'jam'=>$this->input->post('jam'),
					'menit'=>$this->input->post('menit')
				);
		$this->Ju_Model->simpan_ju('jenis_ujian',$ar);
		redirect('Ju_Controller/page/jenis_ujian');
	}
	function edit_ju(){
		$id_ju=$this->input->post('id_jenis');
		$ar=array(
					'jenis_ujian'=>$this->input->post('jenis_ujian'),
					'tgl_awal'=>$this->input->post('tgl_awal'),
					'tgl_akhir'=>$this->input->post('tgl_akhir'),
					'jam'=>$this->input->post('jam'),
					'menit'=>$this->input->post('menit')
				);
		$this->Ju_Model->edit_ju('jenis_ujian',$id_ju,$ar);
		redirect('Ju_Controller/page/jenis_ujian');
	}
	function hapus_ju($id_jenis){
		$this->Ju_Model->hapus_ju('jenis_ujian',$id_jenis);
		redirect('Ju_Controller/page/jenis_ujian');
	}
}
?>