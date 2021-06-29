<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dokumen diproses</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url("Beranda");?>">Beranda</a></li>
              <li class="breadcrumb-item active">Dokumen diproses</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">#Nomor Dokumen</h3>
              </div>
              
             
              <div class="card-body">
                    <table class="table">
                      <tr>
                        <th >Tanggal Masuk Dokumen</th>
                        <td>1 Januari 2019</td>
                      </tr>
                      <tr>
                        <th>Tanggal Terakhir Dokumen</th>
                        <td>4 Januari 2019</td>
                      </tr>
                      <tr>
                        <th>Nama Debitur</th>
                        <td>PT.Djarum</td>
                      </tr>
                      <tr>
                        <th>CIF Debitur</th>
                        <td>CIF Debitur</td>
                      </tr>
                      <tr>
                        <th>Status Dokumen</th>
                        <td>Pembuatan SKK</td>
                      </tr>
                    </table>
              
                <br>
                  <table class="table table-striped" width="100%" data-page-length='5' data-length-change='false'>
                    <thead>
                      <tr class="stats-card">
                        <th scope="col">Kegiatan</th>
                        <th scope="col">Posisi</th>
                        <th scope="col">Waktu</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Dokumen telah diterima oleh <b>analyst</b></td>
                        <td>Lisa</td>
                        <td>Senin, 19 April 2021 08:55</td>
                      </tr>
                      <tr>
                        <td>Dokumen disetujui oleh <b>pengelola</b></td>
                        <td>Sony</td>
                        <td>Senin, 19 April 2021 08:45</td>
                      </tr>
                      <tr>
                        <td>Dokumen sedang dicek oleh <b>pengelola</b></td>
                        <td>Sony</td>
                        <td>Senin, 19 April 2021 08:35</td>
                      </tr>
                      <tr>
                        <td>Dokumen dibuat oleh <b>sekretaris</b></td>
                        <td>Marsha</td>
                        <td>Senin, 19 April 2021 08:00</td>
                      </tr>
                    </tbody>
                  </table>
                </br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>