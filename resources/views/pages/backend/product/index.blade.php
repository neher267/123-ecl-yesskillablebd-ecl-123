@extends('layouts.backend.app')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
        	<div class="x_title">            	
                <!-- fa-arrow-left fa-plus -->
                <a href="{{route('products.create')}}" class="btn btn-round btn-default"><i class="fa fa-plus fa-icon"></i>Add Product</a>
            	@include('layouts.backend.partials._panel-toolbox')
            </div>

            <div class="page-title">{{$page_title}}</div>

            <div class="x_content">                
                <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Order</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                    	<?php $i=0 ?>
                    	@foreach($results as $result)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>
                                <img src="{{asset($result->image)}}" style="height: 70px; width: 100px; box-shadow: 2px 4px 5px darkgrey; margin: 3px;">
                            </td>
                            <td>{{$result->name}}</td>                            
                            <td style="text-align: right;">{{$result->price}}</td>   
                            <td>
                                @if($result->status)
                                <span class="btn-success" style="border-radius: 5px; padding: 4px 8px">Active</span>
                                @else
                                <span class="btn-danger" style="border-radius: 5px; padding: 4px 8px">Diactive</span>
                                @endif
                            </td>    
                            <td>{{$result->order}}</td>                         
                            <td>
                            	<!-- <a href="{{route('product.details', $result)}}" class="btn btn-primary btn-xs" target="_blank"><i class="fa fa-folder"></i> View </a> -->

                            	<a href="{{route($name.'.edit', $result)}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
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