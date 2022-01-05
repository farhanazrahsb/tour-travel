<?php
include "../koneksi/koneksi.php";

$kendaraan = $_GET['kendaraan'];
$harga = mysql_query("SELECT id_kendaraan,harga_kend FROM kendaraan WHERE id_kendaraan='$kendaraan' order by id_kendaraan asc");
echo "<option>-- Pilih Harga --</option>";
while($k = mysql_fetch_array($harga)){
echo "<option value=\"".$k['harga_kend']."\">".$k['harga_kend']."</option>\n";
}
?>