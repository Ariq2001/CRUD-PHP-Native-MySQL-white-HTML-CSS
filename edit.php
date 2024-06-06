<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <?php
    include "koneksi.php";
    ?>
    <h1>Edit Data Peserta</h1>
   
    <?php
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM peserta WHERE id = '$id'");
    while($peserta = mysqli_fetch_array($data)){
    ?>
    <form action="edit2.php" method="post">
        <table>
            <tr>
                <td class="sub">Nama</td>
                <td>
                <input type="hidden" name="id" value="<?php echo $peserta['id']; ?>">
                <input type="text" name="nama" value="<?php echo $peserta['nama']; ?>">
                </td>
            </tr>
            <tr>
                <td class="sub">Asal Sekolah</td>
                <td><input type="text" name="asal_sekolah" value="<?php echo $peserta['asal_sekolah']; ?>"></td>
            </tr>
            <tr>
                <td class="sub">Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $peserta['alamat']; ?>"></td>
            </tr>
            <tr>
                <td class="sub">No. HP</td>
                <td><input type="text" name="no_hp" value="<?php echo $peserta['no_hp']; ?>"></td>
            </tr>
            <tr>
                <td class="sub">Email</td>
                <td><input type="text" name="email" value="<?php echo $peserta['email']; ?>"></td>
            </tr>               
            
        </table>
        <a href="index.php"><button class="btn-back">Batal</button></a>
        <input class="btn-submit" type="submit" value="Simpan">
    </form>
    <?php } ?>
</body>
<style>
h1{
    text-align: center;
    font-family: 'Courier New', Courier, monospace;
}
table{
   width: 70%;
   position: relative;
   left: 15%;
}
input{
    width: 100%;
    height: 25px;
}
input:hover{
    background-color: beige;
}
.sub{
    width: 100px;
    font-weight: bold;
}
td{
    padding: 15px;
}
.btn-submit{
    width: 10%;
    height: 35px;
    position: relative;
    left: 60%;
    background-color: lightGreen;
    font-weight: bold;
}
.btn-back{
    width: 10%;
    height: 35px;
    position: relative;
    left: 58%;
    background-color: DarkOrange;
    font-weight: bold;
    
}
</style>
</html>