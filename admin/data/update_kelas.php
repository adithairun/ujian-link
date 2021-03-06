<?php	require_once '../../class/Database.php';	
if(ISSET($_POST['update'])){				
    
    
    
    $id_kelas = $_POST['id_kelas'];
    $nama_kelas = $_POST['nama_kelas'];		
	$href_kelas	=	$_POST['href_kelas'];
	$kd_kelas	=	$_POST['kd_kelas'];
			
		
    mysqli_query($koneksi, "UPDATE `kelas` SET `id_kelas` = '$id_kelas',  `nama_kelas` = '$nama_kelas', `id_kelas` = '$id_kelas', `href_kelas` = '$href_kelas', `kd_kelas` = '$kd_kelas' WHERE `id_kelas` = '$id_kelas'") or die(mysqli_error($koneksi));;		
    echo "<script>alert('Successfully updated!')</script>";		echo "<script>window.location = 'kelas.php'</script>";	}?>