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
                                        <a tabindex="-1" href="../logout.php">Logout</a>
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

                                    $result=$pdo->query("SELECT count(*) from tbl_user")->fetchColumn();
                                    ?>
                            <a href="../students/index.php"><span class="badge badge-success pull-right"><?php echo $result;?></span> Students</a>
                        </li>

                        <li >
                          <?php
                                    include '../../functions/connect.php';

                                    $result=$pdo->query("SELECT count(*)  from tbl_category")->fetchColumn();
                                   ?>
                            <a href="../category/index.php"><span class="badge badge-info pull-right"><?php echo $result;?></span> Categories</a>
                        </li>
                        <li   class="active">
                        <?php
                                    include '../../functions/connect.php';

                                    $result=$pdo->query("SELECT count(*) from tbl_contact")->fetchColumn();
                                    ?>
                            <a href="../message/index.php"><span class="badge badge-info pull-right"><?php echo $result;?></span> Messages</a>
                        </li>
                     
                    </ul>
                </div>
                
                <!--/span-->
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
                   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">List of Messages</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                   
                                    
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                           <thead>
                                        <tr>
                                           
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                        
                                        include "../../functions/connect.php";
                                      
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
                                            <li><a href="view.php?contact_Id='.$row["contact_Id"].'"><span class="glyphicon glyphicon-edit"></span> View</a></li>
                                            <li><a href="#"  contact_Id="'.$row['contact_Id'].'" class="delbutton" title="Click To Delete"><span class="glyphicon glyphicon-trash"></span> Delete</a></li>
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
                        <!-- /block -->
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
         <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("contact_Id");

//Built a url to send
var info = 'contact_Id=' + del_id;
 if(confirm("Are you sure you want to delete this Record?"))
          {

 $.ajax({
   type: "GET",
   url: "delete.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents("#rec").animate({ backgroundColor: "#fbc7c7" }, "fast")
        .animate({ opacity: "hide" }, "slow");
 }

return false;

});

});
</script>
        <script>
        $(function() {
            
        });
        </script>

    </body>

</html>
                            