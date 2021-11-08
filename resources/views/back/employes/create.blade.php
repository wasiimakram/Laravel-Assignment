@extends('back.layouts.app',['title' => $title])

@section('page_content')
<section class="content-header">
    <h1>
        {{__('Add New Employe')}}
        
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{__('Home')}}</a></li>
        <li><a href="{{route('employes.index')}}"> {{__('Employes Listing')}}</a></li>
        <li class="active">{{__('Add New Employe')}}</li>
    </ol>
</section>

<section class="content">
    <form id="dataFrom" enctype="multipart/form-data" action="{{route('employes.store')}}" method="POST">
    @csrf
    <!--- Notification Code----->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i> {{__('Alert!')}}</h4>
        {{session('success')}}
    </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-ban"></i> Error!</h4> <span>Form has some errors. Please check your Form.</span>
        </div>
    @endif 
    
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{__('Add New Employe')}}</h3>
        </div>
        <!-- /.box-header -->

        <div class="box-body">
            
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="">{{__('First Name')}}</label>
                    <input required value="{{old('first_name')}}" type="text"  class="mainString form-control" name='first_name' id='first_name' 
                    placeholder="First Name">
                    @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-12">
                    <label for="">{{__('Last Name')}}</label>
                    <input required value="{{old('last_name')}}" type="text"  class="mainString form-control" name='last_name' id='last_name' 
                    placeholder="Last Name">
                    @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-12">
                    <label for="">{{__(' Email')}}</label>
                    <input required value="{{old('email')}}" type="text"  class="form-control" name='email' 
                    placeholder="Employe Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-12">
                    <label for="">{{__(' Phone')}}</label>
                    <input required value="{{old('phone')}}" type="text"  class="form-control" name='phone' 
                    placeholder="Employe Phone">
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-12">
                    <label for="">{{__(' Company')}}</label>
                    <select class="form-control" id="company_id" name="company_id">
                        <option value="">-- Select Company --</option>
                        @foreach($companies as $key=>$value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                    @error('company_id')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div> 
            <!-- / End Row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
            <div class="text-right">
                <input type="hidden" name="slug" class="slugString" value="{{old('slug')}}">
                <button type="submit" class="btn btn-success text-right"><i class="fa fa-floppy-o"></i>  
                {{__('Save Record')}}</button>
            </div>
        </div>
        <!-- /.box-footer -->
    </div>
    
</form>
</section>

@endsection

@push('page_scripts')
<!--- Form Validation Scripts ---->
<script src="{{ asset('assets/back/plugins/formValidation/jquery.validate.js')}}"></script>
<script src="{{ asset('assets/back/plugins/formValidation/script.js')}}"></script>
<!-- Page JS File-->
<script src="{{asset('assets/back/modules/employes/main.js')}}"></script>

@endpush
