<?php
	Class Paper extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model("Model_paper");
		}
		function index(){
			if($this->session->userdata('status') == "login"){
				
			}else{
				redirect('Login');
			}
			$this->load->view('index');
		}
		function b_kerjasoal(){
			if($this->session->userdata('status') == "login"){
				
			}else{
				redirect('Login');
			}
			$this->load->view('kerja_soal');
		}
		function sub_soal(){
			$this->load->view('sub_soal');
		}
		function papan_soal(){
			$this->load->view('papan_soal');
		}
		function nilai(){
			$nis = $this->session->userdata("nis");
			$id_mapel=$this->session->userdata("id_mapel");
			$id_jenis=$this->session->userdata("id_jenis");
			$mapel = $this->Model_paper->qw("jumlah_soal,kkm1,kkm2,kkm3","mapel","WHERE id_mapel = '$id_mapel'")->row_array();
			$data['salah'] = 0;
			$data['benar'] = 0;
			for ($i=1; $i <= $mapel['jumlah_soal'] ; $i++) { 
				$jwbn = $this->Model_paper->qw("poin","jawaban","WHERE nis = '$nis' AND id_mapel = '$id_mapel' AND id_jenis = '$id_jenis' AND nomor = '$i'")->row_array();
				if($jwbn['poin'] == 0){
					$data['salah'] = $data['salah']+1; 
				}else{
					$data['benar'] = $data['benar']+1;
				}
			}
			$nil = $this->Model_paper->qw("nilai,status","nilai","WHERE nis = '$nis' AND id_mapel = '$id_mapel' AND id_jenis = '$id_jenis'")->row_array();
			$sisw = $this->Model_paper->qw("kelas","siswa","WHERE nis = '$nis'")->row_array();
			$data['kelas'] = $sisw['kelas'];
			$data['kkm1'] = $mapel['kkm1'];
			$data['kkm2'] = $mapel['kkm2'];
			$data['kkm3'] = $mapel['kkm3'];
			$data['nilai'] = $nil['nilai'];
			$data['jumlah_soal'] = $mapel['jumlah_soal'];
			$data['status'] = $nil['status'];
			$this->load->view("nilai",$data);
		}
		function soal(){
			$nis = $this->session->userdata("nis");
			$id_mapel = $this->session->userdata("id_mapel");
			$id_jenis = $this->session->userdata("id_jenis");
			$qwnil = $this->Model_paper->qw("*","nilai","WHERE nis='$nis' AND id_mapel = '$id_mapel' AND id_jenis = '$id_jenis'")->num_rows();
			if($qwnil == 0){
				$nis = $this->session->userdata("nis");
				$this->db->where("nis", $nis);
				$this->db->update("siswa",array("status"=>"on"));
				echo "msk";
			}else{
				echo "psn";
			}
			
		}
		function kerja_soal(){
			$nis=$this->session->userdata('nis');
			$id_mapel=$this->input->post('id_mapel');
			$id_jenis=$this->input->post('id_jenis');
			$id_thj=$this->input->post('id_thj');
			$kelas=$this->input->post('kelas');
			$qwtes = $this->Model_paper->qw("tgl_awal,tgl_akhir","jenis_ujian","WHERE id_jenis = '$id_jenis'")->row_array();
			$dt = date("Y-m-d");
			$data_session=array(
							'id_mapel'=>$id_mapel,
							'id_jenis'=>$id_jenis,
							'id_thj'=>$id_thj
						);
			$this->session->set_userdata($data_session);
			$qwjmlo = $this->Model_paper->qw("mapel.jumlah_soal","mapel","WHERE id_mapel = '$id_mapel'")->row_array();
			$qwm=$this->Model_paper->qw("mapel.jumlah_soal","mapel","WHERE id_mapel = '$id_mapel'")->row_array();
			$wktc = $this->Model_paper->qw("*","waktu","WHERE nis = '$nis' AND id_mapel = '$id_mapel' AND id_jenis = '$id_jenis'");
			$wkt = $wktc->row_array();
			$jmlw = $wktc->num_rows();
			if($jmlw == 0){
				$jns = $this->Model_paper->qw("jam,menit","jenis_ujian","WHERE id_jenis = '$id_jenis'")->row_array();
				$data_session = array(
					"jam" => $jns['jam'],
					"menit" => $jns['menit'],
					"detik"=> 1,
					"id_mapel" => $id_mapel,
					"id_jenis" => $id_jenis
				);
				$this->session->set_userdata($data_session);
			}else{
				$data_session = array(
					"jam" => $wkt['jam'],
					"menit" => $wkt['menit'],
					"detik"=> $wkt['detik'],
					"id_mapel" => $id_mapel,
					"id_jenis" => $id_jenis
				);
				$this->session->set_userdata($data_session);
			}
			if($qwtes['tgl_awal'] > $dt || $qwtes['tgl_akhir'] < $dt){
				echo "Tgl Berakhir";
				
			}else{
							$qwsol=$this->Model_paper->qw("*","soal","WHERE id_mapel = '$id_mapel' AND id_jenis = '$id_jenis' AND kelas = '$kelas'")->num_rows();
							if($qwsol < $qwm['jumlah_soal'] ){
								echo "Jumlah Soal Kurang";
							}else{
								$nis = $this->session->userdata("nis");
								$absn=$this->Model_paper->qw("*","siswa","WHERE nis='$nis'")->row_array();
								/*if($absn['absen']=='belum'){
									echo "belum absen";
								}else{
									*/
									$jmlj = $this->Model_paper->qw("*","jawaban","WHERE nis = '$nis' AND id_mapel='$id_mapel' AND id_jenis ='$id_jenis'")->num_rows();
								if($jmlj >= $qwjmlo['jumlah_soal']){
									echo "Berhasil";
								}else{
									$sol = $this->Model_paper->qw("soal_aktif.id_soal,soal_aktif.kunci,soal_aktif.listening","soal_aktif","WHERE kelas='$kelas' AND id_mapel = '$id_mapel' AND id_jenis = '$id_jenis' AND id_thj='$id_thj' ORDER BY id_soal ASC")->result();
									$x=0;
									$nomor = 1;
									foreach ($sol as $datasol) { 
										if(empty($datasol->listening)){
											$arid[] = $datasol->id_soal;
											$x++;
										}else{
											$id_soal = $datasol->id_soal;
											$qwjwb = $this->Model_paper->qw("*","jawaban","WHERE nis = '$nis' AND id_mapel='$id_mapel' AND id_soal = '$id_soal' AND id_jenis ='$id_jenis'")->num_rows();
											if($qwjwb == 0){
												$ar = array(
													"id_jawaban" => '',
													"nis" => $nis,
													"id_mapel"=>$id_mapel,
													"id_soal"=>$datasol->id_soal,
													"kunci"=>$datasol->kunci,
													"id_jenis"=>$id_jenis,
													"sts_listening"=> "Yes",
													"nomor"=> $nomor++
												);
												$this->db->insert("jawaban",$ar);
											}else{

											}
										}
									}
									if(count($arid) > 0) {
									shuffle($arid);
									}
									$x = $x-1;
									for($b=0;$b<=$x;$b++){
										$id_soal = $arid[$b];
										$dsl = $this->Model_paper->qw("soal_aktif.kunci","soal_aktif","WHERE id_soal = '$id_soal' ORDER BY id_soal ASC")->row_array();
										$qwjwb = $this->Model_paper->qw("*","jawaban","WHERE nis = '$nis' AND id_mapel='$id_mapel' AND id_soal = '$id_soal' AND id_jenis ='$id_jenis'")->num_rows();
										if($qwjwb == 0){
											$ar = array(
												"id_jawaban" => '',
												"nis" => $nis,
												"id_mapel"=>$id_mapel,
												"id_soal"=>$id_soal,
												"kunci"=>$dsl['kunci'],
												"id_jenis"=>$id_jenis,
												"sts_listening"=> "No",
												"nomor"=>$nomor++
											);
											$this->db->insert("jawaban",$ar);
										}else{
											$b = $b-1;
										}
										if($nomor > $qwm['jumlah_soal']){
											break;
										}else{

										}
									}
									$qwjmloc = $this->Model_paper->qw("mapel.jumlah_soal","mapel","WHERE id_mapel = '$id_mapel'")->row_array();
									$jmljc = $this->Model_paper->qw("*","jawaban","WHERE nis = '$nis' AND id_mapel='$id_mapel' AND id_jenis ='$id_jenis'")->num_rows();
									if($jmljc >= $qwjmloc['jumlah_soal']){
										echo "Berhasil";
									}else{
										echo "Gagal";	
									}
								}
							/*}*/
				}
			}
			
		}
		function wkt(){
			$jam = $this->input->post("jm");
			$menit = $this->input->post("mn");
			$detik = $this->input->post("wk");
			$nis = $this->session->userdata('nis');
			$id_mapel = $this->session->userdata('id_mapel');
			$id_jenis = $this->session->userdata('id_jenis');
			$wkt = $this->Model_paper->qw("*","waktu","WHERE nis = '$nis' AND id_mapel = '$id_mapel' AND id_jenis = '$id_jenis'");
			$wktc = $wkt->num_rows();
			$dtw = $wkt->row_array();
			$aris = array(
				"jam" => $jam,
				"menit"=> $menit,
				"detik"=>$detik,
				"nis"=>$nis,
				"id_mapel"=>$id_mapel,
				"id_jenis"=>$id_jenis
			);
			if($wktc == 0){
				$this->db->insert("waktu",$aris);
			}else{
				$this->db->where("id_waktu", $dtw['id_waktu']);
				$this->db->update("waktu",$aris);
			}
			$data_session = array(
					"jam" => $jam,
					"menit" => $menit,
					"detik"=> $detik
			);
			$this->session->set_userdata($data_session);
			echo json_encode($data_session);
		}
		function listen(){
			$this->db->where("id_jawaban",$this->input->post('id_j'));
			$this->db->update("jawaban",array("sts_listening"=>"No"));
		}
		function selesai(){
			$nis = $this->session->userdata("nis");
			$id_mapel = $this->session->userdata("id_mapel");
			$id_jenis = $this->session->userdata("id_jenis");
			$jjj = $this->Model_paper->qw("*","jawaban","WHERE nis ='$nis' AND id_mapel = '$id_mapel' AND id_jenis = '$id_jenis' AND sts_jwb = 'ragu'")->num_rows();
			if($jjj == 0){
				$sis = $this->Model_paper->qw("kelas","siswa","WHERE nis = '$nis'")->row_array();
				$mapel = $this->Model_paper->qw("jumlah_soal,kkm1,kkm2,kkm3","mapel","WHERE id_mapel = '$id_mapel'")->row_array();
				$nilai = 0;
				for ($i=1; $i <= $mapel['jumlah_soal']; $i++) { 
					$jwbna = $this->Model_paper->qw("poin","jawaban","WHERE nis = '$nis' AND id_mapel = '$id_mapel' AND id_jenis = '$id_jenis'")->row_array();
					$jwbn = $this->Model_paper->qw("poin","jawaban","WHERE nis = '$nis' AND id_mapel = '$id_mapel' AND id_jenis = '$id_jenis' AND nomor = '$i'")->row_array();
					$nilai = $nilai+$jwbn['poin'];
					$nilaia=round($nilai,1);
				}
				if($sis['kelas'] == "VII"){
				 	$mapelkkm= $mapel['kkm1'];
				}elseif($sis['kelas'] == "VIII"){
				 	$mapelkkm= $mapel['kkm2'];
				}else{
				 	$mapelkkm= $mapel['kkm3'];
				}
				if($nilai >= $mapelkkm){
					$stat = "Kompeten";
				}else{
					$stat = "Belum Kompeten";
				}
				$arnil = array(
					"nilai" => $nilaia,
					"tgl_kerja" => date("Y-m-d"),
					"nis" => $nis,
					"id_mapel" => $id_mapel,
					"id_jenis" => $id_jenis,
					"kkm" => $mapelkkm,
					"status" => $stat
				);
				$this->db->insert("nilai",$arnil);
				$nis = $this->session->userdata("nis");
				$this->db->where("nis", $nis);
				$this->db->update("siswa",array("status"=>"off"));
				$this->db->update("siswa",array("absen"=>"belum"));
				$id_mapel = $this->session->userdata('id_mapel');
				$id_jenis = $this->session->userdata('id_jenis');
				$wkt = $this->Model_paper->qw("*","waktu","WHERE nis = '$nis' AND id_mapel = '$id_mapel' AND id_jenis = '$id_jenis'");
				$dtw = $wkt->row_array();
				$ns=$dtw['nis'];
				$this->db->where("nis", $ns);
				$this->db->delete("waktu");
				echo "berhasil";
			}else{
				echo "blm";
			}
		}
		function jawab_rag(){
			$id_jawaban = $this->input->post('id_j');
			$qam = $this->Model_paper->qw("sts_jwb,jawaban","jawaban","WHERE id_jawaban = '$id_jawaban'")->row_array();
			if($qam['sts_jwb'] == "ragu"){
				$this->db->where("id_jawaban",$id_jawaban);
				$this->db->update("jawaban",array("sts_jwb"=>""));
				if($qam['jawaban']==""){
					echo "ganti";
				}else{

				}
				echo "berhasil";
			}else{
				$this->db->where("id_jawaban",$id_jawaban);
				$this->db->update("jawaban",array("sts_jwb"=>"ragu"));
				echo "berhasil";
			}
		}
		function jawab_soal(){
			$id_jawaban = $this->input->post('id_j');
			$jawaban = $this->input->post('jwb');
			$id_mapel = $this->session->userdata('id_mapel');
			$qam = $this->Model_paper->qw("jawaban.kunci","jawaban","WHERE id_jawaban = '$id_jawaban'")->row_array();
			if($qam['kunci'] == $jawaban){
				$em = $this->Model_paper->qw("mapel.jumlah_soal","mapel","WHERE id_mapel ='$id_mapel'")->row_array();
				$poin = 100 / $em['jumlah_soal'];
			}else{
				$poin=0;
			}
			$this->db->where("id_jawaban",$id_jawaban);
			$this->db->update('jawaban',array("jawaban"=>$jawaban, "poin"=>$poin));
			$id_mapel = $this->session->userdata("id_mapel");
			$mapel = $this->Model_paper->qw("mapel.jumlah_soal","mapel","WHERE id_mapel = '$id_mapel'")->row_array();
		}
		function konf_tes(){
			if($this->session->userdata('status') == "login"){
				
			}else{
				redirect('Login');
			}
			$this->load->view('konf_tes');
		}
	}
?>