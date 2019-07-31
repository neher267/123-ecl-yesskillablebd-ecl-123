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
                                <th>Sr.no</th>
                                <th>Details</th>
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
                                </td>                                
                                <td>
                                    <a href="{{route('inquries.show', $inquiry)}}" class="btn btn-primary btn-xs" target="_blank"><i class="fa fa-eye"></i> Details</a>

                                    @if(Auth::user()->role == 1)
                                    <form action="{{route('inquries.destroy', $inquiry)}}" method="POST" style="display: inline;">
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