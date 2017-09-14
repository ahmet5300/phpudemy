<?php
$name="Ahmet";
$value=1400000;
$expiration= time() + (60*60*24*7);

setcookie($name,$value,$expiration);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php

if(isset($_COOKIE["Ahmet"])){
$me= $_COOKIE["Ahmet"];
echo $me;
}else{
	$me="";
}
	
?>
	
</body>
</html>