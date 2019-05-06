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

                                    $result=$sql->query("SELECT count(*) as total from tbl_user")->fetchColumn();
                                    ?>
                            <a href="../students/index.php"><span class="badge badge-success pull-right"><?php echo $result;?></span> Students</a>
                        </li>

                        <li   class="active">
                          <?php
                                    include '../../functions/connect.php';

                                    $result=$sql->query("SELECT count(*) as total from tbl_category")->fetchColumn();
                                    ?>
                            <a href="../category/index.php"><span class="badge badge-info pull-right"><?php echo $result;?></span> Categories</a>
                        </li>
                        <li>
                        <?php
                                    include '../../functions/connect.php';

                                    $result=$sql->query("SELECT count(*) as total from tbl_contact")->fetchColumn();
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
                                <div class="muted pull-left">Edit Category</div>
                            </div>
                            <div class="block-content collapse in">
                            <?php
                 
            require  "../../functions/connect.php";
            if(isset($_GET['cat_Id'])){
             $id = $_GET['cat_Id'];
                                      
                $sql = $pdo->prepare("SELECT * FROM `tbl_category` WHERE `cat_Id`='$id'");
                $sql->execute();
                $result = $sql->fetchall();
                foreach($result as $row){
                    $id = $row['cat_Id'];
                                                   
                    $a = $row['name'];
                    $b = $row['description'];
                    $c= $row['image'];
                
                }
                         
                extract($_POST);

                if(isset($edit))
                {
                  
                    $sql = $pdo->prepare("UPDATE `tbl_category` SET `name`='$cat_name',`description`='$cat_desc' WHERE `cat_Id`='$id'");
                    $sql->execute();
                            echo '<script language="javascript">';
                            echo 'alert("Successfully Updated")';
                            echo '</script>';
                            echo '<meta http-equiv="refresh" content="0;url=index.php" />';

                    }        
                    }      
                       
                ?> 
                <form method="POST"  >
                    <label>Category Name</label>
                    <input type="text" class="form-control" name="cat_name" value="<?php echo $a;?>" placeholder="e.g. Programming"required>
                    <label>Description</label>
                    <textarea class="form-control" name="cat_desc"required>
                    <?php echo $b;?>
                    </textarea>
                    
                    <hr>
                    <input type="submit" name="edit" class="btn btn-primary" value="Update">
            </form>
                          
                            </div>
                            </div>
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