<style type="text/css">
    .breadcrumb-banner-area {
        background: rgba(0, 0, 0, 0) url(<?php echo is_object($image) ? asset($image->background):asset("frontend/img/banner/$image") ?>) no-repeat scroll 0 0;
    }
    .breadcrumb-banner-area {
        background-position: center;
        height: 450px;
    }

    .breadcrumb-banner-area {
        padding: 150px 0;
    }

    .breadcrumb-text h1 {
      padding-bottom: 30px;
      text-transform: capitalize;
      font-size: 72px;
    }

    @media (max-width: 767px) {
      .breadcrumb-text h1 {
        font-size: 60px;
      }
      .breadcrumb-banner-area {
        background-position: center;
        height: 350px;
     }     
    }

    .breadcrumb-text h1:after {
        content: unset;
        height: 0;
    }

    .button-default {
        background: #39c0dd none repeat scroll 0 0;
        color: #ffffff;
        display: inline-block;
        font-family: "montserratregular";
        font-size: 14px;
            margin: 0px;
        padding: 5px 30px;
        border-radius: 16px;
        text-transform: capitalize;
    }
</style>

<div class="breadcrumb-banner-area about-area-plc">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    @if(is_object($image))
                    <h1 class="text-center"> {{ $image->name }}</h1>
                    <h2 class="text-center" style="margin-bottom: 20px">in Mohakhali DOHS, Dhaka</h2>
                    <div style="text-align: center;">
                        <a href="#admission" class="button-default">Apply For Admission</a>
                    </div>
                    @else
                    <h1 class="text-center uc"> {{ $title }} 2</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb text-center">
                            <li><a href="index.html">Home</a></li>
                            <li class="uc"> {{ $title }}</li>
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>