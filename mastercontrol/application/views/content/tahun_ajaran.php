<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tahun Ajaran</h1>
                    <a href="<?php echo site_url('Master_Controller/page/f_thj');?>" class="btn btn-primary" style="margin-bottom: 10px;">+ Tambah</a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Tahun Ajaran
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no=0;
                                        foreach($tmp_thj as $tampil){
                                        $no++;
                                        if($tampil->status=="Aktif"){
                                            $clr='btn-success';
                                        }else{
                                            $clr='btn-danger';
                                        }
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $tampil->tahun_ajaran;?></td>
                                        <td><a class="btn btn-xs <?php echo $clr;?>"><?php echo $tampil->status;?></a></td>
                                        <td>
                                            <a href="<?php echo site_url('Master_Controller/page/f_thj');?>/<?php echo $tampil->id_thj;?>" class="btn btn-success btn-sm"><i class=" fa fa-pencil-square-o"></i> Edit</a>
                                            <a href="<?php echo site_url('Master_Controller/hapus_thj');?>/<?php echo $tampil->id_thj;?>" class="btn btn-danger btn-sm"><i class=" fa fa-trash-o"></i> Hapus</a>
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