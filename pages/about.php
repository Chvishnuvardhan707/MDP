
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learning Management System</title>

	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css"> 
	<link rel="stylesheet" href="../css/bootstrap-theme.css" media="screen"> 
	<link rel="stylesheet" href="../css/style.css">
    <link rel='stylesheet' id='camera-css'  href='../css/camera.css' type='text/css' media='all'> 
    <link rel="icon" type="image/png"  href="../images/favicon.png">

</head>

<body>
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.php">
					<img src="../images/logo.png" alt="Techro HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li ><a href="../index.php">Home</a></li>
					<li class="active"><a href="about.php">About</a></li>
					<li><a href="courses.php">Courses</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="../admin/index.php">Administrator</a></li>
							<li><a href="../teacher/index.php">Teacher</a></li>
							<li><a href="../student/index.php">Student</a></li>
						</ul>
					</li>
					<li><a href="contact.php">Contact</a></li>

				</ul>
			</div>
		</div>
	</div>
	<header id="head" class="secondary">
            <div class="container">
                    <h1>About Us</h1>
                    <p>Know more about the organization!</p>
                </div>
    </header>
    <section class="container">
        <div class="row">
            <section class="col-sm-8 maincontent">
                <h3>About Us</h3>
                <p>
                    <img src="../images/csit.png" alt="" class="img-rounded pull-right" width="300">
                    Works with computers and Internet networks in a variety of different settings. 
                    Most corporations have entire IT departments that help keep employees connected and websites in working order, though these are by no means the only jobs available. Schools, non-profit organizations, and basically all entities with a need for computer services and Internet technology employ people with IT expertise.
                    These sorts of people often also work for computer company themselves, providing help and support directly to clients. 
                </p>
                <p>The day-to-day aspects of this job can vary, but in nearly all cases the work involves maintaining computer systems, keeping networks in working order, and being available to solve problems and address complaints as they arise.</p>
                            </section>
            <aside class="col-sm-4 sidebar sidebar-right">

                <div class="panel">
                    <h4>Latest Topic</h4>
                    <?php
                                        
                                        include "../functions/connect.php";
                                      
                                        $sql = "SELECT * FROM `tbl_topic` ";
                                        $sql = $pdo->prepare("SELECT * FROM `tbl_topic` ");
                                        $sql->execute();
                                        $result=$sql->fetchall();

                                        foreach($result as $row){
                                        
                                            $id = $row['topic_Id'];
                                            $title = $row['title'];
                                         
                                            ?>
                   <ul class="list-unstyled list-spaces">
                        <li><a href="../functions/alert.php"><?php echo ucfirst($title);?></a><br>
                            <span class="small text-muted">hello there!!</span></li>
                      <?php 
                        }
                      ?>
                    </ul>
                </div>

            </aside>


        </div>
    </section>
 
			<div class="social text-center">
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-flickr"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>
			</div>

			<div class="clear"></div>
		</div>
		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a href="../index.php">Home</a> | 
								<a href="about.php">About</a> |
								<a href="courses.php">Courses</a> |
								<a href="contact.php">Contact</a>
							</p>
						</div>
					</div>

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="text-right">
								Copyright &copy; 2019.
							</p>
						</div>
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
