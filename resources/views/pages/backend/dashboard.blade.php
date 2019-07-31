@extends('layouts.backend.app')

@section('content')
@if(Auth::user()->role != 3)
<div class="row top_tiles" style="color: white">
    <!-- <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats color1">
            <div class="icon"><i class="fa fa-users" aria-hidden="true"></i></div>
            <div class="count">{{$users}}</div>
            <h3>Users</h3>
        </div>
    </div>
 -->
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats color9">
            <div class="icon"><i class="fa fa-check-square-o"></i></div>
            <div class="count">{{$inquiryes}}</div>
            <h3>Inquiryes</h3>
        </div>
    </div>
</div>
@endif
@endsection