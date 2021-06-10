<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>#NOMOR DOKUMEN</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">#No. Dokumen</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">

            <!-- general form elements -->
            <div class="card card-orange">
          <div class="card-header">
            <h3 class="card-title">SEK KOM</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
         
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                <strong><i class="fas fa-file mr-1"></i>Dokumen Baru</strong>
                <hr>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor PAK</label>
                    <input class="form-control" type="text" placeholder="Default input">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Judul PAK</label>
                    <input class="form-control" type="text" placeholder="Default input">
                  </div>
                  
                  <br>
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </div>

                <!-- /.card-body -->

              </form>
            </div>
            <!-- /.card -->
<!-- SEKRETARIS -->
            <!-- general form elements -->
            <div class="card card-orange">
              <div class="card-header">
                <h3 class="card-title">SEKRETARIS</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                <div class="form-group">
                  <label>Tanggal Masuk Dokumen</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>

                <br>
                  <button type="submit" class="btn btn-primary">Kirim</button>
              </form>
<!-- DARI SEKRETARIS KE ANALYST   -->
              <form>
              <hr>
              <strong><i class="fas fa-file mr-1"></i>Update Dokumen ke Analyst</strong>
              <hr>
              <div class="form-group">
              <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">Dokumen telah diperbarui oleh unit bisnis</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">SKK telah ditandatangani oleh debitur</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">PK beserta asosiasinya telah diterima oleh unit bisnis</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">TALEX telah dikiri, ke LIR atau BO</label>
              </div>
              </div>
              
              <div class="form-group">
                    <label for="exampleInputPassword1">Catatan</label>
                    <input class="form-control" type="text" placeholder="Default input">
                  </div>

                  <label>Pilih Analyst</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option disabled="disabled">California (disabled)</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
            
                  <br>
                  <button type="submit" class="btn btn-primary">Kirim</button>
              </form>

<!-- DARI SEKRETARIS KE SEKRE BISNIS -->
<form>
              <hr>
              <strong><i class="fas fa-file mr-1"></i>Update Dokumen ke Sekretaris Bisnis</strong>
              <hr>
              <div class="form-group">
              <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">Dokumen tidak sesuai dengan data yang ada, perlu pembaruan dari unit bisnis</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">SKK perlu dikirim ke unit bisnis untuk ditandatangani</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">PK dan asesoir perlu dikirim ke unit bisnis untuk ditandatangani</label>
              </div>

              </div>
            
              
              <div class="form-group">
                    <label for="exampleInputPassword1">Catatan</label>
                    <input class="form-control" type="text" placeholder="Default input">
                  </div>

                  <label>Pilih Sekretaris Bisnis</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option disabled="disabled">California (disabled)</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                  <br>
                  <button type="submit" class="btn btn-primary">Kirim</button>
        
              </form>

              
              </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->



<!-- SEKRETARIS BISNIS -->

            <!-- general form elements -->
            <div class="card card-orange">
              <div class="card-header">
                <h3 class="card-title">SEKRETARIS BISNIS</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
              
                <strong><i class="fas fa-file mr-1"></i>Update Dokumen ke Sekretaris</strong>
              <hr>  
            <div class="form-group">
              
              <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">Dokumen telah diperbarui oleh unit bisnis</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">SKK telah ditanda tangani oleh debitur</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">PK beserta asosiasinya telah diterima dari unit bisnis</label>
              </div>
            </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Catatan</label>
                    <input class="form-control" type="text" placeholder="Default input">
                  </div>

                  <label>Pilih Pimpinan</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option disabled="disabled">California (disabled)</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                <!-- </div> -->



                <!-- /.card-body -->
 
                <br>
                  <button type="submit" class="btn btn-primary">Kirim</button>
                
              </form>
            </div>
</div>
            <!-- /.card -->

<!-- DGM/GM -->

            <!-- general form elements -->
            <div class="card card-orange">
              <div class="card-header">
                <h3 class="card-title">DGM/GM</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                <div class="form-group">
                  
                <div class="form-group">
                    <label for="exampleInputPassword1">Catatan</label>
                    <input class="form-control" type="text" placeholder="Default input">
                  </div>

                  <label>Pilih Pimpinan</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option disabled="disabled">California (disabled)</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>



                <!-- /.card-body -->
 
                <br>
                  <button type="submit" class="btn btn-primary">Kirim</button>
                
              </form>
            </div>
</div>
            <!-- /.card -->

<!-- PIMPINAN -->

            <!-- general form elements -->
            <div class="card card-orange">
              <div class="card-header">
                <h3 class="card-title">PIMPINAN</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                <div class="form-group">
                  
                <div class="form-group">
                    <label for="exampleInputPassword1">Catatan</label>
                    <input class="form-control" type="text" placeholder="Default input">
                  </div>

                  <label>Pilih Pengelola</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option disabled="disabled">California (disabled)</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>



                <!-- /.card-body -->
 
                <br>
                  <button type="submit" class="btn btn-primary">Kirim</button>
                
              </form>
            </div>
</div>
            <!-- /.card -->

<!-- PENGELOLA -->
                        <!-- general form elements -->
                        <div class="card card-orange">
              <div class="card-header">
                <h3 class="card-title">PENGELOLA</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                <div class="form-group">
                  
                <div class="form-group">
                    <label for="exampleInputPassword1">Catatan</label>
                    <input class="form-control" type="text" placeholder="Default input">
                </div>

                  <label>Pilih Analyst</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option disabled="disabled">California (disabled)</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
 
                <br>
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </div>

                <!-- /.card-body -->

              </form>
            </div>
            <!-- /.card -->
<!-- ANALYST -->

            <!-- general form elements -->
            <div class="card card-orange">
              <div class="card-header">
                <h3 class="card-title">ANALYST</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Debitur</label>
                    <input class="form-control" type="text" placeholder="Default input">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Perusahaan</label>
                    <input class="form-control" type="text" placeholder="Default input">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">CIF Rekening</label>
                    <input class="form-control" type="text" placeholder="Default input">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Maksimum</label>
                    <input class="form-control" type="text" placeholder="Default input">
                  </div>
                  
              <div class="form-group">
              <label for="exampleInputPassword1">Kelengkapan</label>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">Data Debitur</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">PAK</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">FIA</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">NK3</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">Kelengkapan 1</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">Kelengkapan 2</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">Kelengkapan 3</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">Kelengkapan 4</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">Kelengkapan 5</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">Kelengkapan 6</label>
              </div>

              </div>
                
                  <button type="submit" class="btn btn-primary">Kirim</button>
              </form>
<!-- DARI ANALYST KE SEKRETARIS   -->
              <form>
              <hr>
              <strong><i class="fas fa-file mr-1"></i>Update Dokumen ke Sekretaris</strong>
              <hr>
            <div class="form-group">
            <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">Dokumen telah diperiksa</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">Hasil NK3 Sesuai</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">SKK telah dibuat</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">PK telah dibuat</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">Asesoir, Notaris, dll telah dibuat</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">LATEX telah dibuat</label>
              </div>
            </div>
              
              <div class="form-group">
                    <label for="exampleInputPassword1">Catatan</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Catatan">
                  </div>

                  <label>Pilih Sekretaris</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option disabled="disabled">California (disabled)</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
            
                  <br>
                  <button type="submit" class="btn btn-primary">Kirim</button>
              </form>

              
              </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->


</div>
</div>
</div>
</section>
</div>
