@extends('layouts.backend.app')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">               
                <!-- fa-arrow-left fa-plus -->
                <a href="{{route($name.'.create')}}" class="btn btn-round btn-default"><i class="fa fa-plus fa-icon"></i>Add Student Info</a>
                @include('layouts.backend.partials._panel-toolbox')
            </div>

            <div class="page-title">{{$page_title}}</div>

            <div class="x_content">                
                <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Student Info</th>
                            <th>Location</th>
                            <th>Qualifications</th>
                            <th>Interestd Course</th>
                            <th>Created By</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i=0 ?>
                        @foreach($results as $result)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>
                                <p><strong>Name: </strong>{{$result->name}}</p>
                                <p><strong>Mobile: </strong>{{$result->mobile}}</p>
                                @if($result->email)
                                <p><strong>Email: </strong>{{$result->email}}</p>
                                @endif
                            </td>  

                            <td>
                                {{$result->location}}
                            </td> 

                            <td>
                                <p><strong>Current Institute:</strong> {{$result->current_institute}}</p>

                                <p><strong>Qualifications:</strong></p>
                                <p>
                                    <?php echo html_entity_decode($result->qualifications); ?>
                                </p>
                            </td> 
                            <td>
                                {{$result->course == '' ? "N/A":$result->course->name}}
                            </td>  
                            <td>
                                {{$result->created_by == 0 ? "Admen":"Visitor"}}
                            </td>                         
                            <td>
                                <a href="{{route($name.'.edit', $result)}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                @if($result->status != 3)
                                <a href="{{route('create.student', $result)}}" class="btn btn-info btn-xs"><i class="fa fa-user"></i> Registration</a>
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