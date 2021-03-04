<?php

include '../class/Database.php';
mysqli_query($koneksi, "TRUNCATE TABLE reset_password");

if(isset($_POST["new_pass"])){

    $email = $_POST["email"];
	
    $pass = md5($_POST["password"]);
    $query = mysqli_query($koneksi, "UPDATE admin SET password = '$pass' WHERE email = '$email'");
    echo "Password Berhasil Di Update";

}

 ?>