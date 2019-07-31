@extends('layouts.frontend.app')

@section('content')
<div class="event-details-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="event-details-content">
                    <div class="single-event-item">
                        <div class="single-event-image">
                            <a href="#">
                                <img alt="" src="{{ asset('frontend/img/event/6.jpg') }}">
                                <span><span>15</span>Jun</span>
                            </a>
                        </div>
                        <div class="single-event-text">
                            <h3>Learn English in ease</h3>
                            <div class="single-item-comment-view">
                               <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                               <span><i class="zmdi zmdi-pin"></i>Comilla. Bangladesh</span>
                           </div>
                           <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr sarata din mela.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.amar songr balga ami aomar ...</p>
                        </div>
                    </div>
                    <div class="comments">
                        <h4 class="title">Comments</h4>
                        <div class="single-comment">
                            <div class="author-image">
                                <img src="{{ asset('frontend/img/comment/1.jpg') }}" alt="">
                            </div>
                            <div class="comment-text">
                                <div class="author-info">
                                    <h4><a href="#">MD Tokdir Ali</a></h4>
                                    <span class="reply"><a href="#">Reply</a></span>
                                    <span class="comment-time">Posted on Jun 12, 2015 /</span>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffeaation in some form, by injected humour, amr song bangla ami otami</p>
                            </div>
                        </div>
                        <div class="single-comment comment-reply">
                            <div class="author-image">
                                <img src="{{ asset('frontend/img/comment/2.jpg') }}" alt="">
                            </div>
                            <div class="comment-text">
                                <div class="author-info">
                                    <h4><a href="#">MD Kopal Ali</a></h4>
                                    <span class="reply"><a href="#">Reply</a></span>
                                    <span class="comment-time">Posted on Jun 12, 2015 /</span>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the ajority have suffered aation in some form, by injected humour,</p>
                            </div>
                        </div>
                        <div class="single-comment">
                            <div class="author-image">
                                <img src="{{ asset('frontend/img/comment/3.jpg') }}" alt="">
                            </div>
                            <div class="comment-text">
                                <div class="author-info">
                                    <h4><a href="#">MR Soytan Ali</a></h4>
                                    <span class="reply"><a href="#">Reply</a></span>
                                    <span class="comment-time">Posted on Jun 12, 2015 /</span>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have sufferaation in some form, by injected humour, amr song bang</p>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="col-md-3">
                <div class="sidebar-widget">
                    <div class="single-sidebar-widget">
                        <h4 class="title">Recent Events</h4>
                        <div class="recent-content">
                            <div class="recent-content-item">
                                <a href="#"><img src="{{ asset('frontend/img/event/7.jpg') }}" alt=""></a>
                                <div class="recent-text">
                                    <h4><a href="#">Learn English in</a></h4>
                                    <div class="single-item-comment-view">
                                        <span><i class="zmdi zmdi-eye"></i>59</span>
                                        <span><i class="zmdi zmdi-comments"></i>19</span>
                                    </div>
                                    <p>There are many varf passages of Lorem Ipsuable,amar</p>
                                </div>
                            </div>
                            <div class="recent-content-item">
                                <a href="#"><img src="{{ asset('frontend/img/event/8.jpg') }}" alt=""></a>
                                <div class="recent-text">
                                    <h4><a href="#">Team Works</a></h4>
                                    <div class="single-item-comment-view">
                                        <span><i class="zmdi zmdi-eye"></i>59</span>
                                        <span><i class="zmdi zmdi-comments"></i>19</span>
                                    </div>
                                    <p>There are many varf passages of Lorem Ipsuable,amar</p>
                                </div>
                            </div>
                            <div class="recent-content-item">
                                <a href="#"><img src="{{ asset('frontend/img/event/9.jpg') }}" alt=""></a>
                                <div class="recent-text">
                                    <h4><a href="#">Learn With Fun</a></h4>
                                    <div class="single-item-comment-view">
                                        <span><i class="zmdi zmdi-eye"></i>59</span>
                                        <span><i class="zmdi zmdi-comments"></i>19</span>
                                    </div>
                                    <p>There are many varf passages of Lorem Ipsuable,amar</p>
                                </div>
                            </div>
                            <div class="recent-content-item">
                                <a href="#"><img src="{{ asset('frontend/img/event/10.jpg') }}" alt=""></a>
                                <div class="recent-text">
                                    <h4><a href="#">Writing Skill</a></h4>
                                    <div class="single-item-comment-view">
                                        <span><i class="zmdi zmdi-eye"></i>59</span>
                                        <span><i class="zmdi zmdi-comments"></i>19</span>
                                    </div>
                                    <p>There are many varf passages of Lorem Ipsuable,amar</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-sidebar-widget">
                        <h4 class="title">Search by Tags</h4>
                        <ul class="tags">
                            <li><a href="#">Photoshop</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Tutorial</a></li>
                            <li><a href="#">Courses</a></li>
                            <li><a href="#">Premium</a></li>
                            <li><a href="#">Designtuto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection