<!DOCTYPE html>
<?php
		include '../../class/Database.php';
		
			?>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PRESENSI-WFH</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="../plugins/jquery/jquery.min.js"></script>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="../dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="index3.html" class="nav-link">Home</a>
				</li>

			</ul>

			<!-- SEARCH FORM -->


			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">

				<!-- Notifications Dropdown Menu -->

				<li class="nav-item">
					<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
						<i class="fas fa-th-large"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="#" class="brand-link">

				<span class="brand-text font-weight-light">
					<center>PRESENSI-WFH</center>
				</span>
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
            <a href="#" class="nav-link active">
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
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Data</p>
                </a>
              </li>





        </ul>
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
							<h1>Data Ekstrakulikuler</h1>
						</div>

						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Data Ekstrakulikuler</li>
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

							<!-- /.card-header -->

							<!-- DATA TABLE UNTUK TES -->
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Data Ekstrakulikuler</h3>

									<form method="post" enctype="multipart/form-data" action="backend/upload_ekskul">
									<br>
									Pilih File: <br>

									<input name="filepegawai" type="file" required="required"> <br><br>

									<b>Petunjuk</b><br>

									<a style="color:black">*Download Template file excel <a href="file/template-ekskul.xls">Download</a><br><br>




									<button class="btn btn-primary" name="upload" type="submit"><span class="ion-upload"></span> Upload File</button>
									

									</form>
								</div>
								<!-- /.card-header -->

								<div class="card-body">

									<button class="btn btn-success" data-toggle="modal" data-target="#form_modal"><span
											class="fas fa-plus-circle"></span> Tambah Ekstrakulikuler</button>
									<table id="example1" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>NO</th>
												<th>AKSI</th>


												<th>NAMA EKSKUL</th>
												<th>PEMBINA EKSKUL</th>




											</tr>
										</thead>
										<tbody>
											<?php

				$no=1;

					//$query = mysqli_query($koneksi, "SELECT * FROM storage ORDER BY perbaiki ASC") or die(mysqli_error());

					$query = mysqli_query($koneksi, "SELECT * FROM hari ORDER BY id_hari") or die(mysqli_error());



							while($fetch = mysqli_fetch_array($query)){

				?>

											<tr class="del_student<?php echo $fetch['id_hari']?>">

												<th><?php echo $no++; ?></th>

												<td>
													<center>

														<button class="btn btn-success" data-toggle="modal"
															data-target="#edit_modal<?php echo $fetch['ekskul_id']?>"><span
																class="ion-compose"></span> Edit</button>

														<a href="backend/hapus_ekskul?ekskul_id=<?php echo $fetch['ekskul_id'];?>"
															onclick="return confirm('Pengguna Akan Dihapus, Lanjutkan ?')"><button
																class="btn btn-warning"> <span
																	class="ion-trash-a"></span> Hapus Akun</button></a>



														<!--						 <button class="btn btn-success btn-lg active" role="button" data-toggle="modal" data-target="#exampleModal" aria-pressed="true">Bantuan</button> -->

														<div class="modal-footer">







														</div>

												</td>



												<td><?php echo $fetch['nama_hari']?></td>
												<td><?php echo $fetch['id_kelas']?></td>






												<?php

 if(isset($_GET['format'])){

	 echo "Data berhasil di format.</p>";

 }

 ?>

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
$query1 = "SELECT * FROM ekskul";
$result = mysqli_query($koneksi, $query1);


?>



												<div class="modal fade" id="edit_modal<?php echo $fetch['ekskul_id']?>"
													aria-hidden="true">

													<div class="modal-dialog modal-dialog-centered">

														<div class="modal-content">

															<form autocomplete="off" method="POST"
																action="backend/update_ekskul.php">

																<div class="modal-header">

																	<h4 class="modal-title">Ubah Ekstrakulikuler</h4>

																</div>

																<div class="modal-body">

																	<div class="col-md-3"></div>

																	<div class="col-md-6">

																		<div class="form-group">



																			<input type="hidden" name="ekskul_id"
																				value="<?php echo $fetch['ekskul_id']?>"
																				class="form-control" />



																		</div>





																		<div class="form-group">

																			<label>Nama Ekskul</label>

																			<input type="text" id="nama_ekskul1" name="nama_ekskul"
																				class="form-control"
																				value="<?php echo $fetch['nama_ekskul']?>"
																				required="required" />
														<!--						<div id="result1"></div> -->

																		</div>

																		<div class="form-group">

																			<label>Pembina Ekskul</label>

																			<input type="text" name="pembina_ekskul"
																				class="form-control"
																				value="<?php echo $fetch['pembina_ekskul']?>"
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
$query1 = "SELECT * FROM ekskul";
$result = mysqli_query($koneksi, $query1);


?>
												<div class="modal fade" id="form_modal" aria-hidden="true">
													<div class="modal-dialog modal-dialog-centered">
														<div class="modal-content">

															<form autocomplete="off" method="POST"
																action="save_ekskul.php">
																<div class="modal-header">
																	<h4 class="modal-title">Tambah Akun Pembina</h4>
																</div>
																<div class="modal-body">
																	<div class="col-md-3"></div>
																	<div class="col-md-6">

																	<div class="form-group">

																			<label>Nama Ekskul </label>

																			<input type="text" id="nama_ekskul" name="nama_ekskul"
																				class="form-control"
																				required="required" />
																				<div id="result"></div>
																		</div>

																		<div class="form-group">
																			<label>Pembina Ekskul</label>
																			<input type="text" name="pembina_ekskul"
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

								<div class="modal fade" id="exampleModal<?php echo $fetch['stud_id']?>" tabindex="-1"
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

														<input type="hidden" name="stud_id"
															value="<?php echo $fetch1['stud_id']?>"
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

























									</tbody>
									<tfoot>
										<tr>
											<th>No</th>

											<th>Aksi</th>

											<th>Nama Siswa</th>

											<th>Jenis Kelamin</th>

											<th>NISN</th>

											<th>Tempat Lahir</th>

											<th>Tanggal Lahir</th>

											<th>Agama</th>

											<th>Nama Ayah</th>

											<th>Nama Ibu</th>

											<th>Kelas</th>

										</tr>
									</tfoot>
									</table>
								</div>
								<!-- /.card-body -->
							</div>
							<!-- /.card -->
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
			</section>
			<!-- /.content -->
		</div>






		<!-- MODAL DLL -->

		<?php include '../akses/script.php'?>
		<div class="modal fade" id="modal_confirm" aria-hidden="true">

			<div class="modal-dialog modal-dialog-centered">

				<div class="modal-content">

					<div class="modal-header">

						<h3 class="modal-title">System</h3>

					</div>

					<div class="modal-body">

						<center>
							<h4 class="text-danger">Are you sure you want to logout?</h4>
						</center>

					</div>

					<div class="modal-footer">

						<a type="button" class="btn btn-success" data-dismiss="modal">Cancel</a>

						<a href="logout.php" class="btn btn-danger">Logout</a>

					</div>

				</div>

			</div>

		</div>

		<div class="modal fade" id="modal_remove" aria-hidden="true">

			<div class="modal-dialog modal-dialog-centered">

				<div class="modal-content">

					<div class="modal-header">

						<h3 class="modal-title">System</h3>

					</div>

					<div class="modal-body">

						<center>
							<h4 class="text-danger">Are you sure you want to remove this file?</h4>
						</center>

					</div>

					<div class="modal-footer">

						<a type="button" class="btn btn-success" data-dismiss="modal">No</a>

						<button type="button" class="btn btn-danger" id="btn_yess">Yes</button>

					</div>

				</div>

			</div>

		</div>

		<script type="text/javascript">
			$(document).ready(function () {

				$('.btn_remove').on('click', function () {

					var store_id = $(this).attr('id');

					$("#modal_remove").modal('show');

					$('#btn_yess').attr('name', store_id);

				});



				$('#btn_yess').on('click', function () {

					var id = $(this).attr('name');

					$.ajax({

						type: "POST",

						url: "remove_file.php",

						data: {

							store_id: id

						},

						success: function (data) {

							$("#modal_remove").modal('hide');

							$(".del_file" + id).empty();

							$(".del_file" + id).html(
								"<td colspan='4'><center class='text-danger'>Deleting...</center></td>"
							);

							setTimeout(function () {

								$(".del_file" + id).fadeOut('slow');

							}, 1000);



						}

					});

				});

			});
		</script>


















		<script type="text/javascript">
			$(document).ready(function () {

				$('.btn-delete').on('click', function () {

					var stud_id = $(this).attr('id');

					$("#modal_confirm").modal('show');

					$('#btn_yes').attr('name', stud_id);

				});

				$('#btn_yes').on('click', function () {

					var id = $(this).attr('name');

					$.ajax({

						type: "POST",

						url: "delete_pengguna.php",

						data: {

							stud_id: id

						},

						success: function () {

							$("#modal_confirm").modal('hide');

							$(".del_student" + id).empty();

							$(".del_student" + id).html(
								"<td colspan='6'><center class='text-danger'>Deleting...</center></td>"
							);

							setTimeout(function () {

								$(".del_student" + id).fadeOut('slow');

							}, 1000);

						}

					});

				});

			});
		</script>








		<!-- AKHIR MODAL DLL-->











		<!-- /.content-wrapper -->
		<footer class="main-footer">
			<strong>Copyright &copy; 2021 SIS-EKSKUL</strong> <BR>
			<strong>Modified By <a href="https://instagram.com/adithairun"> Aditya Hairun</a></strong>

			<div class="float-right d-none d-sm-inline-block">
				<b>V.</b> <?php echo $versi?>
			</div>
		</footer>

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
