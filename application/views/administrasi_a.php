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
        <li class="active"> Data Administrasi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b>Data Administrasi</b></h3></span>
              <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#tambah_pembayaran" style="float:right"><span class="glyphicon glyphicon-plus"></span> Tambah Pembayaran</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Jatuh Tempo</th>
                  <th>Tanggal Pembayaran</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $counter = 1;
                    foreach ($dataAdministrasi as $administrasi) {
                  ?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $administrasi->id_member; ?></td>
                  <td><?php echo $administrasi->nama_member; ?></td>
                  <td><?php echo $administrasi->jatuh_tempo; ?></td>
                  <td><?php echo $administrasi->tgl_pembayaran; ?></td>
                  <td><?php echo $administrasi->status; ?></td>
                  <td><a href="<?php echo base_url('c_admin/v_edit_administrasi'); ?>/<?php echo $administrasi->id_administrasi; ?>"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span></button></a>
                      <a href="<?php echo base_url('c_admin/hapus_administrasi'); ?>/<?php echo $administrasi->id_administrasi; ?>"><button type="button" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus <?php echo $administrasi->id_administrasi; ?>')"><span class="glyphicon glyphicon-trash"></span></button></a></td>
                </tr>
                <?php
              }
                ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Jatuh Tempo</th>
                  <th>Tanggal Pembayaran</th>
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
