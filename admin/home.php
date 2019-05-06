<?php
  session_start();
  if (isset($_SESSION['adm_user'])&&$_SESSION['adm_user']!=""){
  }
  else
  {
    header("Location:index.php");
  }
$adm_user=$_SESSION['adm_user'];
?><!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>Admin Home Page</title>
       
        <link href="../vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <link href="../assets/styles.css" rel="stylesheet" media="screen">
        <script src="../vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>  
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>      
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    </head>
    
    <body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
		  <a class="navbar-brand" href="index.php">
					<img src="../images/brand.png" width="250px"  alt="NIIT University" style="padding-top: 0px"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #FF69B4;">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">

                        <li>
                        <?php
                                    include '../functions/connect.php';
                                    $percent=$pdo->query("SELECT count(*) from tbl_user")->fetchColumn();
                                    ?>
                            <a class="nav-item text-dark" href="students/index.php"><span class="badge badge-success float-right"><?php echo $percent;?></span> Students</a>
                        </li>
                        <li>
                          <?php
                          include '../functions/connect.php';
                          $percent=$pdo->query("SELECT count(*) from tbl_category")->fetchColumn();
                          ?>
                            <a class="nav-item text-dark" href="category/index.php"><span class="badge badge-info float-right"><?php echo $percent;?></span> Categories</a>
                        </li>
                        <li>
                        <?php
                                    include '../functions/connect.php';
                                    $percent=$pdo->query("SELECT count(*) as total from tbl_contact")->fetchColumn();
                                    ?>
                            <a class="nav-item text-dark" href="message/index.php"><span class="badge badge-info float-right"><?php echo $percent;?></span> Messages</a>
                        </li>
		       
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-user"></i><?php echo $adm_user;?> <i class="caret"></i></a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="account/index.php">Profile</a>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
    		</ul>
		  </div>
		</nav>
		<div class="container" style="padding-top: 50px">
			<div class="row">
				<div class="col col-lg-12 col-md-12 col-sm-12">
					<div class="card">
						<div class="card-header text-center">Statistics</div>
						<div class="card-body">
							<div class="row">
                              <div class="col col-lg-4 col-md-4 col-sm-4">
                                 <?php
                                    include '../functions/connect.php';

                                    $result=$pdo->query("SELECT count(*) as total from tbl_user")->fetchColumn();
                                   ?>
                                    <div class="chart" data-percent="53"><?php echo $result;?></div>
                                    <div class="chart-bottom-heading"><span class="label label-info">Students</span>

                                    </div>
                                </div>
                                <div class="col col-lg-4 col-md-4 col-sm-4">
                                 <?php
                                    include '../functions/connect.php';

                                    $result=$pdo->query("SELECT count(*) as total from tbl_category")->fetchColumn();
                                    ?>
                                    <div class="chart" data-percent="83"><?php echo $result;?></div>
                                    <div class="chart-bottom-heading"><span class="label label-info">Categories</span>

                                    </div>
                                </div>
                                <div class="col col-lg-4 col-md-4 col-sm-4">
                                 <?php
                                    include '../functions/connect.php';

                                    $result=$pdo->query("SELECT count(*) as total from tbl_contact")->fetchColumn();
                                    ?>
                                    <div class="chart" data-percent="13"><?php echo $result;?></div>
                                    <div class="chart-bottom-heading"><span class="label label-info">Messages</span>

                                    </div>
                                </div>
                                </div>
						</div>
						<div class="card-footer"></div>
					</div>
                    <br>
					<div class="card">
						<div class="card-header text-center"><?php
                                    include '../functions/connect.php';

                                    $result=$pdo->query("SELECT count(*) as total from tbl_user")->fetchColumn();
                                   ?>
                                    <div class="muted">Users<span class="badge badge-info"><?php echo $result;?></span>

                                    </div>
                        </div>
						<div class="card-body">
                                 
                                <div class="block-content">
                                    <table class="table table-striped">
                                      <thead>
                                        <tr>
                                           
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                        
                                        include "../functions/connect.php";
                                      
                                        $sql = $pdo->prepare("SELECT * FROM `tbl_user` ");
                                        $sql->execute();
                                        $result =$sql->fetchall();
                                        foreach($result as $row){
                                            $id = $row['user_Id'];
                                            echo '<tr class="odd gradeX" id="rec">';?>
                                           <?php
                                            echo "<td>".$row['fname']."</td>";
                                            echo "<td>".$row['username']."</td>";
                                             echo "<td>".
                                            '<div class="btn-group">
                                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="500" data-close-others="false">
                                                Action
                                            <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu float-right" role="menu">
                                            <li><a href="students/index.php"><span class="glyphicon glyphicon-edit"></span> View</a></li>
                                           
                                            </ul>
                                            </div>'
                                                    ."</td>";
        
                                            echo "</tr>";
                                 
                                     
                                        }
                                    

                                        ?>
                                   
                                        
                                    </tbody>
                                    </table>
                                </div>
						</div>
						<div class="card-footer"></div>
					</div><br>
					<div class="card">
						<div class="card-header text-center"> <?php
                                    include '../functions/connect.php';

                                    $result=$pdo->query("SELECT count(*) as total from tbl_teacher")->fetchColumn();
                                   ?>
                                    <div class="muted">Categories<span class="badge badge-info"><?php echo $result;?></span>
                                    </div>
                                </div>
						<div class="card-body">
							<table class="table table-striped">
                                       <thead>
                                        <tr>
                                           
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                        
                                        include "../functions/connect.php";
                                      
                                        $sql =$pdo->prepare("SELECT * FROM `tbl_category` ");
                                        $sql->execute();
                                        $result = $sql->fetchall();
                                        foreach($result as $row){
                                            $id = $row['cat_Id'];
                                            echo '<tr class="odd gradeX" id="rec">';
                                           echo "<td>".$row['cat_Id']."</td>";
                                            echo "<td>".$row['name']."</td>";
                                             echo "<td>".
                                            '<div class="btn-group">
                                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="500" data-close-others="false">
                                                Action
                                            <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                            <li><a href="category/index.php"><span class="glyphicon glyphicon-edit"></span> View</a></li>
                                            
                                            </ul>
                                            </div>'
                                                    ."</td>";
        
                                            echo "</tr>";
                                 
                                     
                                        }
                                    

                                        ?>
                                   
                                        
                                    </tbody>
                                    </table>
						</div>
						<div class="card-footer"></div>
					</div><br>
					<div class="card">
						<div class="card-header text-center">
							<?php
                                    include '../functions/connect.php';

                                    $result=$pdo->query("SELECT count(*) as total from tbl_contact")->fetchColumn();
                                    ?>
                                    <div class="muted">Messages<span class="badge badge-info"><?php echo $result;?></span>

                                    </div>
						</div>
						<div class="card-body">
							<table class="table table-striped">
                                       <thead>
                                        <tr>
                                           
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                        
                                        include "../functions/connect.php";
                                      
                                        $sql = $pdo->prepare("SELECT * FROM `tbl_contact` order by `contact_Id` DESC");
                                        $sql->execute();
                                        $result = $sql->fetchall();

                                        foreach($result as $row){
                                            $id = $row['contact_Id'];
                                            echo '<tr class="odd gradeX" id="rec">';
                                           
                                            echo "<td>".$row['name']."</td>";
                                                 echo "<td>".$row['email']."</td>";
                                             echo "<td>".
                                            '<div class="btn-group">
                                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="500" data-close-others="false">
                                                Action
                                            <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                             <li><a href="message/index.php"><span class="glyphicon glyphicon-edit"></span> View</a></li>
                                            </ul>
                                            </div>'
                                                    ."</td>";
        
                                            echo "</tr>";
                                 
                                     
                                        }
                                    

                                        ?>
                                   
                                        
                                    </tbody>
                                    </table>
						</div>
					</div>
				</div>
			</div>

		</div>
        <br>
         <footer class="footer2" style="background-color: black">
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


        <script src="../vendors/jquery-1.9.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="../assets/scripts.js"></script>
        <script>
        $(function() {
            $('.chart').easyPieChart({animate: 1000});
        });
        </script>
             
    </body>

</html>