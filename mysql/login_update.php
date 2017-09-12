 <?php include "db.php";?>
<?php include "functions.php"; ?>

<?php
if(isset($_POST['submit']))
{
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
}}
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
 	<form action="login_update.php" method="post">
 		<div class="form-group">
 			<label for="username">Username: </label>
 			<input type="text" name="username" class="form-control">
 		</div>
 		<div class="form-group">
 			<label for="password">Password: </label>
 			<input type="password" name="password" class="form-control">
 		</div>
 		<div class="form-group">
 			<select name="id" id="">
 			 <?php
			
				showAllData();
			 ?>
 			

 			</select>
 			
 		</div>
 		<input type="submit"  name="submit" class="btn btn-primary" value="Submit">
 	</form>
 		
	</div>
 </div>	
 </body>
 </html>