@extends('front.layouts.app',['title'=>'404 Not Found'])
@section('page_content')

{!!get_page_heading('404 Not Found')!!}

<!--Inner Content Start-->
<div class="innercontent">
  <div class="container"> 
    
    <!--404 Start-->
    <div class="404-wrap wow fadeInUp">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="four-zero-page">
            <h2>404</h2>
            <h3>Sorry Page Was Not Found</h3>
            <p>The page you are looking is not available or has been removed.
              Try going to Home Page by using the button below.</p>
            <div class="readmore"> <a href="{{base_url()}}">Go To Homepages</a> </div>
          </div>
        </div>
      </div>
    </div>
    
    <!--404 End--> 
    
  </div>
</div>

<!--Inner Content End--> 
@endsection
