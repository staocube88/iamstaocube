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
						<h3 class="title1">Upload Completed Project</h3>
						<div class="form-three widget-shadow">

								<?php 
								if(isset($_GET['up_id'])){

									$the_up_id = $_GET['up_id'];

								}

									$query ="SELECT * FROM project WHERE id = '{$the_up_id}' ";
								//$query = "SELECT project_status FROM project WHERE id = '{$the_up_id}' ";
								$result = mysqli_query($conn, $query);	

								if (!$result) {
									echo"error";
								}

								while($row = mysqli_fetch_assoc($result)){

									$id = $row['id'];
									$project_status = $row['project_status'];


$status = "Completed";
echo $project_status;

										if($id = 3 ){


									echo "project completed";


								}else{

									echo"project not completed";
								
								}

								}

//$status = "Completed";

//echo $project_status;
								


							
								

								



							


									// if(isset($_POST['submit'])){

									// 		$id = $_POST['id'];
									// 		$project_link = $_POST['project_link'];
									// 		$project_title = $_POST['project_title'];

									// 		$project_image = $_FILES['project_image']['name'];
									// 		$project_image_temp = $_FILES['project_image']['tmp_name'];

									// 		$project_details = $_POST['project_details'];
									// 		$project_category = $_POST['project_category'];
															
										

									// 		move_uploaded_file($project_image_temp,"../images/$project_image");

											


									// 		$query = "INSERT INTO `upload_project`(`project_link`, `project_title`, `project_image`, `project_details`, `project_category`)
									// 		 VALUES ('{$project_link}','{$project_title}','{$project_image}','{$project_details}','{$project_category}') ";

									// 		$result = mysqli_query($conn,$query);

									// 		if(!$result){
									// 		 		die("<h4 style='margin-bottom:20px; color:red; text-align:center;'><i class='fa fa-exclamation-triangle' aria-hidden='true'></i>Failed to add project! Contact Your Developer for more info!</h4>" . mysqli_error($conn));
									// 		 	}else{
									// 		 		echo "<h4 style='margin-bottom:20px; color:green; text-align:center;'>Your project has been registered Successfully <i class='fa fa-check' aria-hidden='true'></i></h4>";
									// 		 	}			 
									// }
								

								?>

							
						</div>
					</div>
				
				</div>
			</div>
		</div>
		<!--footer-->
	