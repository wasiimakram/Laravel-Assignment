@extends('front.layouts.app',['title'=>'Login Page'])

@section('page_content')

{!!get_page_heading('Login')!!}

<!--Inner Content Start-->
<div class="innercontent">
  <div class="container">
    <div class="card mx-auto loginWrp wow fadeInUp">
      <div class="card-body">
        <h4 class="card-title mb-4">Sign in</h4>
        
        @if ($errors->any())
        <div class="alert alert-danger" {!!make_auth_alert()!!}>
          <strong>Alert!</strong>   {{$errors->first()}}
        </div>
        @endif 

        <form method="POST" action="{{ route('login') }}">
          @csrf
          @if(get_metadata_array()['is_facebook_login'] == 1)
          <a href="{{url('/login/facebook')}}" class="btn btn-facebook btn-block mb-2 text-white"> <i class="fab fa-facebook-f"></i> &nbsp; Sign in with Facebook</a>
          @elseif(get_metadata_array()['is_google_login'] == 1)
           {{-- <a href="#" class="btn btn-primary btn-block google_plus mb-4"> <i class="fab fa-google-plus-g"></i> &nbsp;
          Sign in with Google</a> --}}
          @endif
          <div class="form-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Email">
          </div>
          <!-- form-group// -->
          <div class="form-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password">
          </div>
          <!-- form-group// -->
          
          <div class="form-group"> <a href="{{route('password.request')}}" class="float-right forgot_text">Forgot password?</a>
            <label class="float-left custom-control custom-checkbox">
              {{-- <input type="checkbox" class="custom-control-input" checked=""> --}}
              <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <span class="custom-control-label"> Remember </span> </label>
          </div>
          <!-- form-group form-check .// -->
          <div class="form-group">
            <button type="submit" class="btn login_btn btn-primary btn-block"> Login </button>
          </div>
          <!-- form-group// -->
        </form>
      </div>
      <!-- card-body.// --> 
    </div>
  <p class="text-center mt-4">Don't have account? <a href="{{route('register')}}">Sign up</a></p>
  </div>
</div>
<!--Inner Content End--> 

@endsection
