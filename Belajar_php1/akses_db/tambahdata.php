<?php
$NIK = $_POST['NIK'];
$Nama= $_POST['Nama'];
$Alamat= $_POST['Alamat'];

include("koneksi.php");

$hasil= mysql_query("INSERT INTO pegawai
VALUES(''$NIK','$Nama','$Alamat')",$con);
echo "Tambah Data Berhasil";
mysql_close($con);
?>
