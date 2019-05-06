<?php
  session_start();
  if (isset($_SESSION['username'])&&$_SESSION['username']!=""){
  }
  else
  {
    header("Location:../index.php");
  }
$username=$_SESSION['username'];
?>
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
        <ul class="navbar-nav mr-auto"></ul>
        <ul class="nav navbar-nav navbar-right">
          <li style="margin-top: 10px"><a class="nav-item active text-dark" href="home.php">HOME</a></li>
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $username;?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="user-details.php">Profile</a>
          <a class="dropdown-item" href="../functions/user_logout.php">Logout</a>
        </div>
      </li>
        </ul>
      </div>
    </nav>
  <header id="head" class="secondary">
   <div class="container" style="padding-top: 50px">
     <h1>Courses Available</h1>
   </div>
     </header>
     <div class="container">
      <div class="row">
        <?php
        include "../functions/connect.php";
        $sql=$pdo->prepare( "SELECT * FROM `tbl_category` ");
        $sql->execute();
        $result =$sql->fetchall(); foreach ($result as $row) {?>
        <div class="col col-lg-4 col-md-4 col-sm-6" style="padding-top: 50px;"> 
          <div class="card" style="background-color: #f0f1f3;">
            <img class="card-img-top " src="../course_img/<?php echo $row['image'];?>" style="padding-top: 10px;height: 150px; width: 150px; margin-left: 25%;margin-right: 25%" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['name'];?></h5>
              <p class="card-text"><?php echo $row['side_heading'];?></p>
              <form action="viewcourse.php" method="POST">
                <input type="hidden" name="course_id" value = "<?php echo $row['cat_Id'];?>">
                <input class="btn btn-warning float-right" type="submit" name="getcourse" value="View Course">
              </form>
            </div>
            <hr>
            <div class="card-body">
              <h6 class="card-link small text-muted"><b>User Rating</b><?php echo " : ";?>  <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><?php echo " ";?> 0/5 </h6>
              
            </div>
          </div><br>
        </div><br>
        <?php }?>
        
      </div><br><br>
    </div>
  
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