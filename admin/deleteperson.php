<?php
include ('../koneksi/koneksi.php');

$no =$_GET['no'];
$query = "DELETE from extra_person where no='$no'";
mysql_query($query);
header("location: person.php");
?>