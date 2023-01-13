<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>latihan 1</title>

	<style type="text/css">
		.warna-baris
	</style>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
<?php for ($i = 1; $i <= 5; $i++ ) : ?>
	<tr>
		<?php  for ($j=1; $j <=5; $j++) : ?>
			<td><?= "$i, $j"; ?></td>
		<?php endfor; ?>
	</tr>
<?php endfor; ?>
	  
</table> 

</body>
</html>