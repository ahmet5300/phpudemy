<?php
$name="Ahmet";
$value=15000000;
$expiration= time() + (60*60*24*8);

setcookie($name,$value,$expiration);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>