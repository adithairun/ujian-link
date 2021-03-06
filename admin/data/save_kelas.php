<?php
	require_once '../../class/Database.php';	
	
	if(ISSET($_POST['save'])){
		
		
		
		$nama_kelas = $_POST['nama_kelas'];
		$href_kelas = $_POST['href_kelas'];
		$kd_kelas = $_POST['kd_kelas'];
		 

		mysqli_query($koneksi, "INSERT INTO `kelas` VALUES('', '$nama_kelas', '$href_kelas', '$kd_kelas')") or die(mysqli_error($koneksi));
		
		echo "<script>alert('Berhasil Tambah Kelas')</script>";		echo "<script>window.location = 'kelas.php'</script>";
	}

?>