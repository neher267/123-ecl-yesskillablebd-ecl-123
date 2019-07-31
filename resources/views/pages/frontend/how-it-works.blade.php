@extends('layouts.frontend.app')

@section('content')
@include('layouts.frontend.partials._breadcrumb', ['image'=>'how-pla-bc.png'])
<div class="about-page-area section-padding">
    <div class="container">        
        <div class="row">
            <div class="col-md-12">
                <img src="{{ asset('images/how-it-works.jpg' )}}">
            </div>
        </div>
    </div>
</div>

@endsection