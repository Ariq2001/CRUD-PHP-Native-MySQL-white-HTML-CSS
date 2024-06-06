<?php
include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$asal_sekolah = $_POST['asal_sekolah'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];

mysqli_query($koneksi, "UPDATE peserta SET nama ='$nama', asal_sekolah ='$asal_sekolah', alamat ='$alamat', no_hp ='$no_hp', email ='$email' WHERE id ='$id'");

header("location: index.php");

?>