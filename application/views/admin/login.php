<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	
	<title>Login Administrator</title>

	<link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css") ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/dist/css/AdminLTE.min.css") ?>">



	<link rel="icon" type="text/css" href="<?php echo base_url("assets/icon/favicon.png") ?>">
	
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>G-SMART</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Login untuk mengelola konten website</p>

    <form method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <?php echo form_error('username','<div class="text-danger">','</div>'); ?>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <?php echo form_error('password','<div class="text-danger">','</div>'); ?>
      </div>
      <div class="row">
        <div class="col-xs-8"></div>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
      </div>
    </form>
    <?php if ($this->session->flashdata('pesan_login')): ?>
    	<br>
    	<?php echo $this->session->flashdata('pesan_login'); ?>
    <?php endif ?>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script src="<?php echo base_url("assets/plugins/jQuery/jquery-2.2.3.min.js") ?>"></script>
<script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js") ?>"></script>
</body>
</html>