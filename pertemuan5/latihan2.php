<?php 
// pengulangan pada array
// for / foreach
$angka = [3,4,5,66,53,24,44];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>latihan 2</title>
	<style type="text/css">
		
		.kotak {
			width: 50px;
			height: 50px;
			background-color: lightblue;
			text-align: center;
			line-height: 50px;
			margin: 3px;
			float: left;

		}
		.clear	{clear:both;}
	</style>
</head>
<body>

<?php for( $i=0;  $i < count($angka); $i++) { ?>
<div class="kotak"> <?php echo $angka [$i]; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach($angka as $a ) { ?>
	<div class="kotak"><?php echo $a; ?></div>
	<?php } ?>


	<div class="clear"></div>

	<?php foreach($angka as $a ) : ?>
		<div class="kotak"><?php echo $a; ?></div>
	<?php endforeach; ?>







</body>
</html>