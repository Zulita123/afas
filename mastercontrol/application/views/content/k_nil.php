<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Kelola Nilai</h1>
                    <?php echo form_open();?>
                <table class="table" style="width: 80%;">
                                <tr class="tr">
                                    <td>Mata Pelajaran</td>
                                    <td>Jenis Ujian</td>
                                    <td>Rombel</td>
                                </tr>
                                <tr class="td">
                                    <td>
                                        <select class="form-control" name="id_mapel">
                                            <?php
                                                foreach ($mapel as $dtng) {
                                            ?>
                                                <option value="<?php echo $dtng->id_mapel;?>" <?php if($this->input->post('id_mapel') == $dtng->id_mapel){ echo "selected";}?>><?php echo $dtng->mapel;?></option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control" name="id_jenis">
                                            <?php
                                                foreach ($jnsx as $dtng) {
                                            ?>
                                                <option value="<?php echo $dtng->id_jenis;?>" <?php if($this->input->post('id_jenis') == $dtng->id_jenis){ echo "selected";}?>><?php echo $dtng->jenis_ujian;?></option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control" name="kelas">
                                            <?php
                                                foreach ($rom as $darom) {
                                            ?>
                                                <option value="<?php echo $darom->id_uk;?>" <?php if($this->input->post('kelas') == $darom->id_uk){ echo    "selected";}?>><?php echo $darom->urutan_kelas;?></option>   
                                            <?php } ?>
                                        </select>
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-primary">Tampilkan</button>
                                    
                                        <a href="<?php echo site_url('Nilai_Controller/ex_nilai');?>/<?php echo $this->input->post('id_mapel');?>/<?php echo $this->input->post('id_jenis');?>/<?php echo $this->input->post('kelas');?>" class="btn btn-success">Cetak Excel</a>
                                    
                                        <a href="<?php echo site_url('Nilai_Controller/cetak_nilai');?>/<?php echo $this->input->post('id_mapel');?>/<?php echo $this->input->post('id_jenis');?>/<?php echo $this->input->post('kelas');?>" class="btn btn-danger" target="_balnk">Print</a>
                                    </td>
                                </tr>
                            </table>
                        <?php echo form_close();?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Nilai
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nis</th>
                                        <th>Nama</th>
                                        <th>Nilai</th>
                                        <th>Urutan Kelas</th>
                                        <th>Tanggal Kerja</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $x=0;
                                        foreach ($jns as $data) { $x++;
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $x;?></td>
                                        <td><?php echo $data->nis;?></td>
                                        <td><?php echo $data->nama;?></td>
                                        <td><?php echo round($data->nilai,1);?></td>
                                        <td><?php echo $data->urutan_kelas;?></td>
                                        <td><?php echo $data->tgl_kerja;?></td>
                                        <td>
                                            <a href="<?php echo site_url('Nilai_Controller/lihatdetail');?>/<?php echo $data->nis;?>/<?php echo $this->input->post('id_mapel');?>/<?php echo $this->input->post('id_jenis');?>" class="btn btn-success btn-sm" target="_blank"><i class=" fa fa-eye"></i> Analisis</a>
                                            <a href="<?php echo site_url('Nilai_Controller/hapus_nilai');?>/<?php echo $data->nis;?>/<?php echo $this->input->post('id_mapel');?>/<?php echo $this->input->post('id_jenis');?>" class="btn btn-danger btn-sm"><i class=" fa fa-trash-o"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
<style type="text/css">
    .table .tr td{
        border :0px;
    }
    .table .td td{
        border :0px;
    }
</style>