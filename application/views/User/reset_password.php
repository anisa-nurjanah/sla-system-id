<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Reset Password</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Reset Password</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-orange">
              <div class="card-header">
                <h3 class="card-title">Formulir Reset Password</h3>
              </div>
              <form method="post">
                <div class="card-body">
                  <div class="form-group">
                    <table class="table table-striped">
                        <tr> 
                            <td>Password Lama</td>
                            <td><input type="password" name="password_lama" class="form-control" placeholder="Password Lama" value="" required=""></td>
                        </tr>
                        <tr> 
                            <td>Password Baru</td>
                            <td><input type="password" name="password_baru" class="form-control" placeholder="Password Baru" value="" required=""></td> 
                        </tr>
                        <tr>
                            <td>Verifikasi Password Baru</td>
                            <td><input type="password" name="konfirmasi_password" class="form-control" placeholder="Konfirmasi Ulang Password" value="" required=""></td>
                        </tr>
                    </table>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>