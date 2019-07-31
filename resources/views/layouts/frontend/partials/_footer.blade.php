<!-- Footer Widget Area Start -->
<div class="footer-widget-area">
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-4">
                <div class="single-footer-widget">
                    <div class="footer-logo" style="margin-bottom: 0px;">
                        <a href="{{ url('/') }}">
                            <img style="position: relative; top: -15px; height: 55px; padding-left: 5px;" src="{{ asset('frontend/img/logo/footer.png') }}" alt="">
                        </a>
                    </div>
                    <p style="position: relative; top: -5px;">
                        Skill & Able is the fast growing Skilling Organization operating in the space of Skilling, Re-skilling and Up-skilling fresher’s and working professionals.
                        Skill & Able provides you with ready-to-work, high-quality training program with Placement in leading companies. Our Training programs are interactive, practical and easily understandable but at the same time intensive and comprehensive.
                    </p>
                    <div class="social-icons">
                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                        <a href="#"><i class="zmdi zmdi-rss"></i></a>
                        <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 hidden-sm">
                <div class="single-footer-widget" style="padding-left: 25px;">
                    <h3>Useful Links</h3>
                    <ul class="footer-list">
                        <li><a href="{{ url('about') }}">About Us</a></li>                      
                        <li><a href="{{ url('how-it-works') }}">How It Works</a></li>  
                        <li><a href="{{ url('placements') }}">Placements </a></li>    
                        <li><a href="{{ url('success-case') }}">Success Case </a></li>    
                        <li><a href="{{ url('corporate-training') }}">Corporate Training</a></li>
                        <li><a href="{{ url('courses') }}">Courses</a></li>
                        <li><a href="{{ url('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>


            <div class="col-md-3 col-sm-4">
                <div class="single-footer-widget">
                    <h3 class="text-center">QR Code</h3>

                    <div class="footer-logo">
                        <img src="{{ asset('images/qr-code-skillnable.png') }}">
                    </div>  
                </div>
            </div>

            <div class="col-md-3 col-sm-4">
                <div class="single-footer-widget">
                    <h3 class="text-center" style="padding-right: 44px;">Contact</h3>
                    <span style="margin-top: -7px;">
                        <i class="fa fa-map-marker"></i>
                        <span>House-278(2nd Floor), Road-19</span><br/>
                        <span style="margin-left: 34px">New DOHS Mohakhali,</span><br/>
                        <span style="margin-left: 34px">Dhaka-1212, Bangladesh.</span>
                    </span>

                    <span style="margin-top: -7px;"><i class="fa fa-whatsapp"></i>                        
                        <a 
                            href="whatsapp://send?text=Hello Medientry!&phone=+8801713456910" 
                            style="color: #fff">
                            {{ config('plc.w-app') }}
                        </a>
                    </span>

                    <span style="margin-top: -7px;"><i class="fa fa-phone"></i>
                        {{ config('plc.mobile') }}
                    </span>

                    <span style="margin-top: -7px;"><i class="zmdi zmdi-email"></i>
                        
                        <a 
                            href="mailto:{{config('plc.email')}}" 
                            style="color: #fff">
                            {{ config('plc.email') }}
                        </a>
                    </span>
                                      
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Footer Widget Area-->
<!--Footer Area Start-->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-7">
                <span>Copyright &copy; {{ config('app.name') }} {{ date('Y') }}. All right reserved. Created by <a href="http://eclsystem.com/">ECL Systems Ltd</a></span>
            </div>
            <div class="col-md-6 col-sm-5">
                <div class="column-right">
                    <span style="font-weight: bold;">
                        <a 
                        href="https://sg3plcpnl0074.prod.sin3.secureserver.net:2096/" 
                        target="_blank">Web Mail</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--End of Footer Area