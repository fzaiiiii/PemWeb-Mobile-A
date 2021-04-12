<?php
require("koneksi.php");
$data = mysqli_query($kon, "SELECT * FROM pegawai");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modul 3</title>
</head>
<body>
    <h3>Daftar Data Pegawai</h3>
    <a href="penyimpanan.php">Tambah Data</a>

    <table border="1px">
    <tr>
        <th>ID Pegawai</th>
        <th>Nama</th>
        <th>Tempat Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Gaji</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($data)){ ?>
    <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['nama'] ?></td>
        <td><?php echo $row['ttl'] ?></td>
        <td><?php echo $row['alamat'] ?></td>
        <td><?php echo $row['gaji'] ?></td>
        <td>
            <a href="update.php?id=<?php echo $row['id']; ?>">Edit</a> | 
            <a href="delete.php?id=<?php echo $row['id']; ?>">Hapus</a>
        </td>
    </tr>
    <?php
    } // end while
    
    mysqli_close($kon); // menutup koneksi ke database
    ?>
    </table>
</body>
</html>