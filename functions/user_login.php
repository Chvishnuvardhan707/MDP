<?php 

    session_start();
    
    include 'connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $pwd =md5($password);
    $query = $pdo->prepare("select * FROM tbl_user WHERE username = '$username' AND password = '$pwd'");
    $query->execute();
    $result = $query->fetchall();
    foreach($result as $array){
    if ($array['username'] == $username){
        $_SESSION['username'] = $username;
        $_SESSION['fname'] = $array['fname'];
        $_SESSION['lname'] = $array['lname'];
        $_SESSION['user_Id'] = $array['user_Id'];

        header("Location: ../student/home.php");
    }
    else{
        echo '<script>alert("Incorrect username or password");</script>';
        header("Location: ../student/index.php");
    }
   }
?>