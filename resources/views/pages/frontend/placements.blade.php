@extends('layouts.frontend.app')

@section('content')

@include('layouts.frontend.partials._breadcrumb', ['image'=>'how-pla-bc.png'])


<style type="text/css">
  .course-card-props {
    box-shadow: 1px 1px 28px -12px grey;
    border-radius: 19px;
    padding: 12px;
    margin-top: 10px;
    min-height: 320px !important;
  }

  .box-shadow {
    box-shadow: 1px 1px 28px -12px grey;
  }

  .course-card-props:hover {
    transform: scale(1.02);
    box-shadow: 1px 1px 28px -7px grey;
    transition: 0.5s;
  }

  .border-left {
    border-left: 4px solid #8A00B8;
  }
</style>


<div class="course-area section-padding bg-white">
    <div class="container">        
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="card  card-bg course-card-props">
                  <div class="card-body ">
                      <div class="row border-left">
                          <div class="col-md-12 text-center ">
                              <img src="{{ asset('images/consultant.png') }}" alt="Mentoring from Experts" style="height: 45px">
                          </div>
                          <div class="col-md-12 text-center">
                              <h3 style="padding: 15px">Mentoring from Experts </h3>
                          </div>
                      </div>

                      <div class="text-center">
                          <p> Mentors guide students to hone the skills</p>
                          <p> and guide them in shaping their career</p>
                          <p> paths and groom them on Company </p>
                          <p>specific requirements</p>
                      </div>
                      <br>
                  </div>
              </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="card  card-bg course-card-props">
                  <div class="card-body ">
                      <div class="row border-left">
                          <div class="col-md-12 text-center ">
                              <img src="{{ asset('images/question.png') }}" alt="Interview Assistance" style="height: 45px">
                          </div>
                          <div class="col-md-12 text-center">
                              <h3 style="padding: 15px">Interview Assistance</h3>
                          </div>
                      </div>

                      <div class="text-center">
                          <p> Mock Interviews at {{ config('app.name') }} help Students to</p>
                          <p> Prepare for Job Placements. Feedback and</p>
                          <p> Interview Tips are imparted to every</p>
                          <p>Student</p>
                      </div>
                      <br>
                  </div>
              </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="card  card-bg course-card-props">
                  <div class="card-body ">
                      <div class="row border-left">
                          <div class="col-md-12 text-center ">
                              <img src="{{ asset('images/leader.png') }}" alt="Career Support" style="height: 45px">
                          </div>
                          <div class="col-md-12 text-center">
                              <h3 style="padding: 15px">Career Support</h3>
                          </div>
                      </div>

                      <div class="text-center">
                          <p> For Mid-Career Professionals additional</p>
                          <p> Skill Courses are Designed to enhance</p>
                          <p> their Career and Job Prospects.</p>
                      </div>
                      <br>
                  </div>
              </div>
          </div>
        </div>
        <div class="clearfix"></div>

        <div class="row pt-10">
          <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="card  card-bg course-card-props">
                  <div class="card-body ">
                      <div class="row border-left">
                          <div class="col-md-12 text-center ">
                              <img src="{{ asset('images/hr.png') }}" alt="Selection Process" style="height: 45px">
                          </div>
                          <div class="col-md-12 text-center">
                              <h3 style="padding: 15px">Selection Process</h3>
                          </div>
                      </div>

                      <div class="text-center">
                          <p> Students undergo Rigorous Classroom</p>
                          <p> Training, Tests and Coaching to enhance</p>
                          <p> Students Employability. </p>
                      </div>
                      <br>
                  </div>
              </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="card  card-bg course-card-props">
                  <div class="card-body ">
                      <div class="row border-left">
                          <div class="col-md-12 text-center ">
                              <img src="{{ asset('images/goal.png') }}" 
                              alt="Dedicated Student Success Manager" style="height: 45px">
                          </div>
                          <div class="col-md-12 text-center">
                              <h3 style="padding: 15px">Dedicated Student Success Manager</h3>
                          </div>
                      </div>

                      <div class="text-center">
                          <p> Student Success Manager supports the</p>
                          <p> students to choose his Career Path and</p>
                          <p> helps to take advantage of {{ config('app.name') }}</p>
                          <p>Methodology from Training to Placement.</p>
                      </div>
                      <br>
                  </div>
              </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="card  card-bg course-card-props">
                  <div class="card-body ">
                      <div class="row border-left">
                          <div class="col-md-12 text-center ">
                              <img src="{{ asset('images/team.png') }}" 
                              alt="Job Placement Assistance" style="height: 45px">
                          </div>
                          <div class="col-md-12 text-center">
                              <h3 style="padding: 15px">Job Placement Assistance</h3>
                          </div>
                      </div>

                      <div class="text-center">
                          <p> Regular Career / Placement Assistance</p>
                          <p> Drives are done at {{ config('app.name') }} to</p>
                          <p> help Students Secure their</p>
                          <p> Dream Job.</p>
                      </div>
                      <br>
                  </div>
              </div>
          </div>
        </div>
        <div class="clearfix"></div>
    </div>

</div>

@endsection



