@extends('layouts.frontend.app')

@section('content')
@include('layouts.frontend.partials._breadcrumb', ['image'=> $course])
<style type="text/css">
    .single-course-details a {
        display: inline-block;
    }
</style>
<div class="course-details-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="course-details-content">
                    <div class="single-course-details">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="overlay-effect">
                                    <img alt="" src="{{ asset($course->thumnail) }}" style="width: 100%; height: 100%">
                                </div>
                            </div>  
                            <div class="col-md-6">
                                <div class="single-item-text">
                                    <h4>{{$course->name}}</h4>
                                    <div class="single-item-text-info">
                                        <span><span>{{$course->hands_on ==1 ? "Hands-on Training":""}}</span></span>
                                        <span>Duration: <span>{{(int)$course->duration}} Hr</span></span>
                                    </div>
                                    <div class="course-text-content">
                                        <p><?php echo html_entity_decode($course->about) ?></p>
                                    </div> 
                                </div>                                
                            </div> 

                            <div class="col-md-12">
                                <div class="single-item-text" style="padding: 15px">
                                    <p><?php echo html_entity_decode($course->learning) ?></p>
                                </div>                                
                            </div>

                            <div class="col-md-12">
                                <div class="button-bottom">
                                    <a href="{{ route('course-registration', $course) }}" class="button-default">Register This Course</a>
                                </div>
                            </div>
                        </div>     
                    </div>
                    <div class="course-duration">
                        <div class="duration-title">
                            <div class="text"><span>Lessons</span> <span class="text-right">Estimated Time</span></div>
                        </div>
                        <div class="duration-text">
                            <div class="text"><span>Total Duration</span> <span class="text-right">{{(int)$course->duration}} Hr</span></div>
                            <div class="text"><span>Project Base Works</span> <span class="text-right">10 Hr</span></div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Mainly BIM use 5 types of software which is helps to minimize time for make a digital modeling. 

1. Revit Architecture
2. Revit Structure 
3. Revit MEP
4. Navis Works
5. Project Management -->