<?php
  $this->load->view('header_a');
?>
<?php
  foreach ($dataAdministrasi as $administrasi) {
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('c_admin'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#"> Tables</a></li>
      <li><a href="<?php echo base_url('c_admin/v_edit_administrasi'); ?>"> Data Administrasi</a></li>
      <li class="active"> Edit Administrasi</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
  <!-- SELECT2 EXAMPLE -->
  <div class="box box-default">
    <form class="" action="<?php echo base_url('c_admin/edit_administrasi'); ?>" method="post">
      <input class="form-control select2" type="hidden" name="id_administrasi" value="<?php echo $administrasi['id_administrasi']; ?>">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Administrasi</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>ID</label>
            <input class="form-control select2" type="text" disabled name="id_member" value="<?php echo $administrasi['id_member']; ?>">
          </div>
          <div class="form-group">
            <label>Nama</label>
            <input class="form-control select2" type="text" disabled name="nama_member" value="<?php echo $administrasi['nama_member']; ?>">
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="form-group">
            <label>Jatuh Tempo</label>
            <input class="form-control select2" type="date" disabled name="jatuh_tempo" value="<?php echo $administrasi['jatuh_tempo']; ?>">
          </div>
          <div class="form-group">
            <label>Tanggal Pembayaran</label>
            <input class="form-control select2" type="date" name="tgl_pembayaran" value="<?php echo $administrasi['tgl_pembayaran']; ?>">
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <div style="float:right;">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
    </form>
  </div>
  <!-- /.box -->
</section>
</div>
<?php } ?>
<?php
  $this->load->view('footer_a');
?>
