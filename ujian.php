<?php
		include 'class/Database.php';

			?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <!--
        Zoom Template
        http://www.templatemo.com/tm-414-zoom
        -->
    <title>PENILAIAN AKHIR SEMESTER GANJIL</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">



    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/templatemo_main.css">
    <!--    <link rel="stylesheet" href="css/all.css"> -->

    <style>
        /* BANNER PROMO MODAL */
        .modal-content {
            margin-top: 800px;
        }

        .modal-promo-popup {
            display: block;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.6);
        }

        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            border-radius: 0 !important;
        }

        .caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        .modal-content,
        .caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 90%;
            }
        }

        /* END BANNER PROMO MODAL */
    </style>
</head>

<body>

    <?php


	$timeout = 1; // setting timeout dalam menit
	$logout = "index.php"; // redirect halaman logout

	$timeout = $timeout * 120; // menit ke detik
	session_start();
	if($_SESSION['status']!="login"){

		$elapsed_time = time()-$_SESSION['status'];

		if($elapsed_time >= $timeout){
			session_destroy();
			//echo "<script type='text/javascript'>alert('Silahkan Input Kembali Captcha');window.location='index.php'</script>";
			header("location:index.php?pesan=belum_login");
		}
	}

	$_SESSION['status']=time();

?>
    <div id="main-wrapper">
        <!--[if lt IE 7]>
                <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
            <![endif]-->

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center templatemo-logo margin-top-20">
            <h1 class="templatemo-site-title">
                <a href="#" style="background-color:black">PENILAIAN AKHIR SEMESTER<br>SMAN 1 GORONTALO</a>
            </h1>
            <!--   <h3  class="templatemo-site-title">
               <a style="color:black" href="https://tim-it.sma1gorontalo.sch.id"><br>Powered By <span class="black">TIM IT SMANSA</span><span class="green"></span></a>
                </h3> -->
        </div>




        <!--  MULAI SEMUA DISINI -->
        <div class="image-section">
            <div class="image-container">
                <!-- KELAS X -->
                <img src="images/1.jpg" id="menu-img" class="main-img inactive"
                    alt="Zoom HTML5 Template by templatemo.com">
                <img src="images/zoom-bg-2.jpg" id="kelasx-img" class="inactive" alt="">
                <img src="images/zoom-bg-3.jpg" id="hari1x-img" class="inactive" alt="HARI 1 X">
                <img src="images/zoom-bg-3.jpg" id="hari2x-img" class="inactive" alt="HARI 2 X">
                <img src="images/zoom-bg-3.jpg" id="hari3x-img" class="inactive" alt="HARI 3 X">
                <img src="images/zoom-bg-3.jpg" id="hari4x-img" class="inactive" alt="HARI 4 X">
                <img src="images/zoom-bg-3.jpg" id="hari5x-img" class="inactive" alt="HARI 5 X">
                <img src="images/zoom-bg-3.jpg" id="hari6x-img" class="inactive" alt="HARI 6 X">

                <!-- AKHIR KELAS X -->

                <!-- KELAS XI -->

                <img src="images/zoom-bg-4.jpg" id="kelasxi-img" class="inactive" alt="KELAS XI">
                <img src="images/5.jpg" id="hari1xi-img" class="inactive" alt="HARI 1 XI">
                <img src="images/5.jpg" id="hari2xi-img" class="inactive" alt="HARI 2 XI">
                <img src="images/5.jpg" id="hari3xi-img" class="inactive" alt="HARI 3 XI">
                <img src="images/5.jpg" id="hari4xi-img" class="inactive" alt="HARI 4 XI">
                <img src="images/5.jpg" id="hari5xi-img" class="inactive" alt="HARI 5 XI">
                <img src="images/5.jpg" id="hari6xi-img" class="inactive" alt="HARI 6 XI">



                <!-- AKHIR KELAS XI -->

                <!-- KELAS XII -->

                <img src="images/6.jpg" id="kelasxii-img" class="inactive" alt="KELAS XI">
                <img src="images/7.jpg" id="hari1xii-img" class="inactive" alt="HARI 1 XI">
                <img src="images/7.jpg" id="hari2xii-img" class="inactive" alt="HARI 2 XI">
                <img src="images/7.jpg" id="hari3xii-img" class="inactive" alt="HARI 3 XI">
                <img src="images/7.jpg" id="hari4xii-img" class="inactive" alt="HARI 4 XI">
                <img src="images/7.jpg" id="hari5xii-img" class="inactive" alt="HARI 5 XI">
                <img src="images/7.jpg" id="hari6xii-img" class="inactive" alt="HARI 6 XI">



                <!-- AKHIR KELAS XII -->
                <img src="images/zoom-bg-8.jpg" id="contact-img" class="inactive" alt="Contact">
                <!--
                    <img src="images/zoom-bg-3.jpg" id="services-img"  class="inactive" alt="Services">
                    <img src="images/zoom-bg-4.jpg" id="about-img" class="inactive" alt="About">

                  <img src="images/zoom-bg-6.jpg" id="company-intro-img" class="main-img inactive" alt="Company Intro">
                    <img src="images/zoom-bg-7.jpg" id="testimonials-img" class="main-img inactive" alt="Testimonials"> -->
            </div>
        </div>



        <!-- POP UP UCAPAN TANPA FOTO HANYA TEXT -->

        <!-- UNTUK v1.6 -->


        <body>
            <div id="myModal" class="modal-promo-popup">
                <div class="modal-content">

                    <div class="modal-body">
                        <h4>
                            <center><b>Perhatian !</b></center>
                        </h4>
                        <h5>
                            1. Link form setiap mapel hanya menerima satu tanggapan, jangan mencoba menekan kirim
                            sebelum selesai.
                            (jika sudah menekan kirim, sudah tidak bisa masuk lagi). <br><br>
                            2. <b>Jangan terlalu banyak keluar masuk link sementara ujian berlangsung, dan jangan
                                terlalu banyak pindah aplikasi sementara ujian berlangsung. Resiko ditanggung
                                sendiri</b>
                            <br><br>
                            3. Hati-hati menekan pilihan jawaban, bisa saja terjadi error dan tidak bisa diganti lagi.
                        </h5>
                        <h5>
                            <center><b>-TIM IT SMA NEGERI 1 GORONTALO-</b></center>
                        </h5>
                    </div>

                </div>
                <div class="caption"><span id="close" class="" style="color:yellow !important;font-size:20px;"><i
                            class="fa fa-times-circle" aria-hidden="true"></i> Tutup</span></div>
            </div>

        </body>



        <script type="text/javascript">
            // BANNER PROMO MODAL
            var modal = document.getElementById("myModal");
            var tutup = document.getElementById("close");

            if (document.cookie.indexOf("visited=") >= 0) {
                modal.style.display = "none";
            } else {
                expiry = new Date();
                expiry.setTime(expiry.getTime() + (1440 * 60 * 1000)); // 1440 minutes atau 1 day
                // expiry.setTime(expiry.getTime()+(1*3*1000)); // 1*30*1000 ini 30 detik
                // expiry.setTime(expiry.getTime()+(1*3*1000)); // 1*30*1000 ini 30 detik

                document.cookie = "visited=yes; expires=" + expiry.toGMTString();
            }

            tutup.onclick = function () {
                modal.style.display = "none";
            }
            // END BANNER PROMO MODAL
        </script>



        <!-- END POP UP UCAPAN TANPA FOTO HANYA TEXT -->


        <div class="container">
            <div
                class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 templatemo-content-wrapper">
                <div class="templatemo-content">
                    <?php

		include 'class/Database.php';
		$data = mysqli_query($koneksi,"select * from kelas ")or die(mysqli_error($koneksi));;
		while($row = mysqli_fetch_array($data)){
			?>


                    <section id="menu-section" class="active">

                        <div class="container">

                            <div class="row">
                                <table>
                                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 margin-bottom-15">
                                        <a href="<?php echo $row['href_kelas']  ;?>" class="change-section">
                                            <div class="black-bg btn-menu">
                                                <i class="fa fa-users"></i>
                                                <h2><?php echo $row['nama_kelas']  ;?></h2>
                                            </div>
                                        </a>
                                    </div>



                                    <?php
			}
			?>

                                    <!-- <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                    <a href="#contact" class="change-section">
                                        <div class="black-bg btn-menu">
                                            <i class="fa fa-phone"></i>
                                            <h2>Kontak</h2>
                                        </div>
                                    </a>
                                </div> -->
                            </div>
                            </table>
                        </div>
                        <!-- MENU HARI KELAS X -->
                    </section>


                    <?php
                    include 'class/Database.php';
                    $datax = mysqli_query($koneksi,"select * from hari NATURAL JOIN kelas where kd_kelas = 'x'")or die(mysqli_error($koneksi));;
                    while($rowx = mysqli_fetch_array($datax)){
                    ?>
												
                    <!-- /.menu-section -->
                    <section id="kelasx-section" class="inactive">



                        <div class="row">
                            <table>
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">

                                    <a href="<?php echo '#'. $rowx['href_hari']  ;?>" class="change-section">
                                        <div class="black-bg btn-menu">
                                            <i class="fa fa-calendar"></i>
                                            <h2><?php echo $rowx['nama_hari']  ;?><br><?php echo $rowx['nama_kelas']  ;?>
                                            </h2>
                                        </div>
                                    </a>

                                </div>
                                <?php
				                                                        }
				?>

                        </div>
                        </table>

                        <div class="row margin-top-20">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  pull-center">
                                <a href="#menu" class="change-section">
                                    <div class="black-bg btn-menu">
                                        <h2>Back to menu</h2>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </section>


                    <!-- AKHIR MENU HARI KELAS X -->










                    <!-- MENU HARI KELAS XI -->
                    </section>


                    <?php

											include 'class/Database.php';
											$dataxi = mysqli_query($koneksi,"select * from hari NATURAL JOIN kelas where kd_kelas = 'xi'")or die(mysqli_error($koneksi));;
											while($rowxi = mysqli_fetch_array($dataxi)){
											?>
                    <!-- /.menu-section -->
                    <section id="kelasxi-section" class="inactive">



                        <div class="row">
                            <table>
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">

                                    <a href="<?php echo '#'. $rowxi['href_hari']  ;?>" class="change-section">
                                        <div class="black-bg btn-menu">
                                            <i class="fa fa-calendar"></i>
                                            <h2><?php echo $rowxi['nama_hari']  ;?><br><?php echo $rowxi['nama_kelas']  ;?>
                                            </h2>
                                        </div>
                                    </a>

                                </div>
                                <?php
			}
			?>

                        </div>
                        </table>

                        <div class="row margin-top-20">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  pull-center">
                                <a href="#menu" class="change-section">
                                    <div class="black-bg btn-menu">
                                        <h2>Back to menu</h2>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </section>


                    <!-- AKHIR MENU HARI KELAS XI -->


                    <!-- MENU HARI KELAS XII -->
                    </section>


                    <?php

										include 'class/Database.php';
										$dataxii = mysqli_query($koneksi,"select * from hari NATURAL JOIN kelas where kd_kelas = 'xii'")or die(mysqli_error($koneksi));;
										while($rowxii = mysqli_fetch_array($dataxii)){
										?>
                    <!-- /.menu-section -->
                    <section id="kelasxii-section" class="inactive">



                        <div class="row">
                            <table>
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">

                                    <a href="<?php echo '#'. $rowxii['href_hari']  ;?>" class="change-section">
                                        <div class="black-bg btn-menu">
                                            <i class="fa fa-calendar"></i>
                                            <h2><?php echo $rowxii['nama_hari']  ;?><br><?php echo $rowxii['nama_kelas']  ;?>
                                            </h2>
                                        </div>
                                    </a>

                                </div>
                                <?php
		}
		?>

                        </div>
                        </table>

                        <div class="row margin-top-20">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  pull-center">
                                <a href="#menu" class="change-section">
                                    <div class="black-bg btn-menu">
                                        <h2>Back to menu</h2>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </section>


                    <!-- AKHIR MENU HARI KELAS XII -->













                    <!-- MENU MAPEL KELAS X -->
                    

                    <!-- MENU MAPEL HARI 1 KELAS X -->
                    <?php
                    include 'class/Database.php';
                    $datax1 = mysqli_query($koneksi,"select * from soal NATURAL JOIN hari, kelas where kd_kelas = 'x' AND id_hari = '1' ")or die(mysqli_error($koneksi));;
                    while($rowx1 = mysqli_fetch_array($datax1)){
                    ?>
                    <section id="<?php echo $rowx1['href_hari'] .'-section' ;?>" class="inactive">
                    <h2><?php echo $rowx1['nama_hari']  ;;?> <br> <?php echo $rowx1['nama_kelas']  ;?></h2>
                        <div class="row">
                        <table>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="<?php echo $rowx1['link_soal']  ;?>">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2><?php echo $rowx1['nama_mapel']  ;?> <br> <?php echo $rowx1['nama_kelas']  ;?></h2>
                                    </div>
                                </a>
                            </div>
                            
                            <?php
		}
		?>
        </table>
                            
                        <div class="row margin-top-20">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  pull-center">
                                <a href="#kelasx" class="change-section">
                                    <div class="black-bg btn-menu">
                                        <h2>Back to menu</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </section>
                    <!-- AKHIR MENU MAPEL HARI 1 KELAS X -->


                     <!-- MENU MAPEL HARI 2 KELAS X -->
                     <?php
                    include 'class/Database.php';
                    $datax2 = mysqli_query($koneksi,"select * from soal NATURAL JOIN hari, kelas where kd_kelas = 'x' AND kd_hari = 'h2x' ")or die(mysqli_error($koneksi));;
                    while($rowx2 = mysqli_fetch_array($datax2)){
                    ?>
                     <section id="<?php echo $row2['href_hari'] .'-section' ;?>" class="inactive">
                     <h2><?php echo $rowx2['nama_hari']  ;;?> <br> <?php echo $rowx2['nama_kelas']  ;?></h2>
                        <div class="row">
                        <table>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="<?php echo $rowx2['link_soal']  ;?>">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2><?php echo $rowx2['nama_mapel']  ;;?> <br> <?php echo $rowx2['nama_kelas']  ;?></h2>
                                    </div>
                                </a>
                            </div>
                            
                            <?php
		}
		?>
        </table>
                            
                        <div class="row margin-top-20">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  pull-center">
                                <a href="#kelasx" class="change-section">
                                    <div class="black-bg btn-menu">
                                        <h2>Back to menu</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </section>
                    <!-- AKHIR MENU MAPEL HARI 2 KELAS X -->

                      <!-- MENU MAPEL HARI 3 KELAS X -->
                      <?php
                    include 'class/Database.php';
                    $datax3 = mysqli_query($koneksi,"select * from soal NATURAL JOIN hari, kelas where kd_kelas = 'x' AND kd_hari = 'h3x' ")or die(mysqli_error($koneksi));;
                    while($rowx3 = mysqli_fetch_array($datax3)){
                    ?>
                     <section id="<?php echo $rowx3['href_hari'] .'-section' ;?>" class="inactive">
                     <h2><?php echo $rowx3['nama_hari']  ;;?> <br> <?php echo $rowx3['nama_kelas']  ;?></h2>
                        <div class="row">
                        <table>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="<?php echo $rowx3['link_soal']  ;?>">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2><?php echo $rowx3['nama_mapel']  ;;?> <br> <?php echo $rowx3['nama_kelas']  ;?></h2>
                                    </div>
                                </a>
                            </div>
                            
                            <?php
		}
		?>
        </table>
                            
                       
                    </section>
                    <!-- AKHIR MENU MAPEL HARI 2 KELAS X -->



                    <!-- MENU MAPEL HARI 4 KELAS X -->
                    <?php
                    include 'class/Database.php';
                    $datax4 = mysqli_query($koneksi,"select * from soal NATURAL JOIN hari, kelas where kd_kelas = 'x' AND kd_hari = 'h4x' ")or die(mysqli_error($koneksi));;
                    while($rowx4 = mysqli_fetch_array($datax4)){
                    ?>
                     <section id="<?php echo $rowx4['href_hari'] .'-section' ;?>" class="inactive">
                     <h2><?php echo $rowx4['nama_hari']  ;;?> <br> <?php echo $rowx4['nama_kelas']  ;?></h2>
                        <div class="row">
                        <table>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="<?php echo $rowx4['link_soal']  ;?>">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2><?php echo $rowx4['nama_mapel']  ;;?> <br> <?php echo $rowx4['nama_kelas']  ;?></h2>
                                    </div>
                                </a>
                            </div>
                            
                            <?php
		}
		?>
        </table>
                            
                       
                    </section>
                    <!-- AKHIR MENU MAPEL HARI 4 KELAS X -->



                     <!-- MENU MAPEL HARI 5 KELAS X -->
                     <?php
                    include 'class/Database.php';
                    $datax5 = mysqli_query($koneksi,"select * from soal NATURAL JOIN hari, kelas where kd_kelas = 'x' AND kd_hari = 'h5x' ")or die(mysqli_error($koneksi));;
                    while($rowx5 = mysqli_fetch_array($datax5)){
                    ?>
                     <section id="<?php echo $row1['href_hari'] .'-section' ;?>" class="inactive">
                     <h2><?php echo $rowx5['nama_hari']  ;;?> <br> <?php echo $row1['nama_kelas']  ;?></h2>
                        <div class="row">
                        <table>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="<?php echo $row1['link_soal']  ;?>">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2><?php echo $rowx5['nama_mapel']  ;;?> <br> <?php echo $rowx5['nama_kelas']  ;?></h2>
                                    </div>
                                </a>
                            </div>
                            
                            <?php
		}
		?>
        </table>
                            
                       
                    </section>
                    <!-- AKHIR MENU MAPEL HARI 5 KELAS X -->



                    <!-- MENU MAPEL HARI 6 KELAS X -->
                    <?php
                    include 'class/Database.php';
                    $datax6 = mysqli_query($koneksi,"select * from soal NATURAL JOIN hari, kelas where kd_kelas = 'x' AND kd_hari = 'hx6' ")or die(mysqli_error($koneksi));;
                    while($rowx6 = mysqli_fetch_array($datax6)){
                    ?>
                     <section id="<?php echo $row1['href_hari'] .'-section' ;?>" class="inactive">
                     <h2><?php echo $rowx6['nama_hari']  ;;?> <br> <?php echo $rowx6['nama_kelas']  ;?></h2>
                        <div class="row">
                        <table>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="<?php echo $rowx6['link_soal']  ;?>">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2><?php echo $rowx6['nama_mapel']  ;;?> <br> <?php echo $rowx6['nama_kelas']  ;?></h2>
                                    </div>
                                </a>
                            </div>
                            
                            <?php
		}
		?>
        </table>
                            
                        
                    </section>
                    <!-- AKHIR MENU MAPEL HARI 6 KELAS X -->



                    <!-- AKHIR MENU MAPEL KELAS X -->











                    <!-- MENU MAPEL KELAS XI -->


                    <!-- MENU MAPEL HARI 1 KELAS XI -->
                    <section id="hari1xi-section" class="inactive">
                        <h2> HARI 1 KELAS XI</h2>
                        <div class="row">



                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/VwAkEyXzaEV3FDWTA">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>PENDIDIKAN AGAMA ISLAM <br> KELAS XI</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="http://gg.gg/KlsXIagama-kristen">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>PENDIDIKAN AGAMA KRISTEN <br> KELAS XI</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/v4MVgvufrvdPdU5f8">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>PENDIDIKAN AGAMA KATOLIK <br> KELAS XI</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/2HpzhznBj2bYhvh19">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>MATEMATIKA WAJIB <br> KELAS XI</h2>
                                    </div>
                                </a>
                            </div>









                        </div>
                        <div class="row margin-top-20">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  pull-center">
                                <a href="#kelasxi" class="change-section">
                                    <div class="black-bg btn-menu">
                                        <h2>Back to menu</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </section>
                    <!-- AKHIR MENU MAPEL HARI 1 KELAS XI -->


                    <!-- MENU MAPEL HARI 2 KELAS XI -->
                    <section id="hari2xi-section" class="inactive">
                        <h2> HARI 2 KELAS XI</h2>
                        <div class="row">











                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/h1Sd7qycoyphxnmv5">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>BAHASA INGGRIS <br> KELAS XI</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/qg6eFSKv3k6mof2X7">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>BIOLOGI <br> KELAS XI</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://bit.ly/EKOXI-FIMOZ">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>EKONOMI <br> KELAS XI</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/ejziftmX6sC38G6s9">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>ANTROPOLOGI <br> KELAS XI</h2>
                                    </div>
                                </a>
                            </div>











                        </div>
                        <div class="row margin-top-20">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  pull-center">
                                <a href="#kelasxi" class="change-section">
                                    <div class="black-bg btn-menu">
                                        <h2>Back to menu</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </section>

                    <!-- AKHIR MENU MAPEL HARI 2 KELAS XI -->

                    <!-- MENU MAPEL HARI 3 KELAS XI -->
                    <section id="hari3xi-section" class="inactive">
                        <h2> HARI 3 KELAS XI</h2>
                        <div class="row">




                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/Q18weLC4UavvUqH16">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>BAHASA INDONESIA<br> KELAS XI</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://bit.ly/PPKn_X1">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>PPKN<br> KELAS XI</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/Nf5Uzg5f8BVPzVpS9">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>MATEMATIKA PEMINATAN<br> KELAS XI</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/q8eQzRbrtron4VP77">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>SEJARAH PEMINATAN<br> KELAS XI</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/QbskGi5QHwGeiw9L9">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>BAHASA DAN SASTRA INDONESIA<br> KELAS X</h2>
                                    </div>
                                </a>
                            </div>






                        </div>
                        <div class="row margin-top-20">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  pull-center">
                                <a href="#kelasxi" class="change-section">
                                    <div class="black-bg btn-menu">
                                        <h2>Back to menu</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </section>

                    <!-- AKHIR MENU MAPEL HARI 3 KELAS XI -->


                    <!-- MENU MAPEL HARI 4 KELAS XI -->
                    <section id="hari4xi-section" class="inactive">
                        <h2> HARI 4 KELAS XI</h2>
                        <div class="row">









                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/4MxjY3AMPwFWmd9j6">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>KIMIA<br> KELAS XI</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/akuZAQMm3BKPt3kf6">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>GOEGRAFI<br> KELAS XI</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/LfYMjpMENG8GfkQs7">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>BAHASA DAN SASTRA INGGRIS<br> KELAS XI</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/sE6vjftgsn2s7E4h9">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>PENJASORKES<br> KELAS XI</h2>
                                    </div>
                                </a>
                            </div>



















                        </div>
                        <div class="row margin-top-20">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  pull-center">
                                <a href="#kelasxi" class="change-section">
                                    <div class="black-bg btn-menu">
                                        <h2>Back to menu</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </section>

                    <!-- AKHIR MENU MAPEL HARI 4 KELAS XI -->

                    <!-- MENU MAPEL HARI 5 KELAS XI -->
                    <section id="hari5xi-section" class="inactive">
                        <h2> HARI 5 KELAS XI</h2>
                        <div class="row">








                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/FGDZPtyXAbLuGTA89">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>SENI BUDAYA<br> KELAS XI</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/sBmhCsfxmXZxsSyi9">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>SOSIOLOGI LM<br> KELAS XI</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/cFgmZkVWt76HhDap8">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>GEOGRAFI LM<br> KELAS XI</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a
                                    href="https://docs.google.com/forms/d/e/1FAIpQLScGX74qtjjOMMKIQ62B8nnZTreTibfE4pPWd1Oe7hNuQkiASQ/formResponse">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>EKONOMI LM<br> KELAS XI</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/QCoiEufdPhJT4pe59">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>KIMIA LM<br> KELAS XI</h2>
                                    </div>
                                </a>
                            </div>












                        </div>
                        <div class="row margin-top-20">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  pull-center">
                                <a href="#kelasxi" class="change-section">
                                    <div class="black-bg btn-menu">
                                        <h2>Back to menu</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </section>

                    <!-- AKHIR MENU MAPEL HARI 5 KELAS XI -->

                    <!-- MENU MAPEL HARI 6 KELAS XI -->
                    <section id="hari6xi-section" class="inactive">
                        <h2> HARI 6 KELAS XI</h2>
                        <div class="row">














                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/1jP5ry98tK7Sm3oJ7">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>FISIKA<br> KELAS XI</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/r1FrrRavfCoVTxcC6">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>SOSIOLOGI<br> KELAS XI</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="http://gg.gg/arabXIbhs">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>BAHASA ARAB<br> KELAS XI</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://bit.ly/ulangansejarahwajib">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>SEJARAH INDONESIA<br> KELAS XI</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/oKBbmGA4hqvMFS6Z9">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>PRAKARYA<br> KELAS XI</h2>
                                    </div>
                                </a>
                            </div>












                        </div>
                        <div class="row margin-top-20">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  pull-center">
                                <a href="#kelasxi" class="change-section">
                                    <div class="black-bg btn-menu">
                                        <h2>Back to menu</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </section>

                    <!-- AKHIR MENU MAPEL HARI 6 KELAS XI -->


                    <!-- AKHIR MENU MAPEL KELAS XI -->



















                    <!-- MENU MAPEL KELAS XII -->


                    <!-- MENU MAPEL HARI 1 KELAS XII -->
                    <section id="hari1xii-section" class="inactive">
                        <h2> HARI 1 KELAS XII</h2>
                        <div class="row">










                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/xXS2BPrANX66LaYT6">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>PENDIDIKAN AGAMA ISLAM <br>KELAS XII</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="http://gg.gg/ndorw">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>PENDIDIKAN AGAMA KRISTEN <br>KELAS XII</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/v4MVgvufrvdPdU5f8">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>PENDIDIKAN AGAMA KATOLIK <br> KELAS X</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/StHbtAUYL8hgh42k8">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>MATEMATIKA WAJIB <br>KELAS XII</h2>
                                    </div>
                                </a>
                            </div>














                        </div>
                        <div class="row margin-top-20">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  pull-center">
                                <a href="#kelasxii" class="change-section">
                                    <div class="black-bg btn-menu">
                                        <h2>Back to menu</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </section>
                    <!-- AKHIR MENU MAPEL HARI 1 KELAS XII -->


                    <!-- MENU MAPEL HARI 2 KELAS XII -->
                    <section id="hari2xii-section" class="inactive">
                        <h2> HARI 2 KELAS XII</h2>
                        <div class="row">










                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://bit.ly/BingW_XII_IPA">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>BAHASA INGGRIS <br>KELAS XII IPA</h2>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://bit.ly/BingW_XII_BHS_IPS">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>BAHASA INGGRIS <br>KELAS XII BAHASA & IPS</h2>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/hnFu64UQeYyT4UfF9">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>BIOLOGI <br>KELAS XII</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/wdBd5Bbf6itMyhWi6">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>EKONOMI <br>KELAS XII</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a
                                    href="https://docs.google.com/forms/d/1gGFwHsRSmnkTGoXJ3bB8N1MxkLmEbxhWaYUBN-VIrzo/edit?usp=sharing">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>ANTROPOLOGI <br>KELAS XII</h2>
                                    </div>
                                </a>
                            </div>












                        </div>
                        <div class="row margin-top-20">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  pull-center">
                                <a href="#kelasxii" class="change-section">
                                    <div class="black-bg btn-menu">
                                        <h2>Back to menu</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </section>

                    <!-- AKHIR MENU MAPEL HARI 2 KELAS XII -->

                    <!-- MENU MAPEL HARI 3 KELAS XII -->
                    <section id="hari3xii-section" class="inactive">
                        <h2> HARI 3 KELAS XII</h2>
                        <div class="row">














                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/nNuw3fW6wfx3XcGDA">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>BAHASA INDONESIA<br> KELAS XII</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/dkVyv97W234QFxt47">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>PPKN<br> KELAS XII</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/DzC4HvYF18PstdBx7">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>MATEMATIKA PEMINATAN<br> KELAS XII</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/aVRka5XNqBPKjx5p9">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>SEJARAH PEMINATAN<br> KELAS XII</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://bit.ly/PAS_SASIN12">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>BAHASA DAN SASTRA INDONESIA<br> KELAS XII</h2>
                                    </div>
                                </a>
                            </div>















                        </div>
                        <div class="row margin-top-20">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  pull-center">
                                <a href="#kelasxii" class="change-section">
                                    <div class="black-bg btn-menu">
                                        <h2>Back to menu</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </section>

                    <!-- AKHIR MENU MAPEL HARI 3 KELAS XII -->


                    <!-- MENU MAPEL HARI 4 KELAS XII -->
                    <section id="hari4xii-section" class="inactive">
                        <h2> HARI 4 KELAS XII</h2>
                        <div class="row">
















                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/9VhvJerwr9LBDkaa6">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>KIMIA<br> KELAS XII</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/3ikxGvCrEB7zZ11s6">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>GOEGRAFI<br> KELAS XII</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/Pbdds1aKwptm9jDK9">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>BAHASA DAN SASTRA INGGRIS<br> KELAS XII</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/D8q2opfUxfAegRFJ8">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>PENJASORKES<br> KELAS XII</h2>
                                    </div>
                                </a>
                            </div>
















                        </div>
                        <div class="row margin-top-20">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  pull-center">
                                <a href="#kelasxii" class="change-section">
                                    <div class="black-bg btn-menu">
                                        <h2>Back to menu</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </section>

                    <!-- AKHIR MENU MAPEL HARI 4 KELAS XII -->

                    <!-- MENU MAPEL HARI 5 KELAS XII -->
                    <section id="hari5xii-section" class="inactive">
                        <h2> HARI 5 KELAS XII</h2>
                        <div class="row">












                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/ZC12d2jEq4hBzZ6LA">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>SENI BUDAYA<br> KELAS XII</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="http://bit.ly/passosiologixiibhs2020">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>SOSIOLOGI LM<br> KELAS XII</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/psFbAqzVr3t3miuN6">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>GEOGRAFI LM<br> KELAS XII</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/aVxm8nAENk5DbgET9">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>BAHASA ARAB LM<br> KELAS XII</h2>
                                    </div>
                                </a>
                            </div>



                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/dQry1Pwfu1xP3kaZ8">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>BAHASA DAN SASTRA INGGRIS LM<br> KELAS XII</h2>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/ysbXdaJowYeuefR87">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>KIMIA LM<br> KELAS XII</h2>
                                    </div>
                                </a>
                            </div>















                        </div>
                        <div class="row margin-top-20">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  pull-center">
                                <a href="#kelasxii" class="change-section">
                                    <div class="black-bg btn-menu">
                                        <h2>Back to menu</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </section>

                    <!-- AKHIR MENU MAPEL HARI 5 KELAS XII -->

                    <!-- MENU MAPEL HARI 6 KELAS XII -->
                    <section id="hari6xii-section" class="inactive">
                        <h2> HARI 6 KELAS XII</h2>
                        <div class="row">

















                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a
                                    href="https://docs.google.com/forms/d/e/1FAIpQLSepYkPRBlDyJQTGX3iZou6ps31CBmaxYU2EXc8RuzjRkpPyoQ/viewform">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>FISIKA<br> KELAS XII</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="http://bit.ly/passosiologixiiips2020">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>SOSIOLOGI<br> KELAS XII</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/Th4t9UkDz87QHhELA">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>BAHASA ARAB<br> KELAS XII</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://bit.ly/PAS_SEJARAHINDONESIA_XII-2020">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>SEJARAH INDONESIA<br> KELAS XII</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                <a href="https://forms.gle/121CfuMtRojPVmJW6">
                                    <div class="black-bg btn-menu">
                                        <i class="fa fa-book"></i>
                                        <h2>PRAKARYA<br> KELAS XII</h2>
                                    </div>
                                </a>
                            </div>



























                        </div>
                        <div class="row margin-top-20">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  pull-center">
                                <a href="#kelasxii" class="change-section">
                                    <div class="black-bg btn-menu">
                                        <h2>Back to menu</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </section>

                    <!-- AKHIR MENU MAPEL HARI 6 KELAS XII -->


                    <!-- AKHIR MENU MAPEL KELAS XII -->









                    <section id="contact-section" class="inactive">
                        <div class="row">
                            <div class="black-bg col-sm-12 col-md-12 col-lg-12">
                                <h2 class="text-center">Kontak Admin Via WhatsApp</h2>

                                <div class="col-sm-12 col-md-12">
                                    <a href="https://wa.me/6289629334545">
                                        <h1>Admin 1</h1>
                                    </a>

                                </div>






                            </div>
                        </div>
                        <div class="row margin-top-20">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  pull-center">
                                <a href="#menu" class="change-section">
                                    <div class="black-bg btn-menu">
                                        <h2>Back to menu</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </section><!-- /.contact-section -->































                    <div class="row">
                        <h3 class="footer-text">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer">


                        </h3>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer">
                        <p class="footer-text">Powered By <a style="color:yellow"
                                href="https://tim-it.sma1gorontalo.sch.id" target="_blank"> TIM IT SMANSA</p></a>
                        <p class="footer-text">Modified With <i class="fa fa-heart" aria-hidden="true"></i> By <a
                                style="color:yellow" href="https://instagram.com/adithairun" target="_blank">Aditya
                                Hairun</p>
                    </div><!-- /.footer -->

                </div>

            </div><!-- /#main-wrapper -->

            <div id="preloader">
                <div id="status">&nbsp;</div>
            </div><!-- /#preloader -->
            <!--     <script src="js/all.js"></script> -->
            <script src="js/jquery.min.js"></script>

            <script src="js/jquery-ui.min.js"></script>
            <script src="js/jquery.backstretch.min.js"></script>
            <script src="js/templatemo_script.js"></script>

</body>

</html>