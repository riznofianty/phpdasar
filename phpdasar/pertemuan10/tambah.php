<?php
//hubungkan ke function
require 'functions.php';


//cek apakah button kirim data sudah di klik atau belum
if(isset($_POST["submit"])){
	

	//query insert data
	

	//cek apakah data berhasil ditambahkan atau tidak
	if (tambah($_POST) > 0){
		echo "
			<script>
				alert('data berhasil ditambahkan');
				document.location.href = 'index.php';
			</script>

		";

	}else {
		echo "<script>
				alert('data gagal ditambahkan');
				document.location.href = 'index.php';
			</script>
			";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
		<title>Tambah Data Mahasiswa</title>
</head>
<body>
<h1>Tambah Data Mahasiswa</h1>
<form  action="" method="POST">
	<ul>
		<li>
			<label for="nrp">NRP :</label>
			<input type="text" name="nrp" id="nrp" required>
		</li>
		<li>
			<label for="nama">Nama :</label>
			<input type="text" name="nama" id="nama" required>
		</li>	
		<li>
			<label for="email">Email :</label>
			<input type="text" name="email" id="email" required>
		</li>
		<li>
			<label for="jurusan">Jurusan :</label>
			<input type="text" name="jurusan" id="jurusan" required>
		</li>
		<li>
			<label for="gambar">Gambar :</label>
			<input type="text" name="gambar" id="gambar" required>
		</li>
		<li>
			<button type="submit" name="submit">Tambah Data</button>
		</li>
	</ul>
	
</form>
</body>
</html>