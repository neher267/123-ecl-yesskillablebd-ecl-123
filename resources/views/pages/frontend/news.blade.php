@extends('layouts.frontend.app')

@section('content')
<div class="latest-area section-padding latest-page">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="single-latest-item">
                    <div class="single-latest-image">
                        <a href="#"><img src="{{ asset('frontend/img/latest/1.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-latest-text">
                        <h3><a href="#">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                           <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                           <span><i class="zmdi zmdi-eye"></i>59</span>
                           <span><i class="zmdi zmdi-comments"></i>19</span>
                       </div>
                       <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                       <a href="{{ route('news-details',1) }}" class="button-default">LEARN NOW</a>
                    </div>
                </div>
                <div class="single-latest-item">
                    <div class="single-latest-image">
                        <a href="#"><img src="{{ asset('frontend/img/latest/2.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-latest-text">
                        <h3><a href="#">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                           <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                           <span><i class="zmdi zmdi-eye"></i>59</span>
                           <span><i class="zmdi zmdi-comments"></i>19</span>
                       </div>
                       <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                       <a href="{{ route('news-details',1) }}" class="button-default">LEARN NOW</a>
                    </div>
                </div>
                <div class="single-latest-item">
                    <div class="single-latest-image">
                        <a href="#"><img src="{{ asset('frontend/img/latest/5.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-latest-text">
                        <h3><a href="#">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                           <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                           <span><i class="zmdi zmdi-eye"></i>59</span>
                           <span><i class="zmdi zmdi-comments"></i>19</span>
                       </div>
                       <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                       <a href="{{ route('news-details',1) }}" class="button-default">LEARN NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-latest-item">
                    <div class="single-latest-image">
                        <a href="#"><img src="{{ asset('frontend/img/latest/3.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-latest-text">
                        <h3><a href="#">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                           <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                           <span><i class="zmdi zmdi-eye"></i>59</span>
                           <span><i class="zmdi zmdi-comments"></i>19</span>
                       </div>
                       <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                       <a href="{{ route('news-details',1) }}" class="button-default">LEARN NOW</a>
                    </div>
                </div>
                <div class="single-latest-item">
                    <div class="single-latest-image">
                        <a href="#"><img src="{{ asset('frontend/img/latest/4.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-latest-text">
                        <h3><a href="#">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                           <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                           <span><i class="zmdi zmdi-eye"></i>59</span>
                           <span><i class="zmdi zmdi-comments"></i>19</span>
                       </div>
                       <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                       <a href="{{ route('news-details',1) }}" class="button-default">LEARN NOW</a>
                    </div>
                </div>
                <div class="single-latest-item">
                    <div class="single-latest-image">
                        <a href="#"><img src="{{ asset('frontend/img/latest/6.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-latest-text">
                        <h3><a href="#">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                           <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                           <span><i class="zmdi zmdi-eye"></i>59</span>
                           <span><i class="zmdi zmdi-comments"></i>19</span>
                       </div>
                       <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                       <a href="{{ route('news-details',1) }}" class="button-default">LEARN NOW</a>
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