<?php
$konek = mysql_connect ("localhost","root","") or die ("koneksi ke server gagal");
mysql_select_db("coba",$konek) or die ("koneksi ke database gagal");
mysql_close($konek);
echo "koneksi sukses"

?>