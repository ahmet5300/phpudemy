<?php

class Car{
	
function moveWheels(){
	echo "5 wheels";
}
	
	
}
if(method_exists('Car','moveWheels')){
	echo"Yes this function exist";
}else{
	echo"No";
}


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