<?php

class Car{
	var $wheel=4;
	var $engine=1;
	var $hood=1;
	var $doors=4;
	
function moveWheels(){
	$this->wheel=4;
}
}

$gleamg = new Car();

class Plane extends Car{
	
}
$jet = new Plane();
echo $jet->wheel=9;

//if(method_exists('Car','moveWheels')){
//	echo"Yes this function exist";
//}else{
//	echo"No";
//}
//

?>



