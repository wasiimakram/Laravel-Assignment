<!DOCTYPE html>
<html>

@include('back.layouts.head')
<title>Admin Login </title>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    @if($errors->any())
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        {{$errors->first()}}
    </div>
    @endif

    <p class="login-box-msg">Sign in to start your session</p>

    <form method="POST" action="{{ route('admin_login_submit') }}">
    @csrf
      <div class="form-group has-feedback">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">

        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">


        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          
        </div>
        <!-- /.col -->
      </div>
      <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
      
    </form>
    {{-- <a href="#">I forgot my password</a><br>
 --}}   </div>
  <!-- /.login-box-body -->
</div>

@include('back.layouts.footer_scripts')

<script src="{{asset('assets/back/plugins/iCheck/icheck.min.js')}}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>

</body>
</html>
