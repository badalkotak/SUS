<?php
include("dbcon.php");

$workshop="Test";
$result=mysqli_query($con,"SELECT * FROM Questions");
while($row=mysqli_fetch_array($result))
{
	$quest=$row['question'];
	$quest=str_replace("workshop", $workshop, $quest);
	echo $quest."<br>";
}
?>