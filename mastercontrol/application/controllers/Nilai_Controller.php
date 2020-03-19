<?php
class Nilai_Controller extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('Nilai_Model');
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
		if($page=="k_nil"){
				$im = $this->input->post('id_mapel');
				$jt = $this->input->post('id_jenis');
				$kls = $this->input->post('kelas');
				if(empty($im)){
					$cc = $this->Nilai_Model->qw("nilai.nis,siswa.nama,nilai.nilai,urutan_kelas.urutan_kelas,nilai.tgl_kerja","nilai","inner join siswa on siswa.nis=nilai.nis inner join urutan_kelas on urutan_kelas.id_uk=siswa.id_uk WHERE nilai.id_mapel = '$im' AND nilai.id_jenis = '$jt'");
					$data['jns'] = $cc->result();
					$data['jml'] = $cc->num_rows();
					$kl = $this->session->userdata('id_guru');
					$ss=$this->Nilai_Model->qw("*","guru","WHERE id_guru='$kl'")->row();
					if($ss->level=="Admin"){
						$data['mapel'] = $this->Nilai_Model->qw("*","mapel_guru,mapel","WHERE mapel.id_mapel = mapel_guru.id_mapel")->result();
					}else if($ss->level=="Tamu"){
						$data['mapel'] = $this->Nilai_Model->qw("*","mapel_guru,mapel","WHERE mapel.id_mapel = mapel_guru.id_mapel")->result();
						
					}else{
						$data['mapel'] = $this->Nilai_Model->qw("*","mapel_guru,mapel","WHERE mapel.id_mapel = mapel_guru.id_mapel AND mapel_guru.id_guru = '$kl'")->result();
					}
				}else{
					$cc = $this->Nilai_Model->qw("nilai.nis,siswa.nama,nilai.nilai,urutan_kelas.urutan_kelas,nilai.tgl_kerja","nilai","inner join siswa on siswa.nis=nilai.nis inner join urutan_kelas on urutan_kelas.id_uk=siswa.id_uk WHERE nilai.id_mapel = '$im' AND nilai.id_jenis = '$jt' AND siswa.id_uk = '$kls' GROUP BY nilai.nis ORDER BY siswa.nama ASC ");
					$data['jns'] = $cc->result();
					$data['jml'] = $cc->num_rows();
					$kl = $this->session->userdata('id_guru');
					$ss=$this->Nilai_Model->qw("*","guru","WHERE id_guru='$kl'")->row();
					if($ss->level=="Admin"){
						$data['mapel'] = $this->Nilai_Model->qw("*","mapel_guru,mapel","WHERE mapel.id_mapel = mapel_guru.id_mapel")->result();
					}else{
						$data['mapel'] = $this->Nilai_Model->qw("*","mapel_guru,mapel","WHERE mapel.id_mapel = mapel_guru.id_mapel AND mapel_guru.id_guru = '$kl'")->result();
					}
				}
				$data['jnsx'] = $this->db->get("jenis_ujian")->result();
				$data['rom'] = $this->db->get("urutan_kelas")->result();
			$this->load->view('index',$data);
		}elseif($page=="peringkat_mapel"){
				$im = $this->input->post('id_mapel');
				$jt = $this->input->post('id_jenis');
				$kls = $this->input->post('kelas');
				if(empty($im)){
					$cc = $this->Nilai_Model->qw("nilai.nis,siswa.nama,nilai.nilai,urutan_kelas.urutan_kelas,siswa.kelas,nilai.tgl_kerja","nilai","inner join siswa on siswa.nis=nilai.nis inner join urutan_kelas on urutan_kelas.id_uk=siswa.id_uk WHERE nilai.id_mapel = '$im' AND nilai.id_jenis = '$jt'");
					$data['jns'] = $cc->result();
					$data['jml'] = $cc->num_rows();
					$kl = $this->session->userdata('id_guru');
					$ss=$this->Nilai_Model->qw("*","guru","WHERE id_guru='$kl'")->row();
					if($ss->level=="Admin"){
						$data['mapel'] = $this->Nilai_Model->qw("*","mapel","")->result();
					}else if($ss->level=="Tamu"){
						$data['mapel'] = $this->Nilai_Model->qw("*","mapel","")->result();
					}else{
						$data['mapel'] = $this->Nilai_Model->qw("*","mapel_guru,mapel","WHERE mapel.id_mapel = mapel_guru.id_mapel AND mapel_guru.id_guru = '$kl'")->result();
					}
				}else{
					$cc = $this->Nilai_Model->qw("nilai.nis,siswa.nama,nilai.nilai,urutan_kelas.urutan_kelas,siswa.kelas,nilai.tgl_kerja","nilai","inner join siswa on siswa.nis=nilai.nis inner join urutan_kelas on urutan_kelas.id_uk=siswa.id_uk WHERE nilai.id_mapel = '$im' AND nilai.id_jenis = '$jt' AND siswa.kelas = '$kls' ORDER BY nilai.nilai desc");
					$data['jns'] = $cc->result();
					$data['jml'] = $cc->num_rows();
					$kl = $this->session->userdata('id_guru');
					$ss=$this->Nilai_Model->qw("*","guru","WHERE id_guru='$kl'")->row();
					if($ss->level=="Admin"){
						$data['mapel'] = $this->Nilai_Model->qw("*","mapel","")->result();
					}else if($ss->level=="Tamu"){
						$data['mapel'] = $this->Nilai_Model->qw("*","mapel","")->result();
					}else{
						$data['mapel'] = $this->Nilai_Model->qw("*","mapel_guru,mapel","WHERE mapel.id_mapel = mapel_guru.id_mapel AND mapel_guru.id_guru = '$kl'")->result();
					}
				}
				$data['jnsx'] = $this->db->get("jenis_ujian")->result();
				$data['rom'] = $this->db->get("urutan_kelas")->result();
			$this->load->view('index',$data);
		}elseif($page=="peringkat_akademik"){
				$jt = $this->input->post('id_jenis');
				$kls = $this->input->post('kelas');
					$cc = $this->Nilai_Model->qw("siswa.nis,siswa.nama,urutan_kelas.urutan_kelas,siswa.kelas","nilai","inner join siswa on siswa.nis=nilai.nis inner join urutan_kelas on urutan_kelas.id_uk=siswa.id_uk WHERE nilai.id_jenis = '$jt' AND siswa.kelas = '$kls' GROUP BY nilai.nis ASC ");
					$cca = $this->Nilai_Model->qw("siswa.nis,siswa.nama,urutan_kelas.urutan_kelas,siswa.kelas","nilai","inner join siswa on siswa.nis=nilai.nis inner join urutan_kelas on urutan_kelas.id_uk=siswa.id_uk WHERE nilai.id_jenis = '$jt' AND siswa.kelas = '$kls'");
					$data['jns'] = $cc->result();
					$data['jml'] = $cca->num_rows();
					$kl = $this->session->userdata('id_guru');
					$data['mapel'] = $this->Nilai_Model->qw("*","mapel_guru,mapel","WHERE mapel.id_mapel = mapel_guru.id_mapel AND mapel_guru.id_guru = '$kl'")->result();
				$data['jnsx'] = $this->db->get("jenis_ujian")->result();
				$data['rom'] = $this->db->get("urutan_kelas")->result();
			$this->load->view('index',$data);
		}else{
			$this->load->view('index',$data);
		}
	}
	function analisis_nilai(){
			$kl = $this->session->userdata('id_guru');
			$ss=$this->Nilai_Model->qw("*","guru","WHERE id_guru='$kl'")->row();
			if($ss->level=="Admin"){
				$data['var'] = $this->Nilai_Model->qw("*","mapel","")->result();
			}else if($ss->level=="Tamu"){
				$data['var'] = $this->Nilai_Model->qw("*","mapel","")->result();
			}else{
			    $data['var'] = $this->Nilai_Model->qw("mapel_guru.id_mapel,mapel.mapel","mapel_guru","inner join mapel on mapel.id_mapel = mapel_guru.id_mapel WHERE mapel_guru.id_guru = '$kl'")->result();
			}
			$data['jns'] = $this->db->get("jenis_ujian")->result();
			$data['jnsa'] = $this->db->get("jenis_ujian")->row_array();
			$data['rbl'] = $this->db->get("urutan_kelas")->result();
			$this->load->view("analisis_nilai",$data);
	}
	function lihatdetail(){
			$nis = $this->uri->segment(3);
			$id_mapel = $this->uri->segment(4);
			$id_jenis = $this->uri->segment(5);
			$data['soal'] = $this->Nilai_Model->qw("soal.soal,soal.kunci,jawaban.jawaban","jawaban","inner join soal on soal.id_soal=jawaban.id_soal WHERE jawaban.nis = '$nis' AND jawaban.id_mapel = '$id_mapel' AND jawaban.id_jenis = '$id_jenis' AND jawaban.id_soal = soal.id_soal")->result();
			$this->load->view("content/lihat_detail",$data);
	}
	function ex_nilai(){
		$im = $this->uri->segment(3);
		$jt = $this->uri->segment(4);
		$kls= $this->uri->segment(5);
		$mapel=$this->Nilai_Model->qw("*","mapel","WHERE id_mapel='$im'")->row();
		$jenis=$this->Nilai_Model->qw("*","jenis_ujian","WHERE id_jenis='$jt'")->row();
		$data['mpl']=$mapel->mapel;
		$data['jns']=$jenis->jenis_ujian;
		$data['nil']=$this->Nilai_Model->qw("nilai.nis,siswa.nama,nilai.nilai,urutan_kelas.urutan_kelas","nilai","inner join siswa on siswa.nis=nilai.nis inner join urutan_kelas on urutan_kelas.id_uk=siswa.id_uk WHERE nilai.id_mapel = '$im' AND nilai.id_jenis = '$jt' AND siswa.id_uk = '$kls' GROUP BY nilai.nis ORDER BY siswa.nama ASC")->result();
		$this->load->view('ex/ex_nilai',$data);
	}
	function hapus_nilai($aa,$bb,$cc){
			$this->db->where(array("nis"=>$aa,"id_mapel"=>$bb,"id_jenis"=>$cc));
			$this->db->delete("nilai");
			$this->db->where(array("nis"=>$aa,"id_mapel"=>$bb,"id_jenis"=>$cc));
			$this->db->delete("jawaban");
			redirect("Nilai_Controller/page/k_nil");
	}
	function cetak_nilai(){
		$im = $this->uri->segment(3);
		$jt = $this->uri->segment(4);
		$kls= $this->uri->segment(5);
		$mapel=$this->Nilai_Model->qw("*","mapel","WHERE id_mapel='$im'")->row();
		$jenis=$this->Nilai_Model->qw("*","jenis_ujian","WHERE id_jenis='$jt'")->row();
		$data['mpl']=$mapel->mapel;
		$data['jns']=$jenis->jenis_ujian;
		$data['nil']=$this->Nilai_Model->qw("nilai.nis,siswa.nama,nilai.nilai,urutan_kelas.urutan_kelas","nilai","inner join siswa on siswa.nis=nilai.nis inner join urutan_kelas on urutan_kelas.id_uk=siswa.id_uk WHERE nilai.id_mapel = '$im' AND nilai.id_jenis = '$jt' AND siswa.id_uk = '$kls' GROUP BY nilai.nis ORDER BY siswa.nama ASC")->result();
		$this->load->view("content/cetak_nilai",$data);
	}
	function hapus_mapel($id_mapel){
		$this->Mapel_Model->hapus_mapel('mapel',$id_mapel);
		redirect('Mapel_Controller/page/mapel');
	}
}
?>
