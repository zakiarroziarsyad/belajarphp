<?php 
require 'functions.php';

// cek tombol submit udah ditekan / blm
if ( isset($_POST["submit"]) ) {

	// cek apakah data berhasil ditambah
	if ( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
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
	<title>Tambah data mahasiswa</title>
</head>
<body>
	<h1>Tambah data mahasiswa</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="nrp">NRP :</label>
				<input type="text" name="nrp" required>
			</li>
			<li>
				<label for="nama">Nama :</label>
				<input type="text" name="nama" required>
			</li>
			<li>
				<label for="email">Email :</label>
				<input type="text" name="email" required>
			</li>
			<li>
				<label for="jurusan">Jurusan :</label>
				<input type="text" name="jurusan" required>
			</li>
			<li>
				<label for="gambar">Gambar :</label>
				<input type="text" name="gambar" required>
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>
		


	</form>
</body>
</html>