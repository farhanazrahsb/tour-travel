<?php
include ('../koneksi/koneksi.php');

$no =$_GET['no'];
$query = "DELETE from admin where no='$no'";
mysql_query($query);
header("location: admin.php");
?>