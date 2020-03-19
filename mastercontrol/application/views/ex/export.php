<?php 
  $dtss="siswa".date("Y-m-d").".xls";
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=$dtss");
?>
<table border="1">
  <tr>
    <th>Nis</th>
    <th>Nama</th>
    <th>Password</th>
    <th>Jenis Kelamin</th>
    <th>Kelas</th>
    <th>ID Urutan Kelas</th>
    <th>ID Ruang</th>
    <th>Sesi</th>
    <th>Status</th>
    <th>Absen</th>
  </tr>
  <?php
    foreach ($sis as $dt) {
  ?>
  <tr>
    <td><?php echo $dt->nis;?></td>
    <td><?php echo $dt->nama;?></td>
    <td><?php echo $dt->password;?></td>
    <td><?php echo $dt->jk;?></td>
    <td><?php echo $dt->kelas;?></td>
    <td><?php echo $dt->id_uk;?></td>
    <td><?php echo $dt->id_sesi;?></td>
    <td><?php echo $dt->ses;?></td>
    <td><?php echo $dt->status;?></td>
    <td><?php echo $dt->absen;?></td>
  </tr>
  <?php } ?>
</table>
<br/><br/><br/>
<table border="1">
  <tr>
    <th colspan="2">Data Rombel</th>
  </tr>
  <tr>
    <th>ID Rombel</th>
    <th>Urutan Kelas</th>
  </tr>
  <?php
    $rombel = $this->Master_Model->qw("*","urutan_kelas","")->result();
    foreach ($rombel as $drom) {
  ?>
  <tr>
    <td><?php echo $drom->id_uk;?></td>
    <td><?php echo $drom->urutan_kelas;?></td>
  </tr>
  <?php } ?>
</table>
<br>
<br>
<table border="1">
  <tr>
    <th colspan="2">Data Ruang</th>
  </tr>
  <tr>
    <th>ID Ruang</th>
    <th>Ruang</th>
  </tr>
  <?php
    $rg = $this->Master_Model->qw("*","sesi","")->result();
    foreach ($rg as $dr) {
  ?>
  <tr>
    <td><?php echo $dr->id_sesi;?></td>
    <td><?php echo $dr->sesi;?></td>
  </tr>
  <?php } ?>
</table>