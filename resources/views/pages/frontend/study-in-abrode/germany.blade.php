@extends('layouts.frontend.app') @section('content') @include('layouts.frontend.partials._breadcrumb', ['image'=>'other-bc.jpg'])
<style type="text/css">
    .editor-data > h3 {
        padding-top: 15px;
    }
    
    .list-mark li:before {
        margin-right: 11px;
        font: normal normal normal 16px/1 FontAwesome;
        content: '\f0a9';
        color: #2196F3;
    }

    .btn{
        padding: 12px 0px;
        text-decoration: none;
    }
    .btn:hover{
        padding: 12px 0px;
        text-decoration: none;
    }
    .accordion{
        padding: 10px;
        border: 1px solid #ddd;
    }
</style>
<div class="container mbbs">
    <div class="wrapper mbbs" style="padding-top: 40px; margin: auto;">
        <div class="row">
            <div class="col-md-12">
                <div class="editor-data">
                    <p>Germany is a higher education paradise. Unlike in any other country, in Germany you will find many worldwide ranked universities, countless courses to choose among, globally valued degrees that promise a high employability to you and affordable living costs. Moreover, Germany has a long and rich history, a vibrant and dynamic lifestyle mixing the modern and the classics, the urban and the rural which will immerse and make you love every second spent here.</p>
                    <p>Not surprisingly, Germany is ranked among the world’s top destinations for international students to Study in Germany. According to the latest official statistics, there are over 357,000 foreign students seeking a university degree in Germany whereas the number is steadily increasing to Study in Germany.</p>
                    <p>Every year, thousands of scholars coming from all around the world trust their education to German universities and reasons for this are obvious. German higher education is known globally for its research, innovation and affordability.</p>
                    
                    <p>Germany are occupied with bestowing the progressed and unmatched dental, careful, restorative, and preparing. There are numerous colleges in Germany perceived by WHO, MCI, and other worldwide restorative associations. The instruction framework is incomparable and offer understudies the preparation in prescriptions past the desire. The labs, structures, assembly hall, and foundation are hey tech and together make a very captivating considering climate. The numerous points of interest and ideal climatic conditions pulls in an ever increasing number of understudies from India consistently searching for Study MBBS in Germany based restorative universities embraced by MCI (Medical Council of India).</p>

                    <h3>Benefits to Study in Germany</h3>
                    <hr/>

                    <ul class="list-mark">
                        <li>The tuition fee for MBBS in Germany is low.</li>
                        <li>The advantage of free of cost education international students in some German Universities.</li>
                        <li>High quality course curriculum for MBBS education program.</li>
                        <li>Germany is certainly a beautiful European nation to explore.</li>
                        <li>Cost-effective and no need of Entrance exams.</li>
                        <li>Both the medium of language English and German is available for MBBS Study in Germany.</li>
                        <li>Facility to work in the health sector after completion of Medical education in Germany.</li>
                        <li>Economical expenses for the living during MBBS in Germany.</li>
                        <li>Medical Degree issued by the German Medical Colleges are recognised globally.</li>
                        <li>Reasonable fee structure and a number of the Scholarships for foreign students.</li>
                        <li>Reputed and good hospital for the Internship program.</li>
                        <li>Minimum crime record and is a safe place for international students.</li>
                        <li>Numerous Medical Universities to choose for MBBS in Germany.</li>
                        <li>Every Medical College in Germany has its own Hospital.</li>
                        <li>European Credit Transfer System (ECTS).</li>
                        <li>Part time jobs Available in germany.</li>
                        <li>The tuition fee for MBBS in Germany is low.</li>
                        <li>The advantage of free of cost education international students in some German Universities.</li>
                        <li>High quality course curriculum for MBBS education program.</li>
                        <li>Germany is certainly a beautiful European nation to explore.</li>
                        <li>Cost-effective and no need of Entrance exams.</li>
                        <li>Both the medium of language English and German is available for MBBS Study in Germany.</li>
                        <li>Facility to work in the health sector after completion of Medical education in Germany.</li>
                        <li>Economical expenses for the living during MBBS in Germany.</li>
                        <li>Medical Degree issued by the German Medical Colleges are recognised globally.</li>
                        <li>Reasonable fee structure and a number of the Scholarships for foreign students.</li>
                        <li>Reputed and good hospital for the Internship program.</li>
                        <li>Minimum crime record and is a safe place for international students.</li>
                        <li>Numerous Medical Universities to choose for MBBS in Germany.</li>
                        <li>Every Medical College in Germany has its own Hospital.</li>
                        <li>European Credit Transfer System (ECTS).</li>
                        <li>Part time jobs Available in germany.</li>
                    </ul>

                    @include('layouts.frontend.partials.contact-button')

                    <h3>MCI approved universities to Study in Germany</h3>

                    <hr/>

                    <ul class="list-mark">
                        <li>Ludwig-Maximilian-Universitat Munchen</li>
                        <li>
                            Georg-August-Universitat Gottingen
                        </li>
                        <li>
                            Universitat Heidelberg
                        </li>
                        <li>
                            Humboldt-Universitat zu Berlin
                        </li>
                        <li>
                            Freie Universitaet Berlin
                        </li>
                        <li>
                            Tech in the Universitat munchin
                        </li>
                        <li>
                            Eberhard Karis Universitat Tubingen
                        </li>
                        <li>
                            RWTH Aachen university
                        </li>
                        <li>
                            Albert Ludwing’s Universitat Freiburg
                        </li>
                        <li>
                            Karlsruhe Institute of technology
                        </li>
                        <li>
                            Universitat Bonn
                        </li>
                    </ul>

                    <h3>Why Study in Germany?</h3>

                    <hr/>

                    <div class="accordion" id="accordionExample" style="border: 1px solid #ddd">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              COURSES AVAILABLE
                            </button>
                          </h5>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p><span style="background-color: transparent;">Master (MA, MSc)</span></p>
                                    <p><span style="background-color: transparent;">Master of Business Administration (MBA)</span></p>
                                    <p><span style="background-color: transparent;">Bachelor Degrees</span></p>
                                    <p><span style="background-color: transparent;">Master of Philosophy (MPhil)</span></p>
                                    <p><span style="background-color: transparent;">Doctorate of Philosophy (PhD)</span></p>
                                    <p><span style="background-color: transparent;">Diploma Courses</span></p>
                                    <p><span style="background-color: transparent;">Short term Courses</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              EXPENSES
                            </button>
                          </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    Education in public schools in Germany is free, only private schools and colleges may have costs attached to it. Accommodation in Germany costs from around EUR 400- 500 per month. But scholarships are available on merit for deserving candidates.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              ENGLISH REQUREMENTS
                            </button>
                          </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    IELTS – 6.5 overall and 6.0 minimum in each or TOEFL (iBT) – 85 overall min 20 each
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFore" aria-expanded="false" aria-controls="collapseFore">
                              ENTRY REQUIREMENT
                            </button>
                          </h5>
                            </div>
                            <div id="collapseFore" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p><strong>UNDERGRADUATE COURSES</strong></p>
                                    <p>13 Years of Education is mandatory (12 + 1year from University) If not then students can go via 1 year Foundation Course Or 10 years of Education + 3 year Diploma</p>
                                    <p><strong>POST GRADUATE COURSES</strong></p>
                                    <p>15 &amp; 16 year Education with 70% above or 7.5/10 or 3.0/4.0 CGPA</p>
                                    <p>In case of MBA Work Experience 2 – 3 year at managerial level GMAT – 600 (exceptionally required)</p>
                                    <p><span style="background-color: transparent;">PhD – Research experience and paper publications</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.frontend.partials._contact-form') @endsection