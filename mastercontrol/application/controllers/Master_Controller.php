<?php
class Master_Controller extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('Master_Model');
		$this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
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
		if($page=='urutan_kelas'){
			$data['tmp_uk']=$this->Master_Model->qw("*","urutan_kelas","")->result();
			$this->load->view('index',$data);
		}elseif($page=='f_urutan_kelas'){
			$yy=$this->uri->segment(4);
				if(empty($yy)){
					$data['status']='simpan';
					$data['open']='Master_Controller/simpan_uk';
				}else{
					$data['status']='edit';
					$data['open']='Master_Controller/edit_uk';
					$data['hsl']=$this->Master_Model->qw("*","urutan_kelas","WHERE id_uk='$yy'");
				}				
			$this->load->view('index',$data);
		}elseif($page=='sesi'){
			$data['tmp_ses']=$this->Master_Model->qw("*","sesi","")->result();
			$this->load->view('index',$data);
		}elseif($page=='f_sesi'){
			$yy=$this->uri->segment(4);
				if(empty($yy)){
					$data['status']='simpan';
					$data['open']='Master_Controller/simpan_sesi';
				}else{
					$data['status']='edit';
					$data['open']='Master_Controller/edit_sesi';
					$data['hsl']=$this->Master_Model->qw("*","sesi","WHERE id_sesi='$yy'");
				}				
			$this->load->view('index',$data);
		}elseif($page=='guru'){
			$data['tmp_guru']=$this->Master_Model->qw("*","guru","")->result();
			$this->load->view('index',$data);
		}elseif($page=='tahun_ajaran'){
			$data['tmp_thj']=$this->Master_Model->qw("*","tahun_ajaran","")->result();
			$this->load->view('index',$data);
		}elseif($page=='mapel_guru'){
			$id=$this->uri->segment(4);
			$data['tmp_mg']=$this->Master_Model->qw("mapel.mapel","mapel","inner join mapel_guru on mapel_guru.id_mapel=mapel.id_mapel inner join guru on guru.id_guru=mapel_guru.id_guru WHERE mapel_guru.id_guru='$id'")->result();
			$this->load->view('index',$data);
		}elseif($page=='siswa'){
			$data['tmp_siswa']=$this->Master_Model->qw("siswa.nis,siswa.nama,siswa.password,siswa.jk,siswa.kelas,urutan_kelas.urutan_kelas,siswa.status,sesi.sesi,siswa.ses","siswa","inner join urutan_kelas on siswa.id_uk=urutan_kelas.id_uk inner join sesi on sesi.id_sesi=siswa.id_sesi")->result();
			$this->load->view('index',$data);
		}elseif($page=='reset'){
			$data['tmp_siswa']=$this->Master_Model->qw("siswa.nis,siswa.nama,siswa.password,siswa.jk,siswa.kelas,urutan_kelas.urutan_kelas,siswa.status","siswa","inner join urutan_kelas on siswa.id_uk=urutan_kelas.id_uk")->result();
			$this->load->view('index',$data);
		}elseif($page=='f_siswa'){
			$yy=$this->uri->segment(4);
				if(empty($yy)){
					$data['status']='simpan';
					$data['open']='Master_Controller/simpan_siswa';
				}else{
					$data['status']='edit';
					$data['open']='Master_Controller/edit_siswa';
					$data['hsl']=$this->Master_Model->qw("*","siswa","WHERE nis='$yy'");
				}				
			$this->load->view('index',$data);
		}elseif($page=='f_thj'){
			$yy=$this->uri->segment(4);
				if(empty($yy)){
					$data['status']='simpan';
					$data['open']='Master_Controller/simpan_thj';
				}else{
					$data['status']='edit';
					$data['open']='Master_Controller/edit_thj';
					$data['hsl']=$this->Master_Model->qw("*","tahun_ajaran","WHERE id_thj='$yy'");
				}				
			$this->load->view('index',$data);
		}elseif($page=='f_guru'){
			$yy=$this->uri->segment(4);
				if(empty($yy)){
					$ck=$this->Master_Model->qw("*","guru","ORDER BY id_guru DESC")->row_array();
					if(empty($ck['id_guru'])){
						$data['id']=1;
					}else{
						$data['id']=$ck['id_guru']+1;
					}
					$data['status']='simpan';
					$data['open']='Master_Controller/simpan_guru';
				}else{
					$data['status']='edit';
					$data['open']='Master_Controller/edit_guru';
					$data['hsl']=$this->Master_Model->qw("*","guru","WHERE id_guru='$yy'");
				}				
			$this->load->view('index',$data);
		}elseif($page=='edit_profil'){
			$yy=$this->uri->segment(4);
			$data['id_guru']=$yy;
					$data['val']=$this->Master_Model->qw("*","guru","WHERE id_guru='$yy'")->row_array();		
			$this->load->view('index',$data);
		}else{
			$this->load->view('index',$data);
		}
	}
	function sws(){
				$data['sis']=$this->Master_Model->qw("*","siswa","ORDER BY nis ASC")->result();
				$this->load->view('ex/export',$data);
	}
	function tm_mpg($id){
		$data['tmp_mpg']=$this->Master_Model->qw("mapel.mapel,mapel_guru.id_mpg","mapel","inner join mapel_guru on mapel.id_mapel=mapel_guru.id_mapel WHERE mapel_guru.id_guru='$id'")->result();
		$this->load->view('content/mpg',$data);
	}
	function upload_sis(){
			$fileName = $_FILES['file']['name'];
	        $config['upload_path'] = './assets/'; //buat folder dengan nama assets di root folder
	        $config['file_name'] = $fileName;
	        $config['allowed_types'] = 'xls|xlsx|csv';
	        $config['max_size'] = 10000;
	        $this->load->library('upload',$config);
	         
	        if(! $this->upload->do_upload('file') )
	        $this->upload->display_errors();
	             
	        $media = $this->upload->data();
	        $inputFileName = './assets/'.$media['file_name'];
	         
	        try {
	                $inputFileType = IOFactory::identify($inputFileName);
	                $objReader = IOFactory::createReader($inputFileType);
	                $objPHPExcel = $objReader->load($inputFileName);
	            } catch(Exception $e) {
	                die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
	            }
	 
	            $sheet = $objPHPExcel->getSheet(0);
	            $highestRow = $sheet->getHighestRow();
	            $highestColumn = $sheet->getHighestColumn();
	            $x= 0;
	            for ($row = 2; $row <= $highestRow; $row++){                  //  Read a row of data into an array                 
	                $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
	                                                NULL,
	                                                TRUE,
	                                                FALSE);
	                                                 
	                if(empty($rowData[0][0])){
	                	break;
	                }else{                    
	                 $data = array(
	                    "nis"=> $rowData[0][0],
	                    "nama"=> $rowData[0][1],
	                    "password"=> $rowData[0][2],
	                    "jk"=> $rowData[0][3],
	                    "kelas"=> $rowData[0][4],
	                    "id_uk"=> $rowData[0][5],
	                    "id_sesi"=> $rowData[0][6],
	                    "ses"=> $rowData[0][7],
	                    "status"=> $rowData[0][8],
	                    "absen"=> $rowData[0][9]
	                );
	                $selsis = $this->Master_Model->qw("*","siswa","WHERE nis = '$data[nis]'")->num_rows();
	                if($selsis == 0){	                 
	                	$insert = $this->db->insert("siswa",$data);
	                }else{
	                	$this->db->where("nis",$data['nis']);
	                	$update = $this->db->update("siswa", $data);
	                }
	            }
	                     
	            }
	            unlink("./assets/".$media['file_name']);
	            redirect('Master_Controller/page/siswa');
	    	}
	 function cetak_kartupeserta(){
			$rom=$this->uri->segment(3);
			$data['ctka']=$this->Master_Model->qw("*","siswa,sesi","WHERE sesi.id_sesi=siswa.id_sesi")->result();
			$this->load->view('cetak_kartupeserta',$data);
		}
	 function cetak_dh(){
	 		$kelas=$this->input->post('kelas');
	 		$iduk=$this->input->post('id_uk');
	 		$idsesi=$this->input->post('id_sesi');
	 		$ses=$this->input->post('ses');
	 		$data['ctk_dh']=$this->Master_Model->qw("*","siswa","WHERE id_sesi='$idsesi' AND ses='$ses'")->result();
			$this->load->view('daftar_hadir',$data);
	}
	function cetak_ba(){
			$this->load->view('berita_acara');
		}
	function reset($nis){
		$this->db->where("nis",$nis);
		$this->db->update("siswa",array("status"=>"off"));
		redirect('Master_Controller/page/reset');
	}
	function rset(){
		$swa=$this->Master_Model->qw("*","siswa","")->result();
		foreach($swa as $ta){
			$this->db->where('nis',$ta->nis);
			$this->db->update("siswa",array("status"=>"off"));
		}
		redirect('Master_Controller/page/reset');
	}
	function simpan_uk(){
		$ar=array(
					'urutan_kelas'=>$this->input->post('urutan_kelas')
				);
		$this->Master_Model->simpan_uk('urutan_kelas',$ar);
		redirect('Master_Controller/page/urutan_kelas');
	}
	function simpan_sesi(){
		$ar=array(
					'sesi'=>$this->input->post('sesi')
				);
		$this->Master_Model->simpan_sesi('sesi',$ar);
		redirect('Master_Controller/page/sesi');
	}
	function simpan_siswa(){
		$ar=array(
					'nis'=>$this->input->post('nis'),
					'nama'=>$this->input->post('nama'),
					'password'=>$this->input->post('password'),
					'jk'=>$this->input->post('jk'),
					'kelas'=>$this->input->post('kelas'),
					'id_uk'=>$this->input->post('id_uk'),
					'id_sesi'=>$this->input->post('id_sesi'),
					'ses'=>$this->input->post('ses'),
					'status'=>'off',
					'absen'=>'belum'
				);
		$this->Master_Model->simpan_siswa('siswa',$ar);
		redirect('Master_Controller/page/siswa');
	}
	function edit_guru(){
		$psw=$this->input->post('password');
		$enkrip=base64_encode($psw);
		$id=$this->input->post('id_guru');
		$ar=array(
					'id_guru'=>$this->input->post('id_guru'),
					'nama'=>$this->input->post('nama'),
					'password'=>$enkrip,
					'alamat'=>$this->input->post('alamat')
				);
		$this->Master_Model->edit_guru('guru',$id,$ar);
		redirect('Master_Controller/page/guru');
	}
	function edit_profil(){
		$psw=$this->input->post('password');
		$enkrip=base64_encode($psw);
		$id=$this->input->post('id_guru');
		$ar=array(
					'id_guru'=>$this->input->post('id_guru'),
					'nama'=>$this->input->post('nama'),
					'password'=>$enkrip,
					'alamat'=>$this->input->post('alamat')
				);
		$this->Master_Model->edit_guru('guru',$id,$ar);
		redirect('Login_Controller/logout');
	}
	function simpan_mg(){
		$ar=array(
					'id_guru'=>$this->input->post('id_guru'),
					'id_mapel'=>$this->input->post('id_mapel')
				);
		$this->Master_Model->simpan_mg('mapel_guru',$ar);
	}
	function simpan_guru(){
		$psw=$this->input->post('password');
		$enkrip=base64_encode($psw);
		$ar=array(
					'id_guru'=>$this->input->post('id_guru'),
					'nama'=>$this->input->post('nama'),
					'password'=>$enkrip,
					'alamat'=>$this->input->post('alamat'),
					'level'=>'Guru'
				);
		$this->Master_Model->simpan_guru('guru',$ar);
		redirect('Master_Controller/page/guru');
	}
	function simpan_thj(){
		$ar=array(
					'tahun_ajaran'=>$this->input->post('tahun_ajaran'),
					'status'=>$this->input->post('status')
				);
		$this->Master_Model->simpan_thj('tahun_ajaran',$ar);
		redirect('Master_Controller/page/tahun_ajaran');
	}
	function edit_siswa(){
		$nis=$this->input->post('nis');
		$ar=array(
					'nis'=>$this->input->post('nis'),
					'nama'=>$this->input->post('nama'),
					'password'=>$this->input->post('password'),
					'jk'=>$this->input->post('jk'),
					'kelas'=>$this->input->post('kelas'),
					'id_uk'=>$this->input->post('id_uk'),
					'id_sesi'=>$this->input->post('id_sesi'),
					'ses'=>$this->input->post('ses'),
					'status'=>'off',
					'absen'=>'belum'
				);
		$this->Master_Model->edit_siswa('siswa',$nis,$ar);
		redirect('Master_Controller/page/siswa');
	}
	function edit_uk(){
		$id=$this->input->post('id_uk');
		$ar=array(
					'urutan_kelas'=>$this->input->post('urutan_kelas')
				);
		$this->Master_Model->edit_uk('urutan_kelas',$id,$ar);
		redirect('Master_Controller/page/urutan_kelas');
	}
	function edit_sesi(){
		$id=$this->input->post('id_sesi');
		$ar=array(
					'sesi'=>$this->input->post('sesi')
				);
		$this->Master_Model->edit_sesi('sesi',$id,$ar);
		redirect('Master_Controller/page/sesi');
	}
	function edit_thj(){
		$id=$this->input->post('id_thj');
		$ar=array(
					'tahun_ajaran'=>$this->input->post('tahun_ajaran'),
					'status'=>$this->input->post('status')
				);
		$this->Master_Model->edit_thj('tahun_ajaran',$id,$ar);
		redirect('Master_Controller/page/tahun_ajaran');
	}
	function hapus_siswa($nis){
		$this->Master_Model->hapus_siswa('siswa',$nis);
		redirect('Master_Controller/page/siswa');
	}
	function hapus_thj($id_thj){
		$this->Master_Model->hapus_thj('tahun_ajaran',$id_thj);
		redirect('Master_Controller/page/tahun_ajaran');
	}
	function hapus_uk($id_uk){
		$this->Master_Model->hapus_uk('urutan_kelas',$id_uk);
		redirect('Master_Controller/page/urutan_kelas');
	}
	function hapus_sesi($id_sesi){
		$this->Master_Model->hapus_sesi('sesi',$id_sesi);
		redirect('Master_Controller/page/sesi');
	}
	function hapus_mpg(){
		$id_mpg=$this->input->post('id_mpg');
		$this->Master_Model->hapus_mpg('mapel_guru',$id_mpg);
	}
	function truncate_jawaban(){
		$this->Master_Model->truncate_jawab();
		redirect('Master_Controller/page/home');
	}
	function truncate_waktu(){
		$this->Master_Model->truncate_waktu();
		redirect('Master_Controller/page/home');
	}
}
?>