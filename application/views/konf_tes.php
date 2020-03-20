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
      <div class="kotak-msg" hidden="">
        <div class="msg">
          <div class="k-msg">
            <div class="k-label">
              Konfirmasi Tes
            </div>
             <div class="k-isi-label">
                <img src="<?php echo base_url();?>assets/icon/warning.png" width="50" height="50">
              </div>
              <div class="k-isi-tulisan">
                <p id="pesan"></p>
                <p>Untuk mengerjakan kembali silakan hubungi admin</p>
              </div>
              <div class="tombol">
                <input type="button" onclick="tdk()" name="" value="CANCEL" class="btn btn-success">
              </div>
          </div>
        </div>

      </div>
      <div class="header">
        <div class="logo" style="float: left;">
          <img src="<?php echo base_url();?>/assets/icon/afas.png" style="width: 80px;height:80px;margin:10px 10px;margin-left: 20px;">
        </div>
        <div class="tulisan">
          <p class="judul-1">Yayasan Nurussalam Kelet Jepara</p>
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

          <div class="col-md-6" style=" margin-left: 25%;margin-top:-8%" >
            <div class="kotak-konf-tes">
                        <div class="kotak-konfir-head">
            <p>Konfirmasi Tes</p>
          </div>
          <div class="kotak-konfir-isi" style="padding: 20px 60px 20px 50px;width: 100%
         ">
            <div class="kotak-konfir-isi-sub">
                <label class="control-label">Jenis Ujian</label>
                <br>
                <?php
                $nis=$this->session->userdata('nis');
                $kelas=$this->Model_paper->qw("siswa.kelas","siswa","WHERE nis ='$nis'")->row();
                $kls=$kelas->kelas;
                $sa = $this->Model_paper->qw("jenis_ujian.jenis_ujian,mapel.mapel,soal_aktif.kelas,tahun_ajaran.tahun_ajaran,soal_aktif.id_mapel","soal_aktif","inner join jenis_ujian on jenis_ujian.id_jenis=soal_aktif.id_jenis inner join mapel on mapel.id_mapel=soal_aktif.id_mapel inner join tahun_ajaran on tahun_ajaran.id_thj=soal_aktif.id_thj WHERE soal_aktif.kelas='$kls' group by soal_aktif.id_mapel")->result();
                $san = $this->Model_paper->qw("jenis_ujian.jenis_ujian,jenis_ujian.id_jenis,mapel.mapel,soal_aktif.kelas,tahun_ajaran.tahun_ajaran,soal_aktif.id_mapel","soal_aktif","inner join jenis_ujian on jenis_ujian.id_jenis=soal_aktif.id_jenis inner join mapel on mapel.id_mapel=soal_aktif.id_mapel inner join tahun_ajaran on tahun_ajaran.id_thj=soal_aktif.id_thj WHERE soal_aktif.kelas='$kls' group by soal_aktif.id_jenis")->result();
                $sat = $this->Model_paper->qw("jenis_ujian.jenis_ujian,mapel.mapel,soal_aktif.kelas,tahun_ajaran.tahun_ajaran,soal_aktif.id_mapel,tahun_ajaran.id_thj","soal_aktif","inner join jenis_ujian on jenis_ujian.id_jenis=soal_aktif.id_jenis inner join mapel on mapel.id_mapel=soal_aktif.id_mapel inner join tahun_ajaran on tahun_ajaran.id_thj=soal_aktif.id_thj WHERE soal_aktif.kelas='$kls' group by soal_aktif.id_thj")->result();

              ?>
                <select class="form-control" name="id_jenis" id="id_jenis">
                  <?php
                    foreach($san as $ty){
                  ?>
                  <option value="<?php echo $ty->id_jenis;?>"><?php echo $ty->jenis_ujian;?></option>
                  <?php } ?>
                </select>

            </div>
            <div class="kotak-konfir-isi-sub">
                <label class="control-label">Status Tes</label>
                <br>
                <span>Tes Baru</span>
            </div>
            <div class="kotak-konfir-isi-sub">
                <label class="control-label">Mata Pelajaran</label>
                <br>

                <select class="form-control" name="id_mapel" id="id_mapel">
                  <?php
                    foreach($sa as $ta){
                  ?>
                  <option value="<?php echo $ta->id_mapel;?>"><?php echo $ta->mapel;?></option>
                  <?php } ?>
                </select>

                <input type="hidden" id="kelas" value="<?php echo $kelas->kelas;?>">

            </div>
             <div class="kotak-konfir-isi-sub">
                <label class="control-label">Tahun Ajaran</label>
                <br>

                <select class="form-control" name="id_thj" id="id_thj">
                  <?php
                    foreach($sat as $tb){
                  ?>
                  <option value="<?php echo $tb->id_thj;?>"><?php echo $tb->tahun_ajaran;?></option>
                  <?php } ?>
                </select>
            </div>
            <div class="kotak-konfir-isi-sub">
                <?php
                  $wkt=$this->Model_paper->qw("jam,menit","jenis_ujian","")->row_array();
                  if($wkt['jam']>=1){
                    $waktu=$wkt['jam'].'Jam';
                  }else{
                    $waktu=' ' ;
                  }
                ?>
                <label class="control-label">Alokasi Waktu</label>
                <br>
                 <span><?php echo $waktu;?> <?php echo $wkt['menit'];?> Menit</span>
            </div>
            <div class="kotak-konf-ml col-xs-12">
                  <input type="button" name="" onclick="ks()" class="btn btn-primary col-xs-12" value="MULAI" style="font-size: 16px; font-family:'roboto',sans-serif;">
                </div>
          </div>
            </div>
          </div>
          <!-- <div class="col-md-4">
            <div class="kotak-konf-mulai">
              <div class="kotak-konf-psn">
                <i class="fa fa-exclamation-triangle"></i><span>Tombol MULAI hanya akan aktif apabila waktu sekarang sudah melewati waktu mulai test. Tekan tombol F5 untuk merefresh halaman</span>
              </div>
              <div class="row" style="margin-top: 10px;">

              </div>
            </div>
          </div> -->
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
  function ks(){
    loading();
    $.ajax({
        url:'<?php echo site_url('Paper/kerja_soal');?>',
        type:'POST',
        data:{
          kelas : $("#kelas").val(),
          id_mapel : $("#id_mapel").val(),
          id_jenis : $("#id_jenis").val(),
          id_thj : $("#id_thj").val()
        },
        success:function(hasil){
          if(hasil=="Berhasil"){
            soal();
          }else if(hasil=="Tgl Berakhir"){
            document.getElementById('pesan').innerHTML='Maaf tanggal tes telah berakhir !!';
             $(".kotak-msg").fadeIn("slow");
          }else if(hasil=="Jumlah Soal Kurang"){
            document.getElementById('pesan').innerHTML='Maaf jumlah soal korang !!';
             $(".kotak-msg").fadeIn("slow");
          }else if(hasil=="belum absen"){
            document.getElementById('pesan').innerHTML='Maaf anda belum mendapatkan absen !!';
             $(".kotak-msg").fadeIn("slow");
          }else{
            alert(hasil);
          }
        }
      });
  }
  function tdk(){
        $(".kotak-msg").fadeOut("slow");
        document.location='konf_tes';
      }
  function soal(){
     $.ajax({
        url:'<?php echo site_url('Paper/soal');?>',
        type:'POST',
        data:{

        },
        success:function(hasil){
          if(hasil=="psn"){
            document.getElementById('pesan').innerHTML='Maaf anda sudah mengerjakan mapel ini !!';
            $(".kotak-msg").fadeIn("slow");
          }else if(hasil =="msk"){
            document.location='b_kerjasoal';
          }else{
            document.location='Login';
          }
        }
      });
  }
  function loading(){
    $(".loader").show();
  }
     $(window).load(function() {
        $(".loader").fadeOut("slow");
  });
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
</script>
