<?php
require_once("koneksi.php");

$id = $_GET['id'];
$query = "DELETE FROM pegawai WHERE id = $id"; // query hapus data

if(mysqli_query($kon, $query)){
    header("Location: index.php"); // redirect ke index.php
}else{
    echo "Hapus data gagal";
}
?>