<?php 
$konek = mysqli_connect("localhost","root","","db_mahasiswa");
function query($query){
    global $konek;
    $result = mysqli_query($konek,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    } return $rows;
}
    function tambah($data){
        global $konek;
         //ambil data dari tiap dalam elemen post
        $nama = htmlspecialchars( $data["nama"]);
        $kelas = htmlspecialchars($data["kelas"]);
        $jurusan = htmlspecialchars($data["jurusan"]);

         //query insert data
        $query = "INSERT INTO murid VALUES ('','$nama','$kelas','$jurusan')";
        mysqli_query($konek,$query);

        return mysqli_affected_rows($konek);
    }
   

function hapus($id){
    global $konek;
    mysqli_query($konek,"DELETE FROM murid WHERE id = $id");
    return mysqli_affected_rows($konek);
}

function ubah($data){
    global $konek;
     //ambil data dari tiap dalam elemen post
     $id = htmlspecialchars( $data["id"]);
    $nama = htmlspecialchars( $data["nama"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

     //query insert data
    $query = "UPDATE murid SET nama = '$nama', kelas = '$kelas', jurusan = '$jurusan' WHERE  id = $id";
    mysqli_query($konek,$query);

    return mysqli_affected_rows($konek);
}

function registrasi($data){
    global $konek;

    $username = strtolower(stripslashes($konek,$data["username"]));
    $password = mysqli_real_escape_string($konek,$data["password"]);
    $password2 = mysqli_real_escape_string($konek,$data["password2"]);

    if( $password !== $password2 ){
        echo"<script>
        alert('tidak sesuai');
        </script>";

        return false;
    }
        $password = password_hash($password, PASSWORD_DEFAULT);
        var_dump($password); die;
}
?>