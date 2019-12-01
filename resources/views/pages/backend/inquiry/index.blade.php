@extends('layouts.backend.app')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">               
                <!-- fa-arrow-left fa-plus -->
                @include('layouts.backend.partials._panel-toolbox')
            </div>

            <div class="page-title" style="border-bottom: none">
                {{$page_title}}

                <!-- <div class="col-md-12 page-title">
                    <form action="{{ route('inquries.filter') }}" method="POST" style="display: inline-table;">
                        {{ csrf_field() }}

                        <input type="hidden" name="status" value="0">

                        <button type="submit" class="btn btn-info btn-xs">
                            <i class="fa fa-envelope"></i> Inbox 
                        </button>
                    </form>

                    <form action="{{ route('inquries.filter') }}" method="POST" style="display: inline-table;">
                        {{ csrf_field() }}

                        <input type="hidden" name="status" value="1">

                        <button type="submit" class="btn btn-primary btn-xs">
                            <i class="fa fa-check-circle"></i> Primary Selected 
                        </button>
                    </form>

                    <form action="{{ route('inquries.filter') }}" method="POST" style="display: inline-table;">
                        {{ csrf_field() }}

                        <input type="hidden" name="status" value="2">

                        <button type="submit" class="btn btn-success btn-xs">
                            <i class="fa fa-check-circle"></i> Selected 
                        </button>
                    </form>


                    <form action="{{ route('inquries.filter') }}" method="POST" style="display: inline-table;">
                        {{ csrf_field() }}

                        <input type="hidden" name="status" value="3">

                        <button type="submit" class="btn btn-warning btn-xs"><i class="fa fa-times"></i> Rejected </button>
                    </form>

                    <form action="{{ route('inquries.filter') }}" method="POST" style="display: inline-table;">
                        {{ csrf_field() }}

                        <input type="hidden" name="status" value="5">

                        <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Trush </button>
                    </form>
                </div> -->

            </div>

            

            <div class="x_content">                
                <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                            <tr>
                                <th>Sr.no</th>
                                <th>Student Info</th>
                                <th>Time</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=0 ?>
                            @foreach($inquiryes as $inquiry)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>
                                    <p><strong>Name: </strong>{{$inquiry->name}}</p>
                                    <p><strong>Mobile: </strong>{{$inquiry->mobile}}</p>
                                    @if($inquiry->course_id)
                                    <p><strong>Course: </strong>{{$inquiry->course->name}}</p>
                                    @endif
                                </td>  

                                <td>
                                    <p>{{$inquiry->created_at->diffForHumans()}}</p>
                                </td>                              
                                <td>
                                    <a href="{{route('inquries.show', $inquiry)}}" class="btn btn-primary btn-xs" target="_blank"><i class="fa fa-eye"></i> Details</a>   

                                    @if($action == 1)                                 

                                    <form action="{{route('inquries.change.status', $inquiry)}}" method="POST" style="display: inline;">
                                        {{ csrf_field() }}

                                        <input type="hidden" name="status" value="2">

                                        <button type="submit" class="btn btn-success btn-xs" onclick="return confirm_user('select')"><i class="fa fa-check-circle"></i> Select </button>
                                    </form>

                                    <form action="{{route('inquries.change.status', $inquiry)}}" method="POST" style="display: inline;">
                                        {{ csrf_field() }}

                                        <input type="hidden" name="status" value="3">

                                        <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm_user('reject')"><i class="fa fa-times"></i> Reject </button>
                                    </form>
                                    @endif

                                    @if($action == 3)                                 

                                    <form action="{{route('inquries.change.status', $inquiry)}}" method="POST" style="display: inline;">
                                        {{ csrf_field() }}

                                        <input type="hidden" name="status" value="2">

                                        <button type="submit" class="btn btn-success btn-xs" onclick="return confirm_user('select')"><i class="fa fa-check-circle"></i> Select </button>
                                    </form>
                                    @endif
                                    
                                    @if($action !=2 && $action !=5) 
                                    <form action="{{route('inquries.change.status', $inquiry)}}" method="POST" style="display: inline;">
                                        {{ csrf_field() }}

                                        <input type="hidden" name="status" value="5">

                                        <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm_user('delete')"><i class="fa fa-trash-o"></i> Delete </button>
                                    </form>

                                    @endif

                                    @if($action ==5)
                                    <form action="{{route('inquries.destroy', $inquiry)}}" method="POST" style="display: inline;">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm_user('delete')"><i class="fa fa-trash-o"></i> Delete Permanetly</button>
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