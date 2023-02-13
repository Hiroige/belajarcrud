<?php
require 'function.php';
//ambil data di url
$id = $_GET["id"];
//ambil data mahasiswa
$mhs = query("SELECT * FROM murid WHERE id = $id")[0];

//chek apakah submit sudah di tekan atau belum
if( isset($_POST["submit"])){

    if( ubah($_POST) > 0){
        echo "
            <script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo "
            <script>
            alert('data gagal diubah');
            document.location.href = 'index.php';
            </script>
        ";
    }
}
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
<h1>Tubah data siswa</h1>
<form action=""  method="post">
    <input type="hidden" name="id" value="<?=$mhs["id"]?>">
    <ul>
        <li>
            <label for="nama">nama :</label>
            <input type="text" name="nama" id="nama" required  value="<?=$mhs["nama"]?>">
        </li>
        <li>
            <label for="kelas">kelas :</label>
            <input type="text" name="kelas" id="kelas" required value="<?=$mhs["kelas"]?>">
        </li>
        <li>
            <label for="jurusan">jurusan :</label>
            <input type="text" name="jurusan" id="jurusan" required value="<?=$mhs["jurusan"]?>">
        </li>
        <li>
            <button type="submit" name="submit">SImpan</button>
        </li>
    </ul>
   </form>
</body>
</html>