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
                                        <td><input type="checkbox" name="absen[]" id="absen" value="<?php echo $tampil->nis;?>"></td>
                                        <td>
                                            <button class="btn <?php echo $clr;?> btn-xs"><?php echo $tampil->absen;?></button>
                                        </td>
                                    </tr>
                                    <?php
                                        } 
                                    ?>
                                </tbody>
                            </table>
                            <script type="text/javascript">
                                function upd(){
                                    $.ajax({
                                        url:"<?php echo site_url('Absen_Controller/eabsen');?>",
                                        type:"POST",
                                        data:{
                                            nis:$("#absen").val()
                                        },
                                        success:function(){
                                            buka();
                                        }
                                    });
                                }
                            </script>