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
<!-- 		<div id="page-wrapper">
			<div class="main-page"> -->

      <?php

      if (isset($_GET['source'])) {
        
        $source = $_GET['source'];

      }else{

        $source = "";
      }


      switch ($source) {
        
        case 'add_project';
          include "includes/add_project.php";
          break;
        
          case 'edit_project';
          include "includes/edit_project.php";
          break;


          case 'upload_project';
          include "includes/upload_project.php";
          break;


        default:
          include "includes/project_record.php";
          break;
      }


      ?>
			
        	<div class="clearfix"> </div>
	<!-- 	</div>
	</div> -->
		</div>
	<!--footer-->
<?php include"includes/footer.php"; ?>