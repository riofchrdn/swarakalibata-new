<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Users | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/admin_mu/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/admin_mu/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/admin_mu/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>USERS</b> Login</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
        <?php 
            echo $this->session->flashdata('message');
            echo form_open($this->uri->segment(1).'/index'); 
        ?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name='a' placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name='b' placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <?php echo $image; ?>
        </div>
        <div class="input-group mb-3">
        <input type="text" class="form-control" name='security_code' placeholder="Security Code" required>
        </div>

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
            <a data-dismiss="modal" aria-hidden="true" data-toggle='modal' href='#lupapass' data-target='#lupapass'>I forgot my password</a>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name='submit' class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>/asset/admin_mu/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>/asset/admin_mu/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>/asset/admin_mu/dist/js/adminlte.min.js"></script>

<div class="modal fade" id="lupapass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h5 class="modal-title" id="myModalLabel">Lupa Password Login?</h5>
      </div>
      <div class="modal-body">
            <?php 
                $attributes = array('class'=>'form-horizontal');
                echo form_open($this->uri->segment(1).'/lupapassword',$attributes); 
            ?>
              <div class="form-group">
                  <center style='color:red'>Masukkan Email yang terkait dengan akun!</center><br>
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                  <div style='background:#fff;' class="input-group col-sm-8">
                      <span class="input-group-addon"><i class='fa fa-envelope fa-fw'></i></span>
                      <input style='text-transform:lowercase;' type="email" class="required form-control" name="email">
                  </div>
              </div>

              <div class="form-group">
                  <div class="col-sm-offset-3">
                      <button type="submit" name='lupa' class="btn btn-primary btn-sm">Kirimkan Permintaan</button>
                      &nbsp; &nbsp; &nbsp;<a data-dismiss="modal" aria-hidden="true" data-toggle='modal' href='#login' data-target='#login' title="Lupa Password Members">Kembali Login?</a>
                  </div>
              </div>

          </form><div style='clear:both'></div>
      </div>
    </div>
  </div>
</div>
</body>
</html>