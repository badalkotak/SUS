<?php
session_start();
error_reporting(0);
$user=$_SESSION['uname'];
if($user=="")
{
  header('Location: index.php');
}
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Researcher</title>
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
                  <span class="hidden-xs">Admin</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="D_Logo/avatar.png" class="img-circle" alt="User Image">
                    <p>
                      Admin
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
              <p>Admin</p>
              <!-- Status -->
            </div>
          </div>

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->
            <li><a href="AdminDashboard.php"><i class="fa fa-home"></i><span>Home</span></a></li>
            <li><a href="settings.php"><i class="fa fa-gears"></i> <span>Settings</span></a></li>
            <li><a href="workshop.php"><i class="fa fa-plus"></i> <span>Add Workshop</span></a></li>
            <li><a href="researcher.php"><i class="fa fa-share"></i> <span>List Of Researchers</span></a></li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
              </aside>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Researchers: 
          </h1>
          
        </section>
        <!-- Main content -->
        <section class="content">
<form action=update_researcher.php name="addForm" role="form" method="post" onsubmit="return validateEmail();">
<div class="form-group has-feedback">
  <?php
  include("dbcon.php");
  //error_reporting(0);

  $rid=$_REQUEST['edit'];
  $get_details=mysqli_query($con,"SELECT * FROM Researcher WHERE id='$rid'");
  while($get=mysqli_fetch_array($get_details))
  {
    $fname=$get['fname'];
    $lname=$get['lname'];
    $email=$get['email'];
    $w_id=$get['workshop'];
  
            echo "<input type=text class=form-control placeholder=Firstname name=fname value=$fname>";
            echo "<span class='glyphicon glyphicon-user form-control-feedback'></span>";
          echo '</div>
          <div class="form-group has-feedback">';
            echo "<input type=text class=form-control placeholder=Lastname name=lname value=$lname>";
            echo '<span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
<div class="form-group has-feedback">';
            echo "<input type=email class=form-control placeholder=Email name=email id=mail value=$email>";
            echo '<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            <div class="emailerr"></div>
          </div>
          

          <div class="form-group">
  <label for="menu1">Title of the Workshop:</label><br>
<select name="menu1">';

$result = mysqli_query($con,"SELECT * FROM Workshop");
while($row = mysqli_fetch_array($result))
{
$name=$row['name'];
$id=$row['id'];
if($id==$w_id)
{
echo "<option value=$id selected>$name</option>";
}
else
{
echo "<option value=$id>$name</option>";
  
}
}
}
?>
</select><br>
</div>
<? echo "<button type=submit class='btn btn-success' name=id value='$rid'>Add</button>";?>
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

function validateEmail() {
    var x = document.forms["addForm"]["mail"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Please enter a valid email address!!");
        
        return false;
    }
}

</script>
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
  </body>
</html>
