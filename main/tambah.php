<?php
session_start();

include '../aset/header2.php';
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
        <h1>Tambah Data</h1>
        </center>
        <div class="content">
        <form action="tambah-proses.php" method="post">
            <table>
                <tr>
                    <th>Nama</th>
                    <td><input type="text" name="nama" placeholder="Masukkan Nama"></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><input type="text" name="alamat" placeholder="Masukkan Alamat"></td>
                </tr>
                <tr>
                    <th>Suhu Tubuh</th>
                    <td><input type="number" name="suhu" Placeholder="Masukkan Kondisi Suhu "></td>
                </tr>
                <tr>
                    <td colspan=2><input type="submit" name="simpan" value="TAMBAH" class="act"></td>
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