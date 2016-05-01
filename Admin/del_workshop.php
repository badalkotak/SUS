<?php
include("dbcon.php");
// error_reporting(0);

$id=$_REQUEST['del'];

$get_user_id=mysqli_query($con,"SELECT user_uid FROM Score WHERE idd='$id'");
while($row=mysqli_fetch_array($get_user_id))
{
	$user_uid=$row['user_uid'];
	$del_ans=mysqli_query($con,"DELETE FROM `Answers` WHERE `user_uid`='$user_uid'");
}
$del_score=mysqli_query($con,"DELETE FROM `Score` WHERE `idd`='$id'");
$del_custom=mysqli_query($con,"DELETE FROM `Custom_workshop` WHERE `workshop_id`='$id'");
$del_custom_quest=mysqli_query($con,"DELETE FROM `Custom_questions` WHERE `workshop_id`='$id'");
$del_researcher=mysqli_query($con,"DELETE FROM `Researcher` WHERE `workshop`='$id'");
if($delete=mysqli_query($con,"DELETE FROM Workshop WHERE id='$id'"))
{
	echo "<script>alert('Workshop Deleted!');window.location.href='workshop.php';</script>";
}
else
{
	echo "<script>alert('Problem in deleting workshop!');window.location.href='workshop.php';</script>";
}
?>