<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Jenis Ujian</h1>
                    <a href="<?php echo site_url('Ju_Controller/page/f_ju');?>" class="btn btn-primary" style="margin-bottom: 10px;">+ Tambah</a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Jenis Ujian
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Ujian</th>
                                        <th>Tgl Awal</th>
                                        <th>Tgl Akhir</th>
                                        <th>Jam</th>
                                        <th>Menit</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no=0;
                                        foreach($tmp_ju as $tampil){
                                        $no++;
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $tampil->jenis_ujian;?></td>
                                        <td><?php echo $tampil->tgl_awal;?></td>
                                        <td><?php echo $tampil->tgl_akhir;?></td>
                                        <td><?php echo $tampil->jam;?></td>
                                        <td><?php echo $tampil->menit;?></td>
                                        <td>
                                            <a href="<?php echo site_url('Ju_Controller/page/f_ju');?>/<?php echo $tampil->id_jenis;?>" class="btn btn-success btn-sm"><i class=" fa fa-pencil-square-o"></i> Edit</a>
                                            <a href="<?php echo site_url('Ju_Controller/hapus_ju');?>/<?php echo $tampil->id_jenis;?>" class="btn btn-danger btn-sm"><i class=" fa fa-trash-o"></i> Hapus</a>
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