<?php
session_start();

include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $id_odp = $_POST['id_odp'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $suhu = $_POST['suhu'];

    $sql = "UPDATE odp SET nama = '$nama',
                           alamat = '$alamat',
                           suhu = $suhu WHERE id_odp = $id_odp";

    $res = mysqli_query($kon, $sql);
    header("Location: index.php");
} else {
    header("Location: edit.php");
}

?>