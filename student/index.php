
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">>
  <title> NU Learning Management System</title>

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
   </style>
}
  
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-dark">
      <a class="navbar-brand" href="../index.php">
          <img src="../images/brand.png" width="250px"  alt="NIIT University" style="padding-top: 0px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #FF69B4;">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
           <li><a class="nav-item active text-light" href="../index.php">HOME</a></li>
           <li><a class="nav-item text-light" href="../pages/about.php">ABOUT</a></li>
        <li><a class="nav-item text-light" href="../pages/courses.php">COURSES</a></li>
        <li><a class="nav-item text-light" href="../pages/contact.php">CONTACT</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LOGIN
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../admin/index.php">Admin</a>
          <a class="dropdown-item" href="../teacher/index.php">Teacher</a>
          <a class="dropdown-item" href="#">Student</a>
        </div>
      </li>
        </ul>
      </div>
    </nav>
  <header id="head">
    <div class="container" >
             <div class="heading-text align-items-center" style="padding-top: 50px">
      <h1>Student</h1>
      <div class="row">
        <div class="col col-lg-4 col-md-4 col-sm-12"></div>
        <div class="col col-lg-4 col-md-4 col-sm-12 d-flex justify-content-center">
          
          <form class="form-vertical" style="width: 250px;" method="post" action="../functions/user_login.php">
        <div class="form-group">
          <input class="form-control" type="text" name="username" value="" placeholder="Enter Username">
        </div>
        <div class="form-group">
          <input class="form-control" type="password" name="password" value="" placeholder="Enter password"/>
        </div>
        <div class="form-group">
          <input class="form-control btn btn-success" type="submit" name="commit" value="Login">
        </div>
      </form>
        </div>
        <div class="col col-lg-4 col-md-4 col-sm-12"></div>
        
      </div>

    <div class="text-sm" style="font-size: 0.75em">
      <p class="text-warning">Back to main page <a href="../index.php">Back</a>.</p>
      <p>Not a Member? <a href="signup.php">Register here!</a>.</p>
    </div>
             </div>
             <div class="fluid_container">
              <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                <div data-thumb="../images/slides/thumbs/img1.jpg" data-src="../images/slides/bookone.jpg">
                  <h2>We develop.</h2>
                </div> 
                <div data-thumb="../images/slides/thumbs/img2.jpg" data-src="../images/slides/img2.jpg">
                </div>
                <div data-thumb="../images/slides/thumbs/img3.jpg" data-src="../images/slides/booktwo.jpg">
                </div> 
              </div>
             </div>
         </div>
     </header>
     <div class="clear"></div>
     <footer class="footer2">
      <div class="container-fluid">
        <div class="row" >
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
            <div class="footer-contacts">
              <div class="footer-contact text-white">
                <i class="fa fa-phone-square fa-lg"></i> +91 838 409 0651
              </div>
              <div class="footer-contact text-center text-white"> 
                <span> <i class="fa fa-envelope-square fa-lg"></i> chvishnuvardhan707@gmail.com</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
            <p class="text-white text-center">© 2019 Copyright: Vishnu Vardhan CH<br>
              <a class="text-center text-white" href="#top">Go To Top <span><i class="fas fa-arrow-square-up fa-lg"></i></span></a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
            <div class="text-white">Get in touch with me at: <br>
              <a href="https://github.com/Chvishnuvardhan707"> <span  style="color: white"><i aria-hidden="true" class="fab fa-github-square fa-2x"></i></span></a>   <a href="https://www.linkedin.com/in/chinthalapudi-vishnuvardhan-7b2b29149/">  <span style="color: white"><i class="fab fa-linkedin fa-2x"></i></i></span></a>  <a href="https://www.facebook.com/profile.php?id=100010321689058"><span style="color: white"><i class="fab fa-facebook-square fa-2x"></i></span></a>
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
        imagePath: '../images/'
      });

    });
      
  </script>
    
</body>
</html>