<?php
    if($status=="edit"){
        $val=$hsl->row_array();
        $id_guru=$val['id_guru'];
    }else{
        $id_guru=$id;
        $val['id_guru']="";
        $val['nama']="";
        $val['password']="";
        $val['alamat']="";
    }
?>
<script type="text/javascript">
    function buka_tab(xx){
        xx=$("#id_guru").val();
        $("#bbb").load("<?php echo site_url('Master_Controller/tm_mpg');?>"+"/"+xx);
    }
    function tmb(){
        $.ajax({
          url:"<?php echo site_url('Master_Controller/simpan_mg');?>",
          type:"POST",
          data:{
            id_guru:$("#id_guru").val(),
            id_mapel:$("#id_mapel").val()
          },
          success:function(hasil){
            buka_tab();
          }
        });
  }
  function hap(a){
        $.ajax({
            url:'<?php echo site_url('Master_Controller/hapus_mpg');?>',
            type:"POST",
            data:{
                id_mpg: a
            },
            success:function(data){
                buka_tab();
            }
        })  
    }
</script>
<body onload="buka_tab()">
                                    
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
                            Input Guru
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo site_url($open);?>" method="POST">
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
                                        <div class="form-group">
                                            <label>Mapel</label>
                                            <select class="form-control" name="mapel" id="id_mapel">
                                                <option>--Pilih--</option>
                                                <?php
                                                    $mp=$this->db->get('mapel')->result();
                                                    foreach($mp as $tampil){ 
                                                ?>
                                                <option value="<?php echo $tampil->id_mapel;?>"><?php echo $tampil->mapel;?></option>
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <a class="btn btn-primary" style="margin-bottom: 10px;" onclick="tmb()">+ Tambah</a>
                            <div id="bbb">
                                
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
</body>