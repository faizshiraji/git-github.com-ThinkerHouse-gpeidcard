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
        <li><a href="../index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

        <div class="col-md-12">

           <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">All Registration Information</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
               <table id="example" class="display nowrap" style="width:100%">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Page URL</th>
                    <th>Date Time</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  // $i = 0;
                  $select_information = mysqli_query($connect,"SELECT * FROM registration_info");
                  while ($fetch_information = mysqli_fetch_array($select_information)) {
                  // $i++;  
                  ?>

                  <tr>
                    <td><?php echo $fetch_information['id'] ?></td>
                    <td><?php echo $fetch_information['name']?></td>
                    <td><img src="../../images/userImages/<?php echo $fetch_information['image_name']?>" class="img img-responsive" width="100px" height="60px"></td>
                    <td><?php echo $fetch_information['page_url']?></td>
                    <td><?php echo $fetch_information['date_time']?></td>
                  </tr>
                  <?php } ?>
                 </tbody>
                </table>
              </div>
          </div>

        </div>

       </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include"include_file/footer.php"; ?> 
