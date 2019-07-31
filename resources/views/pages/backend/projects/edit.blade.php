
@extends('layouts.backend.app')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">             
                <!-- fa-arrow-left fa-plus -->
                <a href="{{route('project-types.projects', $project_type)}}" class="btn btn-round btn-default"><i class="fa fa-arrow-left fa-icon"></i>Back</a>
                @include('layouts.backend.partials._panel-toolbox')
            </div>
            <div class="page-title">{{$page_title}}</div>

            <div class="x_content">
                <br />
                <form action="{{route('project-type.projects.update', [$project_type, $project])}}" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('PUT')}}

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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="brand_id">Company Name<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <select id="brand_id" name="brand_id" required class="form-control col-md-7 col-xs-12">
                                <option value="">Select</option>
                                @foreach($companies as $company)
                                <option 
                                    value="{{$company->id}}" 
                                    {{$project->brand_id == $company->id ? "selected":""}}
                                    >
                                    {{$company->name}}
                                </option>                             
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input type="text" id="title" name="title" required="required" class="form-control col-md-7 col-xs-12" value="{{$project->title}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="introduction">Introduction <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <textarea name="introduction" id="introduction" required="required" class="form-control col-md-7 col-xs-12" rows="20">{{$project->introduction}}</textarea>
                        </div>
                    </div>   

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="provided">Provided <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <textarea name="provided" id="provided" required="required" class="form-control col-md-7 col-xs-12" rows="20">{{$project->provided}}</textarea>
                        </div>
                    </div>    

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="challanges_overcome">Challanges & Overcome <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <textarea name="challanges_overcome" id="challanges_overcome" required="required" class="form-control col-md-7 col-xs-12" rows="20">{{$project->challanges_overcome}}</textarea>
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
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'introduction' );
    CKEDITOR.replace( 'provided' );
    CKEDITOR.replace( 'challanges_overcome' );
</script>
@endsection