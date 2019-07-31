
@extends('layouts.backend.app')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">             
                <!-- fa-arrow-left fa-plus -->
                <a href="{{route($name.'.index')}}" class="btn btn-round btn-default"><i class="fa fa-arrow-left fa-icon"></i>Back</a>
                @if(Session::has('success'))
                <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif
                @include('layouts.backend.partials._panel-toolbox')
            </div>
            <div class="page-title">{{$page_title}}</div>

            <div class="x_content">
                <br/>
                <form action="{{route($name.'.update', $result)}}" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input value="{{$result->name}}" type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <select id="status" name="status" required="required" class="form-control col-md-7 col-xs-12">
                                <option value="1" {{$result->status == 1 ? "selected":""}}>Active</option>
                                <option value="0" {{$result->status == 0 ? "selected":""}}>Disable</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order">Display Order<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input type="number" id="order" name="order" required="required" class="form-control col-md-7 col-xs-12" value="{{$result->order}}">
                        </div>
                    </div> 

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="category_id">Course Category <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <select id="category_id" name="category_id" required="required" class="form-control col-md-7 col-xs-12">
                                <option value="">Select</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}" 
                                    {{$result->category_id == $category->id ? "selected":""}}>
                                    {{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <textarea name="title" id="title" required class="form-control col-md-9 col-xs-12">{{$result->title}}</textarea>
                        </div>
                    </div> -->

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="duration">Course Duration<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input value="{{$result->duration}}" type="number" id="duration" name="duration" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div> 

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fee">Course Fee<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input value="{{$result->fee}}" type="number" id="fee" name="fee" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>   

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hands_on">Hands On Training <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <select id="hands_on" name="hands_on" required="required" class="form-control col-md-7 col-xs-12">
                                <option value="">Select</option>
                                <option value="1" {{$result->hands_on == 1 ? "selected":""}}>Yes</option>
                                <option value="0" {{$result->hands_on == 0 ? "selected":""}}>No</option>                                                               
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="summary">Course Summary<span class="required">*</span>
                        </label>
                        
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <textarea name="summary" id="summary" required class="form-control col-md-9 col-xs-12">{{$result->summary}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="about">About Course <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <textarea name="about" id="about">{{$result->about}}</textarea>
                        </div>
                    </div>

                    <!-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="learning">WHAT WILL YOU LEARN?<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <textarea name="learning" id="learning">{{$result->learning}}</textarea>
                        </div>
                    </div>                    

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="job_opp">JOB OPPORTUNITIES<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <textarea name="job_opp" id="job_opp">{{$result->job_opp}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="enroll">WHO CAN ENROLL?<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <textarea name="enroll" id="enroll">{{$result->enroll}}</textarea>
                        </div>
                    </div>        -->             

                    

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="thumnail">Thumnail Image<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <img src="{{asset($result->thumnail)}}" style="margin: 15px 0px; height: 200px;">
                            <input type="file" id="thumnail" name="thumnail" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <!-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="background">Background Image<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <img src="{{asset($result->background)}}" style="margin: 15px 0px; height: 200px;">
                            <input type="file" id="background" name="background"  class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="referance">Referance book Image<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <img src="{{asset($result->referance)}}" style="margin: 15px 0px; height: 200px;">
                            <input type="file" id="referance" name="referance" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div> -->
                    
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    CKEDITOR.replace('about');
    // CKEDITOR.replace('learning');
    // CKEDITOR.replace('enroll');
    // CKEDITOR.replace('job_opp');
</script>

@endsection