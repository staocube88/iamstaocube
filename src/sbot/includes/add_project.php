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
				<div class="forms">
					<div class="row">
						<h3 class="title1">Register A new Project</h3>
						<div class="form-three widget-shadow">

								<?php 

									if(isset($_POST['submit'])){

											$project_id = "CPT_" . rand(10,100);
											$project_name = $_POST['project_name'];
											$in_house_rep = $_POST['in_house_rep'];
											$contractor_name = $_POST['contractor_name'];
											$contractor_email = $_POST['contractor_email'];
											$contractor_no = $_POST['contractor_no'];
											$project_status = $_POST['project_status'];
											$total_amount = $_POST['total_amount'];
											$amount_paid = $_POST['amount_paid'];
											$balance = $total_amount - $amount_paid;
										
											$description = $_POST['description'];
											$date_log = date('d-m-y');


											//move_uploaded_file($post_image_temp,"../images/$post_image");

											$query = "INSERT INTO `project`(`project_id`,`project_name`, `in_house_rep`, `contractor_name`, `contractor_email`, `contractor_no`, `project_status`, `total_amount`, `amount_paid`, `balance`, `description`, `date_log`)
											 VALUES ('{$project_id}','{$project_name}','{$in_house_rep}','{$contractor_name}','{$contractor_email}','{$contractor_no}','{$project_status}','{$total_amount}','{$amount_paid}','{$balance}','{$description}',now())";

											$result = mysqli_query($conn,$query);

											if(!$result){
											 		die("<h4 style='margin-bottom:20px; color:red; text-align:center;'><i class='fa fa-exclamation-triangle' aria-hidden='true'></i>Failed to add project! Contact Your Developer for more info!</h4>" . mysqli_error($conn));
											 	}else{
											 		echo "<h4 style='margin-bottom:20px; color:green; text-align:center;'>Your project has been registered Successfully <i class='fa fa-check' aria-hidden='true'></i></h4>";
											 	}			 
									}

								?>

							<form class="form-horizontal" method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<!-- <label for="focusedinput" class="col-sm-2 control-label">Project Name </label> -->
									<div class="col-sm-8">
										<input type="text"  name="project_name" class="form-control1" id="focusedinput" placeholder="Enter Project Name">
									</div>
								</div>
								<div class="form-group">
									<!-- <label for="focusedinput" class="col-sm-2 control-label">In-house Rep </label> -->
									<div class="col-sm-8">
										<input type="text"  name="in_house_rep" class="form-control1" id="focusedinput" placeholder="In-house Rep">
									</div>
								</div><div class="form-group">
									<!-- <label for="focusedinput" class="col-sm-2 control-label">Contraction Name </label> -->
									<div class="col-sm-8">
										<input type="text"  name="contractor_name" class="form-control1" id="focusedinput" placeholder="Enter Contractor's Name">
									</div>
								</div>
								<div class="form-group">
									<!-- <label for="focusedinput" class="col-sm-2 control-label">Contraction Email </label> -->
									<div class="col-sm-8">
										<input type="text"  name="contractor_email" class="form-control1" id="focusedinput" placeholder="Enter Contrator's Email">
									</div>
								</div>
								<div class="form-group">
									<!-- <label for="focusedinput" class="col-sm-2 control-label">Contraction No </label> -->
									<div class="col-sm-8">
										<input type="text"  name="contractor_no" class="form-control1" id="focusedinput" placeholder="Enter Contractor's Number">
									</div>
								</div>
								<div class="form-group">
									<!-- <label for="focusedinput" class="col-sm-2 control-label">Project Status </label> -->
									<div class="col-sm-8">
										<input type="text"  name="project_status" class="form-control1" id="focusedinput" placeholder="Project Status">
									</div>
								</div>
								<div class="form-group">
									<!-- <label for="focusedinput" class="col-sm-2 control-label">Total Amount</label> -->
									<div class="col-sm-8">
										<input type="text"  name="total_amount" class="form-control1" id="focusedinput" placeholder="Total Amount">
									</div>
								</div>
								<div class="form-group">
									<!-- <label for="focusedinput" class="col-sm-2 control-label">Amount Paid </label> -->
									<div class="col-sm-8">
										<input type="text"  name="amount_paid" class="form-control1" id="focusedinput" placeholder="Amount Paid">
									</div>
								</div>
								<!-- <div class="form-group">
									 <label for="focusedinput" class="col-sm-2 control-label">Balance </label> 
									<div class="col-sm-8">
										<input type="text"  name="balance" class="form-control1" id="focusedinput" placeholder="Balance">
									</div>
								</div> -->
								<div class="form-group">
									<!-- <label for="txtarea1" class="col-sm-2 control-label">Description</label> -->
									<div class="col-sm-8">
									<textarea name="description" id="txtarea1" cols="30" rows="10" placeholder="Description" class="form-control1"></textarea></div>
								</div>
								<div class="form-group">
									<input type="submit" value="Submit" name="submit" class="btn btn-hover btn-dark btn-block" /> 	
									
							</form>
						</div>
					</div>
				
				</div>
			</div>
		</div>
		<!--footer-->
	