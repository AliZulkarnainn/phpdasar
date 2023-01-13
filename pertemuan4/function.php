<?php 
function salam($waktu ="datang",$nama="admin") {
return "selamat $waktu, $nama";
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>latihan function</title>
</head>
<body>
<h1><?= salam("pagi","ali"); ?></h1>
</body>
</html>
