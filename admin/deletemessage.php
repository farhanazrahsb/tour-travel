<?php
include ('../koneksi/koneksi.php');

$no =$_GET['no'];
$query = "DELETE from contact where no='$no'";
mysql_query($query);
header("location: message.php");
?>