<?php


function showAllData()
{
	global $connection;
	$query= "SELECT * FROM users";
	$result = mysqli_query($connection,$query);	
	while($row= mysqli_fetch_assoc($result))
				{
					$id=$row['id'];
					echo "<option value='$id'>$id</option>";
				}
	}
function createRows(){
global $connection;
$username= $_POST['username'];
$password= $_POST['password'];

$username= mysqli_real_escape_string($connection,$username);
$password= mysqli_real_escape_string($connection,$password);
	
$connection = mysqli_connect('localhost','root','root','loginapp');	
if($connection){
	echo 'We are connected';
}else{
	die("database connection failed");
}
$query= "INSERT INTO users(username,password)";
$query .= "VALUES ('$username','$password')";

$result = mysqli_query($connection,$query);
if(!$result){
	die("Connection failed");
}
}

function updateTable()
{
global $connection;
$username= $_POST['username'];
$password= $_POST['password'];
$id= $_POST['id'];

$query = "UPDATE users SET ";
$query .= "username = '$username',";
$query .= "password = '$password' ";
$query .= "WHERE id=$id ";	


$result = mysqli_query($connection,$query);
if(!$result){
	die("Connection failed");
}
}

function deleteRows()
{
global $connection;
$username= $_POST['username'];
$password= $_POST['password'];
$id= $_POST['id'];

$query = "DELETE FROM users ";
$query .= "WHERE id= $id ";	


$result = mysqli_query($connection,$query);
if(!$result){
	die("Connection failed" . mysqli_error($connection));
}
}
?>