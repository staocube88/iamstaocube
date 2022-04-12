<?php include"./includes/header.php"; ?>

<?php include"./includes/nav.php"; ?>
<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
		
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->







		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Message</h2>
					<div class="panel-body widget-shadow">
						<h4>All Messages</h4>
						
					<div class="table-responsive bs-example widget-shadow">
						<h4></h4>


					<table class="table table-bordered">
						<thead>
						 <tr>
						   <th>Id</th>
						    <th>Name</th>
						     <th>Email</th>
						      <th>Phone Number</th>
						       <th>Subject</th>
						        <th>Message</th>
						       <th>Date</th>
						</tr>
						           </thead>
						            <tbody>
						             <tr>

						<?php 



						$query = "SELECT * FROM message ";
						$result  = mysqli_query($conn, $query);

						if (!$result) {
							
							die("QUERY FAILED" . mysqli_error($conn));
						}

						while($row = mysqli_fetch_assoc($result)){
							$id  = $row['id'];
							$name = $row['name'];
							$email  = $row['email']; 
							$number  = $row['phone_no'];
							$subject  = $row['subject'];
							$info  = $row['info'];   
							$date = $row['date'];  
						

									echo"<tr>";
						             echo"<th scope='row'> $id </th>";
						              echo"<td> $name </td>";
						              //echo"<td><img src='../images/$post_image' alt='image' width='50px' height='50px' /> </td>";
						              echo"<td>$email </td>";
						               echo"<td>$number </td>";
						               echo"<td>$subject </td>";
						               echo"<td>$info </td>";
						               echo"<td>$date </td>";
						                echo"<td><a href='inbox.php?delete={$id}'><i class='fa fa-trash'></i></a></td>";
						                //echo"<td><a href='posts.php?source=edit_post&p_id={$post_id}'> Edit</a></td>";
						                   	
						          echo"</tr>";
						             } ?>



						             <?php


						             
						             if (isset($_GET['delete'])) {
						             
						             	$the_post_id =  $_GET['delete'];

						             	$query = "DELETE FROM message WHERE id = {$the_post_id} ";

						             	$delete_query = mysqli_query($conn, $query);

						             	if (!$delete_query) {

						             		die("QUERY FAILED" . mysqli_error($conn));

						             	}
						             	header("Location: inbox.php");
						             							             
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