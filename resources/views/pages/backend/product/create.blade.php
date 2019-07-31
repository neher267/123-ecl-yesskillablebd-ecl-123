
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
                <form action="{{route('products.store')}}" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">
                    {{csrf_field()}}

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
                            <input value="{{ old('name') }}"  type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                   
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="brand_id">Brand <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <select id="brand_id" name="brand_id" required="required" class="form-control col-md-7 col-xs-12">
                                <option value="">Select</option>
                                @foreach($brands as $brand)
                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order">Display Order<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input value="{{ old('order') }}"  type="text" id="order" name="order" required="required" class="form-control col-md-7 col-xs-12" placeholder="Ex: 50. range=0-10000">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="model_no">Model No<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input value="{{ old('model_no') }}"  type="text" id="model_no" name="model_no" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Price
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input value="{{ old('price') }}"  type="number" id="price" name="price" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <textarea name="description" id="description">{{ old('description') }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="general_features">GENERAL FEATURES<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <textarea name="general_features" id="general_features">{{ old('general_features') }}</textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="technical_features">TECHNICAL FEATURES 
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <textarea name="technical_features" id="technical_features">{{ old('technical_features') }}</textarea>
                        </div>
                    </div>

                    

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="safety_and_veri">SAFETY AND VERIFICATION
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <textarea name="safety_and_veri" id="safety_and_veri">{{ old('safety_and_veri') }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Image<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input type="file" id="image" name="image" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>                    

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image2">Image2</label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input type="file" id="image2" name="image2" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image3">Image3</label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input type="file" id="image3" name="image3" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>                    

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image4">Image4</label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input type="file" id="image4" name="image4" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'description' );
    CKEDITOR.replace( 'technical_features' );
    CKEDITOR.replace( 'general_features' );
    CKEDITOR.replace( 'safety_and_veri' );
</script>

@endsection