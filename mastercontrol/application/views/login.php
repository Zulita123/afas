<!DOCTYPE html>
<html>
<head>
	<title>Login Administrator</title>
	<link href="<?php echo base_url();?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link href="<?php echo base_url();?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link href="<?php echo base_url();?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url();?>/assets/dist/css/login.css" rel="stylesheet" type="text/css">

</head>
<body>
		<div class="kotak-kiri">
			<img src="<?php echo base_url();?>assets/image/login.jpg">
			<div class="trs">
			</div>
		</div>
		<div class="kotak-kanan">
			<div class="kotak-login">
				<p class="k-judul">Afas Exam Login</p>
				<p class="k-isi">Selamat datang di aplikasi Afas Exam Silakan masukan username dan password anda</p>
				<form action="<?php echo site_url('Login_Controller/aksi_login');?>" method="POST">
					<input type="text" class="texta" name="nama" placeholder="Username">
					<input type="password" class="textb" name="password" placeholder="Password">
					<input type="submit" name="" value="Login" class="btn">
				</form>
			</div>
			<div class="foot">
				Copyright &copy 2011-2020 SMK Wikrama 1 Jepara
			</div>
		</div>
<script src="<?php echo base_url();?>/assets/vendor/jquery/jquery.min.js"></script>
</body>
</html>