<?php
    include "koneksi.php";
    session_start();
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $query = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE username = '$user' AND password = '$pass'");
    $baris_level = mysqli_fetch_assoc($query);

    echo $cek = mysqli_num_rows($query);

    if($cek > 0){
        $_SESSION['username'] = $user;
        $_SESSION['level'] = $baris_level['level_user'];
        echo "<script>alert('Berhasil Login');window.location.href='tb_obat/select/view_obat.php'</script>";
    }else{
        echo "<script>alert('Gagal Login');window.location.href='login.php'</script>";
    }
?>