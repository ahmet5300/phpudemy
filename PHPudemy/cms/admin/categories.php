<?php include "includes/header.php"?>
    <div id="wrapper">

        <!-- Navigation -->
  <?php include "includes/navigation.php"?> 

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                       
                           
                             <h1 class="page-header">
                            Blank Page
                            <small>AHmet</small>
                        </h1>
                        <div class="col-xs-6">
                        <form action="">
                        	<div class="form-group">
                        		<label for="cat-title">Add Category:</label>
                        		<input type="text" name="cat_title" class="form-control">
                        	</div>
                        	<div class="form-group">
                        		<input type="submit" name="submit" value="Submit" class="btn btn-primary">
                        	</div>
                      </form></div>
                       
                       <div class="col-xs-6">
                       	<table class="table table-bordered table-hover">
                       		<thead>
                       			<tr>
									<th>Id</th>
									<th>Category Title</th>
                       			</tr>
                       		</thead>
                       		<tbody>
                       			<tr>
                       				<td>Basketball category</td>
                       				<td>Football category</td>
                       			</tr>
                       			<tr>
                       				<td>Basketball category</td>
                       				<td>Football category</td>
                       			</tr>
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

 <?php include "includes/footer.php" ?>