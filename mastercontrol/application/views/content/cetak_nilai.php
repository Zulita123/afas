<!DOCTYPE html>
<html>
<head>
    <title>Cetak Nilai</title>
    <link href="<?php echo base_url();?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link href="<?php echo base_url();?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>/assets/dist/css/style.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>/assets/dist/css/sb-admin-2.css" rel="stylesheet">
    <style type="text/css">
        .table .tr td{
            border :0px;
        }
        .table .td td{
            border :0px;
        }
    </style>    
</head>
<body>
    <div class="col-md-12">
                    <h1 style="text-align: center;">Data Nilai <?php echo $mpl;?></h1>
                    <h3  style="text-align: center;"><?php echo $jns;?></h3>
                            <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead style="background-color: #eee;">
                                    <tr>
                                        <th style="width: 50px;text-align: center;">No</th>
                                        <th style="text-align: center;">Nis</th>
                                        <th style="text-align: center;">Nama</th>
                                        <th style="text-align: center;">Urutan Kelas</th>
                                        <th style="text-align: center;">Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $x=0;
                                        foreach($nil as $tampil){ 
                                        $x++;
                                    ?>
                                    <tr class="odd gradeX">
                                        <td style="text-align: center;"><?php echo $x;?></td>
                                        <td style="text-align: center;"><?php echo $tampil->nis;?></td>
                                        <td><?php echo $tampil->nama;?></td>
                                        <td><?php echo $tampil->urutan_kelas;?></td>
                                        <td style="text-align: center;"><?php echo $tampil->nilai;?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        <!-- /.panel-body -->
                    
                    <!-- /.panel -->
    </div>
</body>
</html>
<script src="<?php echo base_url();?>/assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
    window.print();
</script>