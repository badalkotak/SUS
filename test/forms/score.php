<?php
include("dbcon.php");
//error_reporting(0);

$user=$_REQUEST['user'];
$user=urldecode($user);
$idd=$_REQUEST['idd'];
$sum_odd=0;
$sum_even=0;
$count=0;

$get_reason=mysqli_query($con,"SELECT * FROM Workshop WHERE id='$idd'");
while($get=mysqli_fetch_array($get_reason))
{
	$r=$get['reason'];
	$sys=$get['Sys_name'];
}

$uid=generateuid();
for($i=1;$i<=10;$i=$i+2)
{
	$q="quest".$i;
	$c="comment".$i;
	$opt=$_REQUEST[$q];
	$comment=$_REQUEST[$c];
	$sum_odd=$sum_odd+($opt-1);
	if($r=="N")
	{
	if($opt!="")
	{
	if($insert_answer=mysqli_query($con,"INSERT INTO `Answers`(`question_no`, `answer`, `user_uid`) VALUES ('$i','$opt','$uid')"))
	{
		$count++;
	}
}
}
else
{
	if($opt!="" && $comment!="")
	{
	if($insert_answer=mysqli_query($con,"INSERT INTO `Answers`(`question_no`, `answer`, `comment`, `user_uid`) VALUES ('$i','$opt','$comment','$uid')"))
	{
		$count++;
	}	
}
}
}

for($i=2;$i<=10;$i=$i+2)
{
	$q="quest".$i;
	$opt=$_REQUEST[$q];
	$c="comment".$i;
	$comment=$_REQUEST[$c];
	$sum_even=$sum_even+(5-$opt);
	if($r=="N")
	{
	if($opt!="")
	{
	if($insert_answer=mysqli_query($con,"INSERT INTO `Answers`(`question_no`, `answer`, `user_uid`) VALUES ('$i','$opt','$uid')"))
	{
		$count++;
	}
}
}
else
{
	if($opt!="" && $comment!="")
	{
	if($insert_answer=mysqli_query($con,"INSERT INTO `Answers`(`question_no`, `answer`, `comment`, `user_uid`) VALUES ('$i','$opt','$comment','$uid')"))
	{
		$count++;
	}	
}
}

}

$sum=$sum_even+$sum_odd;
$sus_score=$sum*2.5;

function generateuid($length = 5) {
    $chars = '0123456789';
    $count = mb_strlen($chars);

    for ($i = 0, $result = ''; $i < $length; $i++) {
        $index = rand(0, $count - 1);
        $result .= mb_substr($chars, $index, 1);
    }
	
    return $result;
}

date_default_timezone_set("Asia/Calcutta");
$date=date('d/m/Y');
if($count==10)
{
if($insert_score=mysqli_query($con,"INSERT INTO `Score`(`user`, `score`, `user_uid`, `idd`, `date`) VALUES ('$user','$sus_score','$uid','$idd','$date')"))
{
	echo "<script>alert('Thank you! Your score has been saved!');window.location.href='thankyou.php?idd=$idd&score=$sus_score';</script>";
}

else
{
	echo "<script>alert('Could not save your score! Something went wrong');window.location.href='$sys';</script>";
}
}

else
{
	echo "<script>alert('Could not save your score! Something went wrong');window.location.href='$sys';</script>";
}

?>