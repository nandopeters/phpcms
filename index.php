<?php
    $dbh = mysqli_connect("localhost", "parkjh", "password") or die(mysql_error());
    mysqli_select_db($dbh, "testcms");
    // get homepage stored values
    $query = mysqli_query($dbh, "SELECT * FROM homepage WHERE title=\"Welcome to TestCMS\"") or die(mysql_error());
    $homedata = mysqli_fetch_assoc($query);
    $images = explode(',', $homedata['images']);
?>

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<title>
      <?php 
          echo($homedata['title']);
      ?>
    </title>
		<link rel="stylesheet" type="text/css" href="styles.css" />
		<link rel="stylesheet" href="nivoslider/nivo-slider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="nivoslider/themes/default/default.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
	</head> 


	<body>
	
		<div class="container">
			<div class="header">
				<h1>
          <?php echo($homedata['title']); ?>
        </h1>
				<div class="get-it-buttons">
					<a href="#" class="buy-it-button">News</a>
					<a href="#" class="free-trial-button">About Us</a>
					<a href="#" class="buy-it-button">Contact</a>
				</div>
			</div>
                    
      <div class="slider-wrapper theme-default mask-container-large">
          <div id="slider" class="nivoSlider">
            <?php 
              foreach($images as $temp){
                echo('<img src="images/'.$temp.'"/>');
              }
            ?>
          </div>
          <div class="mask-gloss-large"></div>
      </div>
                    
			<div class="top-features">
				<h3>Articles</h3>
				<div class="inset-top"></div>
				<div class="inset">
					<div class="row"><!--Start of Row-->
						
						<div class="col"><!--Start of Feature-->
							<div class="feature-image">
								<a rel="fancybox" href="images/image-large-1.jpg">
									<div class="mask-container-thumbnail">
										<img src="images/image-thumbnail-1.jpg" alt="" />
										<div class="mask-gloss-thumbnail"></div>
									</div>
								</a>
							</div>
							<div class="description">
								<h4>Lorem Ipsum</h4>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
							</div>
						</div><!--End of Feature-->
						
						<div class="col"><!--Start of Feature-->
							<div class="feature-image">
								<a rel="fancybox" href="images/image-large-2.jpg">
									<div class="mask-container-thumbnail">
										<img src="images/image-thumbnail-2.jpg" alt="" />
										<div class="mask-gloss-thumbnail"></div>
									</div>
								</a>
							</div>
							<div class="description">
								<h4>Lorem Ipsum</h4>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
							</div>
						</div><!--End of Feature-->
						
						<br class="clear" />
					</div><!--End of Row-->
					
					<div class="row"><!--Start of Row-->
						
						<div class="col"><!--Start of Feature-->
							<div class="feature-image">
								<a rel="fancybox" href="images/image-large-3.jpg">
									<div class="mask-container-thumbnail">
										<img src="images/image-thumbnail-3.jpg" alt="" />
										<div class="mask-gloss-thumbnail"></div>
									</div>
								</a>
							</div>
							<div class="description">
								<h4>Lorem Ipsum</h4>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
							</div>
						</div><!--End of Feature-->
						
						<div class="col"><!--Start of Feature-->
							<div class="feature-image">
								<a rel="fancybox" href="images/image-large-4.jpg">
									<div class="mask-container-thumbnail">
										<img src="images/image-thumbnail-4.jpg" alt="" />
										<div class="mask-gloss-thumbnail"></div>
									</div>
								</a>
							</div>
							<div class="description">
								<h4>Lorem Ipsum</h4>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
							</div>
						</div><!--End of Feature-->
						
						<br class="clear" />
					</div><!--End of Row-->
					
										
				</div>
				<div class="inset-btm"></div>
			</div>
			
			<div class="testimonials">
				<h3>Tweets</h3>
				
				<div class="quote"><!--Start of Quote-->
					<img src="images/quotation-mark.png" alt="quotation mark" class="quotation-mark" />
					<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vitae elit libero, a pharetra augue.</p>
					
					<p>Nulla vitae elit libero, a pharetra augue. Vestibulum id ligula porta felis euismod semper. Curabitur blandit tempus porttitor. Etiam porta sem malesuada magna mollis euismod. </p>
					
					<p><strong>Full Name</strong></p>
				</div><!--End of Quote-->
				
				<div class="quote"><!--Start of Quote-->
					<img src="images/quotation-mark.png" alt="quotation mark" class="quotation-mark" />
					<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vitae elit libero, a pharetra augue.</p>
					
					<p>Nulla vitae elit libero, a pharetra augue. Vestibulum id ligula porta felis euismod semper. Curabitur blandit tempus porttitor. Etiam porta sem malesuada magna mollis euismod. </p>
					
					<p><strong>Full Name</strong></p>
				</div><!--End of Quote-->
				
				<br class="clear" />
				
			</div>
		</div>
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script type="text/javascript" src="nivoslider/jquery.nivo.slider.pack.js"></script>
		<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
		<script type="text/javascript" src="fancybox/jquery.easing-1.4.pack.js"></script>
		<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
		
		<script type="text/javascript">
		$(window).load(function() {
		    $('#slider').nivoSlider();
		});
		</script>
		
		<script type="text/javascript">
				$(window).load(function() {
				    $("*[rel=fancybox]").fancybox();
				});
		</script>
		
	
	</body>

</html>