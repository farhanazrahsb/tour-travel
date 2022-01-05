<?php
include ('../koneksi/koneksi.php');

$no =$_GET['no'];
$query = "DELETE from pesan2 where no='$no'";
mysql_query($query);
header("location: pesan.php");
?>