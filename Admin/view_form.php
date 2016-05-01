<?php
$id=$_REQUEST['id'];
$user=$_REQUEST['user'];
$user=urlencode($user);
// score.php?user='.$user.'&'.'idd='.$id.
echo '<form action=# role=form method=post>';
?>
<div class=table-responsive>        
<table class=table table-striped>
<thead>
<tr>
<th>Sr No.</th>
<th>Question</th>
<th>Strongly Disagree</th>
<th>Disagree</th>
<th>Neutral</th>
<th>Agree</th>
<th>Strongly Agree</th>
<th>Reason</th>
</tr>
</thead>
<tbody>
  <?php
  include("dbcon.php");
  $name=mysqli_query($con,"SELECT Sys_name FROM Workshop WHERE id='$id'");
  while($nrow=mysqli_fetch_array($name))
  {
    $workshop=$nrow['Sys_name'];
  }
    
    $i=0;
    $get_questions=mysqli_query($con,"SELECT question FROM Questions");
    while($quest_row=mysqli_fetch_array($get_questions))
    {
      $i++;
      $quest=$quest_row['question'];
      $quest=str_replace("SYSTEM", $workshop, $quest);
      echo "<tr>";
      echo "<td>";
      echo $i;
      echo "</td>";

      echo "<td>";
      echo $quest;
      echo "</td>";

      for($j=0;$j<=4;$j++)
      {
        $q="quest".$i;
        echo "<td><center>";
        echo '<div class="radio">';
          echo "<input type=radio name=$q value=$j>";
        echo '</div>';
        echo "</center></td>";
      }

      $c="comment".$i;
      echo "<td>";
      echo '<div class="form-group">';
        echo "<textarea class='form-control' rows='2' id=$c name=$c></textarea>";
      echo '</div>';
      echo "</td>";
    }
  ?>
</tbody>
</table>
</div>
<center><button type="submit" class="btn btn-success" id="submit" onclick="del_confirm()">Submit</button></center><br><br>
<div id="err"></div>
</form>