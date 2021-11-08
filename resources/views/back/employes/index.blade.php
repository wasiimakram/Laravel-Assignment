@extends('back.layouts.app',['title' => $title])

@section('page_content')
<section class="content-header">
    <h1>
        {{__('All Employes List')}}
        
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{__('Home')}}</a></li>
        <li class="active">{{__('All Employes List')}}</li>
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
            <h3 class="box-title">{{__('All Employes List')}}</h3>

            <div class="box-tools pull-right">
               <div class="text-right topBtnDiv">
                    <a href="{{route('employes.create')}}"class="btn btn-success">
                        <i class="fa fa-plus"></i> Add New Employe</a>
                </div>
            </div>
        </div>
        <!-- /.box-header -->

        <div class="box-body">
            <table id="record-table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>{{__('Employe ID')}}</th>
                        <th>{{__('Employe Name')}}</th>
                        <th>{{__('Employe Email')}}</th>
                        <th>{{__('Employe Phone')}}</th>
                        <th>{{__('Company')}}</th>
                        <th width="15%">{{__('Action')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!$data->isEmpty())
                    @foreach($data as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->first_name.' '.$value->last_name}}</td>
                        <td><a href="mailto:{{$value->email}}">{{$value->email}}</a></td>
                        <td>{{$value->phone}}</td>
                        <td>{{$value->company ? $value->company->name : ''}}</td>
                        <td>
                            <a href="{{route('employes.edit',$value->id)}}" class="cBtns btn btn-primary btn-sm"
                            data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-edit"></i></a>

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
            
            <div class="text-right">
                {{$data->links()}}
            </div>
        </div>
        <!-- /.box-body -->
    </div>
</section>
@endsection
@push('page_scripts')
<!-- Page JS File-->
<script src="{{asset('assets/back/modules/employes/main.js')}}"></script>
@endpush
