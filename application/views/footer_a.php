<footer class="main-footer">
  <strong>© 2017 Kost Array.</strong>
</footer>
<div class="control-sidebar-bg"></div>
<div class="modal fade" id="tambah_member">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah Member</h4>
      </div>
      <div class="modal-body">
        <form id="regForm" class="form-horizontal" method="post" action="<?php echo base_url('c_admin/tambah_member'); ?>">
          <div class="tab">
            <div class="form-group">
              <label class="col-sm-3 control-label">Nama</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="nama_member" oninput="this.className = ''">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Email</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" name="email" oninput="this.className = ''">
              </div>
            </div>
          </div>
          <div class="tab">
            <div class="form-group">
              <label class="col-sm-3 control-label">No.KTP/NIK</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="nik" oninput="this.className = ''">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">No HP</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="no_hp" oninput="this.className = ''">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Pekerjaan</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="pekerjaan" oninput="this.className = ''">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Alamat</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="alamat" oninput="this.className = ''">
              </div>
            </div>
          </div>
          <div class="tab">
            <div class="form-group">
              <label class="col-sm-3 control-label">Kota Lahir</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="kota_lahir" oninput="this.className = ''">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Tanggal Lahir</label>
              <div class="col-sm-8">
                <input type="date" class="form-control" name="tgl_lahir" oninput="this.className = ''">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Tanggal Masuk</label>
              <div class="col-sm-8">
                <input type="date" class="form-control" name="tgl_gabung" oninput="this.className = ''">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Pilih No Kamar</label>
              <div class="col-sm-8">
                <input type="number" class="form-control" name="no_kamar" oninput="this.className = ''">
              </div>
            </div>
          </div>
          <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
          </div>
          <div class="modal-footer">
            <div style="overflow:auto;">
              <div style="float:right;">
                <button type="button" class="btn btn-default" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)">Next</button>
              </div>
            </div>
          </div>
        </form>
      </div>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="tambah_pembayaran">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah Pembayaran</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="post" action="<?php echo base_url('c_admin/tambah_administrasi'); ?>">
          <div class="form-group">
            <label class="col-sm-3 control-label">ID & Nama</label>
            <div class="col-sm-8">
              <select name="id_member" class="form-control select2" style="width: 100%;">
                  <option disabled selected="selected"></option>
                <?php foreach ($dataMember as $member) { ?>
                  <option value="<?php echo $member->id_member; ?>"><?php echo $member->id_member; ?> - <?php echo $member->nama_member; ?></option>
                <?php } ?>
                </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Tanggal Pembayaran</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" name="tgl_pembayaran" oninput="this.className = ''">
            </div>
          </div>
          <div class="modal-footer">
              <div style="float:right;">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>
        </form>
      </div>

    </div>
    <!-- /.modal-content -->
  </div>
<div class="modal fade" id="tambah_paket">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah Paket</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="post" action="<?php echo base_url('c_admin/tambah_paket'); ?>">
          <div class="form-group">
            <label class="col-sm-3 control-label">Untuk</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="nama" oninput="this.className = ''">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Datang</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" name="tgl_datang" oninput="this.className = ''">
            </div>
          </div>
          <div class="modal-footer">
              <div style="float:right;">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>
        </form>
      </div>

    </div>
    <!-- /.modal-content -->
  </div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url()?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url()?>assets/bower_components/chart.js/Chart.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url()?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url()?>assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url()?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url()?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url()?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url()?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url()?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>
<!-- page script -->
<script>
$(function () {
  $('#example1').DataTable()
  $('#example2').DataTable({
    'paging'      : true,
    'lengthChange': false,
    'searching'   : false,
    'ordering'    : true,
    'info'        : true,
    'autoWidth'   : false
  })
})
</script>
<script type="text/javascript">
  var currentTab = 0; // Current tab is set to be the first tab (0)
  showTab(currentTab); // Display the current tab

  function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
  }

  function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
  }

  function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
  }

  function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
  }
</script>
</body>
</html>
