<?php
  $this->load->view('header_a');
?>
<?php
  foreach ($dataPaket as $paket) {
?>
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
  <!-- SELECT2 EXAMPLE -->
  <div class="box box-default">
    <form class="" action="<?php echo base_url('c_admin/edit_paket'); ?>" method="post">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Paket</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <input class="form-control select2" type="hidden" name="id_paket" value="<?php echo $paket['id_paket']; ?>" required>
        <div class="col-md-6">
          <div class="form-group">
            <label>Untuk</label>
            <input class="form-control select2" type="text" name="nama" value="<?php echo $paket['nama']; ?>" required>
          </div>
          <div class="form-group">
            <label>Status Paket</label>
            <select class="form-control select2" name="status" style="width: 100%;">
            <?php if($paket['status'] == "Sudah Diambil") {?>
              <option value="Sudah Diambil" selected="selected">Sudah Diambil</option>
              <option value="Belum Diambil">Belum Diambil</option>
            <?php }elseif($paket['status'] == "Belum Diambil") {?>
              <option value="Belum Diambil" selected="selected">Belum Diambil</option>
              <option value="Sudah Diambil">Sudah Diambil</option>
            <?php } ?>
            </select>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="form-group">
            <label>Tanggal Datang</label>
            <input class="form-control select2" type="date" name="tgl_datang" value="<?php echo $paket['tgl_datang']; ?>" required>
          </div>
          <div class="form-group">
            <label>Tanggal Diambil</label>
            <input class="form-control select2" type="date" name="tgl_pengambilan" value="<?php echo $paket['tgl_pengambilan']; ?>" required>
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
