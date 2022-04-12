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


								if(isset($_GET['p_id'])){


									$the_post_id = $_GET['p_id'];



								}

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

						}



						if (isset($_POST['submit'])) {
							
											$post_title = $_POST['post_title'];

											$post_image = $_FILES['image']['name'];
											$post_image_temp = $_FILES['image']['tmp_name'];

											$post_details = $_POST['post_details'];
											$post_comment_count = 4;
											$post_tag = $_POST['post_tag'];
											$post_date = date('d-m-y');


											move_uploaded_file($post_image_temp,"./images/blog/$post_image");



											if (empty($post_image)) {
												
												$query ="SELECT * FROM posts WHERE post_id = {$the_post_id}";
												$select_image = mysqli_query($conn, $query);

												while ($row = mysqli_fetch_array($select_image)) {
													$post_image = $row['post_image'];
												}
											}


											 	$query = " UPDATE `posts` SET ";
											 	//$query .= "`post_id`='{$post_id}',";
											 	$query .= "`post_title`= '{$post_title}', ";
											 	$query .= "`post_date`= now() ,  ";
											 	$query .= " `post_image`='{$post_image}', ";
											 	$query .= "`post_details`='{$post_details}', ";
											 	$query .= " `post_comment_count`= '{$post_comment_count}',";
											 	$query .= "`post_tag`= '{$post_tag}'";
											 	$query .= " WHERE post_id = '{$the_post_id}'";

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
									<label for="focusedinput" class="col-sm-2 control-label">Post Title </label>
									<div class="col-sm-8">
										<input type="text" value="<?php echo $post_title; ?>" name="post_title" class="form-control1" id="focusedinput" placeholder="Default Input">
									</div>
								</div>
								<div class="form-group"> 
									<label for="exampleInputFile"class="col-sm-2 control-label">Post Image</label>
									<div class="col-sm-8">
									<img width="100px" src="../images/<?php echo $post_image; ?>">

									<input type="file" name="image" value="<?php echo $post_image; ?>"  id="exampleInputFile" /> 
									</div>
								</div>
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Post Content</label>
									<div class="col-sm-8">
									<textarea name="post_details"  id="txtarea1" cols="30" rows="10" class="form-control1"><?php echo $post_details; ?>
									</textarea></div>
								</div>
 								<div class="form-group">
									<label for="mediuminput" class="col-sm-2 control-label">Post Tags</label>
									<div class="col-sm-8">
										<input type="text" value="<?php echo $post_tags; ?>" name="post_tag" class="form-control1" id="mediuminput" placeholder="Medium Input">
									</div>
								</div>
								<div class="form-group">
									<input type="submit" value="Update Post" name="submit" class="btn btn-hover btn-dark btn-block" /> 	
									
							</form>
						</div>
					</div>
				
				</div>
			</div>
		</div>
		<!--footer-->
	