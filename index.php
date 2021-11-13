<center>
	<br>
	<h1>Daftar</h1>
*********** &emsp;  <a href="add.php" class="link">Menambahkan Data </a>|
<a href="index.php" class="link"> Melihat Data</a>  &emsp; ***********
<br><br>
</center>

<?php  

$table_name = "tb_barang" ;

include "config.php";
$data = mysqli_query($koneksi, "SELECT * FROM $table_name;");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		td{
			width: 150px;
			height: 40px;
			text-align: center;
		}
		a{
			text-decoration: none;
			color: red;
		}
	</style>

</head>
<body>

<table border="3px" align="center">
	
	<tr>
		<td colspan="5" align="center"><b>Masukan Barang</b></td>
	</tr>
	<tr>
		<td>Nama Barang</td>	
		<td>Harga</td>	
		<td>Aksi</td>	
	</tr>

	<?php while ($dt = mysqli_fetch_assoc($data) ) : ?>

	<tr>
		<td><?= $dt["Nama_Barang"]; ?></td>	
		<td><?= $dt["harga"]; ?></td>	
		<td><a href="delete.php?id=<?= $dt['id']; ?>" onclick="return confirm('Apakah kamu yakin ingin dihapus ?');"> Delete |</a>
			<a href="edit.php?id=<?= $dt['id'];  ?>"> Edit</a></td>	
	</tr>

<?php endwhile; ?>

</table>

</body>
</html>