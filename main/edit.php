<?php
session_start();

include '../aset/header2.php';
include '../koneksi.php';

$id_odp = $_GET['id_odp'];
$sql = "SELECT * FROM odp WHERE id_odp = $id_odp";
$res = mysqli_query($kon, $sql);
$odp = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COViD-19</title>
    <link rel="stylesheet" href="../aset/style.css">
</head>
<body>
    <div class="container">
    <center>
        <h1>Edit Data</h1>
        </center>
        <div class="content">
        <form action="edit-proses.php" method="post">
            <table>
                <input type="hidden" name="id_odp" value="<?= $odp['id_odp'];?>">
                <tr>
                    <th>Nama</th>
                    <td><input type="text" name="nama" value="<?= $odp['nama'];?>"></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><input type="text" name="alamat" value="<?= $odp['alamat'];?>"></td>
                </tr>
                <tr>
                    <th>Suhu Tubuh</th>
                    <td><input type="number" name="suhu" value="<?= $odp['suhu'];?>"></td>
                </tr>
                <tr>
                    <td colspan=2><input type="submit" name="simpan" value="SIMPAN" class="act"></td>
                </tr>
            </table>
        </form>
        </div>
    
    </div>
</body>
</html>
<br><br><br><br><br><br><br>

<?php
include '../aset/footer.php';
?>