
<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Input Soal
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <form id="uploadform" action="<?php /*echo site_url($open);*/?>" method="POST" enctype="multipart/form-data">
                                    <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Soal</label>
                                                <input type="text" name="id_soal" value="<?php echo $hsl['id_soal'];?>">
                                                <textarea class="form-control" name="soal" id="soal">
                                                    <?php echo $hsl['soal'];?>
                                                </textarea>
                                            </div>
                                    </div>
                                    <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Kunci</label>
                                                <select class="form-control" name="kunci" id="kunci">
                                                    <option <?php if($hsl['kunci']=="A"){echo "selected";}?>>A</option>
                                                    <option <?php if($hsl['kunci']=="B"){echo "selected";}?>>B</option>
                                                    <option <?php if($hsl['kunci']=="C"){echo "selected";}?>>C</option>
                                                    <option <?php if($hsl['kunci']=="D"){echo "selected";}?>>D</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Kelas</label>
                                                <select class="form-control" name="kelas" id="kelas">
                                                    <option <?php if($hsl['kelas']=="X"){echo "selected";}?>>X</option>
                                                    <option <?php if($hsl['kelas']=="XI"){echo "selected";}?>>XI</option>
                                                    <option <?php if($hsl['kelas']=="XII"){echo "selected";}?>>XII</option>
                                                </select>
                                            </div>
                                           <div class="form-group">
                                                <label>Mapel</label>
                                                <select class="form-control" name="id_mapel" id="id_mapel">
                                                    <?php
                                                        
                                                        foreach($mpl as $tampil){
                                                    ?>
                                                    <option value="<?php echo $tampil->id_mapel;?>" <?php if($hsl['id_mapel']==$tampil->id_mapel){echo "selected";}?>><?php echo $tampil->mapel;?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Jenis Ujian</label>
                                                <select class="form-control" name="id_ju" id="id_ju">
                                                    <?php
                                                        $qw=$this->db->get('jenis_ujian')->result();
                                                        foreach($qw as $tampil){
                                                    ?>
                                                    <option value="<?php echo $tampil->id_jenis;?>" <?php if($hsl['id_jenis']==$tampil->id_jenis){echo "selected";}?>><?php echo $tampil->jenis_ujian;?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Tahun Ajaran</label>
                                                <select class="form-control" name="id_thj" id="id_thj">
                                                    <?php
                                                        $qw=$this->db->get('tahun_ajaran')->result();
                                                        foreach($qw as $tampil){
                                                    ?>
                                                    <option value="<?php echo $tampil->id_thj;?>" <?php if($hsl['id_thj']==$tampil->id_thj){echo "selected";}?>><?php echo $tampil->tahun_ajaran;?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                             <div class="form-group">
                                                <label>Listening</label>
                                                <input type="file" name="listening">
                                            </div>
                                            <button type="submit" class="btn btn-primary" onclick="s_soal()">Simpan</button>
                                            <button type="reset" class="btn btn-default">Batal</button>
                                    </div>
                                    </form>
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
            CKEDITOR.replace('soal',{
                filebrowserBrowseUrl : '<?php echo base_url();?>assets/ckeditor/plugins/fileman/index.html',
                filebrowserImageBrowseUrl : "<?php echo base_url();?>assets/ckeditor/plugins/fileman/index.html?type=image"
            })
        </script>