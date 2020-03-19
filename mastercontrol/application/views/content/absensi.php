<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Absensi Siswa</h1>
                    <?php echo form_open();?>
                    <table class="table" style="width: 80%;">
                                <tr class="tr" >
                                    <td>Kelas</td>
                                </tr>
                                <tr class="td">
                                    <td>
                                        <select class="form-control" name="kelas">
                                            <option value="X" <?php if($this->input->post('kelas')=="X"){echo "selected";}?>>X</option>
                                            <option value="XI" <?php if($this->input->post('kelas')=="XI"){echo "selected";}?>>XI</option>
                                            <option value="XII" <?php if($this->input->post('kelas')=="XII"){echo "selected";}?>>XII</option>
                                        </select>
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-primary">Cari</button>
                                    
                                    </td>
                                </tr>
                            </table>
                    <?php echo form_close();?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Absensi Siswa
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <form action="<?php echo site_url('Absen_Controller/eabsen');?>" method="POST">
                            <table width="100%" class="table table-striped table-bordered table-hover" >
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nis</th>
                                        <th>Nama</th>
                                        <th>Password</th>
                                        <th>Jenis Kelamin</th>
                                        <th>kelas</th>
                                        <th>Urutan kelas</th>
                                        <th><input type="checkbox" id="selectall" onClick="selectAll(this)" /></th>
                                        <th>Absensi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no=0;
                                        foreach($tmp_siswa as $tampil){
                                        $no++;
                                        if($tampil->absen=="belum"){
                                            $clr='btn-danger';
                                        }else{
                                            $clr='btn-success';
                                        }
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $tampil->nis;?></td>
                                        <td><?php echo $tampil->nama;?></td>
                                        <td><?php echo $tampil->password;?></td>
                                        <td><?php echo $tampil->jk;?></td>
                                        <td><?php echo $tampil->kelas;?></td>
                                        <td><?php echo $tampil->urutan_kelas;?></td>
                                        <td><input type="checkbox" name="absen[]" value="<?php echo $tampil->nis;?>"></td>
                                        <td>
                                            <button class="btn <?php echo $clr;?> btn-xs"><?php echo $tampil->absen;?></button>
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
            <input type="submit" name="abs" class="btn btn-success" value="Absen">
             <input type="submit" name="habs" class="btn btn-danger" value="Hapus Absen">
            </form>
<script language="JavaScript">
    function selectAll(source) {
        checkboxes = document.getElementsByName('absen[]');
        for(var i in checkboxes)
            checkboxes[i].checked = source.checked;
    }

</script>
<style type="text/css">
    .table .tr td{
        border :0px;
    }
    .table .td td{
        border :0px;
    }
</style>