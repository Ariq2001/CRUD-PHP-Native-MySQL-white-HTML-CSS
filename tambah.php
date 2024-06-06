<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Peserta</title>
</head>
<body>
    <h1>Tambah Data Peserta</h1>
    <form action="tambah2.php" method="post">
        <table>
        <tr>
            <td>Nama</td>
        </tr>
        <tr>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Asal Sekolah</td>
        </tr>
        <tr>
            <td><input type="text" name="asal_sekolah"></td>
        </tr>
        <tr>
            <td>Alamat</td>
        </tr>
        <tr>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>No. HP</td>
        </tr>
        <tr>
            <td><input type="text" name="no_hp"></td>
        </tr>
        <tr>
            <td>Email</td>
        </tr>
        <tr>
            <td><input type="text" name="email"></td>
        </tr>
        </table>
        <a href="index.php"><button class="btn-back">Batal</button></a>
        <input class= "btn-submit" type="submit" value="Simpan">
        
    </form>
</body>
<style>
h1{
    text-align: center;
    font-family: 'Courier New', Courier, monospace;
}
table{
    width: 80%;
    position: relative;
    left: 10%;
    text-align: center;
    font-weight: bold;
}
tr, td{
    padding: 5px;
}
input{
    width: 100%;
    height: 25px;
    text-align: center;
}
input:hover{
    background-color: beige;
}
.btn-submit{
    width: 10%;
    height: 35px;
    background-color: LimeGreen;
    font-weight: bold;
    position: relative;
    left: 60%;
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