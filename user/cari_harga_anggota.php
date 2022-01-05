<?php
include "../koneksi/koneksi.php";

$anggota = $_GET['anggota'];
$harga = mysql_query("SELECT id_anggota,harga_per FROM extra_person WHERE id_anggota='$anggota' order by jumlah asc");
echo "<option>-- Pilih Harga --</option>";
while($k = mysql_fetch_array($harga)){
echo "<option value=\"".$k['harga_per']."\">".$k['harga_per']."</option>\n";
}
?>