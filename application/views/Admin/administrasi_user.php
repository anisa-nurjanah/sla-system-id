<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5><b>Administrasi</b></h5>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"><b>Daftar pengguna</b></h4>
              </div>
              <div class="card-body">
                <table class="table table-striped" id="datatables" width="100%" data-page-length='5' data-length-change='false'>
                  <thead>
                    <tr class="bg-table">
                      <th scope="col">No</th>
                      <th scope="col">NPP</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Posisi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>PO11145</td>
                      <td>Dylan</td>
                      <td>Analyst</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content -->
</div>
<script>
    $('#datatables').DataTable( {
        language: {
            searchPlaceholder: "Cari Pengguna"
        }
    });
</script> 