<center>
	<br>
	<h1>Daftar</h1>
~~~~~~~~~~~~~~~~~~ &emsp;  <a href="add.php" class="link">Menambahkan Data </a>|
<a href="index.php" class="link"> Melihat Data </a>  &emsp; ~~~~~~~~~~~~~~~~~~
<br><br>
</center>
<center>
<br><br>

</center>
<?php 

$db_name = "db_databarang" ;
$table_name = "tb_barang";

include "config.php";

$id = $_POST['id'];
$Nama_Barang = $_POST['Nama_Barang'];
$Harga = $_POST['Harga'];

$show = mysqli_query($koneksi, "UPDATE $table_name SET Nama_Barang = '$Nama_Barang', Harga = '$Harga' WHERE id = '$id';");

 ?>
  	<style type="text/css">
 		a{
			text-decoration: none;
			color: red;
		}

 	</style>

<center>
	<h2><b><i>Data Updated Succesfully</i></b></h2>
</center>
