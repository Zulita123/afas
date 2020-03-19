<!DOCTYPE html>
<html>
<head>
	<title>Daftar Hadir</title>
	<style type="text/css">
		body{
			font-family: 'arial';
		}
		.kotak{
			width: 800px;
			margin: 0 auto;
			height: 500px;
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
		.kotak .tabel .th th{
			padding: 8px;
			font-size: 13px;
			background: #c6bfa1;
			border-left:1px solid #333;
			border-top:1px solid #333;
			border-bottom: 1px solid #333;
			border-right: 1px solid #333;
		}
		.kotak .tabel .td td{
			padding: 8px;
			font-size: 13px;
			text-align: left;
			border-left:1px solid #333;
			border-top:1px solid #333;
			border-bottom: 1px solid #333;
			border-right: 1px solid #333;
		}
		.kotak .tabel tr:nth-child(even) {
    		background-color: #f8f8f8;
		}
		.kotak .judul1 .tabel1 tr td{
			font-size: 13px;
		}
		.kotak .judul2 .tabel2 tr td{
			font-size: 13px;
		}
		.fot{
			float: left;
			font-size: 12px;
		}
		.fot p{
			line-height: 10px;
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
			<p>DAFTAR HADIR PESERTA</p>
			<p>UJIAN BERBASIS KOMPUTER (UBK)</p>
			<p>TAHUN AJARAN <?php echo $qw->tahun_ajaran;?></p>
		</div>
		<div class="judul1" style="margin-top: 10px;float: left;">
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
				$num = date('N', strtotime($this->input->post('tanggal')));  // Hasil: Minggu
			?>
			<table class="tabel1">
				<tr>
					<td>HARI</td>
					<td>:</td>
					<td style="border-bottom: 1px solid #333;width: 80px;"><?php echo $hari[$num];?></td>
					<td>TANGGAL</td>
					<td>:</td>
					<td style="border-bottom: 1px solid #333;width: 120px;"><?php echo tanggal_indo($this->input->post('tanggal'));;?></td>
				</tr>
				<tr>
					<?php
						$idsesi=$this->input->post('id_sesi');
						$rg=$this->db->query("SELECT * FROM sesi WHERE id_sesi='$idsesi'")->row();
					?>
					<td>RUANG</td>
					<td>:</td>
					<td colspan="4" style="border-bottom: 1px solid #333;width: 120px;"><?php echo $rg->sesi;?></td>
					
				</tr>
				<tr>
					<td>MATA PELAJARAN</td>
					<td>:</td>
					<td colspan="4" style="border-bottom: 1px solid #333;width: 120px;"><?php echo $this->input->post('mapel');?></td>
				</tr>
			</table>
		</div>
		<div class="judul2">
			<table class="tabel2" style="float: left;margin-top: 10px;margin-left: 20px;">
				<tr>
					<td>PUKUL</td>
					<td>:</td>
					<td colspan="2" style="border-bottom: 1px solid #333;width: 120px;"><?php echo $this->input->post('waktu1');?> - <?php echo $this->input->post('waktu2');?></td>
				</tr>
				<tr>
					<td>SESI</td>
					<td>:</td>
					<td style="border-bottom: 1px solid #333;width: 50px;"><?php echo $this->input->post('ses');?></td>
					<td style="width: 80px;"></td>
				</tr>
			</table>
		</div>
		<table class="tabel" style="margin-top: 10px;float: left;">
			<tr class="th">
				<th style="width: 50px;">No</th>
				<th>Nis</th>
				<th>Nama Peserta</th>
				<th>Tanda Tangan</th>
				<th>Ket</th>
			</tr>
			<?php

				$no=0;
				foreach($ctk_dh as $tp){ 
				$no++;
				if($no % 2){
					$tx='left';
				}else{
					$tx='center';
				}
			?>
			<tr class="td">
				<td style="text-align: center;"><?php echo $no;?></td>
				<td><?php echo $tp->nis;?></td>
				<td><?php echo $tp->nama;?></td>
				<td style="
				text-align: <?php echo $tx;?>"><?php echo $no;?></td>
				<td></td>
			</tr>
			<?php  }?>
		</table>
		<div class="fot">
			<table class="table3" style="border: 1px solid #333;margin-top: 20px;">
				<tr>
					<td>Jumlah Peserta yang Seharusnya Hadir</td>
					<td>:</td>
					<td style="border-bottom: 1px solid #333; width: 40px;"></td>
					<td>Orang</td>
				</tr>
				<tr>
					<td>Jumlah Peserta yang Tidak Hadir </td>
					<td>:</td>
					<td style="border-bottom: 1px solid #333; width: 40px;"></td>
					<td>Orang</td>
				</tr>
				<tr>
					<td>Jumlah Peserta Hadir </td>
					<td>:</td>
					<td style="border-bottom: 1px solid #333; width: 40px;"></td>
					<td>Orang</td>
				</tr>
			</table>
			<table  class="tabel4" style="float:left;margin-left: 520px;">
			<tr>
			<td>
			<div class="ttd1" style="margin: 0px 10px;">
				<p style="text-align: center;">Proktor</p>
				<br>
				<br>
				<p>(&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp)</p>
				<p>Nip.</p>
			</div>
			</td>
			<td>
			<div class="ttd2" style="margin: 0px 10px;">
				<p style="text-align: center;">Pengawas</p>
				<br>
				<br>
				<p>(&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp)</p>
				<p>Nip.</p>
			</div>
			</td>
			</table>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	window.print();
</script>