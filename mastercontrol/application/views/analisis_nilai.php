<style type="text/css">
	*{
		font-family: Segoe UI;
	}
	.xdc{
		width: 300px;
		height: 200px;
	}
	.h1{
		width: 100%;
		text-align: center;
		font-size: 30px;
		color: #22313F;
		margin: 0px auto;
	}
	.p{
		width: 100%;
		text-align: center;
		color: #22313F;
		font-weight: bolder;
	}
	.tabel{
		float: left;
		margin-bottom: 50px;
	}
	.tabel th{
		height: 40px;
		background-color: #337ab7;
		border: 1px solid #2e72aa;
		font-size: 14px;
		color: #fff;
	}
	.tabel td{
		border: 1px solid #ddd;
		height: 30px;
		font-size: 13px;
	}
</style>
<!DOCTYPE html>
<html>
<head>
	<title>Analisis Nilai</title>
	<link href="<?php echo base_url();?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link href="<?php echo base_url();?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>/assets/dist/css/style.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>/assets/dist/css/sb-admin-2.css" rel="stylesheet">
    <style type="text/css">
        .table .tr td{
            border :0px;
        }
        .table .td td{
            border :0px;
        }
    </style>    
</head>
<body>
	<div class="col-md-12">
	<h1 style="text-align: center;">Analisis Nilai <?php echo $jnsa['jenis_ujian'];?></h1>
	<?php echo form_open("");?>

		<table class="table" style="width: 50%;border:0px;">
			<tr class="tr">
				<td>Mata Pelajaran</td>
				<td>Jenis Tes</td>
				<td>Kelas</td>
				<td>Rombel</td>
			</tr>
			<tr class="td">
				<td>
					<select name="pelajaran" class="form-control">
						<?php
							foreach ($var as $dtd) {
						?>
						<option value="<?php echo $dtd->id_mapel;?>" <?php if($this->input->post("pelajaran") == $dtd->id_mapel){echo "selected";};?>><?php echo $dtd->mapel;?></option>

						<?php } ?>
					</select>
				</td>
				<td>
					<select name="jen" class="form-control">
						<?php
							foreach ($jns as $dtd) {
						?>
						<option value="<?php echo $dtd->id_jenis;?>" <?php if($this->input->post("jen") == $dtd->id_jenis){echo "selected";};?>><?php echo $dtd->jenis_ujian;?></option>

						<?php } ?>
					</select>
				</td>
				<td>
					<select name="kelas" class="form-control">
						<option value="XII" <?php if($this->input->post('kelas') == "XII"){ echo "selected";};?>>XII</option>
						
					</select>
				</td>
				<td>
					<select name="rbl" class="form-control">
						<?php
							foreach ($rbl as $dbl) {
						?>
						<option value="<?php echo $dbl->id_uk;?>" <?php if($this->input->post("rbl") == $dbl->id_uk){echo "selected";};?>><?php echo $dbl->urutan_kelas;?></option>

						<?php } ?>
					</select>
				</td>
				<td>
					<input type="submit" class="btn btn-primary" name="cari" value="Cari">
				</td>
			</tr>
		</table>
	<?php echo form_close();?>
	<?php
		if(isset($_POST['pelajaran'])){
			$pl = $this->input->post("pelajaran");
			$jn = $this->input->post("jen");
			$kl = $this->input->post("kelas");
			$rm = $this->input->post("rbl");
	?>
	<table cellspacing="0" class="tabel" width="100%">
	<?php		
		$this->db->select("id_soal,kunci");
		$this->db->where(array("id_mapel"=>$pl,"id_jenis"=>$jn,"kelas"=>$kl));
		$ik = $this->db->get("soal");
		$jmlsol = $ik->num_rows();
	?>
		<tr>
			<th colspan="<?php echo $jmlsol+2;?>" style="text-align: center;">Analisis Semua Jawaban</th>
		</tr>
		<tr>
			<th rowspan="2" style="text-align: center;">Nama</th>
			<?php
				$ix= $ik->result();
				$x=0;
				foreach ($ix as $dbt) { $x++;
			?>
			<th style="text-align: center;"><?php echo $x;?></th>
			<?php } ?>
			<th rowspan="2" style="text-align: center;">Nilai</th>	
		</tr>
		<tr>
			<?php
				$ix= $ik->result();
				$x=0;
				foreach ($ix as $dbt) { $x++;
			?>
			<th style="text-align: center;"><?php echo $dbt->kunci;?></th>
			<?php } ?>
		</tr>
		<?php
			$this->db->select("nis,nama");
			$this->db->where(array("kelas"=>$kl,"id_uk"=>$rm));
			$sl = $this->db->get("siswa")->result();
			foreach ($sl as $dsiswa) {
		?>
		<tr>
			<td width="250px" style="padding: 5px;"><?php echo $dsiswa->nama;?></td>
			<?php
				foreach ($ix as $dsl) {
					$this->db->select("jawaban");
					$this->db->where(array("nis"=>$dsiswa->nis,"id_mapel"=>$pl,"id_soal"=>$dsl->id_soal));
					$jwbw = $this->db->get("jawaban")->row_array();
					if($dsl->kunci == $jwbw['jawaban']){
						$bh="#449d44";
					}else{
						$bh="#d9534f";
					}
			?>
				<td bgcolor="<?php echo $bh;?>" align="center" style="color: #fff;"><?php echo $jwbw['jawaban'];?></td>
			<?php } ?>
			<?php
				$nly=$this->Nilai_Model->qw("nilai.nilai,siswa.kelas","nilai","inner join siswa on siswa.nis=nilai.nis ")->row_array();
				$this->db->select("kkm1,kkm2,kkm3");
				$this->db->where(array("id_mapel"=>$pl));
				$nxx = $this->db->get("mapel")->row_array();
				if($kl == "X"){
					$kkm = $nxx['kkm1'];
				}elseif($kl = "XI"){
					$kkm = $nxx['kkm2'];
				}else{
					$kkm = $nxx['kkm3'];
				}
				if($nly['nilai'] < $kkm){
					$bt = "#d9534f";
				}else{
					$bt = "";
				}
			?>
			<td align="center" bgcolor="<?php echo $bt;?>" style="color: #fff;"><?php echo $nly['nilai'];?></td>
		</tr>
		<?php } ?>
		<tr>
			<td align="right" style="padding-right: 5px;"><b>Jumlah Mengerjakan</b></td>
			<?php
				foreach ($ix as $dslx) {
					$id_soal = $dslx->id_soal;
					$jmljwbw = $this->db->query("SELECT jawaban.jawaban FROM `jawaban`,`siswa` WHERE jawaban.nis = siswa.nis AND jawaban.id_soal = '$id_soal' AND siswa.id_uk = '$rm'")->num_rows();
			?>
			<td align="center"><?php echo $jmljwbw;?></td>
			<?php } ?>
			<td></td>
		</tr>
		<tr>
			<td align="right" style="padding-right: 5px;"><b>Jumlah Salah</b></td>
			<?php
				foreach ($ix as $dslx) {
					$id_soal = $dslx->id_soal;
					$jmljwbws = $this->db->query("SELECT jawaban.jawaban FROM `jawaban`,`siswa` WHERE jawaban.nis = siswa.nis AND jawaban.id_soal = '$id_soal' AND siswa.id_uk = '$rm' AND poin = 0")->num_rows();
			?>
			<td align="center"><?php echo $jmljwbws;?></td>
			<?php } ?>
			<td></td>
		</tr>
		<tr>
			<td align="right" style="padding-right: 5px;"><b>Kategori Soal</b></td>
			<?php
				foreach ($ix as $dslxx) {
					$id_soal = $dslxx->id_soal;
					$jmljwbw = $this->db->query("SELECT jawaban.jawaban FROM `jawaban`,`siswa` WHERE jawaban.nis = siswa.nis AND jawaban.id_soal = '$id_soal' AND siswa.id_uk = '$rm'")->num_rows();
					$jmljwbws = $this->db->query("SELECT jawaban.jawaban FROM `jawaban`,`siswa` WHERE jawaban.nis = siswa.nis AND jawaban.id_soal = '$id_soal' AND siswa.id_uk = '$rm' AND poin = 0")->num_rows();
					if($jmljwbw ==0 && $jmljwbws==0){
						$st  = "";
						$bpr = "";
					}else{
						$jben = $jmljwbw-$jmljwbws;
						$prs = ($jben/$jmljwbw)*100;
						if($prs <= 30){
							$st = "A";
							$bpr = "#d9534f";
						}elseif($prs <= 70 && $prs > 30){
							$st = "B";
							$bpr = "#f9f968";
						}else{
							$bpr = "#449d44";
							$st = "C";
						}
					}
			?>
			<td align="center" bgcolor="<?php echo $bpr;?>" style="color: #fff;"><?php echo $st;?></td>
			<?php } ?>
			<td></td>
		</tr>
	</table>
	<table cellspacing="0" class="table" width="400px">
		<tr>
			<th colspan="2">Keterangan</th>
		</tr>
		<tr>
			<td bgcolor="#d9534f" style="color: #fff;" align="center">A</td><td>Sulit</td>
		</tr>
		<tr>
			<td bgcolor="#f0ad4e" style="color: #fff;" align="center">B</td><td>Sedang</td>
		</tr>
		<tr>
			<td bgcolor="#449d44" style="color: #fff;" align="center">C</td><td>Mudah</td>
		</tr>
	</table>
	<?php
		}else{
				
		}
	?>
</div>
</body>
</html>
