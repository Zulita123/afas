<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Peringkat Akademik</h1>
                    <?php echo form_open();?>
                <table class="table" style="width: 80%;">
                                <tr class="tr">
                                    <td>Jenis Ujian</td>
                                    <td>Kelas</td>
                                </tr>
                                <tr class="td">
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
                                            <option value="X" <?php if($this->input->post('kelas')){echo "selected";}?>>X</option>
																					  <option value="XI" <?php if($this->input->post('kelas')){echo "selected";}?>>XI</option>
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
                            Peringkat Akademik
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Peringkat</th>
                                        <th>Nis</th>
                                        <th>Nama</th>
                                        <th>Rombel</th>
                                        <th>Jumlah Mapel</th>
                                        <th>Rata - Rata Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $x=0;
                                        foreach ($jns as $data) { $x++;
                                        $ns=$data->nis;

                                        $rta = $this->db->query("SELECT AVG(nilai) AS rata FROM nilai WHERE nis='$ns' ORDER BY rata DESC");
                                        $row=$rta->row_array();
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $x;?></td>
                                        <td><?php echo $data->nis;?></td>
                                        <td><?php echo $data->nama;?></td>
                                        <td><?php echo $data->urutan_kelas;?></td>
                                        <td><?php echo $jml;?></td>
                                        <td><?php echo $row['rata'];?></td>
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
