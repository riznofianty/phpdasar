<?php
//hubungkan ke function
require 'functions.php';

//AMBIL DATA DI URL
$id = $_GET["id"];

//query data mhs brdsrkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


//cek apakah button kirim data sudah di klik atau belum
if(isset($_POST["submit"])){
	
	//cek apakah data berhasil diubah atau tidak
	if (ubah($_POST) > 0){
		echo "
			<script>
				alert('data berhasil diupdate');
				document.location.href = 'index.php';
			</script>

		";

	}else {
		echo "<script>
				alert('data gagal diupdate');
				document.location.href = 'index.php';
			</script>
			";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
		<title>Update Data Mahasiswa</title>
</head>
<body>
<h1>Update Data Mahasiswa</h1>
<form  action="" method="POST">
	<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
	<ul>
		<li>
			<label for="nim">NIM :</label>
			<input type="text" name="nim" id="nim" required value="<?= $mhs['nim'];?>">
		</li>
		<li>
			<label for="nama">Nama :</label>
			<input type="text" name="nama" id="nama" required value="<?= $mhs['nama'];?>">
		</li>	
		<li>
			<label for="email">Email :</label>
			<input type="text" name="email" id="email" required value="<?= $mhs['email'];?>">
		</li>
		<li>
			<label for="jurusan">Jurusan :</label>
			<input type="text" name="jurusan" id="jurusan" required value="<?= $mhs['jurusan'];?>">
		</li>
		<li>
			<label for="gambar">Gambar :</label>
			<input type="text" name="gambar" id="gambar" required value="<?= $mhs['gambar'];?>">
		</li> 
		<li>
			<button type="submit" name="submit">Update Data</button>
		</li>
	</ul>
	
</form>
</body>
</html>