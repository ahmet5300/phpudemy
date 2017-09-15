<?php

class Car{
	static $wheel=4;
	var $engine=1;
	
	
function moveWheels(){
	Car::$wheel=10;
}
}

$gleamg = new Car();

echo Car::moveWheels();
echo $gleamg::$wheel;
echo $gleamg::$wheel;


?>



