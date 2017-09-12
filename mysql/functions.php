<?php


function showAllData(){
	global $connection;
	$query= "SELECT * FROM users";
	$result = mysqli_query($connection,$query);	
	while($row= mysqli_fetch_assoc($result)){
					$id=$row['id'];
					echo "<option value='$id'>$id</option>";
				}
	}
?>