<?php
include "../../functions/connect.php";
if($_GET['contact_Id'])
{
$id=$_GET['contact_Id'];
 $sql = $pdo->prepare("DELETE FROM tbl_contact WHERE contact_Id='$id'");
 $sql->execute();
}

?>