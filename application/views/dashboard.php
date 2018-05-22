<?php
  $this->load->view('header_a');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- ./col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
          <span class="info-box-icon"><i class="fa fa-group"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">TOTAL MEMBER</span>
              <span class="info-box-number"><?php echo $total_member; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- ./col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-check"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">LUNAS</span>
              <span class="info-box-number"><?php echo $lunas; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- ./col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="fa fa-remove"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">BELUM LUNAS</span>
              <span class="info-box-number"><?php echo $belum_lunas; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  $this->load->view('footer_a');
  ?>
