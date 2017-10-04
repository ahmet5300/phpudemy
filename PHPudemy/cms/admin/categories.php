<?php include "includes/admin_header.php"?>
    <div id="wrapper">

        <!-- Navigation -->
  <?php include "includes/admin_navigation.php"?> 

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                       
                           
                             <h1 class="page-header">
                            Category
                            <small>ADD</small>
                        </h1>
                        <div class="col-xs-6">
                        
								 <?php
								if(isset($_POST['submit'])){
									$cat_title=$_POST['cat_title'];
									if($cat_title == " " || empty($cat_title)){
										echo "It doesn't work with a empty box!";
									}
									else {
										$query= "INSERT INTO categories(cat_title) ";
										$query .= "VALUE('{$cat_title}')";

										$result_categories= mysqli_query($connection, $query);

										if(!$result_categories){
											die("Sorry failure please try later" . myswli_error($connection));
										}
									}
								}?>
         
             
                        <form action="" method="post">
                        	<div class="form-group">
                        		<label for="cat-title">Add Category:</label>
                        		<input type="text" name="cat_title" class="form-control">
                        	</div>
                        	<div class="form-group">
                        		<input type="submit" name="submit" value="Submit" class="btn btn-primary">
                        	</div>
                        	
                      </form></div>
                        
  					 <div class="col-xs-6">
							<?php
							$query= "SELECT * FROM categories";
							$result= mysqli_query($connection,$query);

							?>
                       	<table class="table table-bordered table-hover">
                       		<thead>
                       			<tr>
									<th>Id</th>
									<th>Category Title</th>
                       			</tr>
                       		</thead>
                       		<tbody>
								 <?php
								while ($row=mysqli_fetch_assoc($result))
								{
									$cat_id=$row['cat_id'];
									$cat_title=$row['cat_title'];
									echo "<tr>";
									echo "<td>{$cat_id}</td>";
									echo "<td>{$cat_title}</td>";
									echo "</tr>";
								}
								?>
                       			
                       		</tbody>
                       	</table>
                       	
                       </div>
                        
                    </div>
                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

 <?php include "includes/admin_footer.php" ?>