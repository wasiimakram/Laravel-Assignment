<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="favicon.ico">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset('assets/back/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/back/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('assets/back/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/back/dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/back/dist/css/custom.css')}}">
  <link rel="stylesheet" href="{{asset('assets/back/dist/css/skins/_all-skins.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/back/dist/css/AdminLTE.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('assets/back/plugins/iCheck/square/blue.css')}}">
    <!-- Pace style -->
  <link rel="stylesheet" href="{{asset('assets/back/plugins/pace/pace.min.css')}}">
  <!-- sweet-alert -->
  <link rel="stylesheet" href="{{asset('assets/back/plugins/sweet-alert/css/sweetalert2.min.css')}}">
  <!-- jquery confirm-alert -->
  <link rel="stylesheet" href="{{asset('assets/back/plugins/jquery-confirm/css/jquery-confirm.css')}}">
 <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- jQuery Toaster -->
  <link rel="stylesheet" href="{{asset('assets/back/plugins/jQueryToaster/css/jquery.toast.css')}}">           
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('assets/back/bower_components/select2/dist/css/select2.min.css')}}">
  <!-- jQuery 3 -->
  <script src="{{asset('assets/back/bower_components/jquery/dist/jquery.min.js')}}"></script>
  <!-- Toggle Button Files-->
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <script>
    var baseUrl = '{{base_url()}}';
    var adminUrl = '{{admin_url()}}';
    var assetUrl = '{{asset_url()}}';
  </script>
  @yield('page_css')
</head>