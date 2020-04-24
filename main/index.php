<?php
session_start();

include '../koneksi.php';
include '../aset/header2.php';

$sql = mysqli_query($kon, "SELECT * FROM odp ORDER BY nama ");
$odp = array();

while ($data = mysqli_fetch_assoc($sql)) {
    $odp[] = $data;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COViD-19</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <center class="jud">Data ODP (Orang Dalam Pengawasan)
    <br><br>
    </center>
    <div class="content">
        <div>
            <table class="tabel">
                <tr>
                    <th class="t"><a href="tambah.php" class="tambah">+</a></th>
                </tr>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Suhu Badan</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $no=1;
                foreach ($odp as $o) { ?>
                    <tr>
                        <td><?= $no;?></td>
                        <td><?= $o['nama'];?></td>
                        <td><?= $o['alamat'];?></td>
                        <td><?= $o['suhu'];?>&deg</td>
                        <td>
                            <b><a href="edit.php?id_odp=<?= $o['id_odp'];?>" class="edit">EDIT</a></b><br><br>
                            <b><a href="hapus.php?id_odp=<?= $o['id_odp'];?>" class="hapus">HAPUS</a></b>
                        </td>
                    </tr>
                <?php
                $no++;
                }
                ?>
            </table>
            </center>
        </div>
    </div>
    </div>
</body>
</html>

<?php
include '../aset/footer.php'
?>