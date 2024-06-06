<?php
include "koneksi.php";

$nama = $_POST['nama'];
$asal_sekolah = $_POST['asal_sekolah'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];

mysqli_query($koneksi, "INSERT INTO peserta VALUES ('', '$nama', '$asal_sekolah', '$alamat', '$no_hp', '$email')");

header("location: index.php");
?>