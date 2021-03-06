
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
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
      <a class="navbar-brand" href="../index.php">
          <img src="../images/brand.png" width="250px"  alt="NIIT University" style="padding-top: 0px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #FF69B4;">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
           <li><a class="nav-item active text-dark" href="../index.php">HOME</a></li>
           <li><a class="nav-item text-dark" href="../pages/about.php">ABOUT</a></li>
        <li><a class="nav-item text-dark" href="../pages/courses.php">COURSES</a></li>
        <li><a class="nav-item text-dark" href="../pages/contact.php">CONTACT</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LOGIN
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Admin</a>
          <a class="dropdown-item" href="../student/index.php">Student</a>
        </div>
      </li>
        </ul>
      </div>
    </nav>
  <header id="head">
    <div class="container" >
             <div class="heading-text align-items-center" >
      <h1>Register Here!</h1>
        
        <form class="form-horizontal" method="post" action="../functions/signup-functions.php">
          <div class="row">
            <div class="col col-lg-3 col-md-3 col-sm-3"></div>
        <div class="col col-lg-3 col-md-3 col-sm-3">
          <div class="form-group">
          <input class="form-control" required="required" type="text" name="fname"  placeholder="First Name">
        </div>
        <div class="form-group">
          <input class="form-control" required="required" type="text" name="mname"  placeholder="Middle Name">
        </div>
        <div class="form-group">
          <input class="form-control" required="required" type="text" name="lname"  placeholder="Last Name">
        </div>
        <div class="form-group">
    <input class="form-control" type="date" name="dob" required >
        </div>
        </div>
        <div class="col col-lg-3 col-md-3 col-sm-3">
        <div class="form-group">
          <select name="gender" class="form-control" >
      <option>Gender</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Other">Other</option>
    </select>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="username" placeholder="Username" required>
        </div>
        <div class="form-group">
          <input class="form-control" required="required" type="password" name="password"  placeholder="password"/>
        </div>      
        </div>
        <div class="col col-lg-3 col-md-3 col-sm-3"></div>
        
      </div>
      <div class="row">
        <div class="col col-lg-4 col-md-4 col-sm-4"></div>
        <div class="col col-lg-4 col-md-4 col-sm-4">
          <div class="d-flex justify-content-center" style="width: 120px">
          <input class="form-control btn btn-success d-flex justify-content-center" type="submit" name="commit" value="Register">
        </div>
        </div>
        <div class="col col-lg-4 col-md-4 col-sm-4"></div>
        
      </div>
    </form>


    <div class="text-sm" style="font-size: 0.75em">
      <p>Already a member? <a href="index.php">Login here!</a>.</p>
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