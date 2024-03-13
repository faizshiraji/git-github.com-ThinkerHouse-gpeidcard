<?php 
session_start();
error_reporting(0);

require_once( 'include_file/db.php' );

if($_SESSION['admin']){
    header("Location:admin/index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- <link rel="shortcut icon" href="img/favicon.html"> -->

    <title>Login Panel </title>
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" action="login_action.php" method="POST">
        <h2 class="form-signin-heading">Login Panel</h2>
        <!-- <h3 class="text-center">User Management System</h3> -->
        <!-- <img src="images/demo_icon.png" class="img img-responsive" style="margin-top: 15px;"> -->
        <br />
        <?php if( isset( $_SESSION['error'] ) ) { ?>
            <div class="alert alert-danger">
                <p><?php echo $_SESSION['error']; unset( $_SESSION['error'] ); ?></p>
            </div>
        <?php } ?>
        <div class="login-wrap">
            <input type="text" class="form-control" placeholder="Username" name="username">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <button class="btn btn-lg btn-login btn-block" type="submit" name="login">LOGIN</button>
        </div>
      </form>

    </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
