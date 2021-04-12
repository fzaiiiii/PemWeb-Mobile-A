<?php
include("koneksi.php");

if(isset($_POST['submit'])){
    $nama = $_POST["nama"];
    $ttl = $_POST["ttl"];
    $alamat = $_POST["alamat"];
    $gaji = $_POST["gaji"];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Data Pegawai</title>
</head>
<body>
    <h3>Update Data</h3>
    <form action="penyimpanan.php" method="post">
        <table>
        <tr><td>Nama</td><td><input type="text" name="nama"></td></tr>
        <tr><td>Tempat Tanggal Lahir</td><td><input type="text" name="ttl"></td></tr>
        <tr><td> Alamat</td><td><textarea name="alamat" rows="3" cols="20"></textarea></td></tr>
        <tr><td>Gaji</td><td><input type="number" name="gaji"></td></tr>
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="submit" name="submit" value="Edit Data">
        </table>
    </form>
    <?php 
    $kon = 'SELECT * FROM pegawai';
    $query = mysqli_query($kon,$db);
    while($kon = mysqli_fetch_assoc($data))
    ?>

    <?php
     // end while

    mysqli_close($kon); // menutup koneksi ke database
    ?>
</body>
</html>