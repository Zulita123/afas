<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator Afas Exam</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link href="<?php echo base_url();?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>/assets/dist/css/style.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>/assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>/assets/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>/assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url();?>/assets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="border:10px solid #2f3640">
    <div id="wrapper">

        <!-- Navigation -->

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

            <div class="header-atas">
                <p style="color: #41bfc8; float: right; font-size: 20px;font-weight: bold;margin-right:5px;margin-top: 5px; ">AKTIF</p>
            </div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Administrator</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

                <!-- /.dropdown -->
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <?php
                        if($this->session->userdata('level')=="Admin"){
                    ?>
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo site_url('Master_Controller/page/home');?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <!--
                        <li>
                            <a href="tables.html"><i class="fa fa-university fa-fw"></i> Identitas Sekolah</a>
                        </li>
                        -->
			<!--
                         <li>
                            <a href="<?php /*echo site_url('Absen_Controller/page/absensi');*/?>"><i class="fa fa-send-o fa-fw"></i> Absensi</a>
                        </li>
                        -->
                        <li>
                            <a href="#"><i class="fa fa-database fa-fw"></i> Master<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url('Master_Controller/page/siswa');?>"> Siswa</a>
                                </li>
                                
                                <li>
                                    <a href="<?php echo site_url('Master_Controller/page/guru');?>"> Guru</a>
                                </li>
                                 <li>
                                    <a href="<?php echo site_url('Master_Controller/page/urutan_kelas');?>"> Rombel</a>
                                </li>
                                 <li>
                                    <a href="<?php echo site_url('Master_Controller/page/tahun_ajaran');?>"> Tahun Ajaran</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Mapel_Controller/page/mapel');?>">   Mapel</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Ju_Controller/page/jenis_ujian');?>"> Jenis Ujian</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Master_Controller/page/sesi');?>"> Ruang Ujian</a>
                                </li> 
                            </ul>
                           <!-- /.nav-second-level --> 
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#myModal1"><i class="fa fa-file-pdf-o fa-fw" ></i> Daftar Hadir</a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-file-pdf-o fa-fw"></i> Berita Acara</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Soal<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url('Soal_Controller/lihat_soala');?>" target="_blank">Lihat Soal</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level --> 
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-file fa-fw"></i> Nilai<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url('Nilai_Controller/page/peringkat_mapel');?>">Peringkat Mapel</a>
                                </li>
                                 <li>
                                    <a href="<?php echo site_url('Nilai_Controller/page/peringkat_akademik');?>">Peringkat Akademik</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Nilai_Controller/page/k_nil');?>">Kelola Nilai</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Nilai_Controller/analisis_nilai');?>" target="_blank">Analisis Nilai</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="<?php echo site_url('Aktifasi_Controller/page/f_aktifasi');?>"><i class="fa fa-toggle-on fa-fw"></i> Aktifasi Soal</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Master_Controller/page/reset');?>"><i class="fa fa-trash-o fa-fw"></i> Reset Login Siswa</a>
                        </li>
                        <li>
                          <a href="#"><i class="fa fa-wrench fa-fw"></i> Pengaturan<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                  <a href="<?php echo site_url('Master_Controller/truncate_jawaban');?>" onclick="return confirm('Pastikan Anda Sudah Backup!!!')"> Reset Histori</a>
                              </li>
                              <li>
                                  <a href="<?php echo site_url('Master_Controller/truncate_waktu');?>" onclick="return confirm('Pastikan Anda Sudah Backup!!!')"> Reset Waktu</a>
                              </li>

                              <li>
                                  <a href="<?php echo site_url('Nilai_Controller/analisis_nilai');?>" target="_blank">Backup Nilai</a>
                              </li>

                          </ul>
                           <!-- /.nav-second-level --> 
                      </li>
                        <li>
                            <a href="<?php echo site_url('Login_Controller/logout');?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <?php }elseif($this->session->userdata('level')=="Guru"){ ?>
                      <ul class="nav" id="side-menu">
                      <li>
                          <a href="<?php echo site_url('Master_Controller/page/home');?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                      </li>
                     
                      <li>
                          <a href="tables.html"><i class="fa fa-university fa-fw"></i> Identitas Sekolah</a>
                      </li>
                      
                       <li>
                          <a href="<?php /*echo site_url('Absen_Controller/page/absensi');*/?>"><i class="fa fa-send-o fa-fw"></i> Absensi</a>
                      </li>
                      
                      <li>
                          <a href="#"><i class="fa fa-database fa-fw"></i> Master<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                  <a href="<?php echo site_url('Master_Controller/page/siswa');?>"> Siswa</a>
                              </li>
                          </ul>
                           <!-- /.nav-second-level --> 
                      </li>
                      <li>
                          <a href="#" data-toggle="modal" data-target="#myModal1"><i class="fa fa-file-pdf-o fa-fw" ></i> Daftar Hadir</a>
                      </li>
                      <li>
                          <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-file-pdf-o fa-fw"></i> Berita Acara</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-file fa-fw"></i> Nilai<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                  <a href="<?php echo site_url('Nilai_Controller/page/peringkat_mapel');?>">Peringkat Mapel</a>
                              </li>
                               <li>
                                  <a href="<?php echo site_url('Nilai_Controller/page/peringkat_akademik');?>">Peringkat Akademik</a>
                              </li>
                              <li>
                                  <a href="<?php echo site_url('Nilai_Controller/page/k_nil');?>">Kelola Nilai</a>
                              </li>
                              <li>
                                  <a href="<?php echo site_url('Nilai_Controller/analisis_nilai');?>" target="_blank">Analisis Nilai</a>
                              </li>
                          </ul>
                           <!-- /.nav-second-level --> 
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-files-o fa-fw"></i> Soal<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
				<li>
                                    <a href="<?php echo site_url('Soal_Controller/page/f_soal');?>">Input Soal</a>
                                </li>
                              <li>
                                  <a href="<?php echo site_url('Soal_Controller/lihat_soala');?>" target="_blank">Lihat Soal</a>
                              </li>
                          </ul>
                           <!-- /.nav-second-level --> 
                      </li>
                       <li>
                          <a href="<?php echo site_url('Aktifasi_Controller/page/f_aktifasi');?>"><i class="fa fa-toggle-on fa-fw"></i> Aktifasi Soal</a>
                      </li>

                      <li>
                          <a href="<?php echo site_url('Master_Controller/page/reset');?>"><i class="fa fa-trash-o fa-fw"></i> Reset Login Siswa</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-wrench fa-fw"></i> Pengaturan<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                  <a href="<?php echo site_url('Master_Controller/truncate_jawaban');?>" onclick="return confirm('Pastikan Anda Sudah Backup!!!')"> Reset Histori</a>
                              </li>
                              <li>
                                  <a href="<?php echo site_url('Master_Controller/truncate_waktu');?>" onclick="return confirm('Pastikan Anda Sudah Backup!!!')"> Reset Waktu</a>
                              </li>

                              <li>
                                  <a href="<?php echo site_url('Nilai_Controller/analisis_nilai');?>" target="_blank">Backup Nilai</a>
                              </li>

                          </ul>
                           <!-- /.nav-second-level --> 
                      </li>
                      <li>
                          <a href="<?php echo site_url('Login_Controller/logout');?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                      </li>
                  </ul>
                    <?php }else{ ?>
                        <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo site_url('Master_Controller/page/home');?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        
                        <li>
                            <a href="tables.html"><i class="fa fa-university fa-fw"></i> Identitas Sekolah</a>
                        </li>
                        
                         <li>
                            <a href="<?php /*echo site_url('Absen_Controller/page/absensi');*/?>"><i class="fa fa-send-o fa-fw"></i> Absensi</a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-database fa-fw"></i> Master<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url('Master_Controller/page/siswa');?>"> Siswa</a>
                                </li>
                            </ul>
                             <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#myModal1"><i class="fa fa-file-pdf-o fa-fw" ></i> Daftar Hadir</a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-file-pdf-o fa-fw"></i> Berita Acara</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-file fa-fw"></i> Nilai<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url('Nilai_Controller/page/peringkat_mapel');?>">Peringkat Mapel</a>
                                </li>
                                 <li>
                                    <a href="<?php echo site_url('Nilai_Controller/page/peringkat_akademik');?>">Peringkat Akademik</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Nilai_Controller/page/k_nil');?>">Kelola Nilai</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Nilai_Controller/analisis_nilai');?>" target="_blank">Analisis Nilai</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Soal<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url('Soal_Controller/lihat_soala');?>" target="_blank">Lihat Soal</a>
                                </li>
                            </ul>
                             <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="<?php echo site_url('Aktifasi_Controller/page/f_aktifasi');?>"><i class="fa fa-toggle-on fa-fw"></i> Aktifasi Soal</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Master_Controller/page/reset');?>"><i class="fa fa-trash-o fa-fw"></i> Reset Login Siswa</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Pengaturan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url('Master_Controller/truncate_jawaban');?>" onclick="return confirm('Pastikan Anda Sudah Backup!!!')"> Reset Histori</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Master_Controller/truncate_waktu');?>" onclick="return confirm('Pastikan Anda Sudah Backup!!!')"> Reset Waktu</a>
                                </li>

                                <li>
                                    <a href="<?php echo site_url('Nilai_Controller/analisis_nilai');?>" target="_blank">Backup Nilai</a>
                                </li>

                            </ul>
                             <!-- /.nav-second-level --> 
                        </li>
                        <li>
                            <a href="<?php echo site_url('Login_Controller/logout');?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                  <?php } ?>
                </div>
                 <!-- /.sidebar-collapse --> 
            </div>
             <!-- /.navbar-static-side --> 
        </nav>

        <div id="page-wrapper">
            <?php include "content/".$home.".php";?>
             <!-- /.row --> 
             <!-- /.row -->
        </div>
        <div class="footer" style="text-align: center;color: #fff;padding: 10px;">
           Copyright &copy 2011-2020 SMK Wikrama 1 Jepara
        </div>
         /#page-wrapper

    </div>
    <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">

       Modal content
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Daftar Hadir</h4>
        </div>
        <div class="modal-body">
             <form class="form-horizontal" action="<?php echo site_url('Master_Controller/cetak_dh');?>" method="POST" target="_blank">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Tanggal :</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" name="tanggal">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Pukul :</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="waktu1">
      </div>
       <div class="col-sm-4">
        <input type="text" class="form-control" name="waktu2">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Mapel :</label>
      <div class="col-sm-10">
        <select class="form-control" id="id_mapel" name="mapel">
            <?php
                $mpl=$this->db->query('SELECT * FROM mapel')->result();
                foreach($mpl as $tmp){
            ?>
            <option><?php echo $tmp->mapel;?></option>
            <?php } ?>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Ruang :</label>
      <div class="col-sm-10">
        <select class="form-control" id="id_sesi" name="id_sesi">
            <?php
                $ss=$this->db->query('SELECT * FROM sesi')->result();
                foreach($ss as $tmp){
            ?>
            <option value="<?php echo $tmp->id_sesi;?>"><?php echo $tmp->sesi;?></option>
            <?php } ?>
        </select>
    </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Sesi :</label>
      <div class="col-sm-10">
        <select class="form-control" id="ses" name="ses">
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
    </div>
    </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Cetak</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>

    </div>
  </div>
      <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog" style="width: 800px;">

      <!-- Modal content-->
      <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Berita Acara</h4>
        </div>
        <div class="modal-body">
                      <form class="form-horizontal" action="<?php echo site_url('Master_Controller/cetak_ba');?>" method="POST" target="_blank">
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Ruang</label>
      <div class="col-sm-4">
        <select class="form-control" id="id_sesi" name="id_sesi">
            <?php
                $ss=$this->db->query('SELECT * FROM sesi')->result();
                foreach($ss as $tmp){
            ?>
            <option value="<?php echo $tmp->id_sesi;?>"><?php echo $tmp->sesi;?></option>
            <?php } ?>
        </select>
      </div>
      <label class="control-label col-sm-2" for="pwd">Sesi :</label>
      <div class="col-sm-4">
        <select class="form-control" id="ses" name="ses">
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
      </div>
    </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="email">Tanggal</label>
      <div class="col-sm-4">
        <input type="date" name="tgl" class="form-control">
      </div>

      <label class="control-label col-sm-2" for="email">Mapel</label>
      <div class="col-sm-4">
        <select class="form-control" id="id_mapel" name="mapel">
            <?php
                $mpl=$this->db->query('SELECT * FROM mapel')->result();
                foreach($mpl as $tmp){
            ?>
            <option><?php echo $tmp->mapel;?></option>
            <?php } ?>
        </select>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Waktu Mulai</label>
      <div class="col-sm-4">
        <input type="text" name="wkt1" class="form-control">
      </div>
      <label class="control-label col-sm-2" for="pwd">Waktu Selesai</label>
      <div class="col-sm-4">
        <input type="text" name="wkt2" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Penanggung Jawab</label>
      <div class="col-sm-5">
        <input type="text" name="pj" class="form-control">
      </div>
      <label class="control-label col-sm-1" for="pwd">NIP</label>
      <div class="col-sm-4">
        <input type="text" name="nip1" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Proktor Ruang</label>
      <div class="col-sm-5">
        <input type="text" name="pr" class="form-control">
      </div>
      <label class="control-label col-sm-1" for="pwd">NIP</label>
      <div class="col-sm-4">
        <input type="text" name="nip2" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Pengawas</label>
      <div class="col-sm-5">
        <input type="text" name="pengawas" class="form-control">
      </div>
      <label class="control-label col-sm-1" for="pwd">NIP</label>
      <div class="col-sm-4">
        <input type="text" name="nip3" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Jumlah Tidak Hadir</label>
      <div class="col-sm-2">
        <input type="text" name="jth" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Username Tidak Hadir</label>
      <div class="col-sm-4">
        <input type="text" name="uth" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Catatan</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="catatan"></textarea>
      </div>
    </div>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-success">Cetak</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </form>
    </div>
  </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>/assets/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
        <script type="text/javascript">
            CKEDITOR.replace('soal',{
                filebrowserBrowseUrl : '<?php echo base_url();?>assets/ckeditor/plugins/fileman/index.html',
                filebrowserImageBrowseUrl : "<?php echo base_url();?>assets/ckeditor/plugins/fileman/index.html?type=image"
            })
        </script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>/assets/vendor/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendor/datatables-responsive/dataTables.responsive.js"></script>
    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url();?>/assets/vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendor/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url();?>/assets/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>/assets/dist/js/sb-admin-2.js"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
        $("#ktk").load("<?php echo site_url('Soal_Controller/l_soal');?>");

    });
    </script>

</body>

</html>
