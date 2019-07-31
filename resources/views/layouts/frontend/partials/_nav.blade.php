<div class="header-logo-menu sticker">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-12">
                <div class="logo">
                    <a href="{{ url('/') }}"><img style="height: 55px;" src="{{ asset('frontend/img/logo/logo.png') }}" alt="EDUCAT"></a>
                </div>
            </div>
            <div class="col-md-10 hidden-sm hidden-xs">
                <div class="mainmenu-area pull-right">
                    <div class="mainmenu">
                        <nav>
                            <ul id="nav" style="font-weight: bold;">                                
                                <li class="current"><a href="{{ url('/') }}">HOME</a></li>
                                <li><a href="{{ url('about') }}">ABOUT US</a></li>
                                <li><a href="{{ url('how-it-works') }}">HOW IT WORKS</a></li>
                                <li><a href="{{ url('placements') }}">PLACEMENTS </a></li>
                                <li><a href="{{ url('courses') }}">COURSES</a></li> 
                                <li><a href="{{ url('success-case') }}">Success Case </a></li>   
                                <li><a href="{{ url('corporate-training') }}">CORPORATE TRAINING</a></li>
                                <li><a href="{{ url('contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <ul class="header-search">
                        <li class="search-menu">
                            <i id="toggle-search" class="zmdi zmdi-search-for"></i>
                        </li>
                    </ul>
                    <!--Search Form-->
                    <div class="search">
                        <div class="search-form">
                            <form id="search-form" action="#">
                                <input type="search" placeholder="Search here..." name="search" />
                                <button type="submit">
                                    <span><i class="fa fa-search"></i></span>
                                </button>
                            </form>                                
                        </div>
                    </div>
                    <!--End of Search Form-->
                </div> 
            </div>
        </div>
    </div>
</div>  
<!-- Mobile Menu Area start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li class="current"><a href="{{ url('/') }}">HOME</a></li>
                            <li><a href="{{ url('about') }}">ABOUT US</a></li>
                            <li><a href="{{ url('how-it-works') }}">HOW IT WORKS</a></li>
                            <li><a href="{{ url('placements') }}">PLACEMENTS </a></li>
                            <li><a href="{{ url('courses') }}">COURSES</a></li> 
                            <li><a href="{{ url('success-case') }}">Success Case </a></li>   
                            <li><a href="{{ url('corporate-training') }}">CORPORATE TRAINING</a></li>
                            <li><a href="{{ url('contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>					
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu Area end -->