<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dokumen Diproses</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=template('beranda_admin')?>">Beranda</a></li>
              <li class="breadcrumb-item active">Dokumen Diproses</li>
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
                <h3 class="card-title">Dokumen yang sedang diproses</h3>
                  <div class="card-tools">
                    <!-- test -->
                      <!-- div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Cari Dokumen">
                        <div class="input-group-append">
                          <div class="btn btn-primary">
                            <i class="fas fa-search"></i>
                          </div>
                        </div>
                      </div> test -->
                  </div>
                </div>

        <div class="card-body">
                <table class="table table-striped" id="datatables" width="100%" data-page-length='5' data-length-change='false'>
                  <thead>
                    <tr class="bg-table">
                      <th scope="col">No</th>
                      <th scope="col">No Dokumen</th>
                      <th scope="col">Nama Dokumen</th>
                      <th scope="col">Nama Debitur</th>
                      <th scope="col">Status</th>
                      <th scope="col">Posisi</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>OPK/MAK/001</td>
                      <td>Dokumen Kredit</td>
                      <td>PT. Djarum</td>
                      <td>Pembuatan SKK</td>
                      <td>Dodi (Analyst)</td>
                      <td>
                        <a href="<?=site_url('DokumenDiproses/detail')?>" class="btn btn-green">
                          Lihat Detail
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
    </div>
    <!-- /.content -->
</div>
 <script>
    $('#datatables').DataTable( {
        language: {
            searchPlaceholder: "Cari Dokumen"
        }
    });
</script>