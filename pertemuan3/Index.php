<!-- <!DOCTYPE html>
<html>
<head>
	<title>Pertemuan 3</title>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="0">
	<?php 
		for ($i = 1; $i <=5 ; $i++) {
			echo "<tr>";
			for ($j=1; $j <=5 ; $j++ ) {
				echo "<td>$i ; $j </td>";
			}
			echo "</tr>";
		}

	 ?>

</table>
</body>
</html> -->


// sintaks templating

<!-- <!DOCTYPE html>
<html>
<head>
	<title>Pertemuan 3</title>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="0">
	<?php for ($i = 1; $i <=5 ; $i++) { ?>
		<tr>
			<?php for ($j=1 ; $j <=5 ; $j++) { ?>
				<td><?php echo "$i,$j"; ?></td>
			<?php } ?>
		</tr>


	<?php } ?>

</table>
</body>
</html> -->


// EFEKTIF

<!DOCTYPE html>
<html>
<head>
	<title>Pertemuan 3</title>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="0">
	<?php for ($i = 1; $i <=5 ; $i++) : ?>
		<tr>
			<?php for ($j=1 ; $j <=5 ; $j++) : ?>
				<td><?php echo "$i,$j"; ?></td>
			<?php endfor; ?>
		</tr>


	<?php endfor; ?>

</table>
</body>
</html>
