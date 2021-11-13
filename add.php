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
			color: red;
		}

 	</style>

<form action="add_link.php" method="POST">

<table border="0px" align="center">
	
	<tr>	
		<td><input type="hidden" name="id" required=""></td>	

	</tr>

	<tr>
		<td>Nama Barang</td>
		<td>:</td>	
		<td><input type="text" name="Nama_Barang" required=""></td>	

	</tr>

	<tr>
		<td>Harga Barang</td>
		<td>:</td>
		<td><input type="text" name="Harga" required=""></td>
	</tr>

</table>
<center>
	<br>
<input type="submit" value="Send" />&emsp;
			<input type="reset" value="Reset">
		</center>
</form>