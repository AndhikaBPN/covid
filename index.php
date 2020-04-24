<?php
session_start();

include 'koneksi.php';
include 'aset/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COViD-19</title>
    <link rel="stylesheet" href="aset/style.css">
</head>
<body>
    <!-- login -->
    <div class="box3">
        <img src="aset/img/covid.jpeg" alt="" class="gmbr">
    <div class="box" id="log">
        <img src="aset/img/avatar.png" alt="avatar" class="avatar">
            <form action="proses-login.php" method="post">
                <center>
                    <h2>LOGIN</h2>
                    <input type="text" name="username" placeholder="USERNAME">
                    <br><br>
                    <input type="password" name="password" placeholder="PASSWORD">
                    <br><br><br>
                    <input type="submit" name="login" value="LOGIN" class="log"><br><br>
                    <b><a href="register.php" class="reg">Register</a></b>
                </center>
            </form>
    </div>
    </div>
    <!-- login -->

    <!-- information -->
    <div class="informasi" id="inf">
        <div class="konten">
        <h1 class="info">INFORMATION</h1><br>
            <img src="aset/img/virus.jpg" alt="" class="covid1">
            <p>Virus Corona atau severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) adalah virus yang menyerang sistem pernapasan. Penyakit karena infeksi virus ini disebut COVID-19. Virus Corona bisa menyebabkan gangguan ringan pada sistem pernapasan, infeksi paru-paru yang berat, hingga kematian.</p>
            <br><br><br><br>

            <img src="aset/img/gejala.jpg" alt="">
            <p><b>Gejala Virus Corona</b></p>
            <p>Demam (suhu tubuh diatas 38&deg).</p>
            <p>Batuk.</p>
            <p>Sesak nafas.</p><br><br>

            <p><b>Penyebab Virus Corona</b></p>
            <p>Tidak sengaja menghirup percikan ludah (droplet) yang keluar saat penderita COVID-19 batuk atau bersin.</p>
            <p>Memegang mulut atau hidung tanpa mencuci tangan terlebih dulu setelah menyentuh benda yang terkena cipratan ludah penderita COVID-19.</p>
            <p>Kontak jarak dekat dengan penderita COVID-19.</p><br><br>

            <p><b>Pengobatan Virus Corona</b></p>
            <p>Merujuk penderita COVID-19 yang berat untuk menjalani perawatan dan karatina di rumah sakit rujukan.</p>
            <p>Memberikan obat pereda demam dan nyeri yang aman dan sesuai kondisi penderita.</p>
            <p>Memberikan obat pereda demam dan nyeri yang aman dan sesuai kondisi penderita.</p>
            <p>Menganjurkan penderita COVID-19 untuk banyak minum air putih untuk menjaga kadar cairan tubuh.</p>
        </div>
    </div>
</body>
</html>

<?php
include 'aset/footer.php';
?>