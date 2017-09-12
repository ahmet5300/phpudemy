 <?php include "db.php";?>
<?php include "functions.php"; ?>

<?php
if(isset($_POST['submit']))
{
 deleteRows();
}
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
 	<form action="login_delete.php" method="post">
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
 		<input type="submit"  name="submit" class="btn btn-primary" value="DELETE">
 	</form>
 		
	</div>
 </div>	
 </body>
 </html>