<?php 
require 'function.php';
$isidata = query("SELECT * FROM murid");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ISI DATABASES MAHASISWA</h1>
    <br>
    <a href="tambah.php">Tambah data mahasiswa</a>

    <table border="1" cellpadding="20" cellspacing="0">
        <tr>
            <th>no.</th>
            <th>Edit</th>
            <th>nama</th>
            <th>kelas</th>
            <th>jurusan</th>
        </tr>
        <?php $i = 1;?>
        <?php foreach($isidata as $row):?>
        <tr>
             <td><?=$i;?></td>
        <td>
            <a href="ubah.php?id=<?=$row["id"]?>">Ubah |</a>
            <a href="hapus.php?id=<?= $row["id"]?>" onclick="return confirm('yakin?')">Hapus</a>
        </td>
        <td><?= $row["nama"]?></td>
        <td><?= $row["kelas"]?></td>
        <td><?= $row["jurusan"]?></td>
    </tr>
    <?php $i++?>
    <?php endforeach;?>
    </table>
</body>
</html>