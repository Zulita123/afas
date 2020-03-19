<div class="kotak-kartu">
<?php
	foreach($ctka as $ctk){
?>
	<div class="k-kartu">
		<table style="border-bottom: 2px solid #333; width: 320px;">
			<tr>
				<td>
					<div class="logo">
						<img src="<?php echo base_url();?>assets/image/1Logo_swiksara.png" class="img-logo">
					</div>
				</td>
				<td colspan="4">
					<p class="judul">KARTU PESERTA US ONLINE </p>
					<p class="judul">SMK Wikrama 1 Jepara</p>
					<P class="judul" style="margin-top: -0px;"></p>
				</td>
			</tr>	
		</table>
		<table class="tabel">								
			<tr>
				<td >Nama</td>
				<td>:</td>
				<td><?php echo $ctk->nama;?></td>
			</tr>
			<tr>
				<td style="width: 80px;">Username</td>
				<td>:</td>
				<td style="width: 200px;"><?php echo $ctk->nis;?></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><?php echo $ctk->password;?></td>
			</tr>
			<tr>
				<td>Sesi / Ruang</td>
				<td>:</td>
				<td><?php echo $ctk->ses;?>/<?php echo $ctk->sesi;?></td>
			</tr>

		</table>
		<table border="1" class="table">
			<tr >
				<th>No</th>
				<th>Mapel</th>
				<th>Nilai</th>
				<th>TTD Orang Tua</th>
			</tr>
			<tr border="1" style="text-align: center;">
				<td >1. </td>
				<td width="1">PABP</td>
				<td></td>
				<td></td>
			</tr>
			<tr style="text-align: center;">
				<td >2. </td>
				<td width="1">PPKn</td>
				<td></td>
				<td></td>
			</tr>
			<tr style="text-align: center;">
				<td >3. </td>
				<td width="1">Matematika</td>
				<td></td>
				<td></td>
			</tr>
			<tr style="text-align: center;">
				<td >4. </td>
				<td width="1">Bahasa Jawa</td>
				<td></td>
				<td></td>
			</tr>
		</table>
		<table style="border-top: 2px solid #333;width: 320px;">
					<tr>
				<td colspan="3" style="color: #333; font-size: 12px; text-align: center;padding: 5px; font-family:kalam;font-weight: bold;">2019/2020</td>
				</tr>
		</table>
				
	</div>
	<?php
}
?>
</div>
<style type="text/css">
	
	 @page { size: auto; margin: 15mm 0 54mm 50; } body { margin:0; padding:0; } 
	
	.k-kartu{
		float: left;
		margin: 10px;
		border: 2px solid #777;
	}
	
	.tabel{
		width: 320px;
		border-top: 0px;
		padding: 10px;
		height: 120px;
	}
	.table{
		margin: 10px 10px 10px 10px;
		width: 320px;
		border: 1px solid #333;
		height: 130px;
		border-collapse: collapse;
	}
	.judul{
		color: #333;
		text-align: center;
		font-size: 12px;
		font-family: tahoma;
		font-weight: bold;
	}
	tr,th,td{
		color: #333;
		font-size: 12px;
		font-family: tahoma;
	}
	.logo .img-logo{
		width: 50px;
		float: left;
		margin-left: 15px;
		height: 50px;
	}
</style>
<script type="text/javascript">
	window.print();
</script>