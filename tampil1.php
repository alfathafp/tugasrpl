<?php 
$txt1 = "DATA CALON MAHASISWA";

$x = 5;

echo "<h2>".$txt1."</h2>";

include 'database.php';
$db = new database();
?>


<table border="5">
		<tr> 
		<th>ID Siswa </th> 
		<th>Nama siswa</th> 
		<th>alamat</th> 
		<th>Jenis Kelamin</th>
		<th>Agama</th>
		<th>Asal Sekolah</th> 
		</tr> 
	<?php
	$no = 12;
	foreach($db->tampil_data() as $x){
	?>
	<tr> 
		<td><?php echo $x ['idsiswa']; ?></td>
		<td><?php echo $x ['nama']; ?></td> 
		<td><?php echo $x ['alamat']; ?></td>
		<td><?php echo $x ['jk']; ?></td>
		<td><?php echo $x ['agama']; ?></td>
		<td><?php echo $x ['sekolahasal']; ?></td>
		</tr>

		<?php
	}
	?>
	
	</table>