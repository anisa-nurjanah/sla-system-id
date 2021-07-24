<!-- Content Wrapper. Contains page content -->
<!DOCTYPE html>
<html lang="en">
    <?php include 'head.php'?>
    <body class="hold-transition mt-5 bg-white">
      <div class="login-box mx-auto">
        <div class="login-logo">
          <img src="<?=template('dist/img/BNI.png')?>" style="width:55%">
          <p>Service Level Agreement</p>
        </div>

        <!-- /.login-logo -->
        <div class="card" style="border:1px solid black">
          <div class="card-body login-card-body">
            <p class="login-box-msg">Sign In Untuk Masuk Ke Dalam Sistem</p>

            <form action="#" method="post">
              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="NPP">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" id="remember">
                      <label for="remember">Ingat Saya</label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Log In</button>
                </div>
              </div>
            </form>
          </div>
          <!-- /.login-card-body -->
        </div>
      </div>
    </body>
</html>