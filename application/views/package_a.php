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
        <li class="active"> Daftar Paket</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b>Daftar Paket</b></h3></span>
              <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#tambah_paket" style="float:right"><span class="glyphicon glyphicon-plus"></span> Tambah Paket</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Untuk</th>
                  <th>Datang</th>
                  <th>Diambil</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $counter = 1;
                    foreach ($dataPaket as $paket) {
                  ?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $paket->nama; ?></td>
                  <td><?php echo $paket->tgl_datang; ?></td>
                  <td><?php echo $paket->tgl_pengambilan; ?></td>
                  <td><?php echo $paket->status; ?></td>
                  <td><a href="<?php echo base_url('c_admin/v_edit_paket'); ?>/<?php echo $paket->id_paket; ?>"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span></button></a>
                      <a href="<?php echo base_url('c_admin/hapus_paket'); ?>/<?php echo $paket->id_paket; ?>"><button type="button" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus <?php echo $paket->nama; ?>')"><span class="glyphicon glyphicon-trash"></span></button></a></td>
                </tr>
                <?php
              }
                ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Untuk</th>
                  <th>Datang</th>
                  <th>Diambil</th>
                  <th>Status</th>
                  <th>Aksi</th>
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
