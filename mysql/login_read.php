 <?php


$connection = mysqli_connect('localhost','root','root','loginapp');	
	
if($connection){
	echo 'We are connected';
}else{
	die("database connection failed");
}
$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);


?>
 
 
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
 </head>
 <body>
 <div class="container">
 	<div class="col-sm-6">
 	<?php
		
	while($row = mysqli_fetch_assoc($result)){
		print_r($row);
		}
		?>
 	
 	
</div>
 </div>	
 </body>
 </html>