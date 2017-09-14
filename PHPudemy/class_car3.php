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
$gleamg->moveWheels();
$truck=new Car();
echo $gleamg -> wheel . " ";
echo $truck -> wheel=10;

//if(method_exists('Car','moveWheels')){
//	echo"Yes this function exist";
//}else{
//	echo"No";
//}
//

?>



