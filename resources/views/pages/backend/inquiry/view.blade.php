@extends('layouts.backend.app')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
        	<div class="x_title">            	
                <!-- fa-arrow-left fa-plus -->
                @include('layouts.backend.partials._panel-toolbox')
            </div>

            <div class="page-title">{{$page_title}}</div>

            <div class="x_content">                
                <table id="datatable-buttons" class="table table-striped table-bordered">
                    <tr>
                        <th style="width: 150px">Name</th>
                        <td>{{$inquiry->name}}</td>
                    </tr>

                    <tr>
                        <th>Phone</th>
                        <td>{{$inquiry->mobile}}</td>
                    </tr>



                    @if($inquiry->course_id)
                    <tr>
                        <th>Course</th>
                        <td>{{$inquiry->course->name}}</td>
                    </tr>
                    @endif

                    <?php 
                        $chield_ids = explode(',', $inquiry->chield_ids);
                    ?>                    
                    @if($inquiry->course_id)
                    <tr>
                        <th>Apply For</th>
                        <td>
                            @foreach($chield_ids as $chield)
                            <?php 
                            $course = DB::table('courses')->find($chield);
                            if ($course) {
                                echo "<p>$course->name</p>";
                            }
                            ?>
                            @endforeach
                        </td>
                    </tr>
                    @endif                    
                    <p>

                        
                    </p>

                    <tr>
                        <th>Message</th>
                        <td>{{$inquiry->message}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection