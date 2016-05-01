<?php
include("dbcon.php");
// error_reporting(0);

$title=$_REQUEST['workshop'];
$system=$_REQUEST['system'];
$system=trim($system);
$title=trim($title);
$title=mysqli_real_escape_string($con,$title);
$system=mysqli_real_escape_string($con,$system);
$show=$_REQUEST['show_result'];
$reason=$_REQUEST['r'];
if($show=="")
{
	$show="N";
}

if($title=="" || $system=="")
{
	echo "<script>alert('Please input all the fields!');window.location.href='workshop.php';</script>";
}
else
{
	if($insert=mysqli_query($con,"INSERT INTO `Workshop`(`name`, `show_score`,`Sys_name`,`reason`) VALUES ('$title','$show','$system','$reason')"))
	{
		echo "<script>alert('Workshop Added!');window.location.href='workshop.php';</script>";
	}
	else
	{
		echo "<script>alert('Problem in adding workshop!');window.location.href='workshop.php';</script>";
	}
}
?>