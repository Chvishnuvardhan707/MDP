<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>NU Learning Management System</title>
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../css/style.css">
    <link rel='stylesheet' id='camera-css'  href='../css/camera.css' type='text/css' media='all'> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  	  	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	   	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>  
      	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
      	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
      	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>    	
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.js"></script>
 		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
 		<style type="text/css">
   	.navbar-nav > li{
  padding-left:30px;
  padding-right:30px;
  color: white;
}
.footer2{
	position: fixed;
	bottom: 0;
	width: 100%
	}
   </style>

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light" style="height: 70px">
		  <a class="navbar-brand" href="../index.php">
					<img src="../images/brand.png" width="250px"  alt="NIIT University"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #FF69B4;">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		       <li><a class="nav-item active text-dark" href="../index.php">HOME</a></li>
		       <li><a class="nav-item text-dark" href="about.php">ABOUT</a></li>
				<li><a class="nav-item text-dark" href="courses.php">COURSES</a></li>
				<li><a class="nav-item text-dark" href="#">CONTACT</a></li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LOGIN
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../admin/index.php">Admin</a>
          <a class="dropdown-item" href="../student/index.php">Student</a>
        </div>
      </li>
      

    		</ul>

		  </div>
		</nav>

	
		<header id="head" class="secondary" style="padding-top: 80px">
            <div class="container">
                    <h1>Contact Us</h1>
                    
                </div>
    </header>

 
	<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h3 class="section-title">Your Message</h3>
						<p>
						Fill-out the forms provided below in order to send message to the administrator
						</p>
						
						<form class="form-light mt-20" role="form" method="POST" action="process-contact.php">
							<div class="form-group">
								<label>Name</label>
								<input type="text" class="form-control" name="name" required="required" placeholder="Your name">
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Email</label>
										<input type="email" class="form-control" required="required" name="email" placeholder="Email address">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Phone</label>
										<input type="text" class="form-control" name="phone" placeholder="Phone number" required="required" >
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Subject</label>
								<input type="text" class="form-control" name="subject" placeholder="Subject" required="required">
							</div>
							<div class="form-group">
								<label>Message</label>
								<textarea class="form-control" id="message" name="message" placeholder="Write you message here..." style="height:100px;" required="required"></textarea>
							</div>
							<button type="submit" class="btn btn-success">Send message</button><p><br/></p>
						</form>
					</div>
					<div class="col-md-4">
						<div class="row">
							<div class="col">
								<br><br>
								<h3 class="section-title">Office Address</h3>
								<div class="contact-info">
									<h5>University Campus</h5>
									<p>NH 8, Delhi Jaipur Highway,
Neemrana, Rajasthan – 301705</p>
									
									<h5>Email</h5>
									<p>admissions@niituniversity.in</p>
									
									<h5>Phone</h5>
									<p>1800 103 5050</p>
								</div>
							</div> 
						</div> 						
					</div>
				</div>
			</div>
			<div class="social text-center">
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-flickr"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>
			</div>

			<div class="clear"></div>
		</div>
     <footer class="footer2">
     	<div class="container-fluid">
     		<div class="row" >
     			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
     				<div class="footer-contacts">
     					<div class="footer-contact text-white">
     						<i class="fa fa-phone-square fa-lg"></i> +91 838 409 0651
     					</div>
     					<div class="footer-contact text-center text-white"> 
     						<span> <i class="fa fa-envelope-square fa-lg"></i> niituniversity.in</span>
     					</div>
     				</div>
     			</div>
     			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
     				<p class="text-white text-center">© 2019 Copyright: NIIT UNIVERSITY<br>
     					<a class="text-center text-white" href="#top">Go To Top <span><i class="fas fa-arrow-square-up fa-lg"></i></span></a>
     			</div>
     			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
     				<div class="text-white">Get in touch with me at: <br>
     					<a href="#"> <span  style="color: white"><i aria-hidden="true" class="fab fa-github-square fa-2x"></i></span></a>   <a href="#">  <span style="color: white"><i class="fab fa-linkedin fa-2x"></i></i></span></a>  <a href="#"><span style="color: white"><i class="fab fa-facebook-square fa-2x"></i></span></a>
     			</div>
     		</div>
     	</div>
     </div>
 </footer>
	<script src="../js/modernizr-latest.js"></script> 
	<script type='text/javascript' src='../js/jquery.min.js'></script>
    <script type='text/javascript' src='../js/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='../js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='../js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='../js/camera.min.js'></script> 
    <script src="../js/bootstrap.min.js"></script> 
	<script src="../js/custom.js"></script>
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_4').camera({
                transPeriod: 500,
                time: 3000,
				height: '600',
				loader: 'false',
				pagination: true,
				thumbnails: false,
				hover: false,
                playPause: false,
                navigation: false,
				opacityOnGrid: false,
				imagePath: 'images/'
			});

		});
      
	</script>
    
</body>
</html>
