<!DOCTYPE html>
<html>
<head>
    <title>Lihat Soal</title>
    <link href="<?php echo base_url();?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link href="<?php echo base_url();?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>/assets/dist/css/style.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>/assets/dist/css/sb-admin-2.css" rel="stylesheet">
    <style type="text/css">
        .table .tr td{
            border :0px;
        }
    </style>    
</head>
<body>
    <div class="col-md-12">
                    <h1 style="text-align: center;">Analisis Nilai</h1>
                    <?php echo form_open('Soal_Controller/lihat_soal/cari');?>
                        <!-- /.panel-heading -->
                        <?php
                            $ur=$this->uri->segment(3);
                            $qwer=$this->Nilai_Model->qw("siswa.nis,siswa.nama,urutan_kelas.urutan_kelas","siswa","inner join urutan_kelas on siswa.id_uk=urutan_kelas.id_uk WHERE siswa.nis='$ur'")->row();
                        ?>
                            <table class="table" style="width: 20%;margin-top: 40px;">
                                <tr class="tr">
                                    <td>Nis</td>
                                    <td>:</td>
                                    <td><?php echo $qwer->nis;?></td>
                                </tr>
                                <tr class="tr">
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><?php echo $qwer->nama;?></td>
                                </tr>
                                <tr  class="tr">
                                    <td>Urutan Kelas</td>
                                    <td>:</td>
                                    <td><?php echo $qwer->urutan_kelas;?></td>
                                </tr>
                            </table>
                            <?php echo form_close();?>
                            <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead style="background-color: #eee;">
                                    <tr>
                                        <th style="width: 50px;text-align: center;">No</th>
                                        <th style="text-align: center;">Soal</th>
                                        <th style="text-align: center;">Kunci</th>
                                        <th style="text-align: center;">Jawaban Siswa</th>
                                        <th style="text-align: center;">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $x=0;
                                        foreach ($soal as $datsol) {
                                        $x++;
                                    ?>
                                    <tr class="odd gradeX">
                                        <td style="text-align: center;"><?php echo $x;?></td>
                                        <td><?php echo $datsol->soal;?></td>
                                        <td style="text-align: center;font-size: 30px;"><?php echo $datsol->kunci;?></td>
                                        <td style="text-align: center;font-size: 30px;"><?php echo $datsol->jawaban;?></td>
                                        <?php
                                            if($datsol->kunci==$datsol->jawaban){
                                                $sts="Benar";
                                                $wrn="#449d44";
                                            }else{
                                                $sts="Salah";
                                                $wrn="#c9302c";
                                            }
                                        ?>
                                        <td style="text-align: center;font-size: 30px;color: <?php echo $wrn;?>"><?php echo $sts;?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        <!-- /.panel-body -->
                    
                    <!-- /.panel -->
                </div>
</body>
</html>
<script src="<?php echo base_url();?>/assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
    function hapus_soal(a){
       $.ajax({
          url:'<?php echo site_url('Soal_Controller/hapus_soal');?>',
          type:"POST",
          data:{
            id_soal:a
          },
          success:function(data){
            window.location.reload();
          }
        });
    }
</script>