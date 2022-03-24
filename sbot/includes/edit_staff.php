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
						<h3 class="title1">Edit Post</h3>
						<div class="form-three widget-shadow">

								<?php 


								if(isset($_GET['st_id'])){

									$the_staff_id = $_GET['st_id'];

								}

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

						}



						if (isset($_POST['submit'])) {
							
											$first_name = $_POST['first_name'];
											$last_name = $_POST['last_name'];

											$image = $_FILES['image']['name'];
											$staff_image_temp = $_FILES['image']['tmp_name'];
											
											$email = $_POST['email'];
											$address = $_POST['address'];
											$phone_no = $_POST['phone_no'];
											$skills = $_POST['skills'];
											$p_statement = $_POST['p_statement'];
											$d_o_b = $_POST['d_o_b'];

											$cv = $_FILES['cv']['name'];
											$cv_temp = $_FILES['cv']['tmp_name'];

											move_uploaded_file($staff_image_temp,"../images/$image");

											move_uploaded_file($cv_temp,"../images/$cv");


											
											if (empty($cv)) {
												
												$query ="SELECT * FROM staff WHERE id = {$the_staff_id}";
												$select_image = mysqli_query($conn, $query);

												while ($row = mysqli_fetch_array($select_image)) {
													$cv = $row['cv'];
												}
											}


											if (empty($image)) {
												
												$query ="SELECT * FROM staff WHERE id = {$the_staff_id}";
												$select_image = mysqli_query($conn, $query);

												while ($row = mysqli_fetch_array($select_image)) {
													$image = $row['image'];
												}
											}


											 	$query = " UPDATE `staff` SET ";
											 	//$query .= "`post_id`='{$post_id}',";
											 	$query .= "`first_name`= '{$first_name}', ";
											 	$query .= "`last_name`= '{$last_name}' ,  ";
											 	$query .= " `image`='{$image}', ";
											 	$query .= "`email`='{$email}', ";
											 	$query .= " `address`= '{$address}',";
											 	$query .= "`phone_no`= '{$phone_no}',";
											 	$query .= "`skills`= '{$skills}',";
											 	$query .= "`p_statement`= '{$p_statement}',";
											 	$query .= "`d_o_b`= '{$d_o_b}',";
											 	$query .= "`cv`= '{$cv}' ";


											 	$query .= " WHERE id = '{$the_staff_id}'";

											 	$result = mysqli_query($conn, $query);

											 	//confirm_query($result);

											 	if(!$result){
											 		die("<h4 style='margin-bottom:20px; color:red; text-align:center;'><i class='fa fa-exclamation-triangle' aria-hidden='true'></i>Post Upload Failed! Contact Your Developer for more info!</h4>" . mysqli_error($conn));
											 	}else{
											 		echo "<h4 style='margin-bottom:20px; color:green; text-align:center;'>Your post has been successfully edited <i class='fa fa-check' aria-hidden='true'></i></h4>";
											 	}



										}				
								?>

							<form class="form-horizontal" method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<!-- <label for="focusedinput" class="col-sm-2 control-label">Post Title </label> -->
									<div class="col-sm-8">
										<input type="text"  name="first_name" value="<?php echo $first_name; ?>" class="form-control1" placeholder="Enter First Name" id="focusedinput" placeholder="Default Input">
									</div>
								</div>
								<div class="form-group">
									<!-- <label for="focusedinput" class="col-sm-2 control-label">Post Title </label> -->
									<div class="col-sm-8">
										<input type="text"  name="last_name" value="<?php echo $last_name; ?>" class="form-control1" placeholder="Enter Last Name" id="focusedinput" placeholder="Default Input">
									</div>
								</div>
								<div class="form-group">
									<!-- <label for="mediuminput" class="col-sm-2 control-label">Post Tags</label> -->
									<div class="col-sm-8">
										<input type="email" name="email" value="<?php echo $email; ?>"  class="form-control1" id="mediuminput" placeholder="Enter Your Email">
									</div>
								</div>
								<div class="form-group">
									<!-- <label for="mediuminput" class="col-sm-2 control-label">Post Tags</label> -->
									<div class="col-sm-8">
										<input type="text" name="address" value="<?php echo $address; ?>" class="form-control1" id="mediuminput" placeholder="Enter Your Address">
									</div>
								</div>
								<div class="form-group">
									<!-- <label for="mediuminput" class="col-sm-2 control-label">Post Tags</label> -->
									<div class="col-sm-8">
										<input type="tel" name="phone_no" value="<?php echo $phone_no; ?>" class="form-control1" id="mediuminput" placeholder="Enter Your Mobile Number">
									</div>
								</div>
								<div class="form-group">
									<!-- <label for="mediuminput" class="col-sm-2 control-label">Post Tags</label> -->
									<div class="col-sm-8">
										<input type="date" name="d_o_b" value="<?php echo $d_o_b; ?>" class="form-control1" id="mediuminput" placeholder="Enter Your Skills">
									</div>
								</div>
								<div class="form-group">
									<!-- <label for="mediuminput" class="col-sm-2 control-label">Post Tags</label> -->
									<div class="col-sm-8">
										<input type="text" name="skills" value="<?php echo $skills; ?>" class="form-control1" id="mediuminput" placeholder="Enter Your Date Of Birth">
									</div>
								</div>
								<div class="form-group"> 
									<!-- <label for="exampleInputFile"class="col-sm-2 control-label">Upload Staff Image</label> -->
									<div class="col-sm-8">
									<img width="100px" src="../images/<?php echo $image; ?>">
									<input type="file" name="image"  id="exampleInputFile" placeholder="Upload Staff Image" /> 
									</div>
								</div>
								<div class="form-group">
									<!-- <label for="txtarea1" class="col-sm-2 control-label">Post Content</label> -->
									<div class="col-sm-8">
									<textarea name="p_statement" id="txtarea1" cols="30" rows="10" placeholder="Personal Statement" class="form-control1"><?php echo $p_statement; ?></textarea></div>
								</div>
								<div class="form-group"> 
									<label for="exampleInputFile"class="col-sm-2 control-label">Upload CV</label>
									<div class="col-sm-8">
									<img width="100px" src="../images/<?php echo $cv; ?>">
									<input type="file" name="cv"  id="exampleInputFile" /> 
									</div>
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
	