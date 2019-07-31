@extends('layouts.frontend.app') @section('content') @include('layouts.frontend.partials._breadcrumb', ['image'=>'other-bc.jpg'])

<style type="text/css">
    .list-mark li:before {
        margin-right: 11px;
        font: normal normal normal 16px/1 FontAwesome;
        content: '\f0a9';
        color: #2196F3;
    }
    
    .co-title {
        line-height: 1.5;
        padding-bottom: 20px;
    }
    
    .co-title2 {
        text-transform: uppercase;
        padding-top: 40px;
        padding-bottom: 15px;
    }
</style>
<div class="course-area section-padding bg-white">
    <div class="container">
        <div class="row" style="padding: 0px 25px">
            <div class="col-md-4 col-sm-5 col-xs-12">
                <h4 class="co-title">
              Learn, Apply & Master with Certification in Auto CADD,REVIT MEP,BIM, PMP,Digital Marketing, Big Data, Cloud Computing AWS, SAP,Python, Data Science, Machine Learning, Artificial Intelligence and Blockchain Courses for Companies
            </h4>

                <p>
                    If you are a company and need to sharpen up the PMP/IT/Software Skills of your Employees/team, Skill & Able might be the perfect ones to partner with.
                </p>
                <p>
                    Our Corporate Training will help your Resources expand their skill set regarding IT Technologies and thus help you increase your business ROI while keeping a control on the training costs. These programs are custom designed and focus mainly on practical Hands-On experience.
                </p>
            </div>
            <div class="col-md-7 col-sm-8 col-xs-12">

                <h4 class="co-title">
              Skill & Able is a fast growing corporate training Courses provider in Bangladesh. We are a well-respected company that has been in Training business for over 2 years. In everything we do we strive to deliver just excellence & do this by providing training & consultancy services that are:
            </h4>

                <ul class="list-mark">
                    <li>Of the highest quality</li>
                    <li>Customized training modules to suite your project/client needs</li>
                    <li>Flexible &amp; Highly cost effective</li>
                    <li>Delivered by CERTIFIED Trainers &amp; Consultants each with over 10+ years &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div style="    margin-left: 24px;"> experience</div>
                    </li>
                    <li>Courses are delivered by professional and highly qualified Instructors, with
                        <div style="    margin-left: 24px;">extensive experience in their respective industries.</div>
                    </li>
                    <li>At a location convenient to you</li>
                    <li>Real time Hands-On Practical Experience Training</li>

                </ul>
                <p class="pt-10">
                    We promise to give you a unique and advanced techniques with combinations of courses as per your requirement . We also assure you the knowledge with perfection with no matter of time.
                </p>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12 pad">
                <h3 class="text-center co-title2">
                CERTIFICATION TRAINING COURSES FOR PROFESSIONALS WE PROVIDE
              </h3>
                <hr>

                <div class="col-md-4">
                    <ul class="list-mark">
                        <li>
                            Civil CADD
                        </li>
                        <li>
                            Electrical CADD
                        </li>
                        <li>
                            Mechanical CADD
                        </li>
                        <li>
                            PMP
                        </li>
                        <li>
                            Revit MEP
                        </li>
                        <li>
                            Solid works
                        </li>
                        <li>
                            Auto CADD
                        </li>
                        <li>
                            SAP Courses
                        </li>
                        <li>
                            Primavera
                        </li>     

                        <li>
                            Digital Marketing (SEO/Social Media/PPC Google Adwords)
                        </li>                  

                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-mark">                        
                        <li>
                            Best SEO Training
                        </li>
                        <li>
                            AWS Training
                        </li>
                        <li>
                            Cloud Computing Training
                        </li>
                        <li>
                            Data Science Training
                        </li>
                        <li>
                            RPA Training
                        </li>
                        <li>
                            Python Training
                        </li>
                        <li>
                            Oracle DBA Training
                        </li>
                        <li>
                            Oracle SQL, PLSQL, DBA, D2k, Apps
                        </li>
                        <li>
                            Autodesk Revit Training
                        </li>

                        <li>
                            Autodesk CAD 2d and 3d Course
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-mark">                        
                        <li>
                            Machine Learning Certification Training
                        </li>
                        <li>
                            Block Chain Training Courses
                        </li>
                        <li>
                            Java course
                        </li>
                        <li>
                            C C++ Course
                        </li>
                        <li>
                            PHP MYSQL, Python
                        </li>
                        <li>
                            Human Resources Classes
                        </li>
                        <li>
                            Cisco CCNA Networking
                        </li>
                        <li>
                            Softskill Courses
                        </li>

                        <li>
                            Data Center Training (CDCP,CDCS)
                        </li>
                    </ul>
                </div>
                <!-- end col -->
            </div>
        </div>

    </div>

</div>

@endsection