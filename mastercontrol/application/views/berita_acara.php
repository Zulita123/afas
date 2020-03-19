<!DOCTYPE html>
<html>
<head>
	<title>Berita Acara</title>
	<style type="text/css">
		body{
			font-family: 'arial';
		}
		.kotak{
			width: 800px;
			margin: 0 auto;
			height: 800px;
		}
		.kotak .atas-kiri img{
			width: 70px;
			height: 80px;
			float: left;
			margin-top: 10px;
		}
		.kotak .atas-tengah {
			float: left;
			margin: 0px 200px;
			text-align: center;
			font-weight: bold;
			line-height: 10px;
		}
		.kotak .tabel{
			width: 100%;
			height: auto;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<div class="kotak">
		<div class="atas-kiri">
			<img src="<?php echo base_url();?>assets/image/Kabupaten_Jepara.png">
		</div>
		<?php
			$qw=$this->db->query("SELECT * FROM tahun_ajaran WHERE status='Aktif'")->row();
		?>
		<div class="atas-tengah">
			<p>BERITA ACARA PELAKSANAAN</p>
			<p>UJIAN BERBASIS KOMPUTER (UBK)</p>
			<p>TAHUN AJARAN <?php echo $qw->tahun_ajaran;?></p>
		</div>
		<div class="isi-kotak" style="margin-top: 10px;float: left; font-size: 14px;">
			<?php 
				function tanggal_indo($tanggal)
				{
					$bulan = array (1 =>   'Januari',
								'Februari',
								'Maret',
								'April',
								'Mei',
								'Juni',
								'Juli',
								'Agustus',
								'September',
								'Oktober',
								'November',
								'Desember'
							);
					$split = explode('-', $tanggal);
					return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
				}
 // 20 Maret 2016
				$hari = array ( 1 =>    'Senin',
							'Selasa',
							'Rabu',
							'Kamis',
							'Jumat',
							'Sabtu',
							'Minggu'
						);
				// Contoh tanggal 20 Maret 2016 adalah hari Minggu
				$num = date('N', strtotime($this->input->post('tgl')));  // Hasil: Minggu
			?>
			<p style="font-size: 14px;font-family:arial;">Pada hari <?php echo $hari[$num];?> tanggal <?php echo tanggal_indo($this->input->post('tgl'));?>, di ____________________________ telah menyelenggarakan Ujian Berbasis Komputer (UBK), untuk Mata Pelajaran <?php echo $this->input->post('mapel');?> dari pukul <?php echo $this->input->post('wkt1');?> sampai dengan pukul <?php echo $this->input->post('wkt2');?></p>
			<table style="width: 800px;">
				<tr>
					<td style="width: 300px;">1.&nbsp&nbsp&nbsp&nbspSekolah Madrasah </td>
					<td>:</td>
					<td style="border-bottom: 1px solid #333;">SMK Wikrama 1 Jepara</td>
				</tr>
				<tr>
					<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRuang </td>
					<td>:</td>
					<td style="border-bottom: 1px solid #333;"> <?php echo $this->input->post('id_sesi');?></td>
				</tr>
				<tr>
					<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSesi </td>
					<td>:</td>
					<td style="border-bottom: 1px solid #333;"> <?php echo $this->input->post('ses');?></td>
				</tr>
				<?php
					$ruang=$this->input->post('id_sesi');
					$sesi=$this->input->post('ses');
					$jth=$this->input->post('jth');
					$sws=$this->db->query("SELECT * FROM siswa WHERE id_sesi='$ruang' AND ses='$sesi'")->num_rows();
				?>
				<tr>
					<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspJumlah Peserta Seharusnya </td>
					<td>:</td>
					<td style="border-bottom: 1px solid #333;"> <?php echo $sws;?></td>
				</tr>
				<tr>
					<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspJumlah Hadir (Ikut Ujian) </td>
					<td>:</td>
					<td style="border-bottom: 1px solid #333;"> <?php echo $sws - $jth;?></td>
				</tr>
				<tr>
					<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspJumlah Tidak Hadir </td>
					<td>:</td>
					<td style="border-bottom: 1px solid #333;"> <?php echo $this->input->post('jth');?></td>
				</tr>
				<tr>
					<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspUsername Tidak Hadir </td>
					<td>:</td>
					<td style="border-bottom: 1px solid #333;"> <?php echo $this->input->post('uth');?></td>
				</tr>
			</table>
			<table style="width: 800px;">
				<tr>
					<td style="width: 400px;">2.&nbsp&nbsp&nbsp&nbspCatatan selama Ujian Berbasis Komputer (UBK) :</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div style="width:770px;border:1px solid #333;height: 100px;margin-left: 25px;padding: 10px;">
							<?php echo $this->input->post('catatan');?>
						</div>
					</td>
				</tr>
			</table>
			<table style="width: 500px;margin-top: 10px;">
				<p>yang membuat berita acara :</p>
				<p style="margin-left: 420px;">TTD</p>
				<tr>
					<td style="width: 250px;">1.&nbsp&nbsp&nbsp&nbspProktor</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td style="border-bottom: 1px solid #333;width: 200px;"><?php echo $this->input->post('pr');?></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td style="border-bottom: 1px solid #333;width: 200px;">1.</td>
				</tr>
				<tr>
					<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNIP</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td style="border-bottom: 1px solid #333;width: 200px;"><?php echo $this->input->post('nip2');?></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>2.&nbsp&nbsp&nbsp&nbspPengawas</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td style="border-bottom: 1px solid #333;width: 200px;"><?php echo $this->input->post('pengawas');?></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td style="border-bottom: 1px solid #333;width: 200px;">2.</td>
				</tr>
				<tr>
					<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNIP</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td style="border-bottom: 1px solid #333;width: 200px;"><?php echo $this->input->post('nip3');?></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>3.&nbsp&nbsp&nbsp&nbspKepala Sekolah</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td style="border-bottom: 1px solid #333;width: 200px;"><?php echo $this->input->post('pj');?></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td style="border-bottom: 1px solid #333;width: 200px;">3.</td>
				</tr>
				<tr>
					<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNIP</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td style="border-bottom: 1px solid #333;width: 200px;"><?php echo $this->input->post('nip1');?></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	window.print();
</script>