<?php 
  $dtss="Nilai".date("Y-m-d").".xls";
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename='$dtss'");
?>
<table>
  <tr>
    <td colspan="5" style="font-weight: bold;text-align: center;">Data Nilai Mapel</td>
  </tr>
  <tr>
    <td colspan="5" style="font-weight: bold;text-align: center"><?php echo $mpl;?></td>
  </tr>
</table>
<br>
<table border="1">
  <tr>
    <th>No</th>
    <th>Nis</th>
    <th>Nama</th>
    <th>Urutan Kelas</th>
    <th>Nilai</th>
  </tr>
  <?php
    $no=0;
    foreach ($nil as $dt) {
    $no++;
  ?>
  <tr>
    <td><?php echo $no;?></td>
    <td><?php echo $dt->nis;?></td>
    <td><?php echo $dt->nama;?></td>
    <td><?php echo $dt->urutan_kelas;?></td>
    <td><?php echo $dt->nilai;?></td>
  </tr>
  <?php } ?>
</table>