<?php
include ('../koneksi/koneksi.php');

$no =$_GET['no'];
$query = "DELETE from kendaraan where no='$no'";
mysql_query($query);
header("location: kendaraan.php");
?>