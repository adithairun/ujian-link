<?php
	require_once '../../class/Database.php';	
	
	if(ISSET($_POST['save'])){
		
		
		
		$nama_hari = $_POST['nama_hari'];
		$href_hari = $_POST['href_hari'];
		$id_kelas = $_POST['id_kelas'];
		
		$kd_hari = $_POST['kd_hari'];
		 

		mysqli_query($koneksi, "INSERT INTO `hari` VALUES('', '$nama_hari','$id_kelas', '$href_hari', '$kd_hari')") or die(mysqli_error($koneksi));
		
		echo "<script>alert('Berhasil Tambah hari')</script>";		echo "<script>window.location = 'hari.php'</script>";
	}

?>