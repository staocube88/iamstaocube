<?php include"includes/header.php"; ?>

<?php include"includes/nav.php"; ?>
		<!--left-fixed -navigation-->
		
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
			<div class="col_lg_12">
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-comments icon-rounded"></i>
                    <div class="stats">
                    <?php 

                    $query = "SELECT * FROM posts";
                    $result =mysqli_query($conn,$query);

                    $row = mysqli_num_rows($result);
                    ?>
                      <h5><strong><?php echo $row;?></strong></h5>
                      <span><?php if ($row = 1) {
                        echo "Blog Post";
                      }else{ echo"Blog Posts";} ?></span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-gears user1 icon-rounded"></i>
                    <div class="stats">
                      <?php 

                    $query = "SELECT * FROM project";
                    $result =mysqli_query($conn,$query);

                    $row = mysqli_num_rows($result);
                    ?>
                      <h5><strong><?php echo $row;?></strong></h5>
                      <span><?php if ($row = 1) {
                        echo "Project";
                      }else{ echo"Projects";} ?></span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-group user2 icon-rounded"></i>
                    <div class="stats">

                    <?php 

                    $query = "SELECT * FROM staff";
                    $result =mysqli_query($conn,$query);

                    $row = mysqli_num_rows($result);
                    ?>
                      <h5><strong><?php echo $row;?></strong></h5>
                      
                      <span><?php if ($row = 1) {
                        echo "staff";
                      }else{ echo"staffs";} ?></span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-envelope dollar1 icon-rounded"></i>
                    <div class="stats">
                      <?php 

                    $query = "SELECT * FROM subscriber";
                    $result =mysqli_query($conn,$query);

                    $row = mysqli_num_rows($result);
                    ?>
                      <h5><strong><?php echo $row;?></strong></h5>
                      <span><?php if ($row = 1) {
                        echo "Subscriber";
                      }else{ echo"Subscribers";} ?></span>
                    </div>
                </div>
        	 </div>
        	<div class="col-md-3 widget">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>1450</strong></h5>
                      <span>Total Users</span>
                    </div>
                </div>
        	 </div>
        	<div class="clearfix"> </div>
		</div>
	</div>
		</div>
	<!--footer-->
<?php include"includes/footer.php"; ?>