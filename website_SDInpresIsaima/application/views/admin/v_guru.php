<!--Counter Inbox-->
<?php
$query = $this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
$query2 = $this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
$jum_comment = $query2->num_rows();
$jum_pesan = $query->num_rows();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Guru</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/img/logo-toga.png' ?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap/css/bootstrap.min.css' ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.min.css' ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.css' ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/skins/_all-skins.min.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.css' ?>" />



</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php
    $this->load->view('admin/v_header');
    ?>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">Menu Utama</li>
          <li>
            <a href="<?php echo base_url() . 'admin/dashboard' ?>">
              <i class="fa fa-home"></i> <span>Dashboard</span>
              <span class="pull-right-container">
                <small class="label pull-right"></small>
              </span>
            </a>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-newspaper-o"></i>
              <span>Artikel</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url() . 'admin/tulisan' ?>"><i class="fa fa-list"></i> List Artikel</a></li>
              <li><a href="<?php echo base_url() . 'admin/tulisan/add_tulisan' ?>"><i class="fa fa-thumb-tack"></i> Post Artikel</a></li>
              <li><a href="<?php echo base_url() . 'admin/kategori' ?>"><i class="fa fa-wrench"></i> Kategori</a></li>
            </ul>
          </li>
          <li>
            <a href="<?php echo base_url() . 'admin/pengguna' ?>">
              <i class="fa fa-users"></i> <span>Pengguna</span>
              <span class="pull-right-container">
                <small class="label pull-right"></small>
              </span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url() . 'admin/agenda' ?>">
              <i class="fa fa-calendar"></i> <span>Agenda</span>
              <span class="pull-right-container">
                <small class="label pull-right"></small>
              </span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url() . 'admin/pengumuman' ?>">
              <i class="fa fa-volume-up"></i> <span>Pengumuman</span>
              <span class="pull-right-container">
                <small class="label pull-right"></small>
              </span>
            </a>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-camera"></i>
              <span>Gallery</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url() . 'admin/album' ?>"><i class="fa fa-clone"></i> Album</a></li>
              <li><a href="<?php echo base_url() . 'admin/galeri' ?>"><i class="fa fa-picture-o"></i> Photos</a></li>
            </ul>
          </li>

          <li class="active">
            <a href="<?php echo base_url() . 'admin/guru' ?>">
              <i class="fa fa-graduation-cap"></i> <span>Data Guru</span>
              <span class="pull-right-container">
                <small class="label pull-right"></small>
              </span>
            </a>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-user"></i>
              <span>Kesiswaan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url() . 'admin/siswa' ?>"><i class="fa fa-users"></i> Data Siswa</a></li>
            </ul>
          </li>

          <li>
            <a href="<?php echo base_url() . 'admin/inbox' ?>">
              <i class="fa fa-envelope"></i> <span>Inbox</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-green"><?php echo $jum_pesan; ?></small>
              </span>
            </a>
          </li>

          <li>
            <a href="<?php echo base_url() . 'admin/komentar' ?>">
              <i class="fa fa-comments"></i> <span>Komentar</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-green"><?php echo $jum_comment; ?></small>
              </span>
            </a>
          </li>

          <li>
            <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
              <i class="fa fa-sign-out "></i>
              <span>Logout</span>
              <span class="pull-right-container">
                <small class="label pull-right"></small>
              </span>
            </a>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- logout -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Ingin Keluar?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Pilih "Logut" untuk keluar dari laman ini.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?= base_url(''); ?>">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Data Guru
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Guru</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">

              <div class="box">
                <div class="box-header">
                  <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Add Guru</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-striped" style="font-size:13px;">
                    <thead>
                      <tr>
                        <th>Photo</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Tempat/Tgl Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Kelas</th>
                        <th style="text-align:right;">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 0;
                      foreach ($data->result_array() as $i) :
                        $no++;
                        $id = $i['guru_id'];
                        $nip = $i['guru_nip'];
                        $nama = $i['guru_nama'];
                        $jenkel = $i['guru_jenkel'];
                        $tmp_lahir = $i['guru_tmp_lahir'];
                        $tgl_lahir = $i['guru_tgl_lahir'];
                        $mapel = $i['guru_mapel'];
                        $photo = $i['guru_photo'];

                      ?>
                        <tr>
                          <?php if (empty($photo)) : ?>
                            <td><img width="40" height="40" class="img-circle" src="<?php echo base_url() . 'assets/images/user_blank.png'; ?>"></td>
                          <?php else : ?>
                            <td><img width="40" height="40" class="img-circle" src="<?php echo base_url() . 'assets/images/' . $photo; ?>"></td>
                          <?php endif; ?>
                          <td><?php echo $nip; ?></td>
                          <td><?php echo $nama; ?></td>
                          <td><?php echo $tmp_lahir . ', ' . $tgl_lahir; ?></td>
                          <?php if ($jenkel == 'L') : ?>
                            <td>Laki-Laki</td>
                          <?php else : ?>
                            <td>Perempuan</td>
                          <?php endif; ?>
                          <td><?php echo $mapel; ?></td>
                          <td style="text-align:right;">
                            <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $id; ?>"><span class="fa fa-pencil"></span></a>
                            <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $id; ?>"><span class="fa fa-trash"></span></a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2021 <b>Sd Inpres Isaima</b>.</strong> All rights reserved.
    </footer>


    <!--Modal Add Pengguna-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
            <h4 class="modal-title" id="myModalLabel">Add Guru</h4>
          </div>
          <form class="form-horizontal" action="<?php echo base_url() . 'admin/guru/simpan_guru' ?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">

              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">NIP</label>
                <div class="col-sm-7">
                  <input type="text" name="xnip" class="form-control" id="inputUserName" placeholder="NIP" required>
                </div>
              </div>

              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Nama</label>
                <div class="col-sm-7">
                  <input type="text" name="xnama" class="form-control" id="inputUserName" placeholder="Nama" required>
                </div>
              </div>

              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Jenis Kelamin</label>
                <div class="col-sm-7">
                  <div class="radio radio-info radio-inline">
                    <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
                    <label for="inlineRadio1"> Laki-Laki </label>
                  </div>
                  <div class="radio radio-info radio-inline">
                    <input type="radio" id="inlineRadio1" value="P" name="xjenkel">
                    <label for="inlineRadio2"> Perempuan </label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Tempat Lahir</label>
                <div class="col-sm-7">
                  <input type="text" name="xtmp_lahir" class="form-control" id="inputUserName" placeholder="Tempat Lahir" required>
                </div>
              </div>

              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Tanggal Lahir</label>
                <div class="col-sm-7">
                  <input type="text" name="xtgl_lahir" class="form-control" id="inputUserName" placeholder="Contoh: 25 September 1993" required>
                </div>
              </div>

              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">kelas</label>
                <div class="col-sm-7">
                  <input type="text" name="xmapel" class="form-control" id="inputUserName" placeholder="Contoh: Kelas 1" required>
                </div>
              </div>

              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Photo</label>
                <div class="col-sm-7">
                  <input type="file" name="filefoto" />
                </div>
              </div>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!--Modal Edit Album-->
    <?php foreach ($data->result_array() as $i) :
      $id = $i['guru_id'];
      $nip = $i['guru_nip'];
      $nama = $i['guru_nama'];
      $jenkel = $i['guru_jenkel'];
      $tmp_lahir = $i['guru_tmp_lahir'];
      $tgl_lahir = $i['guru_tgl_lahir'];
      $mapel = $i['guru_mapel'];
      $photo = $i['guru_photo'];
    ?>

      <div class="modal fade" id="ModalEdit<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
              <h4 class="modal-title" id="myModalLabel">Edit Guru</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url() . 'admin/guru/update_guru' ?>" method="post" enctype="multipart/form-data">
              <div class="modal-body">
                <input type="hidden" name="kode" value="<?php echo $id; ?>" />
                <input type="hidden" value="<?php echo $photo; ?>" name="gambar">
                <div class="form-group">
                  <label for="inputUserName" class="col-sm-4 control-label">NIP</label>
                  <div class="col-sm-7">
                    <input type="text" name="xnip" value="<?php echo $nip; ?>" class="form-control" id="inputUserName" placeholder="NIP" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputUserName" class="col-sm-4 control-label">Nama</label>
                  <div class="col-sm-7">
                    <input type="text" name="xnama" value="<?php echo $nama; ?>" class="form-control" id="inputUserName" placeholder="Nama" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputUserName" class="col-sm-4 control-label">Jenis Kelamin</label>
                  <div class="col-sm-7">
                    <?php if ($jenkel == 'L') : ?>
                      <div class="radio radio-info radio-inline">
                        <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
                        <label for="inlineRadio1"> Laki-Laki </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                        <input type="radio" id="inlineRadio1" value="P" name="xjenkel">
                        <label for="inlineRadio2"> Perempuan </label>
                      </div>
                    <?php else : ?>
                      <div class="radio radio-info radio-inline">
                        <input type="radio" id="inlineRadio1" value="L" name="xjenkel">
                        <label for="inlineRadio1"> Laki-Laki </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                        <input type="radio" id="inlineRadio1" value="P" name="xjenkel" checked>
                        <label for="inlineRadio2"> Perempuan </label>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputUserName" class="col-sm-4 control-label">Tempat Lahir</label>
                  <div class="col-sm-7">
                    <input type="text" name="xtmp_lahir" value="<?php echo $tmp_lahir; ?>" class="form-control" id="inputUserName" placeholder="Tempat Lahir" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputUserName" class="col-sm-4 control-label">Tanggal Lahir</label>
                  <div class="col-sm-7">
                    <input type="text" name="xtgl_lahir" value="<?php echo $tgl_lahir; ?>" class="form-control" id="inputUserName" placeholder="Contoh: 25 September 1993" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputUserName" class="col-sm-4 control-label">Mata Pelajaran</label>
                  <div class="col-sm-7">
                    <input type="text" name="xmapel" value="<?php echo $mapel; ?>" class="form-control" id="inputUserName" placeholder="Contoh: PPKN, Matematika" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputUserName" class="col-sm-4 control-label">Photo</label>
                  <div class="col-sm-7">
                    <input type="file" name="filefoto" />
                  </div>
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    <!--Modal Edit Album-->

    <?php foreach ($data->result_array() as $i) :
      $id = $i['guru_id'];
      $nip = $i['guru_nip'];
      $nama = $i['guru_nama'];
      $jenkel = $i['guru_jenkel'];
      $tmp_lahir = $i['guru_tmp_lahir'];
      $tgl_lahir = $i['guru_tgl_lahir'];
      $mapel = $i['guru_mapel'];
      $photo = $i['guru_photo'];
    ?>
      <!--Modal Hapus Pengguna-->
      <div class="modal fade" id="ModalHapus<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
              <h4 class="modal-title" id="myModalLabel">Hapus Guru</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url() . 'admin/guru/hapus_guru' ?>" method="post" enctype="multipart/form-data">
              <div class="modal-body">
                <input type="hidden" name="kode" value="<?php echo $id; ?>" />
                <input type="hidden" value="<?php echo $photo; ?>" name="gambar">
                <p>Apakah Anda yakin mau menghapus guru <b><?php echo $nama; ?></b> ?</p>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    <?php endforeach; ?>




    <!-- jQuery 2.2.3 -->
    <script src="<?php echo base_url() . 'assets/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo base_url() . 'assets/bootstrap/js/bootstrap.min.js' ?>"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url() . 'assets/plugins/datatables/jquery.dataTables.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.min.js' ?>"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url() . 'assets/plugins/slimScroll/jquery.slimscroll.min.js' ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url() . 'assets/plugins/fastclick/fastclick.js' ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() . 'assets/dist/js/app.min.js' ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url() . 'assets/dist/js/demo.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.js' ?>"></script>
    <!-- page script -->
    <script>
      $(function() {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
    <?php if ($this->session->flashdata('msg') == 'error') : ?>
      <script type="text/javascript">
        $.toast({
          heading: 'Error',
          text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
          showHideTransition: 'slide',
          icon: 'error',
          hideAfter: false,
          position: 'bottom-right',
          bgColor: '#FF4859'
        });
      </script>

    <?php elseif ($this->session->flashdata('msg') == 'success') : ?>
      <script type="text/javascript">
        $.toast({
          heading: 'Success',
          text: "Guru Berhasil disimpan ke database.",
          showHideTransition: 'slide',
          icon: 'success',
          hideAfter: false,
          position: 'bottom-right',
          bgColor: '#7EC857'
        });
      </script>
    <?php elseif ($this->session->flashdata('msg') == 'info') : ?>
      <script type="text/javascript">
        $.toast({
          heading: 'Info',
          text: "Guru berhasil di update",
          showHideTransition: 'slide',
          icon: 'info',
          hideAfter: false,
          position: 'bottom-right',
          bgColor: '#00C9E6'
        });
      </script>
    <?php elseif ($this->session->flashdata('msg') == 'success-hapus') : ?>
      <script type="text/javascript">
        $.toast({
          heading: 'Success',
          text: "Guru Berhasil dihapus.",
          showHideTransition: 'slide',
          icon: 'success',
          hideAfter: false,
          position: 'bottom-right',
          bgColor: '#7EC857'
        });
      </script>
    <?php else : ?>

    <?php endif; ?>
</body>

</html>