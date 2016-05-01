<?php
include("dbcon.php");
error_reporting(0);
session_start();
$username=$_REQUEST["usr"];
$password=$_REQUEST["pwd"];

$result=mysqli_query($con,"SELECT passwd FROM Researcher WHERE email='$username'");
while($row=mysqli_fetch_array($result))
{
	$pass=$row['passwd'];
}
if($username!="" && $password!="")
{
if($password==$pass)
{
$_SESSION['uname'] = $username;
$_SESSION['passwd'] = $password;
header('Location: view_desp.php');
}
else
{
	echo "<script>alert('Invalid username or password!');window.location.href='index.php';</script>";
}
}
else
{
	echo "<script>alert('Please input all the fields!');window.location.href='index.php';</script>";
}

?>
