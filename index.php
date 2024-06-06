<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Data Peserta</title>
</head>
<body>
    <h1>Data Peserta</h1>
    <?php
    include "koneksi.php";
    ?>
    <a href="tambah.php"><button class="btn-tambah">Tambah Data</button></a>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Asal Sekolah</th>
            <th>Alamat</th>
            <th>No. Hp</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM peserta");
        while($peserta = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++?></td>
            <td><?php echo $peserta['nama']; ?></td>
            <td><?php echo $peserta['asal_sekolah']; ?></td>
            <td><?php echo $peserta['alamat']; ?></td>
            <td><?php echo $peserta['no_hp']; ?></td>
            <td><?php echo $peserta['email']; ?></td>
            <td class="td-aksi">
                <a href="edit.php?id=<?php echo $peserta['id']; ?>"><button class="btn-edit">Edit</button></a>
                <a href="hapus.php?id=<?php echo $peserta['id']; ?>"><button class="btn-hapus">Hapus</button></a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>