<?php
session_start();

include 'koneksi.php';

if(isset($_POST['login'])){
    $nama_petugas = $_POST['nama_petugas'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO petugas (nama_petugas, username, password)
            VALUES ('$nama_petugas', '$username', '$password')";
    $res = mysqli_query($kon, $sql);

    header("Location: index.php");
}else {
    header("Location: register.php");
}
?>