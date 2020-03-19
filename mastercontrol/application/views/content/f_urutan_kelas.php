<?php
    if($status=="edit"){
        $val=$hsl->row_array();
    }else{
        $val['id_uk']="";
        $val['urutan_kelas']="";
    }
?>
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Rombel</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Rombel
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo site_url($open);?>" method="POST">
                                        <div class="form-group">
                                            <label>Rombel</label>
                                            <input type="hidden" name="id_uk" value="<?php echo $val['id_uk'];?>" class="form-control">
                                            <input type="text" name="urutan_kelas" value="<?php echo $val['urutan_kelas'];?>" class="form-control">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-default">Batal</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>