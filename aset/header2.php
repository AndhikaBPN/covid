<?php
if (!(isset($_SESSION['id_petugas']))) {
    header("Location: http://localhost/covid/index.php");
}
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
     <!-- navbar -->
    <ul class="header">
        <li><a href="#fot">ABOUT ME</a></li>
        <li><a href="http://localhost/covid/logout.php">LOGOUT</a></li>
    </ul>
    <h2 class="jdl">COViD-19</h2>
    <!-- navbar -->
</body>
</html>