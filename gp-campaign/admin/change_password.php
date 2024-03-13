<?php include"include_file/header.php"; ?>
<?php include"include_file/sidebar.php"; ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../index.php"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

      	<div class="col-md-6 col-md-offset-3">

      	<div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Change Password</h3>
          </div>

           
           <?php


            if (isset($_POST['submit'])) {

                $current_password = $connect->real_escape_string( md5($_POST['current_pass']) );
                $new_password = $connect->real_escape_string( md5($_POST['new_pass']) );
                $confirm_password = $connect->real_escape_string( md5($_POST['confirm_pass']) );

                if ($current_password != $old_password) {
                    $_SESSION['not_match_password'] =  'Old Password Not Match !!';
                } else if ($new_password != $confirm_password) {
                    $_SESSION['different_password'] =  'Password Not Match !!';
                } else if ($current_password == $new_password) {
                     $_SESSION['same_password'] = 'You Have To Enter Different Password !!';
                } else {

                    $update_password = "UPDATE user SET password = '$new_password' WHERE id = '$ad_id'";

                    if ( $connect->query( $update_password ) ) {
                        $_SESSION['success_password'] = 'Password Changed Successfully.';
                    } else {
                        $_SESSION['fail_password'] = 'Password Change Fail !.';
                    }
                }
            }
            ?>

            <!-- BEGIN ALERT MESSAGE -->
            <div class="row margin_top" style="margin-top: 10px;">
              <div class="col-md-6 col-md-offset-3">
                <?php if( isset( $_SESSION['success_password'] ) ): ?>
                  <div class="alert alert-success alert-dismissable fade in">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <?php echo $_SESSION['success_password']; unset( $_SESSION['success_password'] )?>
                   </div>
                <?php endif ?>
                <?php if( isset( $_SESSION['fail_password'] ) ): ?>
                  <div class="alert alert-danger alert-dismissable fade in">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <?php echo $_SESSION['fail_password']; unset( $_SESSION['fail_password'] ); ?>
                   </div>
                <?php endif ?>
                <?php if( isset( $_SESSION['same_password'] ) ): ?>
                  <div class="alert alert-danger alert-dismissable fade in">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <?php echo $_SESSION['same_password']; unset( $_SESSION['same_password'] ); ?>
                   </div>
                <?php endif ?>
                <?php if( isset( $_SESSION['different_password'] ) ): ?>
                  <div class="alert alert-danger alert-dismissable fade in">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <?php echo $_SESSION['different_password']; unset( $_SESSION['different_password'] ); ?>
                   </div>
                <?php endif ?>
                <?php if( isset( $_SESSION['not_match_password'] ) ): ?>
                  <div class="alert alert-danger alert-dismissable fade in">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <?php echo $_SESSION['not_match_password']; unset( $_SESSION['not_match_password'] ); ?>
                   </div>
                <?php endif ?>
              </div>
            </div>
            <!-- END ALERT MESSAGE -->



          <!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal" action="" method="post">
            <div class="box-body">
              <div class="form-group">
                <label for="current_pass" class="col-sm-4 control-label">Old Password</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="current_pass" name="current_pass" placeholder="Previous Password" required>
                </div>
              </div>
              <div class="form-group">
                <label for="new_password" class="col-sm-4 control-label">New Password</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="new_password" name="new_pass" placeholder="New Password" required>
                </div>
              </div>
              <div class="form-group">
                <label for="confirm_password" class="col-sm-4 control-label">Confirm Password</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="confirm_password" name="confirm_pass" placeholder="Confirm Password" required>
                </div>
              </div>
            <!-- /.box-body -->
            <div class="box-footer pull-right">
              <button type="submit" name="submit" class="btn btn-info">Submit</button>
              <button type="reset" class="btn btn-default">Cancel</button>
            </div>
            <!-- /.box-footer -->
           </div>
          </form>
        </div>

       </div>

      </div>
      <!-- /.row -->
      <!-- Main row -->

      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include"include_file/footer.php"; ?> 