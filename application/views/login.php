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
      <div class="header">
        <div class="logo" style="float: left;">
          <img src="<?php echo base_url();?>/assets/icon/afas.png" style="width: 80px;height:80px;margin:10px 10px;margin-left: 20px;">
        </div>
        <div class="tulisan">
          <p class="judul-1">Yayasan Nurussalam Kelet Jepara</p>
          <p class="judul-2">SMK WIKRAMA 1 JEPARA</p>
          <p class="judul-3">Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah</p>
        </div>
        <!--
        <div class="logout">
          <div class="icon-o">
            <img src="<?php echo base_url();?>/assets/icon/user.jpg" class="avt">
          </div>
          <div class="icon-t">
            <p style="float:left;color: #fff;font-family: 'Roboto',sans-serif;margin:12px 10px;">Selamat Datang</p>

          </div>
        </div> -->
      </div>
      <div class="tengah-l">

        <div class="kotak-login">
          <div class="kotak-login-head">
            <center><h1>Selamat datang,</h1></center>
            <h6 style="font-size:15px; font-family: 'Roboto'; padding: 0px 30px 0 55px; ">Silakan login dengan username dan password yang anda miliki</h6>
            <hr>
          </div>
          <div class="form-horizontal" style="margin-top: -75px;padding: 50px;">
            <label class="col-xs-6">Username</label>
            <div class="col-xs-12">
              <div class="input-group">
                <input type="text" name="username" id="usr" onclick="fk()" class="form-control" placeholder="Username" style="border: 0;border-bottom: 1px solid #ddd;width: 100%">
              </div>
            </div>
            <br>
            <br>
            <br><br>
            <label class="col-xs-6">Password</label>
            <div class="col-xs-12">
              <div class="input-group">
                <input type="password" name="password" class="form-control" id="mypass" placeholder="Password" style="border: 0;border-bottom: 1px solid #ddd;">
              </div><!--
              <a href="#" id="show"  onclick="ShowPassword()"><i class="fa fa-eye" style="float: right; color: #c9c9c9; margin-right: -20px;margin-top: -25px;"></i></a>
              <a href="#" id="hide" style="display:none"  onclick="HidePassword()"><i class="fa fa-eye" style="float: right; color: #c9c9c9; margin-right: -20px;margin-top: -25px;"></i></a> -->
            </div>
            <br>
            <br>
            <br>
            <br>
            <label class="col-xs-3"></label>
            <div class="col-xs-12">
                <input type="button" onclick="s_login()" name="login" class="btn btn btn-primary col-xs-12" value="Login" style="font-size: 16px;font-family: 'Roboto', sans-serif; ">
            </div>
          </div>
          <div class="tengah-label">
          <ul hidden="" id="msg1" style="float: left; margin: 10px 50px;font-family: 'Roboto',sans-serif; color: #ba6b6b; font-size: 16px;">
            <li>Maaf Username atau password yang anda masukan salah !!</li>
          </ul>
          <ul hidden="" id="msg2" style="float: left; margin: 10px 50px;font-family: 'Roboto',sans-serif; color: #ba6b6b; font-size: 16px;">
            <li>Maaf akun anda masih aktif, silakan hubungi admin !!</li>
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
    <script type="text/javascript">
      function fk(){
        document.getElementById('usr').focus();
        document.getElementById('ic').style.background='#c9c9c9';
        document.getElementById('ic').style.border='1px solid #c9c9c9';
        document.getElementById('usr').style.border='1px solid #c9c9c9';

      }
      function ShowPassword(){
        if(document.getElementById("mypass").value!="")
        {
          document.getElementById("mypass").type="text";
          document.getElementById("show").style.display="none";
          document.getElementById("hide").style.display="block";
        }
      }

      function HidePassword(){
        if(document.getElementById("mypass").type == "text")
        {
          document.getElementById("mypass").type="password"
          document.getElementById("show").style.display="block";
          document.getElementById("hide").style.display="none";
        }
      }
      function msg1(){
        $("#msg1").fadeOut(2000);
      }
      function msg2(){
        $("#msg2").fadeOut(2000);
      }
      function s_login(){
            $.ajax({
              url:"<?php echo site_url('Login/aksi_login');?>",
              type:"POST",
              data:{
                    nis:$("#usr").val(),
                    password:$("#mypass").val()
                  },
              success:function(hasil){
                if(hasil=="onn"){
                     $("#msg2").fadeIn(2000);
                    $("#usr").val("");
                    $("#mypass").val("");
                    setTimeout("msg2()",5000);
                }else if(hasil=="masuk"){
                    document.location.href='Paper';
                }else{
                    $("#msg1").fadeIn(2000);
                    $("#usr").val("");
                    $("#mypass").val("");
                    setTimeout("msg1()",5000);
                }
              }
        });
  }
    </script>
  </body>
</html>
