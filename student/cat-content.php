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
	 <link rel="icon" type="image/png"  href="../images/favicon.png">
	<link rel="stylesheet" media="screen" href="../http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css"> 
	<link rel="stylesheet" href="../css/bootstrap-theme.css" media="screen"> 
	<link rel="stylesheet" href="../css/style.css">
    <link rel='stylesheet' id='camera-css'  href='../css/camera.css' type='text/css' media='all'> 

</head>
<body>
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="home.php">
					<img src="../images/brand.png" alt="Techro HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li class="active"><a href="home.php">Home</a></li>
		
					<li class="dropdown">
						<a href="../#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $username;?> <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="user-details.php">Profile</a></li>
							<li><a href="../functions/user_logout.php">Logout</a></li>
						</ul>
					</li>
					

				</ul>
			</div>
		</div>
	</div>
	<header id="head" class="secondary">
            <div class="container">
                    <h1>Topics</h1>
                </div>
    </header>


<div class="container">


</div>
	<div id="courses">
		<section class="container">
			<h3>Different Topics</h3>
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box"> 
					 			
			<div class="list-group">

			 <?php
        require_once "../functions/connect.php";
       
        $via = $_GET["cat_Id"];
        $sql = $pdo->prepare("select * FROM tbl_topic where cat_Id='$via'");
        $sql->execute();
        $result= $sql->fetchall();
        foreach($result as $row){   
        $id = $row['topic_Id'];
        $title = $row['title'];
        $category = $row['cat_Id'];
        $content = $row['content'];
        $datetime = $row['datetime_posted'];

        echo "<a href='topic-content.php?topic_Id=".$row["topic_Id"]."' class='list-group-item'>$title</a>";
        ?>
       	 		</div>
					</div>
				</div>
				
			</div>
  <?php
}

  ?>
		</section>
	</div>
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
