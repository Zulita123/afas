<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Soal Aktif</h1>
                    <a href="<?php echo site_url('Aktifasi_Controller/page/f_aktifasi');?>" class="btn btn-primary" style="margin-bottom: 10px;">+ Tambah</a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Aktifasi
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Mapel</th>
                                        <th>Kelas</th>
                                        <th>Jenis Ujian</th>
                                        <th>Jumlah Soal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $x=0;
                                        $qwsoal = $this->Aktifasi_Model->qw("*","soal_aktif","GROUP BY id_mapel")->result();
                                        foreach ($qwsoal as $dasol) {
                                            $x++;
                                    ?>
                                    <tr>
                                        <td><?php echo $x;?></td>
                                        <td>
                                            <?php
                                                $id_mapel = $dasol->id_mapel;
                                                $slm = $this->Aktifasi_Model->qw("*","mapel","WHERE id_mapel = '$id_mapel'")->row_array();
                                                echo $slm['mapel'];
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                $slct = $this->Aktifasi_Model->qw("*","soal_aktif","WHERE id_mapel = '$id_mapel' GROUP BY kelas")->result();
                                                foreach ($slct as $dkls) {
                                                    echo $dkls->kelas."&nbsp;";
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                $slctj = $this->Aktifasi_Model->qw("*","soal_aktif","WHERE id_mapel = '$id_mapel' GROUP BY id_jenis")->result();
                                                foreach ($slctj as $djenis) {
                                                    $id_jenis = $djenis->id_jenis;
                                                    $jenis_ujian = $this->Aktifasi_Model->qw("*","jenis_ujian","WHERE id_jenis = '$id_jenis' GROUP BY jenis_ujian")->result();
                                                    foreach ($jenis_ujian as $jts) {
                                                        echo $jts->jenis_ujian."&nbsp;";
                                                    }
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                $hsoal = $this->Aktifasi_Model->qw("*","soal_aktif","WHERE id_mapel = '$id_mapel'")->num_rows();
                                                echo $hsoal;
                                            ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
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
