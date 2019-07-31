
<div class="course-area section-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3 class="pb-8">POPULAR COURSES</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $i=0 ?>
            @foreach($popular_courses as $course)
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
        </div>

        <div class="col-md-12 col-sm-12 text-center">
            <a href="{{ url('courses') }}" class="button-default button-large">Browse All Courses <i class="zmdi zmdi-chevron-right"></i></a>
        </div>
    </div>

</div>

@include('layouts.frontend.partials._registration')