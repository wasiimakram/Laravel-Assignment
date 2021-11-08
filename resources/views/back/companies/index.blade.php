@extends('back.layouts.app',['title' => $title])

@section('page_content')
<section class="content-header">
    <h1>
        {{__('Companies Listing')}}
        
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{__('Home')}}</a></li>
        <li class="active">{{__('Companies Listing')}}</li>
    </ol>
</section>

<section class="content">
    <!--Alerts Code--->
    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-ban"></i> {{__('Error!')}}</h4>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif 


    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">{{__('Companies Listing')}}</h3>

            <div class="box-tools pull-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Add New Company</button>
            </div>
        </div>
        <!-- /.box-header -->

        <div class="box-body">
            <table id="record-table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>{{__('ID')}}</th>
                        <th>{{__('Logo')}}</th>
                        <th>{{__('Name')}}</th>
                        <th>{{__('Email')}}</th>
                        <th>{{__('Website')}}</th>
                        <th width="15%">{{__('Action')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!$data->isEmpty())
                    @foreach($data as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>
                            @if($value->logo)
                                <img src="{{asset(Storage::url('companies/'.$value->logo))}}" width="100px" height="50px">
                            @else
                                <img src="{{asset('assets/back/images/no_image.jpg')}}" width="100px" height="50px">
                            @endif
                        </td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->email}}</td>
                        <td><a href="{{$value->website}}">{{$value->website}}</a></td>
                        <td>
                            <a href="javascript:;" id="edit_record" data-id="{{$value->id}}" class="cBtns btn btn-primary btn-sm"
                            data-toggle="tooltip" data-original-title="Edit">
                            
                                <i class="fa fa-edit"></i></a>

                            <a href="javascript:;" data-id="{{$value->id}}" id="delete_record" class="cBtns btn btn-danger btn-sm"
                            data-toggle="tooltip" data-original-title="Delete">
                                <i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    @else
                        <tr style="text-align:center">
                            <td colspan="10">No Record Found!</td>
                        </tr>
                    @endif
                </tbody>
                <tfoot>
                </tfoot>
            </table>
            {{$data->links()}}
        </div>
        <!-- /.box-body -->

        <!-- <div class="box-footer">
            Footer
          </div>
          /.box-footer -->
    </div>

</section>

@include('back.companies.modal')


@endsection

@section('page_scripts')
<link rel="stylesheet" href="{{asset('assets/back/plugins/jQueryFiller/css/jquery.filer.css')}}">
<link rel="stylesheet" href="{{asset('assets/back/plugins/jQueryFiller/css/themes/jquery.filer-dragdropbox-theme.css')}}">
<script src="{{asset('assets/back/plugins/jQueryFiller/js/jquery.filer.js')}}"></script>
<script src="{{ asset('assets/back/plugins/jQueryFiller/js/file_upload_script.js')}}"></script>
<!-- Page JS File-->
<script src="{{asset('assets/back/modules/companies/main.js')}}"></script>

@endsection
