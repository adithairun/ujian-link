<?php
		include '../../class/Database.php';

			?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Edit Data</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Data Siswa Akan Dihapus');
}
</script>
</head>
<body class="hold-transition sidebar-mini">



<?php
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>






<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">

        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">

          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->

            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>

            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->

            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>

        </div>
      </li>
      <!-- Notifications Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../home.php" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="../home.php" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Menu
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
			<li class="nav-item">
                <a href="admin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Admin</p>
                </a>
              </li>
          <!--    <li class="nav-item">
                <a href="upload.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upload Data</p>
                </a>
              </li> -->
			  <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Data</p>
                </a>
              </li>







        </ul>
		 <li class="nav-item has-treeview">
            <a href="hari.php" class="nav-link">
              <i class="nav-icon fas fa-calendar"></i>
              <p>
                Data Hari

              </p>
            </a>
           </li>

		   <li class="nav-item has-treeview">
            <a href="kelas.php" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>
                Data Kelas

              </p>
            </a>
           </li>

					 <li class="nav-item has-treeview">
		            <a href="soal.php" class="nav-link  active">
		              <i class="nav-icon fas fa-paste"></i>
		              <p>
		                Data Soal

		              </p>
		            </a>
		           </li>

      </nav>
      <!-- /.sidebar-menu -->
    </div>

    <li class="navbar">
      <a href="../keluar.php" class="fas fa-arrow-alt-circle-left">

        Keluar
      </a>
    </li>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Token</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../home.php">Home</a></li>
              <li class="breadcrumb-item active">Edit Kode Token</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Edit Kode Token</h3>
            </div>
            <!-- /.card-header -->
         	<div class="card-body">

									<button class="btn btn-success" data-toggle="modal" data-target="#form_modal"><span
											class="fas fa-plus-circle"></span> Tambah Hari</button>
									<table id="example1" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>NO</th>
												<th>AKSI</th>
												<th>NAMA MAPEL</th>
												<th>HARI KE</th>
												<th>KELAS</th>

												<th>LINK SOAL</th>





											</tr>
										</thead>
										<tbody>
											<?php

				$no=1;

					//$query = mysqli_query($koneksi, "SELECT * FROM storage ORDER BY perbaiki ASC") or die(mysqli_error());

					$query = mysqli_query($koneksi, "SELECT soal.id_soal, soal.nama_mapel, soal.link_soal, hari.nama_hari, kelas.nama_kelas from soal INNER JOIN hari on soal.id_soal = hari.id_hari  INNER JOIN kelas on hari.id_hari = kelas.id_kelas ") or die(mysqli_error());



							while($fetch = mysqli_fetch_array($query)){

				?>

											<tr class="del_student<?php echo $fetch['id_soal']?>">

												<th><?php echo $no++; ?></th>

												<td>
													<center>

														<button class="btn btn-success" data-toggle="modal"
															data-target="#edit_modal<?php echo $fetch['id_soal']?>"><span
																class="ion-compose"></span> Edit</button>

														<a href="hapus_soal.php?id_soal=<?php echo $fetch['id_soal'];?>"
															onclick="return confirm('Hari Akan Dihapus, Lanjutkan ?')"><button
																class="btn btn-warning"> <span
																	class="ion-trash-a"></span> Hapus Hari</button></a>



														<!--						 <button class="btn btn-success btn-lg active" role="button" data-toggle="modal" data-target="#exampleModal" aria-pressed="true">Bantuan</button> -->

														<div class="modal-footer">







														</div>

												</td>


													<td><?php echo $fetch['nama_mapel']?></td>
												<td><?php echo $fetch['nama_hari']?></td>


												<td><?php echo $fetch['nama_kelas']?></td>

												<td><?php echo $fetch['link_soal']?></td>









												<!-- DISBALE PERINGATAN DATABLE -->

												<script type="text/javascript">
													window.alert = (function () {

														var nativeAlert = window.alert;

														return function (message) {

															window.alert = nativeAlert;

															message.indexOf("DataTables warning") === 0 ?

																console.warn(message) :

																nativeAlert(message);

														}

													})();
												</script>



												<?php
 														include '../../class/Database.php';
														$query1 = "SELECT * FROM kelas";
														$result = mysqli_query($koneksi, $query1);


													?>



												<div class="modal fade" id="edit_modal<?php echo $fetch['id_hari']?>"
													aria-hidden="true">

													<div class="modal-dialog modal-dialog-centered">

														<div class="modal-content">

															<form autocomplete="off" method="POST"
																action="update_hari.php">

																<div class="modal-header">

																	<h4 class="modal-title">Ubah Ekstrakulikuler</h4>

																</div>

																<div class="modal-body">

																	<div class="col-md-3"></div>

																	<div class="col-md-6">

																		<div class="form-group">



																			<input type="hidden" name="id_hari"
																				value="<?php echo $fetch['id_hari']?>"
																				class="form-control" />



																		</div>





																		<div class="form-group">

																			<label>Nama Hari</label>

																			<input type="text" name="nama_hari"
																				class="form-control"
																				value="<?php echo $fetch['nama_hari']?>"
																				required="required" />
														<!--						<div id="result1"></div> -->

																		</div>




																		<div class="form-group">

																			<label>HREF Hari</label>

																			<input type="text" readonly name="href_hari"
																				class="form-control"
																				value="<?php echo $fetch['href_hari']?>"
																				required="required" />
														<!--						<div id="result1"></div> -->

																		</div>

																		<div class="form-group">

																			<label>KODE Hari</label>

																			<input type="text" name="kd_hari"
																				class="form-control"
																				value="<?php echo $fetch['kd_hari']?>"
																				required="required" />
														<!--						<div id="result1"></div> -->

																		</div>




																		<div class="form-group">
																			<label>Pilih Kelas</label>
																			<select name="id_kelas"
																				class="form-control"
																				required="required">
																				<option value="">Pilih Kelas</option>
																				<?php


									while($data = mysqli_fetch_assoc($result) ){?>

																				<option
																					value="<?php echo $data['id_kelas']; ?>">
																					<?php echo $data['nama_kelas']; ?>
																				</option>

																				<?php } ?>
																			</select>
																		</div>





																	</div>

																</div>

																<div style="clear:both;"></div>

																<div class="modal-footer">

																	<button type="button" class="btn btn-danger"
																		data-dismiss="modal"><span
																			class="glyphicon glyphicon-remove"></span>
																		Tutup</button>

																	<button name="update" class="btn btn-warning"><span
																			class="glyphicon glyphicon-save"></span>
																		Ubah</button>

																</div>

															</form>

														</div>

													</div>

												</div>

												<script type="text/javascript">
					$(document).ready(function() {
						$('#nama_ekskul1').keyup(function() {
							var uname = $('#nama_ekskul1').val();
							if(uname == 0) {
								$('#result1').text('');
							}
							else {
								$.ajax({
									url: 'backend/cek_ekskul1.php',
									type: 'POST',
									data: 'nama_ekskul1='+uname,
									success: function(hasil) {
										if(hasil > 0) {
											$('#result1').text('Ekstrakulikuler Tidak Bisa diubah, atau sama dengan ekskul yang sudah ada');
										}
										else {
											$('#result1').text('Ekstrakulikuler Bisa Ditambah');
										}
									}
								});
							}
						});
					});
				</script>

												<?php
 include '../../class/Database.php';;
$query1 = "SELECT * FROM kelas order by nama_kelas";
$result = mysqli_query($koneksi, $query1);


?>
												<div class="modal fade" id="form_modal" aria-hidden="true">
													<div class="modal-dialog modal-dialog-centered">
														<div class="modal-content">

															<form autocomplete="off" method="POST"
																action="save_hari.php">
																<div class="modal-header">
																	<h4 class="modal-title">Tambah Akun Pembina</h4>
																</div>
																<div class="modal-body">
																	<div class="col-md-3"></div>
																	<div class="col-md-6">

																	<div class="form-group">

																			<label>NAMA HARI </label>

																			<input type="text" id="nama_ekskul" name="nama_hari"
																				class="form-control"
																				required="required" />
																				<div id="result"></div>
																		</div>

																		<div class="form-group">
																			<label>Pilih Kelas</label>
																			<select name="id_kelas"
																				class="form-control"
																				required="required">
																				<option value="">Pilih Kelas</option>
																				<?php


									while($data = mysqli_fetch_assoc($result) ){?>

																				<option
																					value="<?php echo $data['id_kelas']; ?>">
																					<?php echo $data['nama_kelas']; ?>
																				</option>

																				<?php } ?>
																			</select>
																		</div>

																		<div class="form-group">

																				<label>HREF HARI </label>

																				<input type="text" name="href_hari"
																					class="form-control"
																					required="required" />
																					<div id="result"></div>
																			</div>



																		<div class="form-group">
																			<label>KD HARI</label>
																			<input type="text" name="kd_hari"
																				class="form-control"
																				required="required" />
																		</div>




																	</div>
																</div>
																<div style="clear:both;"></div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-danger"
																		data-dismiss="modal"><span
																			class="glyphicon glyphicon-remove"></span>
																		Tutup</button>
																	<button name="save" class="btn btn-primary"><span
																			class="fas fa-plus-circle"></span>
																		Tambah</button>
																</div>
															</form>
														</div>
													</div>

													<?php

					}

				?>

										</tbody>

									</table>

								</div>


								<script type="text/javascript">
	$(document).ready(function() {
		$('#nama_ekskul').keyup(function() {
			var uname = $('#nama_ekskul').val();
			if(uname == 0) {
				$('#result').text('');
			}
			else {
				$.ajax({
					url: 'backend/cek_ekskul.php',
					type: 'POST',
					data: 'nama_ekskul='+uname,
					success: function(hasil) {
						if(hasil > 0) {
							$('#result').text('Ekstrakulikuler Tidak Bisa Ditambah, Karena Sudah Ada');
						}
						else {
							$('#result').text('Ekstrakulikuler Bisa Ditambah');
						}
					}
				});
			}
		});
	});
