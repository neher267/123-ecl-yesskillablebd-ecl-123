@extends('layouts.frontend.app')

@section('content')
	<!--Slider Area Start-->
	@include('pages.frontend.partials.index._slide')

	<div id="app">
		<!-- <example-component></example-component> -->

		<!-- <question></question> -->

		<!-- <quiz-question></quiz-question> -->

		<!-- <task-list></task-list> -->
	</div>

	<!--End of Slider Area-->

	<!--About Area Start--> 
	@include('pages.frontend.partials.index._about')
	<!--End of About Area-->

	<!--Course Area Start-->
	@include('pages.frontend.partials.index._courses')
	<!--End of Course Area-->

	<!--Fun Factor Area Start-->
	<div style="margin-bottom: 100px;">
		@include('pages.frontend.partials.index._fun-factor')
	</div>
	
	<!--End of Fun Factor Area-->  

	<!--Latest News Area Start--> 
	{{-- @include('pages.frontend.partials.index._news') --}}
	<!--End of Latest News Area--> 

	<!--Online Product Area Start-->
	{{-- @include('pages.frontend.partials.index._products') --}}
	<!--End of Online Product Area-->

	<!--Testimonial Area Start-->
	{{-- @include('pages.frontend.partials.index._testimonial') --}}
	<!--End of Testimonial Area-->
	
	<!--Event Area Start-->
	{{-- @include('pages.frontend.partials.index._events') --}}
	<!--End of Event Area-->
@endsection