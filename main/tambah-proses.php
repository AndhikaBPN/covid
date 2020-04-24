<?php
session_start();

include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $suhu = $_POST['suhu'];

    $sql = "INSERT INTO odp (nama, alamat, suhu)
            VALUES ('$nama', '$alamat', '$suhu')";
    $res = mysqli_query($kon, $sql);
    // $count = mysqli_affected_rows($kon);
    header("Location: index.php");
    // var_dump($res);

}else {
    header("Location: tambah.php");
    // var_dump($res);
}
?>