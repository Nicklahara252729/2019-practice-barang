<?php  

$server = "localhost";
$user = "root" ;
$password = "satusampe250599" ;
$db_name = "2019_web_native_databarang" ;
$koneksi = mysqli_connect($server, $user, $password);

mysqli_select_db($koneksi, $db_name) or die ("ERROR");

?> 