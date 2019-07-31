@extends('layouts.frontend.app')

@section('content')
@include('layouts.frontend.partials._breadcrumb', ['image'=>'other-bc.jpg'])
<!--Search Category Start-->
<div class="search-category">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <form action="{{url('courses')}}" method="GET">
                    {{ csrf_field() }}
                    <div class="form-container">
                        <div class="box-select">
                            <div class="select large">
                                <select name="category">
                                    <option value="">All Categories</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="select small">
                                <select name="fee">
                                    <option value="">Price</option>
                                    <option value="10000-20000">10000-20000 BDT</option>
                                    <option value="20000-30000">20000-30000 BDT</option>
                                    <option value="30000-40000">30000-40000 BDT</option>
                                </select>
                            </div>
                            <div class="select medium">
                                <select name="duration">
                                    <option value="">Course Duration</option>
                                    <option value="10-15">10-15 Hrs</option>
                                    <option value="16-20">16-20 Hrs</option>
                                    <option value="21-25">21-25 Hrs</option>
                                    <option value="26-30">26-30 Hrs</option>
                                    <option value="31-40">31-40 Hrs</option>
                                    <option value="41-100">41-100 Hrs</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit">Search Course</button>
                    </div>
                </form>  
            </div>
        </div>
    </div>
</div>
<!--End of Search Category-->
<!--Course Area Start-->
<div class="course-area section-padding course-page">
    <div class="container">
        @foreach($courses->chunk(4) as $courses_chunk)
        <div class="row">
            <?php $i=0 ?>
            @foreach($courses_chunk as $course)
            <?php $i++; if($i>4) $i==0 ?>
            <div class="col-md-3 col-sm-12" style="margin-bottom: 20px">
                <div class="course-card">
                  <a href="{{ route('course-details', $course) }}" style="color:#000;">
                      <div class="color-gra{{$i}}">
                          <center style="padding: 13px;">
                              <img src="{{asset('images/logo.png')}}" alt="seo training in bangalore" style="height: 40px; border-radius: 50%;">
                          </center>
                      </div>
                      <h4 class="single-item-text text-center" style="padding-top: 20px; min-height: 58px;">{{$course->name}}</h4>
                  </a>
                  <div>
                      <a href="{{ route('course-details', $course) }}" style="color:#000;">
                          <p class="text-center p-10" style="min-height: 125px;">{{$course->summary}}</p>

                          <div style="margin-bottom:15px;">
                              <center>
                                <i class="zmdi zmdi-star primary-color"></i>
                                <i class="zmdi zmdi-star primary-color"></i>
                                <i class="zmdi zmdi-star primary-color"></i>
                                <i class="zmdi zmdi-star primary-color"></i>
                                <!-- <i class="zmdi zmdi-star-half primary-color"></i> -->
                              </center>
                          </div>
                      </a>
                      <center>
                          <a href="#registration-form" style="color:#000;" class="course-card-button">Registration</a>
                          <a href="{{ route('course-details', $course) }}" style="color:#000;" class="course-card-button">Details</a>
                      </center>
                  </div>
              </div>
            </div>
            @endforeach  
            <div class="clearfix"></div>        
        </div>
        @endforeach 
        <div class="row">
            <div class="col-md-12">
                <div class="pagination-content">
                    {{ $courses->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Course Area-->
<!--Teachers Area Start-->
<!-- <div class="teachers-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3>OUR TEACHERS</h3>
                        <p>There are many variations of passages of Lorem Ipsum</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-teacher-item">
                    <div class="single-teacher-image">
                        <a href="#"><img src="{{ asset('frontend/img/teacher/l-1.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-teacher-text">
                        <h3><a href="#">Louis Smith</a></h3>
                        <h4>Teacher</h4>
                        <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr</p>
                        <div class="social-links">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-google-old"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-teacher-item">
                    <div class="single-teacher-image">
                        <a href="#"><img src="{{ asset('frontend/img/teacher/l-2.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-teacher-text">
                        <h3><a href="#">Louis Smith</a></h3>
                        <h4>Teacher</h4>
                        <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr</p>
                        <div class="social-links">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-google-old"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 hidden-sm">
                <div class="single-teacher-item">
                    <div class="single-teacher-image">
                        <a href="#"><img src="{{ asset('frontend/img/teacher/l-3.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-teacher-text">
                        <h3><a href="#">Louis Smith</a></h3>
                        <h4>Teacher</h4>
                        <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr</p>
                        <div class="social-links">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-google-old"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 hidden-md hidden-sm">
                <div class="single-teacher-item">
                    <div class="single-teacher-image">
                        <a href="#"><img src="{{ asset('frontend/img/teacher/l-4.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-teacher-text">
                        <h3><a href="#">Louis Smith</a></h3>
                        <h4>Teacher</h4>
                        <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr</p>
                        <div class="social-links">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-google-old"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!--End of Teachers Area-->

@include('layouts.frontend.partials._registration')

@endsection