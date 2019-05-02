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
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-dark">
		  <a class="navbar-brand" href="index.php">
					<img src="../images/brand.png" width="250px"  alt="NIIT University" style="padding-top: 0px"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #FF69B4;">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		       <li >
                        <?php
                                    include '../functions/connect.php';
                                    $percent=$pdo->query("SELECT count(*) from tbl_teacher")->fetchColumn();   
                                    ?>
                            <a class="nav-item text-light" href="teacher/index.php"><span class="badge badge-success float-right"><?php echo $percent;?></span> Teachers</a>
                        </li>
                        <li>
                        <?php
                                    include '../functions/connect.php';
                                    $percent=$pdo->query("SELECT count(*) from tbl_user")->fetchColumn();
                                    ?>
                            <a class="nav-item text-light" href="students/index.php"><span class="badge badge-success float-right"><?php echo $percent;?></span> Students</a>
                        </li>
                        <li>
                          <?php
                          include '../functions/connect.php';
                          $percent=$pdo->query("SELECT count(*) from tbl_category")->fetchColumn();
                          ?>
                            <a class="nav-item text-light" href="category/index.php"><span class="badge badge-info float-right"><?php echo $percent;?></span> Categories</a>
                        </li>
                        <li>
                        <?php
                                    include '../functions/connect.php';
                                    $percent=$pdo->query("SELECT count(*) as total from tbl_contact")->fetchColumn();
                                    ?>
                            <a class="nav-item text-light" href="message/index.php"><span class="badge badge-info float-right"><?php echo $percent;?></span> Messages</a>
                        </li>
		       
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-user"></i><?php echo $adm_user;?> <i class="caret"></i></a>
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
                             <?php
                                    include '../functions/connect.php';

                                    $percent=$pdo->query("SELECT count(*) as total from tbl_teacher")->fetchColumn();
                                    ?>
                                <div class="col col-lg-3 col-md-3 col-sm-6">
                                    <div class="chart" data-percent="73"><?php echo $percent;?></div>
                                    <div class="chart-bottom-heading"><span class="label label-info">Teachers</span>

                                    </div>
                                </div>
                                <div class="col col-lg-3 col-md-3 col-sm-6">
                                 <?php
                                    include '../functions/connect.php';

                                    $result=$pdo->query("SELECT count(*) as total from tbl_user")->fetchColumn();
                                   ?>
                                    <div class="chart" data-percent="53"><?php echo $result;?></div>
                                    <div class="chart-bottom-heading"><span class="label label-info">Students</span>

                                    </div>
                                </div>
                                <div class="col col-lg-3 col-md-3 col-sm-6">
                                 <?php
                                    include '../functions/connect.php';

                                    $result=$pdo->query("SELECT count(*) as total from tbl_category")->fetchColumn();
                                    ?>
                                    <div class="chart" data-percent="83"><?php echo $result;?></div>
                                    <div class="chart-bottom-heading"><span class="label label-info">Categories</span>

                                    </div>
                                </div>
                                <div class="col col-lg-3 col-md-3 col-sm-6">
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
						<div class="card-header text-center">
							<?php
                                    include '../functions/connect.php';

                                    $sql=$pdo->query("SELECT count(*) as total from tbl_teacher")->fetchColumn();
                                   ?>
                                    <div class="muted">Teachers<span class="badge badge-info"> <?php echo $sql;?></span>

                                    </div>
						</div>
						<div class="card-body">
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
                                      
                                        $sql = $pdo->prepare("SELECT * FROM `tbl_teacher` ");
                                        $sql->execute();
                                        $result = $sql->fetchall();

                                        foreach($result as $row){
                                            $id = $row['teacher_Id'];
                                            echo '<tr class="odd gradeX" id="rec">';?>
                                           <?php
                                            echo "<td>".$row['fname']."</td>";
                                            echo "<td>".$row['uname']."</td>";
                                             echo "<td>".
                                            '<div class="btn-group">
                                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="500" data-close-others="false">
                                                Action
                                            <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                            <li><a href="teacher/index.php"><span class="glyphicon glyphicon-edit"></span> View</a></li>
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
						<div class="card-footer"></div>
					</div>
				</div>
			</div>
		</div>


            <hr>
        </div>
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