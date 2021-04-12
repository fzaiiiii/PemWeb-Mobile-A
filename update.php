<?php
require_once("koneksi.php");

if(isset($_POST['submit'])){
    $id_pegawai = $_POST["id"];
    $nama = $_POST["nama"];
    $ttl = $_POST["ttl"];
    $alamat = $_POST["alamat"];
    $gaji = $_POST["gaji"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP Sederhana</title>
</head>
<body>
    <h3>Tambah Data Anggota</h3>
    <?php while($row = mysqli_fetch_assoc($data)){ ?>
    <form action="update.php" method="post">
        Nama : <input type="text" name="nama"><br><br>
        Tempat Tanggal Lahir : <input type="date" name="ttl"><br><br>
        Alamat : <textarea name="alamat" rows="3" cols="20"></textarea><br><br>
        <input type="hidden" name="id_pegawai" value="<?php echo $row['id_pegawai']; ?>">
        <input type="submit" name="submit" value="Edit Data">
    </form>
    <?php
    } // end while

    mysqli_close($kon); // menutup koneksi ke database
    ?>
</body>
</html>