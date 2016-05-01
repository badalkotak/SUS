<?php
include("dbcon.php");
error_reporting(0);
session_start();
$user=$_SESSION['uname'];
$current=$_REQUEST['current_pass'];
$new=$_REQUEST['new_pass'];
$new2=$_REQUEST['new_pass_2'];

$result=mysqli_query($con,"SELECT * FROM `Researcher` WHERE email='$user'");
while($row = mysqli_fetch_array($result))
{
	$pass=$row['passwd'];
}

if($current==$pass)
{
	if($new==$new2)
	{
		$update_pass=mysqli_query($con,"UPDATE `Researcher` SET `passwd`='$new' WHERE `email`='$user'");
		echo "<script>alert('Password Updated!');window.location.href='settings.php';</script>";
	}
	else
	{
		echo "<script>alert('Problem in updating Password! The new passwords dont match');window.location.href='settings.php';</script>";
	}
}
else
	{
		echo "<script>alert('Current Password is invalid!');window.location.href='settings.php';</script>";
	}
?>