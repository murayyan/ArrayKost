<?php
  $this->load->view('header_m');
?>

<!-- about -->
<div class="about-top" id="about">
    <div class="container">
        <h3 class="w3l-title">Administrasi</h3>
        <span class="w3-sub"></span>
        <div class="wthree-services-bottom-grids">
            <div class="col-md-3 wthree-services-left">
                <img class="img-thumbnail img-administrasi" src="<?php echo base_url()?>assets/images/user4.png" alt="">
            </div>
            <div class="col-md-6 wthree-services-right first-w3l">
                <div class="wthree-services-right-top"><br/>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                    <h4>Nama</h4>
                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-9">
                    <h4>: James</h4><br>
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                    <h4>E-mail</h4>
                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-9">
                    <h4>: member@gmail.com</h4><br>
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                    <h4>Status</h4>
                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-9">
                    <h4>: Aktif</h4><br><br>
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                    <h4>Tagihan</h4>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <h4>: Rp 0</h4>
                  </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="about-top" id="about">
    <div class="container">
        <h3 class="w3l-title">History Pembayaran</h3>
        <span class="w3-sub"></span>
        <div class="wthree-services-bottom-grids">
          <div class="panel panel-primary">
              <div class="panel-body">
              <div class="table">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                          <tr>
                              <th>No<span class="glyphicon glyphicon-sort small"></span></th>
                              <th>Bulan<span class="glyphicon glyphicon-sort small"></th>
                              <th>Tanggal Pembayaran<span class="glyphicon glyphicon-sort small"></span></th>
                              <th>Jatuh Tempo<span class="glyphicon glyphicon-sort small"></span></th>
                              <th>Status<span class="glyphicon glyphicon-sort small"></span></th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>1</td>
                            <td>Januari</td>
                            <td>11/01/2018</td>
                            <td>11/01/2018</td>
                            <td>Sudah Dibayar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Februari</td>
                            <td>11/02/2018</td>
                            <td>11/02/2018</td>
                            <td>Sudah Dibayar</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Maret</td>
                            <td>11/03/2018</td>
                            <td>11/03/2018</td>
                            <td>Sudah Dibayar</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>April</td>
                            <td>11/04/2018</td>
                            <td>11/04/2018</td>
                            <td>Sudah Dibayar</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Mei</td>
                            <td>11/05/2018</td>
                            <td>11/05/2018</td>
                            <td>Sudah Dibayar</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Juni</td>
                            <td>11/06/2018</td>
                            <td>11/06/2018</td>
                            <td>Sudah Dibayar</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Juli</td>
                            <td>11/07/2018</td>
                            <td>11/07/2018</td>
                            <td>Sudah Dibayar</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Agustus</td>
                            <td>11/08/2018</td>
                            <td>11/08/2018</td>
                            <td>Sudah Dibayar</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>September</td>
                            <td>11/09/2018</td>
                            <td>11/09/2018</td>
                            <td>Sudah Dibayar</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Oktober</td>
                            <td>11/10/2018</td>
                            <td>11/10/2018</td>
                            <td>Sudah Dibayar</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>November</td>
                            <td>11/11/2018</td>
                            <td>11/11/2018</td>
                            <td>Sudah Dibayar</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Desember</td>
                            <td>-</td>
                            <td>11/12/2018</td>
                            <td>Belum Dibayar</td>
                        </tr>
                      </tbody>
                  </table>
          </div>
        </div>
      </div>
    </div>
    </div>
</div>
<!-- //about -->

<?php
  $this->load->view('footer_m');
?>
<script src="<?php echo base_url()?>assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.dataTables.js"></script>
    <script src="<?php echo base_url()?>assets/js/dataTables.bootstrap.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            event.preventDefault();
            $('html,body').animate({scrollTop:$('#about').offset().top},1500);
            $('#dataTables-example').dataTable();
        });
    </script>
