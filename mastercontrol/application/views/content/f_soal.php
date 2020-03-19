<script type="text/javascript">
    function kosong(){
        CKEDITOR.instances.soal.setData("");         
    }
    function delek(){
        $("#psn").fadeOut(2000);
    }
    function scrolltotop(){
        $('html, body').animate({scrollTop : 0},500);
    }
    function s_soal(){        
        $("#uploadform").on('submit',(function(e){
            e.preventDefault();
            $.ajax({
              url:"<?php echo site_url('Soal_Controller/simpan_soal');?>",
              type:"POST",
              data:new FormData(this),
              contentType:false,
              cache:false,
              processData:false,
              success:function(hasil){
                if(hasil=="Berhasil"){
                    scrolltotop();
                    $("#psn").fadeIn(3000);
                    setTimeout("delek()",5000);
                    $("#ktk").load("<?php echo site_url('Soal_Controller/l_soal');?>");
                    kosong();
                }else if(hasil=="Berhasil diedit"){
                    document.location='../../lihat_soal';
                }else{
                    alert(hasil);
                    kosong();
                }
              }
        });
    }));
  }
</script>
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Soal</h1>
                </div>

                <!-- /.col-lg-12 -->
            </div>
<div class="alert alert-info alert-dismissable" id="psn" hidden="">
                                
                                Berhasil Di simpan, Silakan Input Lagi
</div>

<div id="ktk">
    
</div>
