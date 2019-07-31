@extends('layouts.backend.app')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
        	<div class="x_title">            	
                <!-- fa-arrow-left fa-plus -->
                <a href="{{route('project-types.index')}}" class="btn btn-round btn-default"><i class="fa fa-arrow-left fa-icon"></i>Back</a>

                <a href="{{route('project-type.projects.create', $project_type)}}" class="btn btn-round btn-default"><i class="fa fa-plus fa-icon"></i>Add Project</a>
            	@include('layouts.backend.partials._panel-toolbox')
            </div>

            <div class="page-title">{{$page_title}}</div>

            <div class="x_content">                
                <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Title</th>
                            <th>Company Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                    	<?php $i=0 ?>
                    	@foreach($results as $result)
                        <tr>
                            <td>{{++$i}}</td>                            
                            <td>{{$result->title}}</td>                            
                            <td>{{$result->brand->name}}</td>                            
                            <td>
                            	<a target="_balnk" href="{{route('fronend.project-details',$result)}}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>

                            	<a href="{{route('project-type.projects.edit', [$project_type, $result])}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>

                            	<!-- <form action="{{route($name.'.destroy', $result)}}" method="POST" style="display: inline;">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}

									<button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </button>
								</form> -->
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