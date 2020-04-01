<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Form Aktifasi Soal</h1>
    </div>     <!-- /.col-lg-12 -->
</div>
<div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Aktifasi Soal
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo site_url('Aktifasi_Controller/aktif_soal');?>" method="POST">
                                        <a href="<?php echo site_url('Aktifasi_Controller/kosong');?>" class="btn btn-danger">Kosongkan</a>
                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Jenis Ujian</label>
                                            <select class="form-control" name="jenis">
                                                <?php 
                                                    $qwer=$this->db->get('jenis_ujian')->result();
                                                    foreach($qwer as $tmp){
                                                ?>
                                                <option value="<?php echo $tmp->id_jenis;?>"><?php echo $tmp->jenis_ujian;?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Mapel</label>
                                            <select class="form-control" name="mapel">
                                             <?php 
                                                    $qwer=$this->db->get('mapel')->result();
                                                    foreach($qwer as $tmp){
                                                ?>
                                                <option value="<?php echo $tmp->id_mapel;?>"><?php echo $tmp->mapel;?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select class="form-control" name="kelas">
                                                <option>X</option>
						<option>XI</option>
						<option>XII</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun Ajaran</label>
                                            <select class="form-control" name="thj">
                                                <?php
                                                    $qw=$this->db->get('tahun_ajaran')->result();
                                                    foreach($qw as $tamp){
                                                ?>
                                                <option value="<?php echo $tamp->id_thj;?>"><?php echo $tamp->tahun_ajaran;?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group" hidden="">
                                            <input type="text" name="token" id="token" class="form-control" readonly="">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Aktifkan</button>

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
                 <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Soal Aktif
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <?php
                                                $qwe=$this->Aktifasi_Model->qw("jenis_ujian.jenis_ujian,mapel.mapel,soal_aktif.kelas,tahun_ajaran.tahun_ajaran,mapel.id_mapel","soal_aktif","inner join jenis_ujian on jenis_ujian.id_jenis=soal_aktif.id_jenis inner join mapel on mapel.id_mapel=soal_aktif.id_mapel inner join tahun_ajaran on tahun_ajaran.id_thj=soal_aktif.id_thj group by soal_aktif.id_jenis")->result();
                                                
                                            ?>
                                            <label>Jenis Ujian</label>
                                            <br>
                                            <?php
                                                foreach($qwe as $jn){
                                            ?>

                                            <label style="color: #777;font-weight: normal;"><?php echo $jn->jenis_ujian;?>,</label>
                                            <?php } ?>
                                        </div>
                                        <div class="form-group">
                                            <?php
                                                $qwe2=$this->Aktifasi_Model->qw("jenis_ujian.jenis_ujian,mapel.mapel,soal_aktif.kelas,tahun_ajaran.tahun_ajaran,mapel.id_mapel","soal_aktif","inner join jenis_ujian on jenis_ujian.id_jenis=soal_aktif.id_jenis inner join mapel on mapel.id_mapel=soal_aktif.id_mapel inner join tahun_ajaran on tahun_ajaran.id_thj=soal_aktif.id_thj group by soal_aktif.id_mapel")->result();
                                                
                                            ?>
                                            <label>Mapel</label>
                                            <br>
                                            <?php
                                                foreach($qwe2 as $jn){
                                            ?>

                                            <label style="color: #777;font-weight: normal;"><?php echo $jn->mapel;?>,</label>
                                            <?php } ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <br>
                                                  <?php
                                                $qwe3=$this->Aktifasi_Model->qw("jenis_ujian.jenis_ujian,mapel.mapel,soal_aktif.kelas,tahun_ajaran.tahun_ajaran,mapel.id_mapel","soal_aktif","inner join jenis_ujian on jenis_ujian.id_jenis=soal_aktif.id_jenis inner  join mapel on mapel.id_mapel=soal_aktif.id_mapel inner join tahun_ajaran on tahun_ajaran.id_thj=soal_aktif.id_thj group by soal_aktif.kelas")->result();
                                                
                                            ?>
                                            <?php
                                                foreach($qwe3 as $jn){
                                            ?>
                                            <label style="color: #777;font-weight: normal;"><?php echo $jn->kelas;?>,</label>
                                            <?php } ?>
                                        </div>
                                        <div class="form-group">
                                                   <?php
                                                $qwe4=$this->Aktifasi_Model->qw("jenis_ujian.jenis_ujian,mapel.mapel,soal_aktif.kelas,tahun_ajaran.tahun_ajaran,mapel.id_mapel","soal_aktif","inner join jenis_ujian on jenis_ujian.id_jenis=soal_aktif.id_jenis inner join mapel on mapel.id_mapel=soal_aktif.id_mapel inner join tahun_ajaran on tahun_ajaran.id_thj=soal_aktif.id_thj group by soal_aktif.id_thj")->result();
                                                
                                            ?>
                                            <label>Tahun Ajaran</label>
                                            <br>
                                            <?php
                                                foreach($qwe4 as $jn){
                                            ?>
                                            <label style="color: #777;font-weight: normal;"><?php echo $jn->tahun_ajaran;?>,</label>
                                            <?php } ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Soal</label>
                                            <br>
                                             <?php
                                                $qwe5=$this->Aktifasi_Model->qw("jenis_ujian.jenis_ujian,mapel.mapel,soal_aktif.kelas,tahun_ajaran.tahun_ajaran,mapel.id_mapel","soal_aktif","inner join jenis_ujian on jenis_ujian.id_jenis=soal_aktif.id_jenis inner join mapel on mapel.id_mapel=soal_aktif.id_mapel inner join tahun_ajaran on tahun_ajaran.id_thj=soal_aktif.id_thj group by soal_aktif.id_mapel")->result();
                                               
                                            ?>
                                            <?php
                                                foreach($qwe5 as $jn){
                                                 $id_mapel=$jn->id_mapel;
                                                $qwr=$this->Aktifasi_Model->qw("*","soal_aktif","WHERE id_mapel='$id_mapel'")->num_rows();
                                            ?>
                                            <label style="color: #777;font-weight: normal;"><?php echo $qwr;?>,</label>
                                            <?php } ?>
                                        </div>
                                        <?php
                                            $tkn=$this->db->get('token')->row_array();
                                        ?>
                                        <div class="form-group">
                                            <label>Token</label>
                                            <input type="text" class="form-control" name="token" id="token" class="form-control" value="<?php echo $tkn['token'];?>" readonly="">
                                        </div>
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
<script type="text/javascript">
     function makeid() { 
        var text = ""; var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"; for (var i = 0; i < 5; i++) text += possible.charAt(Math.floor(Math.random() * possible.length)); 
        document.getElementById('token').value=text;
    } 
    console.log(makeid());
</script>
