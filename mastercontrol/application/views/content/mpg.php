<table width="100%" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Mapel</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $no=0;
                foreach($tmp_mpg as $tampil){
                $no++;
            ?>
            <tr class="odd gradeX">
                <td><?php echo $no;?></td>
                <td><?php echo $tampil->mapel;?></td>
                <td>
                    <a class="btn btn-danger btn-sm" onclick="hap('<?php echo $tampil->id_mpg;?>')"><i class=" fa fa-trash-o" ></i> Hapus</a>
                </td>
            </tr>
            <?php 
                }
            ?>
        </tbody>
</table>