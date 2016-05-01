<?php
include("dbcon.php");
// error_reporting(0);

$delete=mysqli_query($con,"DELETE FROM `Questions`");
for($i=1;$i<=10;$i++)
{
	$question=$_REQUEST[$i];
	$insert=mysqli_query($con,"INSERT INTO `Questions`( `question`) VALUES ('$question')");
}

header('Location: edit_question.php');
?>