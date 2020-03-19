<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Siswa</h1>
                    <a href="<?php echo site_url('Master_Controller/page/f_siswa');?>" class="btn btn-primary" style="margin-bottom: 10px;">+ Tambah</a>
                    <a data-toggle="modal" data-target="#myModal" href="#" class="btn btn-success " style="margin-bottom: 10px;">Import</a>
                    <a href="<?php echo site_url('Master_Controller/sws');?>" class="btn btn-warning" style="margin-bottom: 10px;">Export</a>
                    <a href="<?php echo site_url('Master_Controller/cetak_kartupeserta');?>" class="btn btn-danger" style="margin-bottom: 10px;">Cetak Kartu Pserta</a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Siswa
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
                                        <th>Ruang</th>
                                        <th>Sesi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no=0;
                                        foreach($tmp_siswa as $tampil){
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
                                        <td><?php echo $tampil->sesi;?></td>
                                        <td><?php echo $tampil->ses;?></td>
                                        <td>
                                            <a href="<?php echo site_url('Master_Controller/page/f_siswa');?>/<?php echo $tampil->nis;?>" class="btn btn-success btn-sm"><i class=" fa fa-pencil-square-o"></i> Edit</a>
                                            <a href="<?php echo site_url('Master_Controller/hapus_siswa');?>/<?php echo $tampil->nis;?>" class="btn btn-danger btn-sm"><i class=" fa fa-trash-o"></i> Hapus</a>

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
     <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Import Data Siswa</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <?php $open = site_url('Master_Controller/upload_sis');?>
            <?php echo form_open_multipart($open);?>
            <div class="col-md-6">
            <input type="file" name="file" class="form-control">
            </div>
            <div class="col-md-6">
            <input type="submit" name="import" value="Upload" class="btn btn-primary">
            </div>
            <?php echo form_close();?>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
