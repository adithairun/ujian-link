<?php	require_once '../../class/Database.php';	
if(ISSET($_POST['update'])){				
    
    
    $id_hari = $_POST['id_hari'];
    $id_kelas = $_POST['id_kelas'];
    $nama_hari = $_POST['nama_hari'];		
	$href_hari	=	$_POST['href_hari'];
	$kd_hari	=	$_POST['kd_hari'];
			
		
    mysqli_query($koneksi, "UPDATE `hari` SET `id_hari` = '$id_hari',  `nama_hari` = '$nama_hari', `id_kelas` = '$id_kelas', `href_hari` = '$href_hari', `kd_hari` = '$kd_hari' WHERE `id_hari` = '$id_hari'") or die(mysqli_error($koneksi));;		
    echo "<script>alert('Successfully updated!')</script>";		echo "<script>window.location = 'hari.php'</script>";	}?>