
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- <h2 class="text-center">WELCOME TO ADMIN PANEL</h2> -->
        </div>
        <!-- <div class="col-md-4 col-md-offset-4">
            <img src="images/demo_icon.png" class="img img-responsive" width="100%;">
        </div> -->

        <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3 style="font-size: 22px;"><?php echo $totalUser; ?></h3>
              <p><strong>Registered User</strong></p>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-headphone"></i> -->
            </div>
            <a href="registration_information.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div><!-- ./col -->
        <!-- /.row -->
        <!-- Main row -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->