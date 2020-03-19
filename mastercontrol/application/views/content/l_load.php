<table  class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead style="background-color: #eee;">
                                    <tr>
                                        <th style="width: 50px;text-align: center;">No</th>
                                        <th style="text-align: center;">Soal</th>
                                        <th style="text-align: center;">Kunci</th>
                                        <th style="text-align: center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $x=0;
                                        if($soal == ""){

                                        }else{
                                        foreach ($soal as $datsol) {
                                        $x++;
                                    ?>
                                    <tr class="odd gradeX">
                                        <td style="text-align: center;"><?php echo $x;?></td>
                                        <td><?php echo $datsol->soal;?></td>
                                        <td style="text-align: center;"><?php echo $datsol->kunci;?></td>
                                        <td style="width:150px;text-align: center;">
                                            <a href="" class="btn btn-success btn-sm"><i class=" fa fa-pencil-square-o"></i> Edit</a>
                                            <a onclick="hapus_soal('<?php echo $datsol->id_soal;?>')" class="btn btn-danger btn-sm"><i class=" fa fa-trash-o"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    <?php } ?>
                                </tbody>
                            </table>