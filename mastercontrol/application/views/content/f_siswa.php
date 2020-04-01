
<?php
    if($status=="edit"){
        $val=$hsl->row_array();
        $text="text";
    }else{
        $text="password";
        $val['nis']="";
        $val['nama']="";
        $val['password']="";
        $val['jk']="";
        $val['kelas']="";
        $val['id_uk']="";
        $val['id_sesi']="";
        $val['ses']="";
        $val['status']="";
    }
?>
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Siswa</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Siswa
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo site_url($open);?>" method="POST">
                                        <div class="form-group">
                                            <label>Nis</label>
                                            <input type="text" name="nis" value="<?php echo $val['nis'];?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" name="nama" value="<?php echo $val['nama'];?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="<?php echo $text;?>" name="password" value="<?php echo $val['password'];?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <?php
                                                $l="";
                                                $p="";
                                                if($val['jk']==""){
                                                    $l="";
                                                    $p="";
                                                }elseif($val['jk']=="Laki-Laki"){
                                                    $l="checked";
                                                }else{
                                                    $p="checked";
                                                }
                                            ?>
                                            <label>Jenis Kelamin</label>
                                            <br>
                                            <input type="radio" name="jk" value="Laki-Laki" <?php echo $l;?>> Laki-Laki
                                            <input type="radio" name="jk" value="Perempuan" <?php echo $p;?>>
                                             Perempuan
                                        </div>
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select class="form-control" name="kelas">
                                               	   <option <?php if($val['kelas']=="X"){echo "selected";}?>>X</option>
												   <option <?php if($val['kelas']=="XI"){echo "selected";}?>>XI</option>
												   <option <?php if($val['kelas']=="XII"){echo "selected";}?>>XII</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Rombel</label>
                                            <select class="form-control" name="id_uk">
                                                <option>--Pilih--</option>
                                                <?php
                                                    $qw=$this->db->get('urutan_kelas')->result();
                                                    foreach($qw as $tampil){
                                                ?>
                                                <option value="<?php echo $tampil->id_uk;?>" <?php if($tampil->id_uk==$val['id_uk']){echo "selected";}?>><?php echo $tampil->urutan_kelas;?></option>
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Ruang</label>
                                            <select class="form-control" name="id_sesi">
                                                <option>--Pilih--</option>
                                                <?php
                                                    $qw=$this->db->get('sesi')->result();
                                                    foreach($qw as $tampil){
                                                ?>
                                                <option value="<?php echo $tampil->id_sesi;?>" <?php if($tampil->id_sesi==$val['id_sesi']){echo "selected";}?>><?php echo $tampil->sesi;?></option>
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Sesi</label>
                                            <select class="form-control" name="ses">
                                                <option>--Pilih--</option>
                                                <?php
                                                    for($s=1;$s<=3;$s++){
                                                ?>
                                                <option <?php if($s==$val['ses']){echo "selected";}?>><?php echo $s;?></option>
                                            <?php } ?>

                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-default">Batal</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
