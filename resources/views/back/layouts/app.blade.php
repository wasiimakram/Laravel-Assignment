<!DOCTYPE html>
<html>
@include('back.layouts.head')
	<title>Laravel React App | {{$title}}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

  @include('back.layouts.header')

  @include('back.layouts.sidebar')

  <div class="content-wrapper">

      @yield('page_content')

  </div>

  @include('back.layouts.footer')

</div>
  @routes

  @include('back.layouts.footer_scripts')
  @stack('page_scripts')

</body>
</html>
