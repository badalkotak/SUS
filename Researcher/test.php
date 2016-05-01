<?php
    include("dbcon.php");
    $i=0;
    $w_id=3;
    $exist=mysqli_query($con,"SELECT * FROM Custom_workshop WHERE workshop_id='$w_id'");
    if($e=mysqli_fetch_array($exist))
    {
      echo "True";
    }
    else
    {
      echo "thulu";
    }
?>