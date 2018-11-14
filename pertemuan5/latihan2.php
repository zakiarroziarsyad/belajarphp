<?php 
// pengulanagan pada array
// for
// foreach

$angka = [3, 5, 13, 87, 98, 2, 0, 8, 9];
?>



<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2</title>
	<style>
		.kotak {
			width: 50px;
			 height: 50px;
			 background-color: salmon;
			 text-align: center;
			 line-height: 50px;
			 margin: 3px;
			 float: left;
		}
		.clear {clear: both;}
	</style>
</head>
<body>

<?php 
//<?php for( $i = 0; $i < 7; $i++ ) { 

//  
 ?>

<?php for( $i = 0; $i < count($angka); $i++ ) { ?>
<div class="kotak"><?php echo $angka[$i]; ?></div>
<?php } ?> 


<div class="clear"></div>


<?php foreach ( $angka as $a ) { ?>
	<div class="kotak"> <?php echo $a; ?></div>
<?php } ?>


<div class="clear"></div>


<?php foreach ( $angka as $a ) : ?>
	<div class="kotak"> <?= $a; ?></div>
<?php endforeach  ?>

   


</body>
</html>