
@extends('layouts.backend.app')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">             
                <!-- fa-arrow-left fa-plus -->
                <a href="{{route('products.index')}}" class="btn btn-round btn-default"><i class="fa fa-arrow-left fa-icon"></i>Back</a>
              @include('layouts.backend.partials._panel-toolbox')
            </div>
            <div class="page-title">{{$page_title}}</div>

            <div class="x_content">
                <br />
                <form action="{{route('products.update', $result)}}" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{ method_field("PUT") }}

                    <div class="form-group">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12" value="{{$result->name}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="brand">Brand<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input type="text" id="brand" name="brand" required="required" class="form-control col-md-7 col-xs-12"  value="{{$result->brand}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="model_no">Model No<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input type="text" id="model_no" name="model_no" required="required" class="form-control col-md-7 col-xs-12"  value="{{$result->model_no}}">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Price
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input type="number" id="price" name="price" class="form-control col-md-7 col-xs-12" value="{{$result->price}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <textarea name="description" id="description" required="required" class="form-control col-md-7 col-xs-12" rows="20">{{$result->description}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="technical_features">TECHNICAL FEATURES
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <textarea name="technical_features" id="technical_features">{{$result->technical_features}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="general_features">GENERAL FEATURES
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <textarea name="general_features" id="general_features">{{$result->general_features}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="safety_and_veri">SAFETY AND VERIFICATION
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <textarea name="safety_and_veri" id="safety_and_veri">{{$result->safety_and_veri}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <select  id="status" name="status" class="form-control col-md-7 col-xs-12">
                                <option value="">Select</option>
                                <option value="1" {{$result->status == 1 ? "selected":""}}>Active</option>
                                <option value="0" {{$result->status == 0 ? "selected":""}}>Deactive</option>
                            </select>
                        </div>
                    </div>

                    

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Image<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <img src="{{asset($result->image)}}" style="margin: 15px 0px; height: 200px;">
                            <input type="file" id="image" name="image" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success" onclick="return confirm_user('update')">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    CKEDITOR.replace( 'description' );
    CKEDITOR.replace( 'technical_features' );
    CKEDITOR.replace( 'general_features' );
    CKEDITOR.replace( 'safety_and_veri' );
</script>
@endsection