</script>




								<div class="modal fade" id="modal_confirm" aria-hidden="true">

									<div class="modal-dialog modal-dialog-centered">

										<div class="modal-content">

											<div class="modal-header">

												<h3 class="modal-title">Hapus Data Pengguna</h3>

											</div>

											<div class="modal-body">

												<center>
													<h4 class="text-danger">Hanya bisa menghapus pengguna yang telah
														mengupload, File yang pengguna upload akan terhapus.</h4>
												</center>

												<center>
													<h3 class="text-danger">Lanjutkan ?</h3>
												</center>

											</div>

											<div class="modal-footer">

												<button type="button" class="btn btn-danger"
													data-dismiss="modal">Tidak</button>

												<button type="button" class="btn btn-success" id="btn_yes">Ya</button>

											</div>

										</div>

									</div>

								</div>











								<!-- UPDATE STATUS -->



								<!-- Modal -->

								<div class="modal fade" id="exampleModal<?php echo $fetch['id_hari']?>" tabindex="-1"
									role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

									<div class="modal-dialog" role="document">

										<div class="modal-content">

											<div class="modal-header">

												<h5 class="modal-title" id="exampleModalLabel">Kontak Bantuan</h5>

												<button type="button" class="close" data-dismiss="modal"
													aria-label="Close">

													<span aria-hidden="true">&times;</span>

												</button>

											</div>

											<div class="modal-body">

												<div class="col-md-3"></div>

												<div class="col-md-6">

													<div class="form-group">

														<label>NISN</label>

														<input type="hidden" name="id_hari"
															value="<?php echo $fetch1['id_hari']?>"
															class="form-control" />

														<input type="number" name="status"
															value="<?php echo $fetch1['status']?>" class="form-control"
															readonly="readonly" />

													</div>

													<!--

						<div class="form-group">

							<label>Firstname</label>

							<input type="text" name="firstname" value="<?php echo $fetch['firstname']?>" class="form-control" required="required"/>

						</div>

						<div class="form-group">

							<label>Lastname</label>

							<input type="text" name="lastname" value="<?php echo $fetch['lastname']?>" class="form-control" required="required"/>

						</div>

						<div class="form-group">

							<label>Jenis Kelamin</label>

							<select name="gender" class="form-control" required="required">

								<option value=""></option>

								<option value="L">Laki-laki</option>

								<option value="P">Perempuan</option>

							</select>

						</div>

						<div class="form-inline">

							<label>Year</label>

							<select name="year" class="form-control" required="required">

								<option value=""></option>

								<option value="1">1</option>

								<option value="2">2</option>

								<option value="3">3</option>

								<option value="4">4</option>

							</select>

							<label>Section</label>

							<select name="section" class="form-control" required="required">

								<option value=""></option>

								<option value="A">A</option>

								<option value="B">B</option>

								<option value="C">C</option>

								<option value="D">D</option>

							</select>

						</div>

						<br /> -->

													<h1><?php echo $fetch1['file_type']?></h1>

													<div class="form-group">

														<label>Password</label>

														<input type="text" name="password" class="form-control"
															value="<?php echo $fetch['tgl_lahir']?>"
															required="required" />

													</div>

												</div>

											</div>

											<div style="clear:both;"></div>

											<div class="modal-footer">

												<button type="button" class="btn btn-danger" data-dismiss="modal"><span
														class="glyphicon glyphicon-remove"></span> Close</button>

												<button name="update" class="btn btn-warning"><span
														class="glyphicon glyphicon-save"></span> Update</button>

												<div class="modal-footer">

													<button type="button" class="btn btn-secondary"
														data-dismiss="modal">Tutup</button>



												</div>

											</div>

										</div>

									</div>



									<!-- AKHIR UPDATE STATUS -->


















<!-- Jangan menghapus atau mengubah bagian footer, tolong hargailah pengembang awal -->
  <footer class="main-footer">
    <strong> &copy; 2020 <a href="http://instagram.com/adithairun">Adit Hairun</a> All rights reserved. | Template By <a href="http://adminlte.io">AdminLTE.io</a>.</strong>

    <div class="float-right d-none d-sm-inline-block">
      <b>v</b>1.2
    </div>
  </footer>
  <!-- Jangan menghapus atau mengubah bagian footer, tolong hargailah pengembang awal -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
