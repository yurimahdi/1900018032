<!DOCTYPE html>
<html>
<head>
	<title>Tiket Anda</title>
</head>
<body>
<center><h2>Tiket Anda</h2></center><br><br>
<?php

	$filedata="data.txt";
	$fl=fopen($filedata,"r+");
	$txt=fread($fl,filesize($filedata));
	echo ($txt)."<br>";
	fclose($fl);
?>
</body>
</html>