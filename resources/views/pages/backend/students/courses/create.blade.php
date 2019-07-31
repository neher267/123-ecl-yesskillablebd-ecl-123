@extends('layouts.backend.app')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">               
                <!-- fa-arrow-left fa-plus -->
                <a href="{{route($name.'.index', $user)}}" class="btn btn-round btn-default"><i class="fa fa-arrow-left fa-icon"></i>Back</a>
                @include('layouts.backend.partials._panel-toolbox')
            </div>

            <div class="page-title">{{$page_title}}</div>

            <div class="x_content">   
                <form action="{{route($name.'.store', $user)}}" method="POST">
                    {{ csrf_field() }}

                    <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Name</th>
                            <th>Duration</th>
                            <th>Course Fee</th>
                            <th>Select</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i=0 ?>
                        @foreach($results as $result)
                        <tr>
                            <td>{{++$i}}</td>                            
                            <td>{{$result->name}}</td>                            
                            <td>{{$result->duration}} Hrs</td>                            
                            <td>{{$result->fee}} TK</td>                       
                            <td>
                                @if(in_array($result->id, $register_courses))
                                <i class="fa fa-check"></i>
                                @else
                                <input type="checkbox" name="courses[]" value="{{$result->id}}"> 
                                @endif                              
                            </td>
                        </tr>
                        @endforeach                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6">
                                <button type="submit" class="btn btn-primary pull-right">Course Register</button>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                </form>            
                
            </div>
        </div>
    </div>
</div>
@endsection