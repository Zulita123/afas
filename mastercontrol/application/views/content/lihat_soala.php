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
        .table .td td{
            border :0px;
        }
    </style>    
</head>
<body>
    <div class="col-md-12">
                    <h1 style="text-align: center;">Data Soal <?php echo $pel;?></h1>
                    <?php echo form_open('Soal_Controller/lihat_soala/cari');?>
                        <!-- /.panel-heading -->
                            <table class="table" style="width: 50%;margin-top: 40px;">
                                <tr class="tr">
                                    <td>Mata Pelajaran</td>
                                    <td>Jenis Ujian</td>
                                    <td>Kelas</td>
                                    <td>Tahun Ajaran</td>
                                </tr>
                                <tr class="td">
                                    <td>
                                        <select class="form-control" name="id_mapel">
                                            <?php
                                                foreach ($var as $dtd) {
                                            ?>
                                            <option value="<?php echo $dtd->id_mapel;?>" <?php if($this->input->post("id_mapel") == $dtd->id_mapel){echo "selected";};?>><?php echo $dtd->mapel;?></option>

                                            <?php } ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control" name="id_jenis">
                                            <?php
                                                foreach ($jns as $dtd) {
                                            ?>
                                            <option value="<?php echo $dtd->id_jenis;?>" <?php if($this->input->post("id_jenis") == $dtd->id_jenis){echo "selected";};?>><?php echo $dtd->jenis_ujian;?></option>

                                            <?php } ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control" name="kelas">
                                            <option value="X" <?php if($this->input->post('kelas') == "X"){ echo "selected";};?>>X</option>
											  <option value="XI" <?php if($this->input->post('kelas') == "XI"){ echo "selected";};?>>XI</option>
											  <option value="XII" <?php if($this->input->post('kelas') == "XII"){ echo "selected";};?>>XII</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control" name="id_thj">
                                            <?php
                                                foreach($thj as $dtd){
                                            ?>
                                            <option value="<?php echo $dtd->id_thj;?>" <?php if($this->input->post("id_thj") == $dtd->id_thj){echo "selected";};?>><?php echo $dtd->tahun_ajaran;?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-primary">Cari</button>
                                    </td>
                                </tr>
                            </table>
                            <?php echo form_close();?>
                            <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead style="background-color: #eee;">
                                    <tr>
                                        <th style="width: 50px;text-align: center;">No</th>
                                        <th style="text-align: center;">Soal</th>
                                        <th style="text-align: center;">Kunci</th>
                                        <th style="text-align: center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $x=0;
                                        if($soal == ""){

                                        }else{
                                        foreach ($soal as $datsol) {
                                        $x++;
                                    ?>
                                    <tr class="odd gradeX">
                                        <td style="text-align: center;"><?php echo $x;?></td>
                                           <td>
                <?php
                    if(empty($datsol->listening)){
                        $list = "";
                    }else{
                        $list = base_url()."assets/listening/".$datsol->listening;
                ?>
                <audio class="audioDemo" controls preload="none"> 
                   <source src="<?php echo $list;?>" type="audio/mp3">
                </audio>
                <?php } ?>
                <br>
                <?php
                    if(!empty($datsol->gambar)){
                        $fg = base_url()."assets/listening/".$datsol->gambar;
                        echo "<img src='$fg' class='xdc'>";
                    }else{

                    }
                    echo $datsol->soal;
                ?>
            </td>
                                        <td style="text-align: center;font-size: 30px;"><?php echo $datsol->kunci;?></td>
                                        <td style="width:150px;text-align: center;">
                                            <a href="<?php echo site_url('Soal_Controller/page/e_soal');?>/<?php echo $datsol->id_soal;?>" class="btn btn-success btn-sm"><i class=" fa fa-pencil-square-o"></i> Edit</a>
                                            <a onclick="hapus_soal('<?php echo $datsol->id_soal;?>')" class="btn btn-danger btn-sm"><i class=" fa fa-trash-o"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
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
