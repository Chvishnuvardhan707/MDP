<?php
include "../../functions/connect.php";
if($_GET['cat_Id'])
{
$id=$_GET['cat_Id'];
 $sql = $pdo->prepare("DELETE FROM tbl_category WHERE cat_Id='$id'");
 $sql->execute();
}

?>