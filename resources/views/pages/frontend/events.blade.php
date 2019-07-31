@extends('layouts.frontend.app')

@section('content')
<div class="event-area section-padding event-page">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="single-event-item">
                    <div class="single-event-image">
                        <a href="#">
                            <img src="{{ asset('frontend/img/event/1.jpg') }}" alt="">
                            <span><span>15</span>Jun</span>
                        </a>
                    </div>
                    <div class="single-event-text">
                        <h3><a href="#">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                           <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                           <span><i class="zmdi zmdi-pin"></i>Comilla Bangladesh</span>
                       </div>
                       <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr sarata din megla....</p>
                       <a href="{{ route('event-details',1) }}" class="button-default">LEARN NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-event-item">
                    <div class="single-event-image">
                        <a href="#">
                            <img src="{{ asset('frontend/img/event/2.jpg') }}" alt="">
                            <span><span>25</span>Dec</span>
                        </a>
                    </div>
                    <div class="single-event-text">
                        <h3><a href="#">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                           <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                           <span><i class="zmdi zmdi-pin"></i>Jessore Bangladesh</span>
                       </div>
                       <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr sarata din megla....</p>
                       <a href="{{ route('event-details',1) }}" class="button-default">LEARN NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-event-item">
                    <div class="single-event-image">
                        <a href="#">
                            <img src="{{ asset('frontend/img/event/3.jpg') }}" alt="">
                            <span><span>01</span>Mar</span>
                        </a>
                    </div>
                    <div class="single-event-text">
                        <h3><a href="#">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                           <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                           <span><i class="zmdi zmdi-pin"></i>Dhaka Bangladesh</span>
                       </div>
                       <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr sarata din megla....</p>
                       <a href="{{ route('event-details',1) }}" class="button-default">LEARN NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-event-item">
                    <div class="single-event-image">
                        <a href="#">
                            <img src="{{ asset('frontend/img/event/4.jpg') }}" alt="">
                            <span><span>27</span>May</span>
                        </a>
                    </div>
                    <div class="single-event-text">
                        <h3><a href="#">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                           <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                           <span><i class="zmdi zmdi-pin"></i>Comilla Bangladesh</span>
                       </div>
                       <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr sarata din megla....</p>
                       <a href="{{ route('event-details',1) }}" class="button-default">LEARN NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-event-item">
                    <div class="single-event-image">
                        <a href="#">
                            <img src="{{ asset('frontend/img/event/5.jpg') }}" alt="">
                            <span><span>12</span>Nov</span>
                        </a>
                    </div>
                    <div class="single-event-text">
                        <h3><a href="#">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                           <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                           <span><i class="zmdi zmdi-pin"></i>Jessore Bangladesh</span>
                       </div>
                       <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr sarata din megla....</p>
                       <a href="{{ route('event-details',1) }}" class="button-default">LEARN NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-event-item">
                    <div class="single-event-image">
                        <a href="#">
                            <img src="{{ asset('frontend/img/event/3.jpg') }}" alt="">
                            <span><span>15</span>Jun</span>
                        </a>
                    </div>
                    <div class="single-event-text">
                        <h3><a href="#">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                           <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                           <span><i class="zmdi zmdi-pin"></i>Dhaka Bangladesh</span>
                       </div>
                       <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr sarata din megla....</p>
                       <a href="{{ route('event-details',1) }}" class="button-default">LEARN NOW</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="pagination-content">
                    <ul class="pagination">
                        <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                        <li class="current"><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection