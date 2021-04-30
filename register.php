<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COViD-19</title>
    <link rel="stylesheet" href="aset/style.css">
</head>
<body class="regis">
    <!-- login -->
    <div class="box2">
        <img src="aset/img/HM.jpg" alt="" class="gmbar">
    <div class="box1" id="log">
        <img src="aset/img/avatar.png" alt="avatar" class="avatar">
            <form action="register-proses.php" method="post">
                <center>
                    <h2>REGISTER</h2>
                    <input type="text" name="nama_petugas" placeholder="NAMA PETUGAS">
                    <br><br>
                    <input type="text" name="username" placeholder="USERNAME">
                    <br><br>
                    <input type="password" name="password" placeholder="PASSWORD">
                    <br><br><br>
                    <input type="submit" name="login" value="REGISTER" class="log">
                    <br><br>
                </center>
            </form>
    </div>
    </div>
</body>
</html>

<?php
include 'aset/footer.php';
?>