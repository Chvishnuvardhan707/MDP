<?php
include "connect.php";
extract($_POST);
	$fname = str_replace("'","`",$fname); 	
	$lname = str_replace("'","`",$lname); 	        
	$username = str_replace("'","`",$username); 
	$password = str_replace("'","`",$password); 
	$password = md5($password);
$sql = $pdo->prepare("insert INTO `tbl_user`(`fname`, `mname`, `lname`, `dob`, `gender`, `username`, `password`) VALUES  ('$fname','$mname','$lname','$dob','$gender','$username','$password')");
$sql->execute();
 echo '<script language="javascript">';
 echo 'alert("Successfully Registered")';
 echo '</script>';
 echo '<meta http-equiv="refresh" content="0;url=../student/index.php" />';
?>