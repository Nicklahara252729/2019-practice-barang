<center>
	<br>
	<h1>Daftar</h1>
************ &emsp;  <a href="add.php" class="link">Menambahkan Data </a>|
<a href="index.php" class="link"> Melihat Data </a>  &emsp; ************
<br><br>
</center>
<br>
<br>
</center>
<?php 

$db_name = "db_barang" ;
$table_name = "tb_barang";

include "config.php";

$id = $_GET['id'];

$show = mysqli_query($koneksi, "DELETE FROM $table_name WHERE id = '$id';") or die ("The ID Is Already Made");

 ?>

 	<style type="text/css">
 		a{
			text-decoration: none;
			color: red;
		}

 	</style>

<center>
	<h2><b>Data Sukses Dihapus</b></h2>
</center>

