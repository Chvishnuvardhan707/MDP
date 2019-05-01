<?php
    session_start();
	
	include '../functions/connect.php';

	$username = $_POST['adm_user'];
    $password = $_POST['adm_pwd'];
	//$pwd = md5($password);

	$username = $_POST['adm_user'];
    $password = $_POST['adm_user'];

    $query = $pdo->prepare("SELECT * FROM tbl_admin WHERE adm_user = '$username' AND adm_pwd = '$password'");
    $query ->execute();
    $result = $query->fetchall();
    
    foreach ($result as $array) {
        if ($array['adm_user'] == $username){
        $_SESSION['adm_user'] = $username;
        header("Location:home.php");
    }
    else{
        echo '<script language="javascript">';
        echo 'alert("Incorrect username or password")';
        echo '</script>';
        echo '<meta http-equiv="refresh" content="0;url=index.php" />';
    }

    }
    
    
    

?>
