<?php
include ('../koneksi/koneksi.php');

$no =$_GET['no'];
$query = "DELETE from user where no='$no'";
mysql_query($query);
header("location: user.php");
?>