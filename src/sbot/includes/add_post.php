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
						<h3 class="title1">Add New Post</h3>
						<div class="form-three widget-shadow">

								<?php 

									if(isset($_POST['submit'])){

											$post_title = $_POST['post_title'];

											$post_image = $_FILES['image']['name'];
											$post_image_temp = $_FILES['image']['tmp_name'];

											$post_details = $_POST['post_details'];
											$post_comment_count = 4;
											$post_tag = $_POST['post_tag'];
											$post_date = date('d-m-y');


											move_uploaded_file($post_image_temp,"../images/blog/$post_image");

											$query = "INSERT INTO posts(post_title,post_image,post_details,post_tag,post_date,post_comment_count) 
													VALUES('{$post_title}','{$post_image}','{$post_details}','{$post_tag}',now(),'{$post_comment_count}') ";

											$result = mysqli_query($conn,$query);

											if(!$result){

												die("<h4 style='margin-bottom:20px; color:red; text-align:center;'>Post Upload Failed! Contact Your Developer for more info!<i class='fa fa-exclamation-triangle' aria-hidden='true'></i></h4>");
											}else{
											 		echo "<h4 style='margin-bottom:20px; color:green; text-align:center;'>You've successfully added a post to your blog <i class='fa fa-check' aria-hidden='true'></i></h4>";
											 	}		 
									}

								?>

							<form class="form-horizontal" method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Post Title </label>
									<div class="col-sm-8">
										<input type="text"  name="post_title" class="form-control1" id="focusedinput" placeholder="Enter Your Post Title">
									</div>
								</div>
								<div class="form-group"> 
									<label for="exampleInputFile"class="col-sm-2 control-label">Post Image</label>
									<div class="col-sm-8">
									<input type="file" name="image"  id="exampleInputFile" /> 
									</div>
								</div>
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Post Content</label>
									<div class="col-sm-8">
									<textarea name="post_details" id="txtarea1" cols="30" rows="10" class="form-control1"></textarea></div>
								</div>
 								<div class="form-group">
									<label for="mediuminput" class="col-sm-2 control-label">Post Tags</label>
									<div class="col-sm-8">
										<input type="text" name="post_tag" class="form-control1" id="mediuminput" placeholder="Enter Your Post Tags">
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
	