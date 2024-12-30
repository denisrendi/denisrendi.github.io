<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Arsip Buku 2nd</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/iCheck/square/blue.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#">
      <b>Arsip</b> Buku 2nd
    </a>
  </div>
  <div class="login-box-body" style="background-color: #E5989B;">
    <p class="login-box-msg" style="font-family: 'Verdana', sans-serif; font-weight: bold; font-size: 16px;">
      Selamat datang di Aplikasi Perpustakaan
    </p>
    <p class="login-box-msg">Silahkan login untuk akses aplikasi</p>

    <!-- Form login -->
    <form action="{{ route('login') }}" method="POST">
      @csrf
      <div class="form-group has-feedback">
        <input name="username" type="text" autofocus required="required" class="form-control" placeholder="NIM" tabindex="1">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="password" type="password" required="required" class="form-control" placeholder="PASSWORD" tabindex="2" autocomplete="off">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8"></div>
        <div class="col-xs-4">
          <button name="submit" type="submit" class="btn btn-primary btn-block btn-flat" style="background-color: #6D6875; color: white;">
            Sign In
          </button>
        </div>
      </div>
    </form>

    <p class="login-box-msg"></p>
    <p class="login-box-msg">Gunakan Google Chrome untuk akses yang lebih lancar</p>
  </div>
</div>

<!-- Scripts -->
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
