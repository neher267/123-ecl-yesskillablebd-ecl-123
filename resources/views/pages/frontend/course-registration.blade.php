@extends('layouts.frontend.app')

@section('content')
@include('layouts.frontend.partials._breadcrumb', ['image'=>'other-bc.jpg'])
<!--About Page Area Start-->
<div class="about-page-area section-padding">
    <div class="container">
        @include('layouts.frontend.partials._registration')
    </div>
</div>
@endsection