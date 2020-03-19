<?php
    if($status=="edit"){
        $val=$hsl->row_array();
    }else{
        $val['id_mapel']="";
        $val['mapel']="";
        $val['jumlah_soal']="";
        $val['kkm1']="";
        $val['kkm2']="";
        $val['kkm3']="";
    }
?>
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Mapel</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Mapel
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo site_url($open);?>" method="POST">
                                        <div class="form-group">
                                            <label>Mapel</label>
                                            <input type="hidden" name="id_mapel" value="<?php echo $val['id_mapel'];?>" class="form-control">
                                            <input type="text" name="mapel" value="<?php echo $val['mapel'];?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Soal</label>
                                            <input type="text" name="jumlah_soal" value="<?php echo $val['jumlah_soal'];?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>KKM X</label>
                                            <input type="text" name="kkm1" value="<?php echo $val['kkm1'];?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>KKM XI</label>
                                            <input type="text" name="kkm2" value="<?php echo $val['kkm2'];?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>KKM XII</label>
                                            <input type="text" name="kkm3" value="<?php echo $val['kkm3'];?>" class="form-control">
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