@extends('back.layouts.app',['title'=>$title])

@section('page_content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{__('Dashboard')}}
       </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>{{__(' Home')}}</a></li>
        <li class="active">{{__('Dashboard')}}</li>
      </ol>
    </section>
 
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$companies}}</h3>

              <p>{{__('Total Companies')}}</p>
            </div>
            <div class="icon">
              <i class="fa fa-building-o "></i>
            </div>
            <a href="{{route('companies.index')}}" class="small-box-footer">{{__('More info')}} <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$employes}}</h3>

              <p>{{__('Total Employees')}}</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="{{route('employes.index')}}" class="small-box-footer">{{__('More info')}} <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      
      </div>
      <!-- /.row -->


    </section>
    <!-- /.content -->
@endsection

@section('page_scripts')
<!-- DataTables Files-->
<script src="{{asset('assets/back/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/back/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('assets/back/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

<script>$('#example1').DataTable({"order": [[ 3, "desc" ]]});</script>
<script>$('#record-table').DataTable({"order": [[ 3, "desc" ]]});</script>

<!-- Page JS File-->
<script src="{{asset('assets/back/modules/property/main.js')}}"></script>
<!--Show alert -->
@if(session('success'))
    <script>make_toaster_alert('success','{{session('success')}}')</script>
@endif
@endsection