
<body>
                                    
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Guru</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Guru
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo site_url('Master_Controller/edit_profil');?>" method="POST">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" name="nama" value="<?php echo $val['nama'];?>" class="form-control">
                                            <input type="hidden" name="id_guru" id="id_guru" value="<?php echo $id_guru;?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="text" name="password" value="<?php echo base64_decode($val['password']);?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" name="alamat"><?php echo $val['alamat'];?></textarea>
                                        </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                            <!-- /.table-responsive -->
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
</body>