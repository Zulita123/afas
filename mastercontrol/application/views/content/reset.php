<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Reset Login Siswa</h1>
                    <a href="<?php echo site_url('Master_Controller/rset');?>" class="btn btn-success" style="margin-bottom: 10px;"><i class=" fa fa-times-circle-o"></i> Reset Semua</a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Reset Login Siswa
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nis</th>
                                        <th>Nama</th>
                                        <th>Password</th>
                                        <th>Jenis Kelamin</th>
                                        <th>kelas</th>
                                        <th>Urutan kelas</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no=0;
                                        foreach($tmp_siswa as $tampil){
                                        if($tampil->status=="on"){
                                            $btn="btn-success";
                                        }else{
                                            $btn="btn-danger";
                                        }
                                        $no++;
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $tampil->nis;?></td>
                                        <td><?php echo $tampil->nama;?></td>
                                        <td><?php echo $tampil->password;?></td>
                                        <td><?php echo $tampil->jk;?></td>
                                        <td><?php echo $tampil->kelas;?></td>
                                        <td><?php echo $tampil->urutan_kelas;?></td>
                                        <td>
                                            <button class="btn <?php echo $btn;?> btn-xs"><i class=" fa fa-toggle-on"></i> <?php echo $tampil->status;?></button>
                                        </td>
                                        <td>
                                            <a href="<?php echo site_url('Master_Controller/reset');?>/<?php echo $tampil->nis;?>" class="btn btn-danger btn-sm"><i class=" fa fa-times-circle-o"></i> Reset</a>
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