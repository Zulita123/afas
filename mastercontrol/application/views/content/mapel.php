<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Mapel</h1>
                    <a href="<?php echo site_url('Mapel_Controller/page/f_mapel');?>" class="btn btn-primary" style="margin-bottom: 10px;">+ Tambah</a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Mapel
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Mapel</th>
                                        <th>Jumlah Soal</th>
                                        <th>KKM X</th>
                                        <th>KKM XI</th>
                                        <th>KKM XII</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no=0;
                                        foreach($tmp_mp as $tampil){
                                        $no++;
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $tampil->mapel;?></td>
                                        <td><?php echo $tampil->jumlah_soal;?></td>
                                        <td><?php echo $tampil->kkm1;?></td>
                                        <td><?php echo $tampil->kkm2;?></td>
                                        <td><?php echo $tampil->kkm3;?></td>
                                        <td>
                                            <a href="<?php echo site_url('Mapel_Controller/page/f_mapel');?>/<?php echo $tampil->id_mapel;?>" class="btn btn-success btn-sm"><i class=" fa fa-pencil-square-o"></i> Edit</a>
                                            <a href="<?php echo site_url('Mapel_Controller/hapus_mapel');?>/<?php echo $tampil->id_mapel;?>" class="btn btn-danger btn-sm"><i class=" fa fa-trash-o"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    <?php
                                        } 
                                    ?>
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