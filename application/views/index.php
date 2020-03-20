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
          <p class="judul-1">Yayasan Nurusalam Kelet Jepara</p>
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

        <?php
        ?>
        <div class="kotak-konfir">
          <div class="kotak-konfir-head">
            <h3>Konfirmasi Data Peserta</h3>
          </div><br><br>
          <div class="kotak-konfir-isi">
            <div class="kotak-konfir-isi-sub">
                <label class="control-label">Kode NIS</label>
                <br>
                <span><?php echo $qwe->nis;?></span>
            </div>
            <div class="kotak-konfir-isi-sub">
                <label class="control-label">Nama Peserta</label>
                <br>
                <span><?php echo $qwe->nama;?></span>
            </div>
            <div class="kotak-konfir-isi-sub">
                <label class="control-label">Jenis Kelamin</label>
                <br>
                <span><?php echo $qwe->jk;?></span>
            </div>
            <div class="kotak-konfir-isi-sub">
                <label class="control-label">Kelas</label>
                <br>
                <span><?php echo $qwe->kelas;?></span>
            </div>
            <?php
              $tkn=$this->db->get('token')->row_array();
            ?>
            <div class="kotak-konfir-isi-sub">
                <label class="control-label">Token</label>
                <br>
                  <div class="input-group">
                    <input type="text" id="tokena"  placeholder="Masukan Token" class="form-control">
                  </div>

                    <input type="hidden" id="token" value="<?php echo $tkn['token'];?>" class="form-control">

            </div><br>
            <div class=" col-xs-12">
            <input type="submit" name="" class="btn btn-primary col-xs-12" style="font-size: 16px;font-family: 'Roboto',sans-serif;margin-top: -15px;" value="SUBMIT" onclick="konf()">
            </div>
          </div>
            <div class="tengah-label">
          <ul hidden="" id="msg1" style="float: left; margin: 10px 50px;font-family: 'Roboto',sans-serif; color: #ba6b6b; font-size: 16px;">
            <li>Maaf token yang anda masukkan salah, silakan hubungi admin !!</li>
          </ul>
        </div>
        </div>
      </div>
      <div class="bawah-tengah" style="padding: 5px;">
        <p style="font-family: segoe ui;margin: 2px; font-size: 12px;">Afas Exam <span style="font-weight: bold;">Versi 5.1</span></p>
        <p style="font-family: segoe ui;margin: 2px;font-size: 12px;font-weight: bold;">SMK Wikrama 1 Jepara</p>
      </div>
      <div class="footer">
        <span>Copyright &copy 2011-2020 SMK Wikrama 1 Jepara</span>
      </div>
    <script src="<?php echo base_url();?>/assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>/assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
<script type="text/javascript">
  function msg1(){
        $("#msg1").fadeOut(2000);
  }
  function konf(){
    tk=document.getElementById('token').value;
    tka=document.getElementById('tokena').value;
    if(tk != tka ){
      $("#msg1").fadeIn(2000);
      setTimeout("msg1()",5000);
    }else{
      document.location.href='Paper/konf_tes';
    }
  }
   $(window).load(function() {
        $(".loader").fadeOut("slow");
  });
</script>

<script type='text/javascript'>
//<![CDATA[
//Script Redirect CTRL + U
//https://mastamvan.blogspot.com/ ganti dengan url blog kalian
function redirectCU(e) {
  if (e.ctrlKey && e.which == 85) {
    return false;
  }
}
document.onkeydown = redirectCU;

//Script Redirect Klik Kanan
function redirectKK(e) {
  if (e.which == 3) {
    return false;
  }
}
document.oncontextmenu = redirectKK;
//]]>
</script>
