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
        $jawaban=$this->Model_paper->qw("jawaban.id_soal,jawaban.id_jawaban,jawaban.jawaban","jawaban","WHERE nomor='$no' AND nis='$nis' AND id_mapel='$id_mapel' AND  id_jenis='$id_jenis'")->row_array();
        $soal=$this->Model_paper->qw("soal.id_soal,soal.soal","soal","WHERE id_soal='$jawaban[id_soal]'")->row_array();
?>
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
                  </div>