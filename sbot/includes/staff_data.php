		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Staff Data</h2>
					<div class="panel-body widget-shadow">
						<!-- <h4>All</h4> -->
						
					<div class="table-responsive bs-example widget-shadow">
						<h4></h4>


					<table class="table table-bordered">
						<thead>
						 <tr>
						   <th>Staff Id</th>
						    <th>First Name</th>
						     <th>Last Name</th>
						     <th>Staff Image</th>
						      <th>Email</th>
						       <th>Phone Number</th>
						        <th>Address</th>
						         <th>Skill</th>
						         <th>Date Of Birth</th>
						         <th>Personal Statement</th>
						         <th>CV/Resume</th>
						</tr>
						           </thead>
						            <tbody>
						             <tr>

						<?php 



						$query = "SELECT * FROM staff ";
						$result  = mysqli_query($conn, $query);

						if (!$result) {
							
							die("QUERY FAILED" . mysqli_error($conn));
						}

						while($row = mysqli_fetch_assoc($result)){
							$id = $row['id'];
							$staff_id  = $row['staff_id'];
							$first_name = $row['first_name'];
							$last_name  = $row['last_name']; 
							$image = $row ['image'];
							$email  = $row['email'];
							$phone_no  = $row['phone_no'];
							$address  = $row['address'];
							$skills  = $row['skills'];
							$d_o_b  = $row['d_o_b'];      
							$p_statement  = $row['p_statement'];
							$cv  = $row['cv'];  

									echo"<tr>";
						             echo"<th scope='row'> $staff_id </th>";
						              echo"<td> $first_name </td>";
						              echo"<td> $last_name </td>";
						              echo"<td><img src='../images/$image' alt='image' width='50px' height='50px' /> </td>";
						              echo"<td> $email</td>";
						               echo"<td>$phone_no </td>";
						               echo"<td>$address </td>";
						                echo"<td>$skills</td>";
						                echo"<td>$d_o_b</td>";
						                echo"<td>$p_statement</td>";
						                echo"<td>$cv</td>";
						                 echo"<td><a href='staff.php?delete={$id}'> <i class='fa fa-trash'></i></a></td>";
						                echo"<td><a href='staff.php?source=edit_staff&st_id={$id}'> <i class='fa fa-edit'></i></a></td>";
						                   	
						          echo"</tr>";
						             } ?>
						             <?php


						             
						             if (isset($_GET['delete'])) {
						             
						             	$the_staff_id =  $_GET['delete'];

						             	$query = "DELETE FROM staff WHERE id = {$the_staff_id} ";

						             	$delete_query = mysqli_query($conn, $query);

						             	
						             	//header("Location: staff.php");
						             							             
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
		