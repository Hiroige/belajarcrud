<?php
require 'function.php';
//chek apakah submit sudah di tekan atau belum
if( isset($_POST["submit"])){

    if( tambah($_POST) > 0){
        echo "
            <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo "
            <script>
            alert('data gagal ditambahkan');
            document.location.href = 'index.php';
            </script>
        ";
    }
}
?>
<style>
    label{
        display: block;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Tambah data siswa</h1>
<form action=""  method="post">
    <ul>
        <li href="add.php">Option</li>
            <label for="nama">nama :</label>
            <input type="text" name="nama" id="nama" required>
        </li>
        <li>
            <label for="kelas">kelas :</label>
            <input type="text" name="kelas" id="kelas" required>
        </li>
        <li>
            <label for="jurusan">jurusan :</label>
            <input type="text" name="jurusan" id="jurusan" required>
        </li>
        <li>
            <button type="submit" name="submit">SImpan</button>
        </li>
    </ul>
   </form>
</body>
</html>