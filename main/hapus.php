<?php
session_start();

include '../koneksi.php';

$id_odp = $_GET['id_odp'];

$sql = "DELETE FROM odp WHERE id_odp = $id_odp";
$res = mysqli_query($kon, $sql);

header("Location: index.php");
?>