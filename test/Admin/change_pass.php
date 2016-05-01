<?php
include("dbcon.php");
error_reporting(0);
session_start();

$current=$_REQUEST['current_pass'];
$new=$_REQUEST['new_pass'];
$new2=$_REQUEST['new_pass_2'];

$result=mysqli_query($con,"SELECT * FROM `admin`");
while($row = mysqli_fetch_array($result))
{
	$pass=$row['passwd'];
}

if($current==$pass)
{
	if($new==$new2)
	{
		$update_pass=mysqli_query($con,"UPDATE `admin` SET `passwd`='$new' WHERE `username`='admin'");
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