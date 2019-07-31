<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{url('/')}}" class="site_title" target="_blank"><i class="fa fa-paw"></i> <span>{{config('app.name')}}</span></a>
        </div>

        <div class="clearfix"></div>       

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">                
                <ul class="nav side-menu">
                    <li><a href="{{url('dashboard')}}"><i class="fa fa-home"></i>Home</a></li>   

                    <!-- Super Admin and Moderator    -->
                    @if(Auth::user()->role == 1 || Auth::user()->role == 2)
                    <li><a><i class="fa fa-cogs"></i> Manage Course <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('categories.index')}}"><i class="fa fa-angellist"></i> Course Categories</a></li>
                            <li><a href="{{route('courses.index')}}"><i class="fa fa-angellist"></i> All Courses</a></li>             
                        </ul>
                    </li>  
                    @endif

                    <!-- Super Admin     -->
                                     
                    @if(Auth::user()->role == 1)
                    <li><a href="{{route('inquries.index')}}"><i class="fa fa-angellist"></i>End User Inquiries</a></li>
                    <li><a href="{{route('success-case.index')}}"><i class="fa fa-angellist"></i> Success case</a></li>
                    <li><a href="{{route('students.index')}}"><i class="fa fa-users"></i> Registerd Students</a></li>
                    <li><a href="{{route('student-infos.index')}}"><i class="fa fa-users"></i> Student Registration Inquiry</a></li>
                    @endif


                    <!-- Student     -->
                                     
                    @if(Auth::user()->role == 3)
                        <!-- Student Routes goes here -->
                    @endif
                </ul>
            </div>            
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">         

            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>