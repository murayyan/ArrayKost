<?php
  $this->load->view('header_a');
?>
<?php
  foreach ($dataMember as $member) {
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
    <form class="" action="<?php echo base_url('c_admin/edit_member'); ?>" method="post">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Member</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>ID Member</label>
            <input class="form-control select2" type="text" disabled name="id_member" value="<?php echo $member['id_member']; ?>" required>
          </div>
          <div class="form-group">
            <label>Nama</label>
            <input class="form-control select2" type="text" name="nama_member" value="<?php echo $member['nama_member']; ?>" required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input class="form-control select2" type="email" name="email" value="<?php echo $member['email']; ?>" required>
          </div>
          <div class="form-group">
            <label>NIK</label>
            <input class="form-control select2" type="text" name="nik" value="<?php echo $member['nik']; ?>" required>
          </div>
          <div class="form-group">
            <label>No HP</label>
            <input class="form-control select2" type="text" name="no_hp" value="<?php echo $member['no_hp']; ?>" required>
          </div>
          <div class="form-group">
            <label>Pekerjaan</label>
            <input class="form-control select2" type="text" name="pekerjaan" value="<?php echo $member['pekerjaan']; ?>" required>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="form-group">
            <label>Alamat Asal</label>
            <input class="form-control select2" type="text" name="alamat" value="<?php echo $member['alamat']; ?>" required>
          </div>
          <div class="form-group">
            <label>Kota Lahir</label>
            <input class="form-control select2" type="text" name="kota_lahir" value="<?php echo $member['kota_lahir']; ?>" required>
          </div>
          <div class="form-group">
            <label>Tanggal Lahir</label>
            <input class="form-control select2" type="date" name="tgl_lahir" value="<?php echo $member['tgl_lahir']; ?>" required>
          </div>
          <div class="form-group">
            <label>Tanggal Bergabung</label>
            <input class="form-control select2" type="date" name="tgl_gabung" value="<?php echo $member['tgl_gabung']; ?>" required>
          </div>
          <div class="form-group">
            <label>No Kamar</label>
            <input class="form-control select2" type="number" name="no_kamar" value="<?php echo $member['no_kamar']; ?>" required>
          </div>
          <!-- /.form-group -->
          <div class="form-group">
            <label>Status</label>
            <select class="form-control select2" name="status" style="width: 100%;">
            <?php if($member['status'] == "Aktif") {?>
              <option value="Aktif" selected="selected">Aktif</option>
              <option value="Tidak Aktif">Tidak Aktif</option>
            <?php }elseif($member['status'] == "Tidak Aktif") {?>
              <option value="Tidak Aktif" selected="selected">Tidak Aktif</option>
              <option value="Aktif">Aktif</option>
            <?php } ?>
            </select>
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
