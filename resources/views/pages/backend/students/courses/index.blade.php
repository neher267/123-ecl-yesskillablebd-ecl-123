@extends('layouts.backend.app')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
        	<div class="x_title">            	
                <!-- fa-arrow-left fa-plus -->
                <a href="{{route('students.index')}}" class="btn btn-round btn-default"><i class="fa fa-arrow-left fa-icon"></i>Back</a>

                <a href="{{route($name.'.create', $user)}}" class="btn btn-round btn-default"><i class="fa fa-plus fa-icon"></i>Add Courses</a>
            	@include('layouts.backend.partials._panel-toolbox')
            </div>

            <div class="page-title">{{$page_title}}</div>

            <div class="x_content">                
                <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Sr.No</th>
                            <!-- <th>Thumbnail</th> -->
                            <th>C Name</th>
                            <th>Reg Date</th>
                            <th>Duration</th>
                            <th>Course Fee</th>
                            <th>After Discount</th>
                            <th>Discount</th>
                            <th style="text-align: center;">Status</th>
                            <th style="text-align: center;">P Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                    	<?php $i=0 ?>
                    	@foreach($results as $result)
                        <?php 
                            $pivote_course = $user->courses()->where('course_id', $result->id)->first();
                        ?>
                        <tr>
                            <td>{{++$i}}</td>
                            <!-- <td>
                                <img src="{{asset($result->thumnail)}}" style="height: 50px; width: 80px; box-shadow: 2px 4px 5px darkgrey; margin: 3px;">
                            </td> -->
                            <td>{{$result->name}}</td>                            
                            <td>{{$pivote_course->pivot->created_at->format('M d, Y')}}</td>                            
                            <td>{{$result->duration}} Hrs</td>                            
                            <td>{{$pivote_course->pivot->course_fee}}</td>                     
                            <td>{{$pivote_course->pivot->after_discunt}}</td>                     
                            <td>{{$pivote_course->pivot->discount_per}}%</td>                     
                            <td style="text-align: center;">
                                @if($pivote_course->pivot->active)
                                <span class="badge" style="background: green">Active</span>
                                @else
                                <span class="badge" style="background: #a94442">Complete</span>
                                @endif
                            </td> 

                            <td style="text-align: center;">
                                @if($pivote_course->pivot->payment_status)
                                <span class="badge" style="background: green">Paid</span>
                                @else
                                <span class="badge" style="background: #a94442">Due</span>
                                @endif
                            </td>                           
                            <td>
                                @if($pivote_course->pivot->course_fee == 0 || $pivote_course->pivot->after_discunt == 0)
                                <form action="{{route('edit.course.fee')}}" method="get" style="display: inline;">
                                    <input type="hidden" name="student_id" value="{{$user->id}}">
                                    <input type="hidden" name="course_id" value="{{$result->id}}">
                                    <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-edit"></i> Course Fee</button>
                                </form>
                                @else
                                    @if(!$pivote_course->pivot->payment_status)
                                    <form action="{{route('student.account.transaction', $user)}}" method="GET" style="display: inline;">
                                        <input type="hidden" name="course_id" value="{{$result->id}}">
                                        <button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Payment</button>
                                    </form>
                                    @endif
                                @endif
                            	
                                @if(Auth::user()->role == 1 && $pivote_course->pivot->active)
                                <form action="{{route('deactive.course')}}" method="POST" style="display: inline;">
                                    {{ csrf_field() }}

                                    <input type="hidden" name="student_id" value="{{$user->id}}">
                                    <input type="hidden" name="course_id" value="{{$result->id}}">

                                    <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm_user('deactive')"><i class="fa fa-trash-o"></i> Complete </button>
                                </form>
                                @endif
                            </td>
                        </tr>
                        @endforeach                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection