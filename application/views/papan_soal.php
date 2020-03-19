<?php
  $uri=$this->uri->segment(3);
  if(empty($uri)){
    $no=1;
  }else{
    $no=$uri;
  }
  $nis=$this->session->userdata('nis');
  $id_mapel=$this->session->userdata('id_mapel');
  $id_jenis=$this->session->userdata('id_jenis');
  $id_thj=$this->session->userdata('id_thj');
?>
<div class="k-papan-d">
          <?php
            $mpl = $this->Model_paper->qw("mapel.jumlah_soal","mapel","WHERE id_mapel = '$id_mapel'")->row_array(); 
            for($h=1;$h<=$mpl['jumlah_soal'];$h++){
                $qwjaw = $this->Model_paper->qw("jawaban.jawaban,jawaban.sts_jwb","jawaban","WHERE nis = '$nis' AND id_mapel = '$id_mapel' AND id_jenis = '$id_jenis' AND nomor = '$h'")->row_array();
            
            if($qwjaw['sts_jwb'] == "ragu"){
              $wrn ="#ebc906";
              $wrna ="#ebc906";
              $clr="#fff";
              $clra ="#ebc906";
            }else{
              if($qwjaw['jawaban']==""){
                $wrn="#fff";
                $clr="#333";
                $wrna="#333";
                $clra ="#333";
              }else{
                $clr="#fff";
                $clra ="#333";
                $wrna="#333";
                $wrn="#333";
              }
            }
          ?>
          <a href="<?php echo site_url('Paper/b_kerjasoal/'.$h);?>">
          <div class="kotak-pilih" id="k-plh<?php echo $h;?>" style="background-color:<?php echo $wrn;?>;color: <?php echo $clr;?>;border:2px solid <?php echo $wrna;?>;">
            <?php echo $h;?>
          </div>
          <div class="bulet" id="k-bulet<?php echo $h;?>" style="border:2px solid <?php echo $wrna;?>;color:<?php echo $clra;?>;">
            <?php echo $qwjaw['jawaban'];?>
          </div>
          <?php } ?>
        </div>
        </a>
 <style type="text/css">
      .kotak-pilih{
        float: left;
        margin: 15px 6px;
        width: 45px;
        text-align: center;
        padding: 10px 0px;
        height: 43px;
        font-size: 16px;
        border:2px solid #333;
      }
</style>
