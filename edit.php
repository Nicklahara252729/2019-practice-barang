<center>
	<br>
	<h1>Daftar</h1>
~~~~~~~~~~~~~~~~~~ &emsp;  <a href="add.php" class="link">Menambahkan Data </a>|
<a href="index.php" class="link"> Melihat Data </a>  &emsp; ~~~~~~~~~~~~~~~~~~
<br><br>
</center>
<br>
<br>
</center>

<?php  

$db_name = "db_databarang" ;
$table_name = "tb_barang";

include "config.php";
$id = $_GET['id'];

include "config.php";

$show = mysqli_query($koneksi, "SELECT * FROM $table_name WHERE id = '$id'");

$data = mysqli_fetch_assoc($show);

?>
 	<style type="text/css">
 		a{
			text-decoration: none;
			color: red;
		}

 	</style>
<form action="edit_link.php" method="POST">

<table border="0px" align="center" cellpadding="4px" cellspacing="4px">

		<input type="hidden" name="id" required="" value="<?= $data['id']; ?>">

	<tr>
		<td>Nama Barang</td>
		<td>:</td>	
	<td><input type="text" name="Nama_Barang" required="" value="<?= $data['Nama_Barang']; ?>"></td>	

	</tr>

	<tr>
		<td>Harga Barang</td>
		<td>:</td>
		<td><input type="text" name="Harga" required="" value="<?= $data['harga']; ?>"></td>
	</tr>

</table>
<center>
	<br>
<input type="submit" value="Send" />&emsp;
			<input type="reset" value="Reset">
		</center>
</form>