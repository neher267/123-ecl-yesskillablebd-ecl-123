@extends('layouts.frontend.app')

@section('content')
@include('layouts.frontend.partials._breadcrumb', ['image'=>'other-bc.jpg'])
<!--About Page Area Start-->
<div class="about-page-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3 class="pb-8">Course Registration Form</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <form action="{{url('course-registration')}}" method="post">
                    @csrf
                    @if ($errors->any())
                    <div class="form-group">                        
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>                        
                    </div>
                    @endif
                    <div class="form-group">   
                        <div style="padding-bottom:5px;">
                            <select class="form-control" name="course_id" required>
                                <option value="">Select a course</option>
                                @foreach($courses as $course)
                                <option value="{{$course->id}}" <?php echo $selected_course->id == $course->id ? 'selected':'' ?>>
                                    {{$course->name}}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <input value="{{ old('name') }}" class="form-control" name="name" type="text" 
                            placeholder="Your Name" required />
                        </div>

                        <div class="form-group">
                            <input value="{{ old('mobile') }}" name="mobile" type="text" placeholder="Your Phone" 
                            class="form-control" required/>
                        </div>

                        <div class="form-group">
                            <input value="{{ old('email') }}" name="email" type="text" 
                            placeholder="If Your have a mail ID" class="form-control" />
                        </div>    

                        <div class="form-group">
                            <input value="{{ old('location') }}" name="location" type="text" 
                            placeholder="Location" class="form-control" />
                        </div>                         

                        <div class="form-group">
                            <input value="{{ old('current_institute') }}" class="form-control" name="current_institute" 
                                type="text" 
                                placeholder="Current Institute: Ex-BUET"/>
                        </div>  

                        
                        <div class="form-group">
                            <textarea 
                                name="qualifications" 
                                class="form-control" 
                                placeholder="Your Qualifications. Ex- B.Sc in CSE"
                                rows="4"                                 
                                required>{{ old('qualifications') }}</textarea>
                        </div>

                        <div class="col-md-12 col-sm-12 text-center">
                            <input type="submit" value="Register" class="btn btn-warning" style="padding: 10px 80px" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection