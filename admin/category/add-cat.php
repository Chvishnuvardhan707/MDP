<?php
  session_start();
  if (isset($_SESSION['adm_user'])&&$_SESSION['adm_user']!=""){
  }
  else
  {
    header("Location:index.php");
  }
$adm_user=$_SESSION['adm_user'];
?>
<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>Admin Home Page</title>
        <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="../../assets/styles.css" rel="stylesheet" media="screen">
        <link href="../../assets/DT_bootstrap.css" rel="stylesheet" media="screen">
          <link rel="icon" type="image/png"  href="../../images/favicon.png">
        <script src="../../vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Admin Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i><?php echo $adm_user;?> <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="../account/index.php">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="logout.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                     
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li >
                            <a href="../home.php"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
                        
                        <li>
                        <?php
                                    include '../../functions/connect.php';

                                    $result=$pdo->query("SELECT count(*) from tbl_teacher")->fetchColumn();
                                    ?>
                            <a href="../teacher/index.php"><span class="badge badge-success pull-right"><?php echo $result;?></span> Teachers</a>
                        </li>
                        <li>
                        <?php
                                    include '../../functions/connect.php';

                                    $result=$pdo->query("SELECT count(*)  from tbl_user")->fetchColumn();
                                    ?>
                            <a href="../students/index.php"><span class="badge badge-success pull-right"><?php echo $result;?></span> Students</a>
                        </li>

                        <li   class="active">
                          <?php
                                    include '../../functions/connect.php';

                                    $result=$pdo->query("SELECT count(*) from tbl_category")->fetchColumn();
                                    ?>
                            <a href="../category/index.php"><span class="badge badge-info pull-right"><?php echo $result;?></span> Categories</a>
                        </li>
                        <li>
                        <?php
                                    include '../../functions/connect.php';

                                    $result=$pdo->query("SELECT count(*)  from tbl_contact")->fetchColumn();
                                    ?>
                            <a href="../message/index.php"><span class="badge badge-info pull-right"><?php echo $result;?></span> Messages</a>
                        </li>
                     
                    </ul>
                </div>
                <div class="span9" id="content">
                    <div class="row-fluid">
                 
                            <div class="navbar">
                                <div class="navbar-inner">
                                    <ul class="breadcrumb">
                                        <i class="icon-chevron-left hide-sidebar"><a href='#' title="Hide Sidebar" rel='tooltip'>&nbsp;</a></i>
                                        <i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#' title="Show Sidebar" rel='tooltip'>&nbsp;</a></i>
                                        <li>
                                            <a href="../home.php">Dashboard</a> <span class="divider">/</span>    
                                        </li>
                                        <li class="active">Categories</li>
                                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                                  </div>
             <div class="row-fluid">
                     <div class="span4">
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Category</div>
                            </div>
                            <div class="block-content collapse in">
                             <form method="POST"  action="add.php" >
                                <label>Category Name</label>
                                <input type="text" class="form-control" name="cat_name" placeholder="e.g. Programming"required>
                                <label>Description</label>
                                <textarea class="form-control" name="cat_desc"required>
                                    
                                </textarea>
                                
                                <hr>
                                <input type="submit" name="add" class="btn btn-primary" value="Publish">
                                   </form>
                          
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                   
                </div>
            </div>
            <hr>
            <footer>
                <p>&copy; 2019</p>
            </footer>
        </div>
         <script src="../../vendors/jquery-1.9.1.js"></script>
        <script src="../../bootstrap/js/bootstrap.min.js"></script>
        <script src="../../vendors/datatables/js/jquery.dataTables.min.js"></script>


        <script src="../../assets/scripts.js"></script>
        <script src="../../assets/DT_bootstrap.js"></script>
         
        <script>
        $(function() {
            
        });
        </script>

    </body>

</html>

  
                