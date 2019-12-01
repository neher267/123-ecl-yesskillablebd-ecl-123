@extends('layouts.frontend.app')

@section('content')
@include('layouts.frontend.partials._breadcrumb_for_special_course', ['image'=> $course])
<style type="text/css">
    .single-course-details a {
        display: inline-block;
    }   
    .single-course-details {
        background: #fff none repeat scroll 0 0;
        border-bottom: none;
        margin-bottom: 0;
        padding: 0; 
    }

    .course-text-content > ul {
        list-style: disc;
        padding-left: 15px;
    }

    .course-pills {
        margin: 30px 0;
        background-color: #f5f5f5;
        padding-bottom: 30px;
    }

    .course-pills > ul {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .course-pills > ul > li a{
        padding: 4px 40px;
        background-color: #e67e22;
        color: white;
    }

    .course-pills > ul > li{
        padding-bottom: 20px;
    }

    .img-special {
        width: 90%;
    }

    @media (max-width: 767px) {
        .course-pills > ul {
            margin-right: 0;
            display: table;
            align-items: center;
            justify-content: center;
        }   
        .course-pills > ul > li{
            padding-bottom: 10px;
        } 

        .course-pills > ul > li a {
            padding: 4px 0;
            width: 160px;
            text-align: center;
        }

        .img-special {
            width: 100%;
            margin: 8px 0;
        }

        .res{
            margin-bottom: 15px;
        }

        .breadcrumb-banner-area {
            background-position: center;
            height: auto;
        }
    }

    .form-style {
        background-color: #2d3e50;
        color: #fff;
    }      

    .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
        background-color: #39c0dd;
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
                                <div class="single-item-text">
                                    <h2>Learn BIM (Building Information Modeling)</h2>
                                    <h5 style="padding: 10px 0 0px;font-size: 18px;">
                                        From the best trainers of CAAD center
                                    </h5>                                    
                                    <div class="course-text-content">
                                        <p><?php echo html_entity_decode($course->about) ?></p>
                                    </div> 
                                </div>                                
                            </div> 

                            <div class="col-md-6">
                                <div class="overlay-effect">
                                    <img class="img-special" src="{{ asset($course->thumnail) }}">
                                </div>
                            </div> 

                            <div class="col-md-12">
                                <a href="#admission" class="button-default">Apply For Admission</a>
                            </div>
                        </div>                          
                    </div>
                </div>    
            </div>
        </div>

        <div class="row">            
            <div class="col-md-12 course-pills">
            <h2 class="text-center" style="padding: 50px 0 25px">Training Details</h2>

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                @foreach($courses as $key => $tab)
                <li class="nav-item  {{ $key == 0 ? 'active':'' }}">
                    <a class="nav-link {{ $key == 0 ? 'active':'' }}" id="pills-tab-{{ $key}}" data-toggle="pill" href="#pills-{{ $key}}" role="tab" aria-controls="pills-home" aria-selected="{{ $key == 0 ? 'true':'false' }}">{{ $tab->name }}</a>
                </li>
                @endforeach
                <!-- <li class="nav-item active">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-home" aria-selected="true">Revit Architecture</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-profile" aria-selected="false">Revit MEP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-contact" aria-selected="false">Revit Structure</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-4" role="tab" aria-controls="pills-contact" aria-selected="false">NavisWorks</a>
                </li> -->
            </ul>
            <div class="tab-content pt-2 pl-1" id="pills-tabContent">
                <!-- <div class="tab-pane fade active show in" id="pills-1" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="overlay-effect">
                                <img class="img-special" src="{{ asset($course->thumnail) }}">
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <div class="single-item-text">
                                <h4>{{$course->name}}</h4>
                                <div class="single-item-text-info">
                                    <span><span>{{$course->hands_on ==1 ? "Hands-on Training":""}}</span></span>
                                    <span>Duration: <span>{{(int)$course->duration}} Hr</span></span>
                                </div>
                                <div class="course-text-content">
                                    <p>
                                        <?php echo html_entity_decode($course->about) ?>
                                    </p>
                                </div>
                            </div>
                            <a href="#admission" class="button-default" style="display: table;">Apply For Admission</a>
                        </div>
                    </div>
                </div> -->

                @foreach($courses as $key => $tab)
                <!-- <option value="{{ $course->name }}">{{ $course->name }}</option>
                <li class="nav-item  {{ $key == 0 ? 'active':'' }}">
                    <a class="nav-link {{ $key == 0 ? 'active':'' }}" id="pills-tab-{{ $key}}" data-toggle="pill" href="#pills-{{ $key}}" role="tab" aria-controls="pills-home" aria-selected="{{ $key == 0 ? 'true':'false' }}">{{ $tab->name }}</a>
                </li> -->

                <div class="tab-pane fade {{ $key == 0 ? 'active show in':'' }}" id="pills-{{ $key}}" role="tabpanel" aria-labelledby="pills-tab-{{ $key}}">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="overlay-effect">
                                <img class="img-special" src="{{ asset($tab->thumnail) }}">
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <div class="single-item-text">
                                <h4>{{$tab->name}}</h4>
                                <div class="single-item-text-info">
                                    <span><span>{{$tab->hands_on ==1 ? "Hands-on Training":""}}</span></span>
                                    <span>Duration: <span>{{(int)$tab->duration}} Hr</span></span>
                                </div>
                                <div class="course-text-content">
                                    <p>
                                        <?php echo html_entity_decode($tab->about) ?>
                                    </p>
                                </div>
                            </div>
                            <a href="#admission" class="button-default" style="display: table;">Apply For Admission</a>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-profile-tab">Ad pariatur nostrud pariatur exercitation ipsum ipsum culpa mollit commodo mollit ex. Aute sunt incididunt deserunt. Anim id labore elit adipisicing ut in id occaecat pariatur ut ullamco ea tempor duis.</div>
                <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-contact-tab">Est quis nulla laborum officia ad nisi ex nostrud culpa Lorem excepteur aliquip dolor aliqua irure ex.oluptate. Mollit nulla nostrud adipisicing aliqua cupidatat aliqua pariatur mollit voluptate voluptate consequat non.</div>
                <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-contact-tab">Est quis nulla laborum officia ad nisi ex nostrud culpa Lorem excepteur aliquip dolor aliqua irure ex.oluptate. Mollit nulla nostrud adipisicing aliqua cupidatat aliqua pariatur mollit voluptate voluptate consequat non.</div> -->
            </div>
            </div>
        </div>

        <div class="row">                            
            <div class="col-md-offset-3 col-md-6 col-xs-offset-1 col-xs-10">
                <div class="col-md-12 text-center" style="padding-bottom: 15px;">
                    <h2 style="padding: 10px 0; line-height: 1.3">Apply For BIM<br/>Training Admission</h2>
                    <p>Our admission department will contact with you<br/>about the admission process.</p>
                </div>
                <form id="admission" action="{{url('inquries')}}" method="post" onsubmit="disableButton()">
                    @csrf @if ($errors->any())
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
                        <label for="course_ids">
                            <h5 style="font-size: 15px;">Select Your Course(s)</h5>
                        </label>
                        <input value="{{ $course->id }}" name="course_id" type="hidden"/>                        
                        <select id="course_ids" multiple class="form-control form-style" name="course_ids[]" required>
                            @foreach($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->name }}</option>
                            @endforeach
                        </select>                        
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                              <input value="{{ old('name') }}" class="form-control form-style res" name="name" type="text" placeholder="Your Name" required/>
                            </div>
                            <div class="col-md-6 col-xs-12">
                              <input value="{{ old('mobile') }}" name="mobile" type="text" placeholder="Your Phone" class="form-control form-style" required/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                              <input value="{{ old('email') }}" name="email" type="text" placeholder="If Your have a mail ID" class="form-control form-style res"/>
                            </div>
                            <div class="col-md-6 col-xs-12">
                              <input value="{{ old('current_institute') }}" class="form-control form-style" name="current_institute" type="text" placeholder="Current Institute"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea name="qualifications" class="form-control form-style" placeholder="Your Qualifications" rows="4">{{ old('qualifications') }}</textarea>
                    </div>

                    <div class="col-md-12 col-sm-12 text-center">
                        <input type="submit" value="Submit" class="button-default"/>
                    </div>
                    <script type="text/javascript">
                        function disableButton() {
                            document.getElementById("submit").disabled = true;
                        }
                    </script>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection