<?php 	
include('koneksi.php');
$db = new nadia();
$siswa = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="tambah_data.php">Tambah Data</a>
<table border="1">
		<tr>
			<th>NO</th>
			<th>ID</th>
			<th>NISN</th>
			<th>NAMA</th>
			<th>KELAS</th>
			
			<th>ACTION</th>
		</tr>
		<?php 
		$no = 1;
		foreach($siswa as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['nisn']; ?></td>
				<td><?php echo $row['kelas']; ?></td>
				
				<td>
					<a href="edit.php?id=<?php echo $row['id']; ?>">UBAH</a>
					<a href="proses.php?action=delete&id=<?php echo $row['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>