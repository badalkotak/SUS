<?php
include("dbcon.php");
// error_reporting(0);

$w_id=$_REQUEST['id'];

$delete=mysqli_query($con,"DELETE FROM `Custom_questions` WHERE workshop_id='$w_id'");
$insert_custom=mysqli_query($con,"INSERT INTO `Custom_workshop` VALUES ('$w_id')");
for($i=1;$i<=10;$i++)
{
	$question=$_REQUEST[$i];
	$question=trim($question);
	$question=mysqli_real_escape_string($con,$question);
	$insert=mysqli_query($con,"INSERT INTO `Custom_questions`( `question`,`workshop_id`) VALUES ('$question','$w_id')");
}

header('Location: edit_question.php');
?>