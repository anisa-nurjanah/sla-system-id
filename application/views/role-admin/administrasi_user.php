<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Administrasi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('#')?>">Dokumen Selesai</a></li>
              <li class="breadcrumb-item active">Administrasi</li>
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
                <h3 class="card-title">Daftar Pengguna</h3>
                  <div class="card-tools">
                  </div>
                </div>
              <div class="card-body">
                <table class="table table-striped" id="datatables" width="100%" data-page-length='5' data-length-change='false'>
                  <thead>
                    <tr class="bg-table">
                      <th scope="col">No</th>
                      <th scope="col">NPP</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Posisi</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>PO11145</td>
                      <td>Dylan</td>
                      <td>Analyst</td>
                      <td>
                          <a href="#" class="btn btn-danger" onClick="return confirm('Apakah Anda Yakin Ingin Menghapus Pengguna Ini?')">
                            <i class="fa fa-trash nav-icon"></i>  Hapus Pengguna
                          </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
<script>
    $('#datatables').DataTable( {
        language: {
            searchPlaceholder: "Cari Pengguna"
        }
    });
</script>