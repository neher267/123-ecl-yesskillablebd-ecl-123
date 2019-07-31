@extends('layouts.frontend.app')

@section('content')
@include('layouts.frontend.partials._breadcrumb', ['image'=>'about-bc.jpg'])
<!--About Page Area Start-->
<div class="about-page-area section-padding">
    <div class="container">
        
        <div class="row">
            <div class="col-md-6">
                <div class="about-text-container" style="text-align: justify;">
                    <p><span>Welcome to {{ config('app.name') }}.</span> It is a very timely initiative of <span>ECL System Ltd.</span> which has been functioning since 2017 to develop professional Human Resources in different fields of education and training. <span>{{ config('app.name') }}</span> has completely changed the traditional concept of technical & professional skill development training institutes in Bangladesh. Today we are very well known institute for IT infrastructure and professional and leadership development training programs. Skill & Able is also very popular name in Corporate Training Industry which has earned international acknowledgement in a very short time. We provided corporate training to the human resources of government & private companies in Bangladesh.</p>

                    <p><span>{{ config('app.name') }}</span> is ensuring knowledge, skill and attitude through Competency Based Training (CBT). The aim is to ensure that no student will say “I know but I cannot perform” rather they will say, “I know and I can perform!” Since its inception, Skill & Able is contributing in society through developing trained Graduates, Diploma Engineers, Corporate Professionals and Skilled Human Resources. Recently Skill & Able has started to work for creating Entrepreneur. Today, we have become the first highly selective education and training institute in Bangladesh for its restless effort. <span>{{ config('app.name') }}</span> instills an intention of learning among its students and empowers them for a lifetime leadership. The objective of the institute is to serve the country by developing the graduates in professional and vocational spectrum; creating visionaries, inventors, entrepreneurs and most importantly the leaders to become a valuable resource for society.</p>

                    <p>
                        To function as an effective bridge between the students on the one end by means of training those on cutting edge technologies and on the other end provide a zero cost fresher hiring solution to the companies. To Make Client's requirement process easy by taking up all the ownership of bringing thousands of our trained and skilled candidates into client's premises based on their specific business needs.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="skill-image">
                    <img src="{{ asset('frontend/img/banner/6.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of About Page Area-->
<!--Skill And Experience Area Start-->
<div class="skill-and-experience-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3 class="pb-8">Skills and Experience</h3>
                        <!-- <p>There are many variations of passages</p> -->
                    </div>
                </div> 
            </div>       
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="experience-skill-wrapper">
                    <div class="skill-bar-item">
                        <span>Programming</span>
                        <div class="progress">
                            <div class="progress-bar wow fadeInLeft" data-progress="80%" style="width: 80%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                <span class="text-top">80%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-bar-item">
                        <span>Designing</span>
                        <div class="progress">
                            <div class="progress-bar wow fadeInLeft" data-progress="75%" style="width: 75%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                <span class="text-top">75%</span>
                            </div>
                        </div>
                    </div>                  
                </div>    
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="experience-skill-wrapper">
                    <div class="skill-bar-item">
                        <span>Creative Writing</span>
                        <div class="progress">
                            <div class="progress-bar wow fadeInLeft" data-progress="90%" style="width: 90%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                <span class="text-top">90%</span>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>
<!--End of Skill And Experience Area-->

<!-- Partners -->
<div class="teachers-area padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3 class="pb-8">OUR PARTNERS</h3>    
                        <!-- <p>There are many variations of passages of Lorem Ipsum</p> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-3 col-md-offset-3 col-lg-2 col-md-4 col-sm-6">
                <div class="single-teacher-item">
                    <div class="single-teacher-image">
                        <a href="https://www.caddcentre.com/"><img src="{{ asset('frontend/img/partners/1.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-teacher-text" style="padding: 15px 5px">
                        <!-- <h3><a href="#">Cadd Centre</a></h3> -->
                        <p>The pursuit of quality and excellence has always been the hallmark of CADD Centre which now has gone past 30 years and counting…</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="single-teacher-item">
                    <div class="single-teacher-image">
                        <a href="https://www.livewireindia.com/"><img src="{{ asset('frontend/img/partners/2.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-teacher-text" style="padding: 15px 5px">
                        <!-- <h3><a href="#">Livewire</a></h3> -->
                        <p>To provide on-demand training that empowers engineers</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 hidden-sm">
                <div class="single-teacher-item">
                    <div class="single-teacher-image">
                        <a href="https://www.synergysbs.com/"><img src="{{ asset('frontend/img/partners/3.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-teacher-text" style="padding: 15px 5px">
                        <!-- <h3><a href="#">Synergy</a></h3> -->
                        <p>Synergy School of Business Skills is India’s largest network of management training institute</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End partners -->

<!--Teachers Area Start-->
<!-- <div class="teachers-area padding-top">
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
@endsection