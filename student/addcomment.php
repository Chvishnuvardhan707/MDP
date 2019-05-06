<?php
		include "../functions/connect.php";
        $comment = $_POST['comment'];
        $userid = $_POST['userid'];
        $postid = $_POST['postid'];
        date_default_timezone_set("Asia/Taipei");
        $datetime=date("Y-m-d h:i:sa");
        $comment = $pdo->prepare("Insert into tbl_comment (comment,sub_Id,user_Id,datetime) values ('$comment','$postid','$userid','$datetime') ");
        $comment->execute();
        $sql = $pdo->prepare("select * from tbl_comment as c join tbl_user as u on c.user_Id=u.user_Id where sub_Id='$postid' and c.user_Id='$userid' 
        					and c.datetime='$datetime'");
        $sql->execute();
        $result = $qsql->fetchall();

	 foreach($result as $row){
                    echo "<label>Comment by: </label> ".$row['fname']." ".$row['lname']."<br>";
                     echo '<label class="pull-right">'.$row['datetime'].'</label>';
                     echo "<p class='well'>".$row['comment']."</p>";
              }



              ?>