		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Project Record</h2>
					<div class="panel-body widget-shadow">
						<!-- <h4>All</h4> -->
						
					<div class="table-responsive bs-example widget-shadow">
						<h4></h4>


					<table class="table table-bordered">
						<thead>
						 <tr>
						   <th>Id</th>
						    <th>Project Name</th>
						     <th>In-house Rep</th>
						      <th>Contractor's Name</th>
						       <th>Contractor's <i class="fa fa-phone"></i> </th>
						        <th>Contractor's Email <!-- <i class="fa fa-envelope"></i> --></th>
						         <th>Project Status</th>
						         <th>Total Amount</th>
						         <th>Amount Paid</th>
						         <th>Balance</th>
						         <th>Description</th>
						         <th>Kick-off Date</th>
						</tr>
						           </thead>
						            <tbody>
						             <tr>

						<?php 



						$query = "SELECT * FROM project ";
						$result  = mysqli_query($conn, $query);

						if (!$result) {
							
							die("QUERY FAILED" . mysqli_error($conn));
						}

						while($row = mysqli_fetch_assoc($result)){
							$id  = $row['id'];
							$project_id  = $row['project_id'];
							$project_name = $row['project_name'];
							$in_house_rep  = $row['in_house_rep']; 
							$contractor_name  = $row['contractor_name'];
							$contractor_email  = $row['contractor_email'];
							$contractor_no  = $row['contractor_no'];    
							$project_status  = $row['project_status'];
							$total_amount  = $row['total_amount'];
							$amount_paid  = $row['amount_paid'];
							$balance  = $row['balance'];
							$description  = $row['description'];
							$date_log  = $row['date_log'];
									echo"<tr>";
						             echo"<th scope='row'> $project_id </th>";
						              echo"<td> $project_name </td>";
						              echo"<td> $in_house_rep </td>";
						              echo"<td>$contractor_name </td>";
						               echo"<td>$contractor_email </td>";
						               echo"<td>$contractor_no </td>";
						                echo"<td>$project_status</td>";
						                echo"<td>$total_amount</td>";
						                echo"<td>$amount_paid</td>";
						                echo"<td>$balance</td>";
						                echo"<td>$description</td>";
						                echo"<td>$date_log</td>";
						                 echo"<td><a href='project.php?delete={$id}'> <i class='fa fa-edit'></i></a></td>";
						                echo"<td><a href='project.php?source=edit_project&pro_id={$id}'> <i class='fa fa-trash'></i></a></td>";
						                echo"<td><a href='project.php?on_going={$id}'><i class='fa fa-spinner'></i> </a></td>";
						                echo"<td><a href='project.php?completed={$id}'><i class='fa fa-check'></i></a></td>";
						              
						          		echo"<td><a href='project.php?source=upload_project&up_id={$id}'><i class='fa fa-upload'></i></a></td>";

						                

						                  
						          echo"</tr>";
						             } ?>

						             <?php 
						             $status_1 = "<h5><b> On_going </b></h5>";
						             $status_2 = "Completed";


						             if(isset($_GET['on_going'])){

						             	$the_pro_status = $_GET['on_going'];

						             	$query = "UPDATE project SET project_status = '{$status_1}' WHERE id = {$the_pro_status} ";
						             	$result = mysqli_query($conn, $query);
						             	if(!$result){

						             		die("QUERY FAILED" . mysqli_error($conn));
						             	}

						             }

						             if(isset($_GET['completed'])){

						             	$the_pro_status = $_GET['completed'];

						             	$query = "UPDATE project SET project_status = '{$status_2}' WHERE id = {$the_pro_status} ";
						             	$result = mysqli_query($conn, $query);
						             	if(!$result){

						             		die("QUERY FAILED" . mysqli_error($conn));
						             	}

						             }
						             
						             if (isset($_GET['delete'])) {
						             
						             	$the_pro_id =  $_GET['delete'];

						             	$query = "DELETE FROM project WHERE id = {$the_pro_id} ";

						             	$delete_query = mysqli_query($conn, $query);

						             	header("Location: project.php");
						             
						             }



						             ?>
						            <!-- <tr>
						                <th scope="row">2</th>
						                	<td>Table cell</td>
						                    <td>Table cell</td>
						                    <td>Table cell</td>
						                    <td>Table cell</td>
						                    <td>Table cell</td>
						                    <td>Table cell</td>
						            </tr>

						            <tr>
						             <th scope="row">3</th>
						              <td>Table cell</td>
						              <td>Table cell</td>
						              <td>Table cell</td>
						              <td>Table cell</td>
						              <td>Table cell</td>
						              <td>Table cell</td>
						            </tr> --> 
						            </tbody> 
						            </table> 
						          
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<!--footer-->
		