<?php
require_once '../../functions/connect.php';

$response=$pdo->prepare("select quiz_Id,question_name,answer from tbl_quiz");
$response->execute();
$res = $response->fetchall();

	 $i=1;
	 $right_answer=0;
	 $wrong_answer=0;
	 $unanswered=0;
	 foreach($res as $result){ 
	       if($result['answer']==$_POST["$i"]){
		       $right_answer++;
		   }else if($_POST["$i"]==5){
		       $unanswered++;
		   }
		   else{
		       $wrong_answer++;
		   }
		   $i++;
	 }
	 echo "<div id='answer'>";
	 echo " Right Answer  : <span class='highlight'>". $right_answer."</span><br>";
	 
	 echo " Wrong Answer  : <span class='highlight'>". $wrong_answer."</span><br>";
	 
	 echo " Unanswered Question  : <span class='highlight'>". $unanswered."</span><br>";
	 echo "</div>";

?>