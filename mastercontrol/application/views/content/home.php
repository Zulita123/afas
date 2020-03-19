<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <h2 style="margin-left: 15px;color:#41bfc8;font-weight: bold; ">AKTIF</h2>
                <div class="col-md-4">
                    <div class="alert alert-info">
                        Selamat Datang, <b><?php echo $this->session->userdata('nama');?></b>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <?php
                                    $jml=$this->db->get('siswa')->num_rows();
                                ?>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $jml;?></div>
                                    <div>Data Siswa</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                 <?php
                                    $jmlg=$this->db->get('guru')->num_rows();
                                ?>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $jmlg;?></div>
                                    <div>Data Guru</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                 <?php
                                    $jmlu=$this->db->get('urutan_kelas')->num_rows();
                                ?>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $jmlu;?></div>
                                    <div>Data Urutan Kelas</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-book fa-5x"></i>
                                </div>
                                 <?php
                                    $jmlm=$this->db->get('mapel')->num_rows();
                                ?>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $jmlm;?></div>
                                    <div>Data Mapel</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel" style="background-color:#16a085;color: #fff;">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <?php
                                    $jml=$this->Master_Model->qw("*","siswa","WHERE status='on'")->num_rows();
                                ?>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $jml;?></div>
                                    <div>Siswa yang Aktif</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>