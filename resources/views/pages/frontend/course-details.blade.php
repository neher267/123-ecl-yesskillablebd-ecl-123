@extends('layouts.frontend.app')

@section('content')
@include('layouts.frontend.partials._breadcrumb', ['image'=>'other-bc.jpg'])

<div class="course-details-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="course-details-content">
                    <div class="single-course-details">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="overlay-effect">
                                    <a href="#"><img alt="" src="{{ asset($course->thumnail) }}" style="width: 100%; height: 100%"></a>
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
                                    <div class="single-item-content">
                                       <!-- <div class="single-item-comment-view">
                                           <span><i class="zmdi zmdi-eye"></i>59</span>
                                           <span><i class="zmdi zmdi-comments"></i>19</span>
                                       </div> -->
                                       <div class="pb-10"> 
                                           <i class="zmdi zmdi-star primary-color"></i>
                                           <i class="zmdi zmdi-star primary-color"></i>
                                           <i class="zmdi zmdi-star primary-color"></i>
                                           <i class="zmdi zmdi-star primary-color"></i>
                                           <!-- <i class="zmdi zmdi-star-half primary-color"></i> -->
                                       </div>
                                    </div>   
                                </div>

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
                    <!-- <div class="comments">
                        <h4 class="title">Comments</h4>
                        <div class="single-comment">
                            <div class="author-image">
                                <img src="{{ asset('frontend/img/comment/1.jpg') }}" alt="">
                            </div>
                            <div class="comment-text">
                                <div class="author-info">
                                    <h4><a href="#">MD Tokdir Ali</a></h4>
                                    <span class="reply"><a href="#">Reply</a></span>
                                    <span class="comment-time">Posted on Jun 12, 2015 /</span>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered aation in some form, by injected humour,</p>
                            </div>
                        </div>
                        <div class="single-comment comment-reply">
                            <div class="author-image">
                                <img src="{{ asset('frontend/img/comment/2.jpg') }}" alt="">
                            </div>
                            <div class="comment-text">
                                <div class="author-info">
                                    <h4><a href="#">MD Kopal Ali</a></h4>
                                    <span class="reply"><a href="#">Reply</a></span>
                                    <span class="comment-time">Posted on Jun 12, 2015 /</span>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered aation in some form, by injected humour,</p>
                            </div>
                        </div>
                        <div class="single-comment">
                            <div class="author-image">
                                <img src="{{ asset('frontend/img/comment/3.jpg') }}" alt="">
                            </div>
                            <div class="comment-text">
                                <div class="author-info">
                                    <h4><a href="#">MR Soytan Ali</a></h4>
                                    <span class="reply"><a href="#">Reply</a></span>
                                    <span class="comment-time">Posted on Jun 12, 2015 /</span>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered aation in some form, by injected humour,</p>
                            </div>
                        </div>
                    </div> -->
                </div>    
            </div>
            <div class="col-md-3">
                <div class="sidebar-widget">
                    <!-- <div class="single-sidebar-widget">
                        <div class="tution-wrapper">
                            <div class="tution-fee">
                                <h1>$100</h1>
                            </div>
                            <div class="tutor-image">
                                <img src="{{ asset('frontend/img/teacher/5.jpg') }}" alt="">
                            </div>
                            <div class="single-teacher-text">
                                <h3><a href="#">Salim Rana</a></h3>
                                <h4>Teacher</h4>
                                <p>There are mvarians of sages of Lorem Ipsum available, but the mrity  a have suffealteration in soe orm, by injected</p>
                                <div class="social-links">
                                    <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                    <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                    <a href="#"><i class="zmdi zmdi-google-old"></i></a>
                                    <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="single-sidebar-widget">
                        <h4 class="title">Search by Tags</h4>
                        <ul class="tags">
                            @foreach($categories as $category)
                            <li><a href='{{url("courses?category=$category->id")}}'>{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div> -->
                    @if(count($related))
                    <div class="single-sidebar-widget">
                        <h4 class="title">Related Courses</h4>
                        @foreach($related as $r_course)
                        <div class="single-item">
                            <div class="single-item-image overlay-effect">
                                <a href="{{ route('course-details', $r_course) }}">
                                    <img src="{{ asset($r_course->thumnail) }}" alt="">
                                </a>
                            </div>
                            <div class="single-item-text">
                                <h4><a href="{{ route('course-details', $r_course) }}">{{$r_course->name}}</a></h4>
                                <div class="single-item-text-info">
                                    <span><span>{{$r_course->hands_on ==1 ? "Hands-on Training":""}}</span></span>
                                    <br>
                                    <span>Duration: <span>{{(int)$r_course->duration}} Hr</span></span>
                                </div>                                  
                            </div>
                            <div class="button-bottom">
                                <a href="{{ route('course-details', $r_course) }}" class="button-default">Learn Now</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection