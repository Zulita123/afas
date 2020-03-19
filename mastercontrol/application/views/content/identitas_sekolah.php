<?php
    if($status=="edit"){
        $val=$hsl->row_array();
    }else{
        $val['nama_sekolah']="";
        $val['alamat']="";
        $val['no_telp']="";
        $val['email']="";
        $val['website']="";
    }
?>
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Identitas Sekolah</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Identitas Sekolah
                        </div>
                        <form role="form" action="<?php echo site_url($open);?>" method="POST" enctype="multipart/form-data">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">Identitas</div>
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label>Nama Sekolah</label>
                                                <input type="text" name="nama_sekolah" value="<?php echo $val['nama_sekolah'];?>" class="form-control">
                                             </div>
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <textarea class="form-control" name="alamat"><?php echo $val['alamat'];?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>No Telp</label>
                                                <input type="text" name="no_telp" value="<?php echo $val['no_telp'];?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" name="email" value="<?php echo $val['email'];?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Website</label>
                                                <input type="text" name="website" value="<?php echo $val['website'];?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">Logo</div>
                                        <div class="panel-body">
                                            <img src="<?php echo base_url();?>" width="100" height="100">
                                            <input type="file" name="logo" class="form-control">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                    </form>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>