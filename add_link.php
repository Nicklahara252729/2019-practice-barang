<center>
	<br>
	<h1>Daftar</h1>
~~~~~~~~~~~~~~~~~~ &emsp;  <a href="add.php" class="link">Menambahkan Data </a>|
<a href="index.php" class="link"> Melihat Data</a>  &emsp; ~~~~~~~~~~~~~~~~~~
<br><br>
</center>

 	<style type="text/css">
 		a{
			text-decoration: none;
			color: black;
		}

		a :hover {
			background-color: red;
		}
 	</style>


<center>
	<h2><b>Data Sukses Ditambahkan</b></h2>
</center>

<?php

$id = $_POST['id'];
$Nama_Barang = $_POST['Nama_Barang'];
$Harga = $_POST['Harga'];

$table_name = "tb_barang";

include "config.php";
mysqli_query($koneksi, "INSERT INTO $table_name VALUES ('$id', '$Nama_Barang', '$Harga');");

?>
