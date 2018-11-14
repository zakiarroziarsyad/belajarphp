<?php
$mahasiswa = [
	["Zaki",  "12345678", "Sistem Informasi", "zaki@perbanas.id"],
	["Arrozi",  "12345678", "Sistem Informasi", "arrozi@perbanas.id"]
];
?>
   
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<!-- <ul>
	<?php foreach ( $mahasiswa as $mhs ) : ?>
		<li><?php echo $mhs ?></li>
	<?php endforeach ?>
</ul>
<br>
<ul>
	<li><?php echo $mahasiswa [0] ?></li>
	<li><?php echo $mahasiswa [1] ?></li>
	<li><?php echo $mahasiswa [2] ?></li>
	<li><?php echo $mahasiswa [3] ?></li>
</ul> -->

<?php foreach ($mahasiswa as $mhs) : ?>
<ul>
	<li>Nama : <?php echo $mhs[0] ?></li>
	<li>NRP :  <?php echo $mhs[1] ?></li>
	<li>Jurusan : <?php echo $mhs[2] ?></li>
	<li>email : <?php echo $mhs[3] ?></li>
</ul>
<?php endforeach ?>

</body>
</html>