<?php
  session_start();
  if (isset($_SESSION['username'])&&$_SESSION['username']!=""){
  }
  else
  {
    header("Location:../index.php");
  }
$username=$_SESSION['username'];
$userid = $_SESSION['user_Id'];
if(isset($_POST['postcomment'])){
  $name = $_POST['name'];
  $content = $_POST['commentContent'];
  $handle = fopen("comments.html","a");
   date_default_timezone_set("Asia/Taipei");
        $datetime=date("Y-m-d");
  fwrite($handle, "<b>"."<p class='well'>".$name."</b>:<br/>".$content."<label class='pull-right'>$datetime</label>"."</p>"."<br/>");
  fclose($handle);
}
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
          <li style="margin-top: 10px"><a class="nav-item active text-dark"  href="home.php">HOME</a></li>
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
        <div class="col col-lg-3 col-md-3 col-sm-3" style="padding-top: 80px">
          <?php
          include "../functions/connect.php";
          $userid = $_SESSION['username'];
          if(isset($_POST['document']))
          {
              $id = $_POST['courseid'];
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
              echo '<form action="view_course.php" method ="post">';
              echo '<input type="hidden" name="courseid" value="';echo $id;echo '"><input type="hidden" name="type" value="Document">';
                echo '<input type="hidden" name="coursename" value="';echo $coursenamee;echo '">';
              foreach ($result as $row) {
                echo '<button type="submit" name="document" class="list-group-item list-group-item-action" value="';echo $row["name"]; echo '">';
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
              echo '<form action="view_course.php" method ="post">';
              echo '<input type="hidden" name="courseid" value="';echo $id;echo '">
                <input type="hidden" name="type" value="Video">';
                echo '<input type="hidden" name="coursename" value="';echo $coursenamee;echo '">';
              foreach ($result as $row) {
                
                echo  '<button type="submit" name="video" class="list-group-item list-group-item-action" value="';echo $row["name"]; echo '">';
                echo $row['name'];
                echo '</button>';
              }
              echo '</div>';

          }
          if(isset($_POST['video']))
          {
              $userid = $_SESSION['user_Id'];
              $id = $_POST['courseid'];
              $sql = $pdo->prepare("select * from tbl_payment where student_id = :userid and course_id = :id");
              $sql->bindParam(':userid',$userid);
              $sql->bindParam(':id',$id);
              $sql->execute();
              $res = $sql->fetchall();
              foreach ($res as $row) {
                if($row['payment']=='N'){
                 $_SESSION['username']= $username;
                 $_SESSION['user_Id']=$userid;
                  echo '<script>alert("You need to register for the course inorder to view this content");document.location = "home.php";</script>';
                }
                if($row['payment']=='Y'){
                  $id = $_POST['courseid'];
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
              echo '<input type="hidden" name="courseid" value="';echo $id;echo '"><input type="hidden" name="type" value="Document">';
                echo '<input type="hidden" name="coursename" value="';echo $coursenamee;echo '">';
              foreach ($result as $row) {
                
                echo '<button type="submit" name="document" class="list-group-item list-group-item-action" value="';echo $row["name"]; echo '">';
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
              echo '<form action="view_course.php" method="post">';
              echo '<input type="hidden" name="courseid" value="';echo $id;
                echo '"><input type="hidden" name="type" value="Video">';
                echo '<input type="hidden" name="coursename" value="';echo $coursenamee;echo '">';
              foreach ($result as $row) {
                echo  '<button type="submit" name="video" class="list-group-item list-group-item-action" value="';echo $row["name"]; echo '">';
                echo $row['name'];
                echo '</button>';
              }
              echo '</div>';
                }
              }

              

          }
         
          ?>
        </div>
        <div class="col col-lg-9 col-md-9 col-sm-9" style="padding-top: 60px">
          <h3 class="text-center" style="padding-left: 25%;padding-right: 25%">Topic Content</h3>
          <?php
          if(isset($_POST['document']))
          {
            $doc = $_POST['document'];
            $name = $_POST['coursename'];
            echo '<embed type="application/pdf"
       src="../course_doc/';echo $name;echo '/';echo $doc;echo '"
       width="1000"
       height="550" style="padding-top:60px;">';
          }
          ?>
          <?php
          if(isset($_POST['video']))
          {
            $doc = $_POST['video'];
            $name = $_POST['coursename'];
            echo '<embed type="video/mp4"
       src="../course_video/';echo $name;echo '/';echo $doc;echo '"
       width="1000"
       height="550" style="padding-top:60px;">';
          }
          ?>
          <br><br>
                    <div class="container">
     <div id="comments">
      <h5>Comments:</h5>
      <?php include "comments.html";?>             
            </div>
            <div class="container">

    <form class="form-horizontal" method="POST">
        <fieldset>
        <legend>Comment</legend>    
           <textarea name="commentContent"class="form-control"></textarea><br>
           <input type="hidden" name="name" value=<?php echo $username;?>>
            <input type="submit" name="postcomment" value="Post" class="btn btn-primary float-right">
        </fieldset>
     </form>
      </div>
  </div>
        </div>


      </div>

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

 <script>
  function disableCopy(e){
    return false
  }
   
  function reEnable(){
    return true
  }
   
  document.onselectstart=new Function ("return false")
  if (window.sidebar){
    document.onmousedown=disableCopy
    document.onclick=reEnable
  }

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