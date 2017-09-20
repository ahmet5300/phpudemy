            <div class="col-md-4">
                <?php
				if(isset($_POST['submit'])){
				
				 $search =$_POST['search'];
					
					
					
				$query= "Select * from posts WHERE post_tags LIKE '%$search%' ";
				$result= mysqli_query($connection, $query);
					
				if(!$result){
					die("It doesnt work lan " . mysqli_error()) ;
				}	
				$count=mysqli_num_rows($result);
					if($count == 0 ){
						echo "<h1>Choose a good tag</h1>";
					}else if(strlen($search)){
						echo "<h1>Good tag aslanim</h1>";
					}else{
						echo "<h1>Choose a good tag</h1>";
					}
				}
				?>

                <!-- Blog Search Well -->
                <div class="well">
                   <form action="" method="post">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    </form>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>