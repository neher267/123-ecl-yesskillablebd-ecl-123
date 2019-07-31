<div class="row">
            @foreach($popular_courses as $course)
            <div class="col-md-4 col-sm-12">
                <div class="single-item">
                    <div class="single-item-image overlay-effect">
                        <a href="{{ route('course-details', $course) }}"><img src="{{ asset($course->thumnail) }}" alt=""></a>
                    </div>
                    <div class="single-item-text">
                        <h4 style="height: 50px;"><a href="{{ route('course-details', $course) }}">{{$course->name}}</a></h4>
                        <div class="single-item-text-info">
                            <span><span>{{$course->hands_on ==1 ? "Hands-on Training":""}}</span></span>
                            <span>Duration: <span>{{(int)$course->duration}} Hr</span></span>
                        </div>
                        <p>{{$course->summary}}</p>
                        <div class="single-item-content">
                            <div class="single-item-comment-view">
                                <span><i class="zmdi zmdi-eye"></i>59</span>
                                <span><i class="zmdi zmdi-comments"></i>19</span>
                            </div>
                            <div class="single-item-rating">
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-half"></i>
                            </div>
                        </div>
                    </div>
                    <div class="button-bottom">
                        <a href="{{ route('course-details', $course) }}" class="button-default">Learn Now</a>
                    </div>
                </div>
            </div>
            @endforeach
</div>