<?php
session_start();
$user=$_SESSION['uname'];
if($user=="")
{
  header('Location: index.php');
}
include("dbcon.php");
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
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Description</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../AdminLTE/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../AdminLTE/dist/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../AdminLTE/dist/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../AdminLTE/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="../AdminLTE/dist/css/skins/skin-yellow-light.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    .color_white
{
  color:#ffffff;
}

.table-striped {background-color: #ffffff; padding: 5 !important;}
    </style>
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
  <body class="hold-transition skin-yellow-light sidebar-mini">
    <div class="wrapper">
      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="AdminDashboard.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">SUS</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>SystemUsabilityScale</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="D_Logo/avatar.png" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs"><? echo $usr ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="D_Logo/avatar.png" class="img-circle" alt="User Image">
                    <p>
                      <? echo $usr ?><br><? echo "Workshop: ".$workshop ?>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <!-- <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div> -->
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="D_Logo/avatar.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><? echo $usr ?></p>
              <!-- Status -->
            </div>
          </div>

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->
            <li><a href="edit_question.php"><i class="fa fa-edit"></i> <span>Edit Questions</span></a></li>
            <li><a href="settings.php"><i class="fa fa-gears"></i> <span>Settings</span></a></li>
            <li class="active"><a href="#"><i class="fa fa-table"></i> <span>All Descriptions</span></a></li>
            <li><a href="question_filter.php"><i class="fa fa-table"></i> <span>Question Wise Desp.</span></a></li>
            <li><a href="view_score.php"><i class="fa fa-table"></i> <span>All Scores</span></a></li>
            <? echo "<li><a href='forms.php?id=$w_id'><i class='fa fa-edit'></i> <span>View Form</span></a></li>"; ?>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
              </aside>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Description:
          </h1>
          
        </section>
        <!-- Main content -->
        <section class="content">
          <?php
    
    $i=0;
    $get_user=mysqli_query($con,"SELECT * FROM Score WHERE idd='$w_id'");
    while($user_row=mysqli_fetch_array($get_user))
      {
        
        echo '<div class=table-responsive>';
echo "<table class='table table-striped'>";
echo '<thead>
<tr>
<th>Sr No.</th>
<th>Title</th>
<th>Username</th>
<th>Date of form</th>
<th>Question No.</th>
<th>Option Selected</th>
<th>Reason</th>
</tr>
</thead>
<tbody>';
        $j=0;
        $name=$user_row['user'];
        $user_uid=$user_row['user_uid'];
        $date=$user_row['date'];
        $title=$user_row['idd'];
        $workshop_name=mysqli_query($con,"SELECT name FROM Workshop WHERE id='$title'");
while($wrow=mysqli_fetch_array($workshop_name))
{
  $title=$wrow['name'];
}
      
    $get_ans=mysqli_query($con,"SELECT * FROM Answers WHERE user_uid='$user_uid' ORDER BY(question_no)");
    while($ans_row=mysqli_fetch_array($get_ans))
    {
      echo "<tr>";
      
      $j++;
      $question_no=$ans_row['question_no'];
      $comment=$ans_row['comment'];
      if($comment=="")
      {
        $comment="No Reason!";
      }
      $answer=$ans_row['answer'];
      $user_uid=$ans_row['user_uid'];
      
      //echo "<td>$j</td>";
      if($j==1)
      {
        $i++;
        echo "<td>$i</td>";
        echo "<td>$title</td>";
      echo "<td>$name</td>";
    }
      else
      {
      echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
  }
      if($j==1)
      echo "<td>$date</td>";
      else
      echo "<td></td>";
      echo "<td>";
      echo $question_no;
      echo "</td>";

      echo "<td>";
      if($answer==0)
      {
        $ans="Strongly Disagree";
      }
      else if($answer==1)
      {
        $ans="Disagree";
      }
      else if($answer==2)
      {
        $ans="Neutral";
      }
      else if($answer==3)
      {
        $ans="Agree";
      }
      else if($answer==4)
      {
        $ans="Strongly Agree";
      }
      echo $ans;
      echo "</td>";

      echo "<td>";
      echo $comment;
      echo "</td>";
      echo "</tr>";
    }
    echo '</tbody>
</table>
</div><div class="box"></div>';
  }
  ?>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          <i>Using Technology For Learning</i>
        </div>
        <!-- Default to the left -->
        <strong>EGyaan</strong>
      </footer>
      <!-- Control Sidebar -->
        <!-- Tab panes -->
    <!-- REQUIRED JS SCRIPTS -->
    <!-- jQuery 2.1.4 -->
    <script src="../AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../AdminLTE/bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../AdminLTE/dist/js/app.min.js"></script>

    <script>
function del_confirm() {
    var x;
    if (confirm("Do you want to continue") == true) {
        
    } else {
        event.preventDefault() ;
    }
    //document.getElementById("demo").innerHTML = x;
}
</script>
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
  </body>
</html>
