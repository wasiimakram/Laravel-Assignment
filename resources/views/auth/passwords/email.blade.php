@extends('front.layouts.app',['title'=>'Reset Password'])
@section('page_css')
<style>
    .alert-danger{color:white !important;}
    .alert-success{color:white !important;}
</style>
@endsection
@section('page_content')

{!!get_page_heading('Password Reset')!!}

<!--Inner Content Start-->
<div class="innercontent">
  <div class="container">
    <div class="card mx-auto loginWrp wow fadeInUp">
      <div class="card-body">
        <h4 class="card-title mb-4">Password Reset</h4>
        
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
        <form method="POST" action="{{ route('password.email') }}">
          @csrf
          
          <div class="form-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
          </div>
          <!-- form-group// -->
          <!-- form-group form-check .// -->
          <div class="form-group">
            <button type="submit" class="btn login_btn btn-primary btn-block"> Send Password Reset Link </button>
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
