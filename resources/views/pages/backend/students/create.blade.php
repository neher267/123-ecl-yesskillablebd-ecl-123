@extends('layouts.backend.app')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">             
                <!-- fa-arrow-left fa-plus -->
                <a href="{{route($name.'.index')}}" class="btn btn-round btn-default"><i class="fa fa-arrow-left fa-icon"></i>Back</a>
              @include('layouts.backend.partials._panel-toolbox')
            </div>
            <div class="page-title">{{$page_title}}</div>

            <div class="x_content">
                <br />
                <form action="{{route($name.'.store')}}" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">
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
                            <input type="text" id="name" name="name" required class="form-control col-md-7 col-xs-12" value="{{$student_info->name}}">
                            <input type="hidden" name="student_info_id" value="{{$student_info->id}}">
                        </div>
                    </div>                    

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Gender<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <label class="radio-inline">
                              <input type="radio" name="gender" value="m" required>Male
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="gender" value="f" required>Female
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="gender" value="o" required>Other
                            </label>
                        </div>
                    </div>    

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">User Name<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input type="text" id="email" name="email" required class="form-control col-md-7 col-xs-12" value="{{$student_info->email != '' ? $student_info->email:$student_info->mobile}}">
                        </div>
                    </div>                  

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Password<span class="required">*</span></label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input type="password" id="password" name="password" class="form-control col-md-7 col-xs-12" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password_confirmation">Confirm Password<span class="required">*</span></label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control col-md-7 col-xs-12" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Address<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <textarea name="address" class="form-control required">{{$student_info->address}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Profile Picture</label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input type="file" id="image" name="image" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    CKEDITOR.replace( 'qualifications' );
</script>

@endsection