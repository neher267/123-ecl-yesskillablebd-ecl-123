@extends('layouts.backend.app')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">             
                <!-- fa-arrow-left fa-plus -->
                <a href="{{url('dashboard/students/'.$result->pivot->student_id.'/courses')}}" class="btn btn-round btn-default"><i class="fa fa-arrow-left fa-icon"></i>Back</a>
              @include('layouts.backend.partials._panel-toolbox')
            </div>
            <div class="page-title">{{$page_title}}</div>

            <div class="x_content">
                <br />
                <form action="{{route('update.course.fee')}}" method="post" class="form-horizontal form-label-left">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Course Fee<span class="required"></span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input type="number" id="course_fee" name="course_fee" required class="form-control col-md-7 col-xs-12" value="{{$result->pivot->course_fee > 0 ? $result->pivot->course_fee:$result->fee}}" readonly>                            
                    </div> 

                    <div class="form-group">
                        <input type="hidden" name="student_id" value="{{$result->pivot->student_id}}">
                        <input type="hidden" name="course_id" value="{{$result->pivot->course_id}}">
                    </div>    

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Discount %<span class="required"></span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input type="number" id="after_discount" name="after_discount" required class="form-control col-md-7 col-xs-12">
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

@endsection