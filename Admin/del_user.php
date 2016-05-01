<?php
include("dbcon.php");
// error_reporting(0);

$id=$_REQUEST['del'];
if($delete=mysqli_query($con,"DELETE FROM Researcher WHERE id='$id'"))
{
	echo "<script>alert('User Deleted!');window.location.href='researcher.php';</script>";
}
else
{
	echo "<script>alert('Problem in deleting user!');window.location.href='researcher.php';</script>";
}
?>