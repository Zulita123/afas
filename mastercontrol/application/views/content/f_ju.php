<?php
    if($status=="edit"){
        $val=$hsl->row_array();
    }else{
        $val['id_jenis']="";
        $val['jenis_ujian']="";
        $val['tgl_awal']="";
        $val['tgl_akhir']="";
        $val['jam']="";
        $val['menit']="";
    }
?>     
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Jenis Ujian</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Jenis Ujian
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo site_url($open);?>" method="POST">
                                        <div class="form-group">
                                            <label>Jenis Ujian</label>
                                            <input type="text" name="jenis_ujian" class="form-control" value="<?php echo $val['jenis_ujian'];?>">
                                            <input type="hidden" name="id_jenis" class="form-control" value="<?php echo $val['id_jenis'];?>">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Tgl Awal</label>
                                            <input type="date" name="tgl_awal" value="<?php echo $val['tgl_awal'];?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Tgl Akhir</label>
                                            <input type="date" name="tgl_akhir" value="<?php echo $val['tgl_akhir'];?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Jam</label>
                                            <input type="text" name="jam" value="<?php echo $val['jam'];?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Menit</label>
                                            <input type="text" name="menit" value="<?php echo $val['menit'];?>" class="form-control">
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