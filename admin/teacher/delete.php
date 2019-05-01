<?php
include "../../functions/connect.php";
if($_GET['teacher_Id'])
{
$id=$_GET['teacher_Id'];
 $sql = $pdo->prepare("DELETE FROM tbl_teacher WHERE teacher_Id=:id");
 $sql->bindParam(':id',$id);
 $sql->execute();
}

?>