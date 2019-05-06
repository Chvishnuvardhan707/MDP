<?php
  session_start();
  if (isset($_SESSION['username'])&&$_SESSION['username']!=""){
    echo "dengei";
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
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-tarPOST="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #FF69B4;">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto"></ul>
        <ul class="nav navbar-nav navbar-right">
          <li style="margin-top: 10px"><a class="nav-item active text-dark" href="home.php">HOME</a></li>
          <li style="margin-top: 10px"><a class="nav-item active text-dark" href="quiz.php">Attempt Quiz</a></li>
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
  
      <div class="row">
        <div class="col col-lg-3 col-md-3 col-sm-3">
          <?php
          include "../functions/connect.php";
          $userid = $_SESSION['username'];
          if(isset($_POST['getcourse']))
          {
              $id = $_POST['course_id'];
              $type = "Document";
              $coursenamee ="";
              $q = $pdo->prepare("select * from tbl_category where cat_Id = :id");
              $q->bindParam(':id',$id);
              $q->execute();
              $res = $q->fetchall();
              foreach ($res as $res) {
                $coursenamee = $res['course_name'];
              }
              $sql = $pdo->prepare("select * from tbl_course where id = :id and Type = :type");
              $sql->bindParam(':id',$id);
              $sql->bindParam(':type',$type);
              $sql->execute();
              $result = $sql->fetchall();
              echo '<div class="list-group">';
              echo '<form action="view_course.php" method="post">';
              foreach ($result as $row) {
                echo '<input type="hidden" name="courseid" value="';echo $id;echo '">
    <input type="hidden" name="type" value="Document">';
    echo '<input type="hidden" name="coursename" value="';echo $coursenamee;echo '">';
                echo  '<button type="submit" name="document" class="list-group-item list-group-item-action" value="';echo $row["name"]; echo '">';
                echo $row['name'];
                echo '</button>';
              }
              echo '</form>';
              echo '</div>';
              $type = "Video";
              $sql = $pdo->prepare("select * from tbl_course where id = :id and Type = :type");
              $sql->bindParam(':id',$id);
              $sql->bindParam(':type',$type);
              $sql->execute();
              $result = $sql->fetchall();
              echo '<div class="list-group">';
              echo '<form action="view_course.php" methos="post">';
              foreach ($result as $row) {
                echo '<input type="hidden" name="courseid" value="';echo $id;echo '">
    <input type="hidden" name="type" value="Video">';
    echo '<input type="hidden" name="coursename" value="';echo $coursenamee;echo '">';
                echo  '<button type="submit" name="video" class="list-group-item list-group-item-action" value="';echo $row["name"]; echo '">';
                echo $row['name'];
                echo '</button>';
              }
              echo '</div>';

          }
         
          ?>
        </div>
        <div class="col col-lg-9 col-md-9 col-sm-9">
          
        </div>
      </div>
  
     <div class="clear"></div>
    <input type="hidden" name="courseid" value="">
    <input type="hidden" name="type" value="">
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
</body>
</html>