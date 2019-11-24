<!-- Footer Widget Area Start -->
<div class="footer-widget-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="single-footer-widget" style="padding-left: 25px;">
                    <h3>Contact</h3>
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

            <div class="col-md-6 col-sm-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.959976776569!2d90.39227880062207!3d23.784439513345884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c74027c732b3%3A0xb617320d5845616b!2sECL+Systems+LTD!5e0!3m2!1sen!2sbd!4v1530084243163" width="100%" height="226" frameborder="" style="border:0" allowfullscreen></iframe>
            </div>
            <!-- hidden-xs -->
            <div class="col-md-3">
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