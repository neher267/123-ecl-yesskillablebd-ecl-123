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
                    <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Name</th>
                            <th>User Name</th>
                            <th>Current Course(s)</th>
                            <th style="text-align: center;">Course(s) Reg</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                    	<?php $i=0 ?>
                    	@foreach($results as $result)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$result->name}}</td>
                            <td>{{$result->email}}</td>
                            <td>
                                @foreach($result->courses()->pluck('name') as $course)
                                <li>{{$course}}</li>
                                @endforeach
                            </td>
                            <td style="text-align: center;">
                                @if(sizeof($result->active_courses)>0)
                                <span class="badge" style="background: green">Active</span>
                                @elseif(sizeof($result->courses)>0)
                                <span class="badge" style="background: #a94442">Deactivate</span>
                                @else
                                <span class="badge" style="background: #337ab7">Not Registered</span>
                                @endif
                            </td>
                            <td>
                            	<a href="{{route('student.courses.index', $result)}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Courses </a>
                                @if($result->account)
                                <a href="{{route('student.account', $result)}}" class="btn btn-info btn-xs">Student Account</a>
                                @endif
                                @if(Auth::user()->role == 1)
                                <form action="{{route($name.'.destroy', $result)}}" method="POST" style="display: inline;">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm_user('delete')"><i class="fa fa-trash-o"></i> Delete </button>
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