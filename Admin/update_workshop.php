<?php
include("dbcon.php");
// error_reporting(0);

$id=$_REQUEST['id'];
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
	if($update=mysqli_query($con,"UPDATE `Workshop` SET `name`='$title',`show_score`='$show',`Sys_name`='$system',`reason`='$reason' WHERE id='$id'"))
	{
		echo "<script>alert('Workshop Updated!');window.location.href='workshop.php';</script>";
	}
	else
	{
		echo "<script>alert('Problem in updating workshop!');window.location.href='workshop.php';</script>";
	}
}
