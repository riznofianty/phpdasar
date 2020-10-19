 <?php

//memanggil file function (bisa require/include)
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");//simpan ke dalam variabel mahasiswa


//tombol cari ditekan
if(isset($_POST["cari"])){
	$mahasiswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Halaman Admin</title>
	</head>
	<body>
		<h1>Daftar Mahasiswa</h1>

		<a href="tambah.php">Tambah Data Mahasiswa</a>
		<br><br>

		<form action="" method="post">
			<input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
			<button type="submit" name="cari">Cari</button>
		</form>
		<br>
		<table border="1" cellpadding="10" cellspacing="0">
			<tr>
				<th>No.</th>
				<th>Aksi</th>
				<th>Gambar</th>
				<th>NRP</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Jurusan</th>
			</tr>

			<?php $i=1; ?>
			<?php foreach ($mahasiswa as $row) : ?>
			<tr>
				<td><?= $i; ?></td> 
				<td>
					<a href="ubah.php?id=<?= $row["id"];?>">Ubah</a> |
					<a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah Anda Yakin?');">Hapus</a>
				</td>
				<td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
				<td><?= $row["nim"]; ?></td>
				<td><?= $row["nama"]; ?></td>
				<td><?= $row["email"]; ?></td>
				<td><?= $row["jurusan"]; ?></td>
			</tr>
			<?php $i++ ?>
			<?php endforeach; ?>
		</table>
	</body>
</html>