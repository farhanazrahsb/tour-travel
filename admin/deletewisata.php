<?php
include ('../koneksi/koneksi.php');

$no =$_GET['no'];
$query = "DELETE from wisata where no='$no'";
mysql_query($query);
header("location: wisata.php");
?>