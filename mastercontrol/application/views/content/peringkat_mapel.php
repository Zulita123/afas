<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Peringkat Mapel</h1>
                    <?php echo form_open();?>
                <table class="table" style="width: 80%;">
                                <tr class="tr">
                                    <td>Mata Pelajaran</td>
                                    <td>Jenis Ujian</td>
                                    <td>Kelas</td>
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
                                            <option value="XII" <?php if($this->input->post('kelas')){echo "selected";}?>>XII</option>
                                        </select>
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-primary">Tampilkan</button>

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
                            Peringkat Mapel
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
                                        <th>Rombel</th>
                                        <th>Tanggal Kerja</th>
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
                                        <td><?php echo $data->nilai;?></td>
                                        <td><?php echo $data->urutan_kelas;?></td>
                                        <td><?php echo $data->tgl_kerja;?></td>
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
