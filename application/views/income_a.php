<?php
  $this->load->view('header_a');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tables
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('c_admin'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"> Tables</a></li>
        <li class="active"> Data Pemasukan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b>Data Pemasukan</b></h3></span>
              <!-- <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#tambah_pembayaran" style="float:right"><span class="glyphicon glyphicon-plus"></span> Tambah Pembayaran</button> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Bulan</th>
                  <th>Pemasukan</th>
                  <th>Target</th>
                  <th>Margin</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $counter = 1;
                  foreach ($pemasukan as $income) {
                ?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $income->tahun_bulan; ?></td>
                  <td><?php echo rupiah($income->jumlah_bulanan * 700000); ?></td>
                  <td><?php echo rupiah($getMember * 700000); ?></td>
                  <td><?php echo rupiah(($income->jumlah_bulanan * 700000) - ($getMember * 700000)); ?></td>
                  <td></td>
                  <td></td>
                  </tr>
                  <?php
            }
              ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Bulan</th>
                  <th>Pemasukan</th>
                  <th>Target</th>
                  <th>Margin</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  $this->load->view('footer_a');
  ?>

  <?php

function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
 
}
