<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Contact</h2> 
            	<div class="block-23 mb-3">
	              <ul>
	                 <li><span class="icon icon-map-marker"></span><span class="text">185,Olabisi Onabanjo,Iyana Mortuary,Abeokuta,Ogun State</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">Office Line :+2348058693417 <br> WhatsApp :+2348173058460 </span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@complanettechnologies.com.ng</span></a></li>
	           		</ul>
	            </div>
	            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-2">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="index.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="about.php"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="services.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                <li><a href="project.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Projects</a></li>
                <li><a href="contact.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Recent Blog</h2>
               <?php

				$query = "SELECT * FROM posts ORDER BY post_id LIMIT 2 ";
				
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
							$post_date = $row['post_date'];
							$post_comment_count  = $row['post_comment_count'];    

				?>
              <div class="block-21 mb-4 d-flex">
               
                <a class="blog-img mr-4" style="background-image: url(images/<?php echo $post_image; ?>);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#"><?php echo $post_title; ?></a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> <?php echo $post_date; ?></a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <!-- <div><a href="#"><span class="icon-chat"></span> 19</a></div> -->
                  </div>
                </div>
               
              </div>
               <?php } ?>
              <!-- <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Oct. 16, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Subscribe</h2>

              <?php

              if (isset($_GET['email'])) {
              	
			$email = $_GET['email'];

              	$query = "INSERT INTO `subscriber`(`email`) VALUES ('{$email}') ";
              	$result = mysqli_query($conn,$query);

              	if(!$result){

              		die("QUERY FAILED" . mysqli_error($conn));
              	}
              }

              ?>
              <form action="" class="subscribe-form" method="GET">
                <div class="form-group">
                  <input type="email" name="email" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" name="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed <i class="icon-heart" aria-hidden="true"></i> by <a href="https://complanettechnologies.com.ng" target="_blank">Complanet Technologies</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>` 
    </footer>