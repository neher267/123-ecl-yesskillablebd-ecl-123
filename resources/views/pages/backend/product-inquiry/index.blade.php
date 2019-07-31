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
                                <th>Customer Info</th>
                                <th>Product Info</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=0 ?>
                            @foreach($inquiryes as $inquiry)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>
                                    <p><strong>Company: </strong>{{$inquiry->company}}</p>
                                    <p><strong>Name: </strong>{{$inquiry->name}}</p>
                                    <p><strong>Designation: </strong>{{$inquiry->designation}}</p>
                                    <p><strong>Email: </strong>{{$inquiry->email}}</p>
                                    <p><strong>Mobile: </strong>{{$inquiry->mobile}}</p>
                                    
                                </td>
                                @if($inquiry->product_id)
                                <td>
                                    <p><strong>Brand: </strong>{{$inquiry->product->brand->name}}</p>
                                    <p><strong>Image: </strong>
                                        <img src="{{asset($inquiry->product->image)}}" style="height: 40px;">
                                    </p>
                                    <p><strong>Name: </strong>{{$inquiry->product->name}}</p>
                                    <p><strong>Model: </strong>{{$inquiry->product->model_no}}</p>                                  
                                    
                                </td>
                                @endif
                                <td>
                                    <a href="{{route('inquiryes.show', $inquiry)}}" class="btn btn-primary btn-xs" target="_blank"><i class="fa fa-eye"></i> Details</a>

                                    @if(Auth::user()->role == 1)
                                    <form action="{{route('inquiryes.destroy', $inquiry)}}" method="POST" style="display: inline;">
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