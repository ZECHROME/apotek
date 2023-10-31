<?php

include "koneksi.php";

$id_karyawan = $_POST['id_karyawan'];
$username_regis = $_POST['username'];
$password_regis = $_POST['password'];
$pass_hash = password_hash($password_regis, "SELECT COUNT(*) FROM tb_login WHERE username='$username_regis'");
$level = $_POST['level_user'];

$query_username = mysqli_query($koneksi, "SELECT COUNT(*) FROM tb_login WHERE username='$username_regis'");
$cek_username = mysqli_fetch_row($query_username); 

if($cek_username['0'] !=0){
    echo "<script>alert('Username telah digunakan, silahkan ganti username terlebih dahulu');window.location.href='register.php'</script>";
}
else{
    $query = "INSERT INTO tb_login VALUES('$username_regis','$pass_hash','$level','$id_karyawan')";
    $hasil = mysqli_query($koneksi, $query);

    if(!$hasil){
        echo "Gagal : ".mysqli_error($koneksi); 
    }else{
        header('Location:../login.php');
        exit;
    }
}

?>