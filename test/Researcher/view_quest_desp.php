<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
<link rel="stylesheet" href="dist/css/bootstrap.min.css">
<style type="text/css">
      body { background: #edf0f5 ; }
      .tb5 {
	border:2px solid #456879;
	border-radius:10px;
	height: 25px;
	width: 230px;
}
.ta5 {
	border:2px solid #456879;
	border-radius:10px;
	height: 200px;
	width: 330px;
}

.color_white
{
	color:#ffffff;
}
.page-header { background-color: #17baef; margin-left: 0px; margin-right: 0px; }

.table-striped {background-color: #ffffff; padding: 5 !important;}

    </style>

</head>
<body>
<?php
	echo '<br><div class=table-responsive>';
echo "<table class='table table-striped'>";
echo '<thead>
<tr>
<th>Sr No.</th>
<th>Title</th>
<th>Username</th>
<th>Answer</th>
<th>Comment</th>
</tr>
</thead>
<tbody>';
include("dbcon.php");
session_start();
$user=$_SESSION['uname'];
$get_name=mysqli_query($con,"SELECT * FROM Researcher WHERE email='$user'");
while($grow=mysqli_fetch_array($get_name))
{
  $usr=$grow['fname']." ".$grow['lname'];
  $workshop=$grow['workshop'];
  $w_id=$grow['workshop'];
  $workshop_name=mysqli_query($con,"SELECT name FROM Workshop WHERE id='$workshop'");
while($wrow=mysqli_fetch_array($workshop_name))
{
  $workshop=$wrow['name'];
}
}
$id=$_REQUEST['id'];
		include("dbcon.php");
		$i=0;
		$get_user=mysqli_query($con,"SELECT * FROM Score WHERE idd='$w_id'");
		while($user_row=mysqli_fetch_array($get_user))
			{
				
				$user=$user_row['user'];
				$user_uid=$user_row['user_uid'];
				$title=$user_row['idd'];
				$workshop_name=mysqli_query($con,"SELECT name FROM Workshop WHERE id='$title'");
while($wrow=mysqli_fetch_array($workshop_name))
{
  $title=$wrow['name'];
}
				$get_ans=mysqli_query($con,"SELECT * FROM Answers WHERE user_uid='$user_uid' AND question_no='$id'");
		while($ans_row=mysqli_fetch_array($get_ans))
		{
			$i++;
			$ans=$ans_row['answer'];
			$reason=$ans_row['comment'];
			if($reason=="")
			{
				$reason="No Reason!";
			}
			echo "<tr>";
			echo "<td>";
			echo $i;
			echo "</td>";
			echo "<td>";
			echo $title;
			echo "</td>";
			echo "<td>";
			echo $user;
			echo "</td>";
			echo "<td>";
			if($ans==0)
				$a="Strongly Disagree";
			else if($ans==1)
				$a="Disagree";
			else if($ans==2)
				$a="Neutral";
			else if($ans==3)
				$a="Agree";
			else if($ans==4)
				$a="Strongly Agree";
			echo $a;
			echo "</td>";
			echo "<td>";
			echo $reason;
			echo "</td>";
			echo "</tr>";
		}
			}
		echo '</tbody>
</table>
</div>';
	
	?>	
<script src="dist/js/bootstrap.min.js"></script>
</body>
</html>