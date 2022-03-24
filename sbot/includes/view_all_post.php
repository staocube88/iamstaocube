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
						    <th>Post Title</th>
						     <th>Post Image</th>
						      <th>Post Content</th>
						       <th>Post Tag </th>
						        <th>Comment Count</th>
						        <!--  <th>Delete</th> -->
						</tr>
						           </thead>
						            <tbody>
						             <tr>

						<?php 



						$query = "SELECT * FROM posts ";
						$result  = mysqli_query($conn, $query);

						if (!$result) {
							
							die("QUERY FAILED" . mysqli_error($conn));
						}

						while($row = mysqli_fetch_assoc($result)){
							$post_id  = $row['post_id'];
							$post_title = $row['post_title'];
							$post_image  = $row['post_image']; 
							$post_details  = $row['post_details'];
							$post_tags  = $row['post_tag'];
							$post_comment_count  = $row['post_comment_count'];    
						

									echo"<tr>";
						             echo"<th scope='row'> $post_id </th>";
						              echo"<td> $post_title </td>";
						              echo"<td><img src='../images/new.png' alt='image' width='50px' height='50px' /> </td>";
						              echo"<td>$post_details </td>";
						               echo"<td>$post_tags </td>";
						               echo"<td>$post_comment_count </td>";
						                echo"<td><a href='posts.php?delete={$post_id}'><i class='fa fa-trash'></i></a></td>";
						                echo"<td><a href='posts.php?source=edit_post&p_id={$post_id}'> <i class='fa fa-edit'></i></a></td>";
						                   	
						          echo"</tr>";
						             } ?>



						             <?php


						             
						             if (isset($_GET['delete'])) {
						             
						             	$the_post_id =  $_GET['delete'];

						             	$query = "DELETE FROM posts WHERE post_id = {$the_post_id} ";

						             	$delete_query = mysqli_query($conn, $query);

						             	if (!$delete_query) {

						             		die("QUERY FAILED" . mysqli_error($conn));

						             	}
						             	header("Location: posts.php");
						             							             
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
		