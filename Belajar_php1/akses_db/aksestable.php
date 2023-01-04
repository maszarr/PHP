<?php
//menyambungkan ke file koneksi.php yang ada di satu folder
include("koneksi.php");
$hasil = mysql_query ("SELECT * FROM pegawai",$con); //koneksi databse dengan TABLE PEGAWAI
$kolom = mysql_num_fields($hasil); //num_fields untuk mengetaui jumlah FIELD/(judul table)
echo "Jumlah Field : $kolom <br>";
$data = mysql_num_rows ($hasil); //num_rows Mengetahui jumlah record/line di dalam table
echo "jumlah record : $data";
mysql_close($con); 

//atas tampilkan jumlah field & record
//bawah tampilin data table
include("koneksi.php");
$hasil = mysql_query ("SELECT * FROM pegawai", $con);
echo "<table border=1>";
echo "<tr>
        <td>NIK</td>
        <td>Nama</td>
        <td>Alamat</td>
        ";
while ($baris = mysql_fetch_row($hasil))
{
    echo" 
    <tr>
        <td>$baris[0]</td>
        <td>$baris[1]</td>
        <td>$baris[2]</td>
        
    </tr>";
}
?>

