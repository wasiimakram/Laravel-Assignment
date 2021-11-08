@extends('front.layouts.app',['title'=>'Reset Password'])
@section('page_css')
<style>
    .alert-danger{color:white !important;}
    .alert-success{color:white !important;}
</style>
@endsection
@section('page_content')

{!!get_page_heading('Reset Password')!!}

<!--Inner Content Start-->
<div class="innercontent">
  <div class="container">
    <div class="card mx-auto loginWrp wow fadeInUp">
      <div class="card-body">
        <h4 class="card-title mb-4">Reset Password</h4>
        
        @if ($errors->any())
        <div class="alert alert-danger">
          <strong>Alert!</strong>   {{$errors->first()}}
        </div>
        @endif 
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">
          
          <div class="form-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Email">
          </div>
          <!-- form-group// -->
          <div class="form-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="New Password">
          </div>

          <div class="form-group">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Re Password">
          </div>
          <!-- form-group form-check .// -->
          <div class="form-group">
            <button type="submit" class="btn login_btn btn-primary btn-block"> Reset Password </button>
          </div>
          <!-- form-group// -->
        </form>
      </div>
      <!-- card-body.// --> 
    </div>
  </div>
</div>
<!--Inner Content End--> 

@endsection
