<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Guru</h1>
                    <a href="<?php echo site_url('Master_Controller/page/f_guru');?>" class="btn btn-primary" style="margin-bottom: 10px;">+ Tambah</a>
                    <a data-toggle="modal" data-target="#myModal" href="#" class="btn btn-success " style="margin-bottom: 10px;">Import</a>
                    <a href="<?php echo site_url('Master_Controller/gru');?>" class="btn btn-warning" style="margin-bottom: 10px;">Export</a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Guru
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Password</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no=0;
                                        foreach($tmp_guru as $tampil){
                                        $no++;
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $tampil->nama;?></td>
                                        <td><?php echo base64_decode($tampil->password);?></td>
                                        <td><?php echo $tampil->alamat;?></td>
                                        <td>
                                            <a href="<?php echo site_url('Master_Controller/page/mapel_guru');?>/<?php echo $tampil->id_guru;?>" class="btn btn-warning btn-sm"><i class=" fa fa-graduation-cap"></i> Mapel</a>
                                            <a href="<?php echo site_url('Master_Controller/page/f_guru');?>/<?php echo $tampil->id_guru;?>" class="btn btn-success btn-sm"><i class=" fa fa-pencil-square-o"></i> Edit</a>
                                            <a href="<?php echo site_url('Master_Controller/hapus_siswa');?>/<?php echo $tampil->id_guru;?>" class="btn btn-danger btn-sm"><i class=" fa fa-trash-o"></i> Hapus</a>
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