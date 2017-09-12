<?php 
$connection = mysqli_connect('localhost','root','root','loginapp');	
	
if($connection){
	echo 'We are connected';
}else{
	die("database connection failed");
}
?>