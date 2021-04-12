<?php
require_once("koneksi.php");
 
if(isset($_POST['submit'])){
    $nama = $_POST["nama"];
    $ttl = $_POST["ttl"];
    $alamat = $_POST["alamat"];
    $gaji = $_POST["gaji"];
 
    // query insert data ke database dalam tabel anggota
    $query = "INSERT INTO pegawai SET nama= '$nama', ttl= '$ttl', alamat= '$alamat', gaji= '$gaji'";
    if(mysqli_query($kon, $query)){
        header("Location: index.php");
    }else{
        echo "Tambah data gagal";
    }
}
 
mysqli_close($kon); // menutup koneksi ke database
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Input Data Pegawai</title>
</head>
<body>
    <h3>Tambah Data Pegawai</h3>
    <form action="penyimpanan.php" method="post">
    <table>     
        <tr><td>Nama</td><td><input type="text" name="nama"></td></tr>
        <tr><td>Tempat Tanggal Lahir</td><td><input type="text" name="ttl"></td></tr>
        <tr><td>Alamat</td><td><textarea name="alamat" rows="3" cols="20"></textarea></td></tr>
        <tr><td>Gaji</td><td><input type="number" name="gaji"></td></tr>     
        </table>
    <br> 
    <input type="submit" name="submit" value="Tambah Data">
    <br><br>
    <a href="index.php">Kembali ke Menu Utama</a>
    </form>
</body>
</html>