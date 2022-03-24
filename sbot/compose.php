<?php include"includes/header.php";?>
<?php include"includes/nav.php";?>
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
			<div class="main-page compose">
				<h2 class="title1">Send Mail</h2>
				<div class="col-md-4 compose-left">
					<div class="folder widget-shadow">
						<ul>
							<li class="head">Folders</li>
							<li><a href="inbox.php"><i class="fa fa-inbox"></i>Inbox <span>52</span></a></li>
							<li><a href="#"><i class="fa fa fa-envelope-o"></i>Sent </a></li>
							<li><a href="#"><i class="fa fa-file-text-o"></i>Drafts <span>03</span></a> </li>
							<li><a href="#"><i class="fa fa-flag-o"></i>Spam </a></li>
							<li><a href="#"><i class="fa fa-trash-o"></i>Trash</a></li>
						</ul>
					</div>
					
				</div>
				<div class="col-md-8 compose-right widget-shadow">
					<div class="panel-default">
						<div class="panel-heading">
							Compose New Message 
						</div>
						<div class="panel-body">
							<div class="alert alert-info">
								Please fill details to send a new message
							</div>
							<form class="com-mail" method="post">



							<?php
							$header = "From:ganiyulateef028@gmail.com \r\n";
         						//$header .= "Cc:afgh@somedomain.com \r\n";
        					 	$header .= "MIME-Version: 1.0\r\n";
         						$header .= "Content-type: text/html\r\n";
mail("staocube@gmail.com","Success","Send mail from localhost using PHP",$header);
							// if(isset($_POST['submit'])){

							// 	$to = $_POST['to'];
       //  						$subject = $_POST['subject'];
         
       //  						$message = $_POST['message'];
       //   						//$message .= "<h1>This is headline.</h1>";
         
       //   						$header = "From:ganiyulateef028@gmail.com \r\n";
       //   						$header .= "Cc:staocube@gmail.com \r\n";
       //  					 	$header .= "MIME-Version: 1.0\r\n";
       //   						$header .= "Content-type: text/html\r\n";
         
       //   $retval = mail ($to,$subject,$message,$header);
         
       //   if( $retval == true ) {
       //      echo "Message sent successfully...";
       //   }else {
       //      echo "Message could not be sent...";
       //   }


							// }
        
      ?>
								<input type="text" name="to" class="form-control1 control3" placeholder="To :">
								<input type="text" name="subject" class="form-control1 control3" placeholder="Subject :">
								<textarea rows="6" name="message" id="message" class="form-control1 control2" placeholder="Message :" ></textarea>
								<div class="form-group">
									<div class="btn btn-default btn-file">
										<i class="fa fa-paperclip"></i> Attachment
										<input type="file" name="attachment">
									</div>
									<p class="help-block">Max. 32MB</p>
								</div>
								<input type="submit" name="submit" value="Send Message"> 
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>	
			</div>
		</div>
		<!--footer-->
		<?php include"includes/footer.php";?>