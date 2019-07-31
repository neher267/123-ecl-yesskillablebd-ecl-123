@extends('layouts.frontend.app')

@section('content')
@include('layouts.frontend.partials._breadcrumb', ['image'=>'other-bc.jpg'])
<!--Google Map Area Start-->
<div class="google-map-area">
    <!--  Map Section -->
    <div id="contacts" class="map-area">
        <!-- <div id="googleMap" style="width:100%;height:485px;filter: grayscale(100%);-webkit-filter: grayscale(100%);"></div> -->
        <div style="padding-top: 3px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.959976776569!2d90.39227880062207!3d23.784439513345884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c74027c732b3%3A0xb617320d5845616b!2sECL+Systems+LTD!5e0!3m2!1sen!2sbd!4v1530084243163" width="100%" height="485" frameborder="" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>
<!--End of Google Map Area-->
<!--Contact Form Area Start-->
<div class="contact-form-area section-padding">
    <div class="container">
        <div class="row" style="width: 90%; margin: auto;">
            <div class="col-md-4">
                <h4 class="contact-title">contact info</h4>
                <div class="contact-text">
                    <p><span class="c-icon"><i class="zmdi zmdi-phone"></i></span><span class="c-text">{{ config('plc.mobile') }}</span></p>
                    <p><span class="c-icon"><i class="zmdi zmdi-email"></i></span><span class="c-text">{{ config('plc.email') }}</span></p>
                    <p><span class="c-icon"><i class="zmdi zmdi-pin"></i></span><span class="c-text">
                        <?php echo html_entity_decode(config('plc.address')) ?>
                    </p>
                </div>
            </div>
            <div class="col-md-7">
                <h4 class="contact-title">send your massage</h4>

                @include('common.errors')
                
                <form action="{{ url('inquries') }}" method="post">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="name" placeholder="name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="mobile" placeholder="Mobile No">
                        </div>
                        <div class="col-md-12">
                            <textarea name="message" cols="30" rows="10" placeholder="Your Message"></textarea>
                            <button type="submit" class="button-default">SUBMIT</button>
                        </div>
                    </div>
                </form>
                <p class="form-messege"></p>
            </div>
        </div>
    </div>
</div>
<!--End of Contact Form-->
@endsection