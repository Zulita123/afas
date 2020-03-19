<?php
    if($status=="edit"){
        $val=$hsl->row_array();
    }else{
        $val['id_thj']="";
        $val['tahun_ajaran']="";
    }
?>     
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Tahun Ajaran</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Tahun Ajaran
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo site_url($open);?>" method="POST">
                                        <div class="form-group">
                                            <label>Tahun Ajaran</label>
                                            <input type="text" name="tahun_ajaran" class="form-control" value="<?php echo $val['tahun_ajaran'];?>">
                                            <input type="hidden" name="id_thj" class="form-control" value="<?php echo $val['id_thj'];?>">
                                            
                                        </div>
                                         <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <option>Aktif</option>
                                                <option>Tidak Aktif</option>
                                            </select>
                                            
                                        </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-default">Batal</button>
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