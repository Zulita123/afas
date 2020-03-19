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
  <script type="text/javascript">
  function play(){
    $.ajax({
      url:'<?php echo site_url('paper/listen');?>',
      type:"POST",
      data:{
        id_j:$("#id_j").val()
      },
      success:function(data){
        alert("Jangan Lakukan Apa-apa saat listening sudah di Mulai atau anda akan kehilangan listening ini !!!");
        $(".audioDemo").trigger('play');
        $(".play").fadeOut(1);
      }
    });
  }
</script>
  <body onload="papan()">
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
                <p>Anda masih memiliki waktu lebih dari 60 detik untuk mengerjakan mata ujian ini</p>
                <p>Apakah anda yakin ingin mengakhiri mata ujian ini</p>
                <input type="checkbox" onclick="check()" class="chkk" id="chkk" style="margin-top: 15px;float: left;"><span>Centang, kemudian tekan tombol selesai. Anda tidak akan bisa kembali ke soal jika sudah menekan tombol selesai</span>
              </div>
              <div class="tombol">
                <input type="button" onclick="sgmodal()" id="selesai" disabled name="" value="SELESAI" class="btn btn-success">
                <input type="button" onclick="tdk()" name="" value="TIDAK" class="btn btn-danger">
              </div>
          </div>
        </div>

      </div>
      <div class="kotak-msga" hidden="">
        <div class="msga">
          <div class="k-msga">
            <div class="k-label">
              Konfirmasi Tes
            </div>
             <div class="k-isi-label">
                <img src="<?php echo base_url();?>assets/icon/warning.png" width="50" height="50">
              </div>
              <div class="k-isi-tulisan">
                <p>Apakah anda yakin ingin mengakhiri mata ujian ini ?</p>
                 <p>Setelah ke mata uji berikutnya anda tidak bisa kembali ke mata uji sebelumnya</p>
                <input type="checkbox" onclick="checka()" class="chkk" id="chkka" style="margin-top: 15px;float: left;"><span>Centang, kemudian tekan tombol selesai. Anda tidak akan bisa kembali ke soal jika sudah menekan tombol selesai</span>
              </div>
              <div class="tombol">
                <input type="button" onclick="sims()" id="selesaia" disabled value="SELESAI" class="btn btn-success">
                <input type="button" onclick="tdka()" name="" value="TIDAK" class="btn btn-danger">
              </div>
          </div>
        </div>

      </div>
        <div class="kotak-msgi" hidden="">
        <div class="msg">
          <div class="k-msgi">
            <div class="k-label">
              Konfirmasi Tes
            </div>
             <div class="k-isi-label">
                <img src="<?php echo base_url();?>assets/icon/warning.png" width="50" height="50">
              </div>
              <div class="k-isi-tulisan">
                <p id="pesan"></p>
                <p>Silakan hilangkan tanda ragu - ragu</p>
              </div>
              <div class="tombol">
                <input type="button" onclick="tdkaa()" name="" value="CANCEL" class="btn btn-success">
              </div>
          </div>
        </div>

      </div>
      <div class="header">
        <div class="logo" style="float: left;">
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
      <?php
        $uri=$this->uri->segment(3);
        $nis=$this->session->userdata('nis');
        $id_mapel=$this->session->userdata('id_mapel');
        $id_jenis=$this->session->userdata('id_jenis');
        $id_thj=$this->session->userdata('id_thj');
        if(empty($uri)){
          $no = 1;
        }else{
          $no = $uri;
        }
        $mapel = $this->Model_paper->qw("mapel.jumlah_soal","mapel","WHERE id_mapel = '$id_mapel'")->row_array();
        $jawaban=$this->Model_paper->qw(
          "jawaban.id_soal,
          jawaban.id_jawaban,
          jawaban.jawaban,
          jawaban.sts_jwb,
          jawaban.sts_listening",
          "jawaban",
          "WHERE nomor='$no' AND nis='$nis' AND id_mapel='$id_mapel' AND  id_jenis='$id_jenis'")
        ->row_array();
        $soal=$this->Model_paper->qw("soal.id_soal,soal.soal,soal.listening","soal","WHERE id_soal='$jawaban[id_soal]'")->row_array();
        if($jawaban['sts_jwb'] == "ragu"){
              $awrn ="#ebc906";
              $aclr="#fff";
        }else{
              $awrn ="#31659c";
              $aclr="#fff";
        }
      ?>
      <div class="tengah">
        <div class="container-fluid">
        <div class="row">
          <div class="col-md-12" >
            <div class="kotak-kerja-tes">
              <div class="kotak-kerja-head">
                <?php
                   $mpl = $this->Model_paper->qw("mapel.jumlah_soal","mapel","WHERE id_mapel = '$id_mapel'")->row_array();
                ?>
                <p>SOAL NO</p>
                <div class="nmr" id="nmra<?php echo $no;?>" style="color: <?php echo $aclr;?>;background-color: <?php echo $awrn;?>">
                  <span><?php echo $no;?></span>
                </div>
                <div class="swkt">
                      <div class="wkta">
                        <span>Sisa Waktu</span>
                      </div>
                      <div class="wkt">
                        <span id="jam"></span>:<span id="menit"></span>:<span id="detik"></span>
                      </div>
                </div>
              </div>
              <div class="kotak-kerja-head-sub">
                <span>Ukuran Font Soal :<a class="a-1" onclick="a1()">A</a><a class="a-2" onclick="a2()">A</a><a id="" class="a-3" onclick="a3()">A</a></span>
              </div>
              <div class="col-md-12">
                <?php
                    if($jawaban['sts_listening'] == "No"){
                      $sts = "hidden";
                    }else{
                      $sts = "";
                    }
                    if(empty($soal['gambar'])){
                      $img = "";
                    }else{
                      $img = base_url()."assets/listening/".$soal['gambar'];
                    }

                  ?>
                <div class="kotak-kerja-isi">
                <div class="play" onClick="play()" <?php echo $sts;?>><img src="<?php echo base_url();?>assets/icon/play.png"></div>

              <?php echo $soal['soal'];?>
              <div class="pilihan">
                    <div class="pilihan-bulet" onclick="sim('A')" style="background-color: <?php if($jawaban['jawaban'] =='A'){ echo '#31659c';} ?>">
                      A
                    </div>
                    <div class="pilihan-bulet" onclick="sim('B')" style="background-color: <?php if($jawaban['jawaban'] =='B'){ echo '#31659c';} ?>">
                      B
                    </div>
                    <div class="pilihan-bulet" onclick="sim('C')" style="background-color: <?php if($jawaban['jawaban'] =='C'){ echo '#31659c';} ?>">
                      C
                    </div>
                    <div class="pilihan-bulet" onclick="sim('D')" style="background-color: <?php if($jawaban['jawaban'] =='D'){ echo '#31659c';} ?>">
                      D
                    </div>
			<div class="pilihan-bulet" onclick="sim('E')" style="background-color: <?php if($jawaban['jawaban'] =='E'){ echo '#31659c';} ?>">
                      E
                    </div>
                    
                  </div>
                </div>
              </div>
              <input type="hidden" id="id_soal" value="<?php echo $soal['id_soal'];?>">
              <input type="hidden" id="nomer" value="<?php echo $no;?>">
              <input type="hidden" id="id_j" value="<?php echo $jawaban['id_jawaban'];?>">
              <div class="ftr">
                <?php
                    if($no == 1){
                      $seb = "disabled";
                      $sel ="";
                      $sls="hidden";
                    }elseif($no == $mapel['jumlah_soal']){
                      $seb = "";
                      $sel = "hidden";
                      $sls="";
                    }else{
                      $sel ="";
                      $seb = "";
                      $sls="hidden";
                    }
                ?>
                <div class="menu-bawah">
                  <?php
                    if($jawaban['sts_jwb'] == "ragu"){
                      $ccz="checked";
                    }else{
                      $ccz="";
                    }
                    $solb =0;
                    $solu =0;
                    for($jx=1;$jx<=$mapel['jumlah_soal'];$jx++){
                      $soal_belum = $this->Model_paper->qw("jawaban","jawaban","WHERE nis = '$nis' AND id_jenis = '$id_jenis' AND id_mapel = '$id_mapel' AND nomor='$jx'")->row_array();
                      if(empty($soal_belum['jawaban'])){
                        $solb = $solb+1;
                      }else{
                        $solu = $solu+1;
                      }
                    }
                    if($solu >=$mapel['jumlah_soal']){
                      $dsbh="";
                    }else{
                      $dsbh="hidden";
                    }
                  ?>
                   <a onclick="document.location.href='<?php echo site_url('Paper/b_kerjasoal');?>/<?php echo $no-1;?>'" class="link-sbm" <?php echo $seb;?>><img src="<?php echo base_url();?>assets/icon/back.svg" > SOAL SEBELUMNYA</a>
                   <a  class="link-rgu" ><input type="checkbox" <?php echo $ccz;?> class="chk" id="rg" onclick="chx()" style="width: 15px;height: 15px;margin-top: 2px;float: left;"> <span>RAGU - RAGU</span></a>
                   <a href="<?php echo site_url('Paper/b_kerjasoal');?>/<?php echo $no+1;?>" class="link-sls" <?php echo $sel;?>>SOAL BERIKUTNYA <img src="<?php echo base_url();?>assets/icon/next.svg" ></a>
                   <a onclick="smodal()" class="link-sls" <?php echo $sls;?> <?php echo $dsbh;?>>SELESAI <img src="<?php echo base_url();?>assets/icon/next.svg"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <input type="hidden" value="<?php echo $this->session->userdata('detik');?>" id="ds">
      <input type="hidden" value="<?php echo $this->session->userdata('menit');?>" id="ms">
      <input type="hidden" value="<?php echo $this->session->userdata('jam');?>" id="js">
      <audio class="audioDemo" controls preload="none" hidden>
         <source src="<?php echo base_url();?>mastercontrol/assets/listening/<?php echo $soal['listening'];?>" type="audio/mp3">
      </audio>
      <div class="tmb-papan" id="tmb-papan" onclick="cvn()">
        <img src="<?php echo base_url();?>assets/icon/back.svg" style="margin: 10px -5px;"><span>DAFTAR SOAL</span>
      </div>
      <div class="tmb-papan" id="tmb-papan1" onclick="cvn()" hidden="">
        <img src="<?php echo base_url();?>assets/icon/next.svg" style="margin: 5px 0px;">
      </div>
      <div class="k-papan" id="k-papan">

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
    <script type="text/javascript">
      var waktu = 1;
      var menit = 1;
      function wk() {
        var vv = document.getElementById("ds").value - waktu;
        if(vv < 0) {
          var bv = document.getElementById("ms").value - 1;
          document.getElementById("menit").innerHTML = document.getElementById("ms").value - 1;
          document.getElementById("ms").value = document.getElementById("ms").value - 1;

          $("#ds").val("59");

          if(bv <= 0){
            if(bv <= 0 && vv < 0 && document.getElementById("js").value == 0){
              sims();
            }else{
              $("#ms").val("60");
              document.getElementById("menit").innerHTML = document.getElementById("ms").value - 1;
              document.getElementById("jam").innerHTML = document.getElementById("js").value - 1;
              document.getElementById("js").value = document.getElementById("js").value - 1;
            }
          }else{

          }
          ajx();

        }else{
          var bp = document.getElementById("ms").value - 1;
          if(document.getElementById("js").value < 10){
            var j = "0"+document.getElementById("js").value;
          }else{
            var j = document.getElementById("js").value;
          }
          if(document.getElementById("ds").value < 10){
            var d = "0"+document.getElementById("ds").value;
          }else{
            var d = document.getElementById("ds").value;
          }
          if(document.getElementById("ms").value < 10){
            var mn = "0" + bp;
          }else{
            var mn = document.getElementById("ms").value - 1;
          }
          var vb = document.getElementById("ds").value - waktu;
          document.getElementById("ds").value = document.getElementById("ds").value - waktu;
          document.getElementById("detik").innerHTML = d;
          document.getElementById("menit").innerHTML = mn;
          document.getElementById("jam").innerHTML = j;
          ajx();
        }

        setTimeout('wk()', 1000);
      }
      function ajx(){
        $.ajax({
          url:'<?php echo site_url('paper/wkt');?>',
          type:"POST",
          dataType:"json",
          data:{
            jm:$("#js").val(),
            mn:$("#ms").val(),
            wk:$("#ds").val()
          },
          success:function(data){
            $("#js").val(data.jam);
            $("#ms").val(data.menit);
            $("#ds").val(data.detik);
          }
        });
      }
      function chx(){
        var xx = document.getElementById("rg");
        if(xx.checked == true){
          $.ajax({
            url:'<?php echo site_url('Paper/jawab_rag');?>',
            type:"POST",
            data:{
              id_soal:$("#id_soal").val(),
              no:$("#nomer").val(),
              id_j:$("#id_j").val()
            },
            success:function(data){
              if(data == "berhasil"){
                $("#k-plh"+<?php echo $no;?>).css({"backgroundColor":"#ebc906","border":"2px solid #ebc906","color":"#fff"});
                $("#k-bulet"+<?php echo $no;?>).css({"border":"2px solid #ebc906","color":"#ebc906"});
                 $("#nmra"+<?php echo $no;?>).css({"backgroundColor":"#ebc906","color":"#fff"});
              }else{

              }
            }
          });
        }else{
          $.ajax({
            url:'<?php echo site_url('Paper/jawab_rag');?>',
            type:"POST",
            data:{
              id_soal:$("#id_soal").val(),
              no:$("#nomer").val(),
              id_j:$("#id_j").val()
            },
            success:function(data){
              if(data == "berhasil"){
                $("#k-plh"+<?php echo $no;?>).css({"backgroundColor":"#333","border":"2px solid #333","color":"#fff"});
                $("#k-bulet"+<?php echo $no;?>).css({"border":"2px solid #333","color":"#333"});
                 $("#nmra"+<?php echo $no;?>).css({"backgroundColor":"#31659c","color":"#fff"});
              }else{
                $("#k-plh"+<?php echo $no;?>).css({"backgroundColor":"#fff","border":"2px solid #333","color":"#333"});
                $("#k-bulet"+<?php echo $no;?>).css({"border":"2px solid #333","color":"#333"});
                 $("#nmra"+<?php echo $no;?>).css({"backgroundColor":"#31659c","color":"#fff"});
              }
            }
          });
        }
      }
      function check(){
        var ceklis=document.getElementById('chkk');
        if(ceklis.checked==true){
          document.getElementById('selesai').disabled=false;
        }else{
          document.getElementById('selesai').disabled=true;
        }
      }
      function checka(){
        var ceklis=document.getElementById('chkka');
        if(ceklis.checked==true){
          document.getElementById('selesaia').disabled=false;
        }else{
          document.getElementById('selesaia').disabled=true;
        }
      }
      function tdk(){
        $(".kotak-msg").fadeOut("slow");
      }
      function tdkaa(){
        $(".kotak-msg").fadeOut("slow");
        $(".kotak-msgi").fadeOut("slow");
        $(".kotak-msga").fadeOut("slow");
      }
      function tdka(){
        $(".kotak-msga").fadeOut("slow");
      }
      function smodal(){
        $(".kotak-msg").fadeIn("slow");
      }
      function sgmodal(){
        $(".kotak-msg").hide();
        $(".kotak-msga").fadeIn("slow");
      }
      function cvn(){
        var c = document.getElementById("k-papan").style.right;
        if(c == "0px"){
          $("#k-papan").css({"right":"-441px"});
          $("#tmb-papan").css({"right":"0px"});
          $("#k-papan").css({"right":"-441px"});
          $(".link-rgu").css({"margin-left":"400px"});
          $(".link-sls").css({"margin-left":"400px"});
          $("#tmb-papan1").hide();
          $("#tmb-papan").show();
        }else{
          $(".link-rgu").css({"margin-left":"0px"});
          $(".link-sls").css({"margin-left":"-15px"});
          $("#k-papan").css({"right":"0px","position":"fixed","z-index":"9999"});

          $("#tmb-papan").css({"right":"330px"});
          $("#tmb-papan").hide();
          $("#tmb-papan1").show();
          $("#tmb-papan1").css({"right":"280px","height":"40px","width":"60px"});
        }
      }
      function sim(v){
        $.ajax({
          url:'<?php echo site_url('Paper/jawab_soal');?>',
          type:"POST",
          data:{
            id_soal:$("#id_soal").val(),
            jwb:v,
            no:$("#nomer").val(),
            id_j:$("#id_j").val()
          },
          success:function(data){
           window.location.reload();
           papan();
          }
        });
      }
      $( document ).ready(function() {
        wk();
      });
      function papan(){
        $("#k-papan").load("<?php echo site_url('Paper/papan_soal');?>");
      }
      function ld(){
        uri="<?php echo $this->uri->segment(3);?>";
        if(uri==""){
          url=1;
        }else{
          url=uri;
        }
        $(".kotak-kerja-isi").load("<?php echo site_url('Paper/sub_soal');?>/"+url);
        papan();
      }
      $(window).load(function() {
          $(".loader").fadeOut("slow");
        });
      function a1(){
        $(".kotak-kerja-isi").css({"font-size":"14px"});
      }
      function a2(){
        $(".kotak-kerja-isi").css({"font-size":"16px"});
      }
      function a3(){
        $(".kotak-kerja-isi").css({"font-size":"18px"});
      }
      function sims(){
        $.ajax({
          url:'<?php echo site_url('Paper/selesai');?>',
          type:'POST',
          data:{

          },
          success:function(data){
            if(data=="blm"){
              document.getElementById('pesan').innerHTML='Maaf masih ada jawaban ragu - ragu !!';
             $(".kotak-msgi").fadeIn("slow");
            }else if(data=="berhasil"){
               document.location='<?php echo site_url('Paper/nilai');?>';
            }else{
              alert(data);
            }
          }
        })
      }
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
    <style type="text/css">
      .kotak-pilih{
        float: left;
        margin: 15px 6px;
        width: 45px;
        text-align: center;
        height: 43px;
        font-size: 16px;
        border:2px solid #333;
      }
    </style>

  </body>
</html>
