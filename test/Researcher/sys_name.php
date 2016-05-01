<?php
include("dbcon.php");
// error_reporting(0);

$name=$_REQUEST['name'];
$name=trim($name);
$name=mysqli_real_escape_string($con,$name);

$idd=$_REQUEST['id'];

if($name!="")
{
if($update=mysqli_query($con,"UPDATE `Workshop` SET `Sys_name`='$name' WHERE `id`='$idd'"))
{
	echo "<script>alert('System Name Updated!');window.location.href='settings.php';</script>";
}

else
{
	echo "<script>alert('Problem in updating System Name!');window.location.href='settings.php';</script>";
}
}
else
{
	echo "<script>alert('Please input all the fields!');window.location.href='settings.php';</script>";
}
?>