<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Afas Exam</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/fa/css/font-awesome.css">

  </head>
  <body>
     <?php
        $ses=$this->session->userdata('nis');
        $qwe=$this->Model_paper->qw("*","siswa","WHERE nis='$ses'")->row();
      ?>
      <div class="loader">
        <img src="<?php echo base_url();?>assets/loading/loading.gif">
      </div>
      <div class="header">
        <div class="logo" style="float: left;">
          <img src="<?php echo base_url();?>/assets/icon/afas.png" style="width: 80px;height:80px;margin:10px 10px;margin-left: 20px;">
        </div>
        <div class="tulisan">
          <p class="judul-1">Pemerintah Kabupaten Jepara</p>
          <p class="judul-2">SMK WIKRAMA 1 JEPARA</p>
          <p class="judul-3">Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah</p>
        </div>
        <div class="logout">
          <div class="icon-o">
            <img src="<?php echo base_url();?>/assets/icon/unnamed.png" class="avt">
          </div>
          <div class="icon-t" style="margin: 15px 10px; float: right; line-height: 15px;">
            <p style="color: #fff;font-family: 'Roboto',sans-serif;">Selamat Datang</p>
            <p style="color: #fff;font-family: 'Roboto',sans-serif;"><?php echo $qwe->nama;?></p>
            <p><a href="<?php echo site_url('Login/logout');?>">Logout</a></p>
          </div>
        </div>
      </div>
      <div class="tengah">
        <div class="kotak-konfir" style="width: 700px;height: 500px; padding-top:50px ;">
          <div class="kotak-konfir-isi">
            <div class="nilai">
              <div class="nil">
                <div class="nil-head">
                  NILAI
                </div>
                <?php
                  if($status=="Belum Kompeten"){
                    $col="#e66c69";
                  }else{
                    $col="#449d44";
                  }
                ?>
                <div class="nil-isi" style="color: <?php echo $col;?>">
                  <?php echo $nilai;?>
                </div>
              </div>
              <div class="kkm">
                <div class="kkm-head">
                  KKM
                </div>
                <div class="kkm-isi">
                  <?php 
                    if($kelas=="X"){
                      echo $kkm1;
                    }elseif($kelas=="XI"){
                      echo $kkm2;
                    }else{
                      echo $kkm3;
                    }
                  ?>
                </div>
              </div>

            </div>
            <div class="k-status">
              <div class="status">
                <p style="color: <?php echo $col;?>"><?php echo $status;?></p>
                <span hidden="">Jumalah Soal  : <span style="font-weight: bold;"><?php echo $jumlah_soal;?></span></span>
                <span hidden="">Benar : <span style="font-weight: bold;"><?php echo $benar;?></span></span>
                <span hidden="">Salah : <span style="font-weight: bold;"><?php echo $salah;?></span></span>
              </div>
              <center>
              <a href="<?php echo site_url('Login/logout');?>" class="btn btn-success">LOGOUT</a>
              </center>
            </div>
          </div>
        </div>
      </div>
      <div class="bawah-tengah" style="padding: 5px;">
        <p style="font-family: segoe ui;margin: 2px; font-size: 12px;">Afas Exam <span style="font-weight: bold;">Versi 5.0</span></p>
        <p style="font-family: segoe ui;margin: 2px;font-size: 12px;font-weight: bold;">SMK Wikrama 1 Jepara</p>
      </div>
      <div class="footer">
        <span>Copyright &copy 2018 SMK Wikrama 1 Jepara</span>
      </div>
    <script src="<?php echo base_url();?>/assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>/assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
<script type="text/javascript">
  function konf(){
    document.location.href='Paper/konf_tes';
  }
   $(window).load(function() {
        $(".loader").fadeOut("slow");
  });
</script>