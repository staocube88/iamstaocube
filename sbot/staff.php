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
        
        case 'add_staff';
          include"includes/add_staff.php";
          break;
        
          case 'edit_staff';
          include"includes/edit_staff.php";
          break;
        


        default:
          include "includes/staff_data.php";
          break;
      }


      ?>
			
        	<div class="clearfix"> </div>
	<!-- 	</div>
	</div> -->
		</div>
	<!--footer-->
<?php include"includes/footer.php"; ?>