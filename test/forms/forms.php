<?php
session_start();
error_reporting(0);
$user=$_SESSION['uname'];
if($user=="")
{
  $user="N";
  $usr="User";
}
$w=$_REQUEST['id'];
include("dbcon.php");
$wid=mysqli_query($con,"SELECT id FROM Workshop WHERE Sys_name='$w'");
while($wr=mysqli_fetch_array($wid))
{
  $w_id=$wr['id'];
}
  $workshop_name=mysqli_query($con,"SELECT * FROM Workshop WHERE id='$w_id'");
while($wrow=mysqli_fetch_array($workshop_name))
{
  $workshop=$wrow['name'];
 
  $system=$wrow['Sys_name'];
}

?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SUS FORM</title>
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
                      <? echo $usr ?><br><? echo "Workshop: ".$workshop.",".$system ?>
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
            
            <?php
            if($user!="N")
            {
            ?>
            <li><a href="edit_question.php"><i class="fa fa-edit"></i> <span>Edit Questions</span></a></li>
            <li><a href="settings.php"><i class="fa fa-gears"></i> <span>Settings</span></a></li>
            <li><a href="view_desp.php"><i class="fa fa-table"></i> <span>All Descriptions</span></a></li>
            <li><a href="question_filter.php"><i class="fa fa-table"></i> <span>Question Wise Desp.</span></a></li>
            <li><a href="view_score.php"><i class="fa fa-table"></i> <span>All Scores</span></a></li>
            <? echo "<li class='active'><a href='#'><i class='fa fa-edit'></i> <span>View Form</span></a></li>"; ?>

          </ul><!-- /.sidebar-menu -->
          <? } ?>
        </section>
        <!-- /.sidebar -->
              </aside>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            SUS FORM:
          </h1>
          
        </section>
        <!-- Main content -->
        <section class="content">
          <form action="score.php" role="form" method="post">
  <div class="row">
  <div class="col-md-4 col-sm-6 col-xs-8">
  <div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" id="user" name="user">
</div>

<div class="form-group">
  <h3><label for="usr">Title of the Workshop:</label>
  <strong><? echo $workshop ?></strong></h3>
</div>
</div>
</div><br>
<?php
$exist=mysqli_query($con,"SELECT * FROM Custom_workshop WHERE workshop_id='$w_id'");
    if($e=mysqli_fetch_array($exist))
    {
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
    $i=0;
    $get_questions=mysqli_query($con,"SELECT question FROM Custom_questions WHERE workshop_id='$w_id'");
    while($quest_row=mysqli_fetch_array($get_questions))
    {
      $i++;
      $quest=$quest_row['question'];
      $quest=str_replace("SYSTEM", $system, $quest);
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
   <? } 
    else
    {
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
    $i=0;
    $get_questions=mysqli_query($con,"SELECT question FROM Questions");
    while($quest_row=mysqli_fetch_array($get_questions))
    {
      $i++;
      $quest=$quest_row['question'];
      $quest=str_replace("SYSTEM", $system, $quest);
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
<? } ?>
<? echo "<center><button type=submit class='btn btn-success' id=submit name=idd value=$w_id onclick='del_confirm()'>Submit</button></center><br><br>"; ?>
<div id="err"></div>
</form>
  <br>
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
