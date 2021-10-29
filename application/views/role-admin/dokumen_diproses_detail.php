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
                <h3 class="card-title">#<?php echo $document->no_document;?></h3>
              </div>
              
             
              <div class="card-body">
                    <table class="table">
                      <tr>
                        <th >Tanggal Masuk Dokumen</th>
                        <td><?php echo $document->date_created;?></td>
                      </tr>
                      <tr>
                        <th>Tanggal Terakhir Dokumen</th>
                        <td><?php echo $document->date_update;?></td>
                      </tr>
                      <tr>
                        <th>Nama Debitur</th>
                        <td><?php echo $document->debitur;?></td>
                      </tr>
                     
                      <tr>
                        <th>Status Dokumen</th>
                        <td>
                            <?php 
                            if($document->status==2){
                              echo 'di prosess sekkom';
                            }elseif($document->status==3){
                              echo 'di prosess sekretaris';
                            }elseif($document->status==4){
                              echo 'di prosess sekretaris bisnis';
                            }elseif($document->status==5){
                              echo 'di prosess DGM / GM';
                            }elseif($document->status==6){
                              echo 'di prosess pimpinan';
                            }elseif($document->status==7){
                              echo 'di prosess pengelola';
                            }elseif($document->status==8){
                              echo 'di prosess analyst';
                            }elseif($document->status==11){
                              echo 'di prosess seketaris dari bisnis';
                            }
                            elseif($document->status==20){
                              echo '<button class="btn btn-info"> Selesai </button>';
                            }
                            elseif($document->status==15){
                              echo '<button class="btn btn-danger"> Ditolak ! </button>';
                            }
                          ?>
                        </td>
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
                    <?php if($document->status == 15){?>
                        <tr>
                        <td>Dokumen telah Ditolak ! oleh</td>
                        <td><b><?php echo $document->nama_pengguna;?></b></td>
                        <td><?php echo $document->date_update;?></td>

                        </tr>
                      <?php };?>    
                      <?php foreach($history as $row){;?>
                   
                     
                      <?php if($row->id_penerus !==''){;?>
                      <tr>
                        <td>Dokumen telah diterima oleh</td>
                        <td> <b><?php echo $row->nama_penerus;?></b></td>
                        <td><?php echo $row->date_update;?></td>
                      </tr>
                      <?php };?>
                      <?php };?>
                      
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