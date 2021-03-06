<?php


// koneksi database
include '../../class/Database.php';	

// menangkap data id yang di kirim dari url
$id_hari = $_GET['id_hari'];


// menghapus data dari database
mysqli_query($koneksi,"delete from hari where id_hari='$id_hari'");

// mengalihkan halaman kembali ke index.php
echo "<script>alert('Berhasil Hapus Hari')</script>";		echo "<script>window.location = 'hari.php'</script>";
 ?>
