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

    .registraton-naw {
        padding: 10px 0; line-height: 1;
    }

    .button-default {
        padding: 7px 35px;
        border-radius: 19px;
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

        .breadcrumb-text h1 {
            font-size: 58px;
            line-height: .85;
        }

        .apply-for-addmission {
            width: 206px;
            margin: auto;
        }
        .registration-naw {
            font-size: 24px;
        }

        .pills-course {
            width: 170px;
            margin: auto;
        }
        .course-pills > ul {
            margin-right: auto;
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


<div id="registration-form" class="row" style="padding-bottom: 20px">                            
    <div class="col-md-offset-3 col-md-6 col-xs-offset-1 col-xs-10">
        <div class="col-md-12 text-center" style="padding-bottom: 15px;">
            <h2 class="registration-naw" >Apply For Admission</h2>
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
                    @foreach($all_courses as $course)
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
