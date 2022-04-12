<?php include"includes/header.php"; ?>
<?php include"includes/nav.php";?>
		<!-- main content start-->
				<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Blog Posts</h2>
					<div class="panel-body widget-shadow">
						<h4>All Posts</h4>
						
					<div class="table-responsive bs-example widget-shadow">
						<h4></h4>


					<table class="table table-bordered">
						<thead>
						 <tr>
						   <th>Id</th>
						    <th>email</th>
						     
						        <!--  <th>Delete</th> -->
						</tr>
						           </thead>
						            <tbody>
						             <tr>

						<?php 



						$query = "SELECT * FROM subscriber ";
						$result  = mysqli_query($conn, $query);

						if (!$result) {
							
							die("QUERY FAILED" . mysqli_error($conn));
						}

						while($row = mysqli_fetch_assoc($result)){
							$id  = $row['id'];
							$email = $row['email'];
						  
						

									echo"<tr>";
						             echo"<th scope='row'> $id</th>";
						              echo"<td> $email </td>";
						              
						                echo"<td><a href='subscribe.php?delete={$id}'><i class='fa fa-trash'></i></a></td>";
						                //echo"<td><a href='posts.php?source=edit_post&p_id={$post_id}'> <i class='fa fa-edit'></i></a></td>";
						                   	
						          echo"</tr>";
						             } ?>



						             <?php


						             
						             if (isset($_GET['delete'])) {
						             
						             	$the_sub_id =  $_GET['delete'];

						             	$query = "DELETE FROM subscriber WHERE id = {$the_sub_id} ";

						             	$delete_query = mysqli_query($conn, $query);

						             	if (!$delete_query) {

						             		die("QUERY FAILED" . mysqli_error($conn));

						             	}						             
						             }

						             

						             ?>
						           
						            
						            </tbody> 
						            </table> 
						            
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<!--footer-->
		
		<!--footer-->
		<?php include"includes/footer.php"; ?>