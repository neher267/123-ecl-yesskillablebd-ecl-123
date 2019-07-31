@extends('layouts.frontend.app') @section('content')
@include('layouts.frontend.partials._breadcrumb', ['image'=>'other-bc.jpg'])
<style>
    .cards {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        border-radius: 5px;
    }
    
    .cards:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }
    
    img {
        border-radius: 5px 5px 0 0;
        height: 150px
    }
    
    .containers {
        padding: 2px 16px;
    }
</style>

<div class="course-area section-padding bg-white">
    <div class="container">
        <div class="row">
          @foreach($results as $result)
            <div class="col-md-3 col-sm-4 col-xs-12 pt-10">
                <div class="cards">
                    <img src="{{ asset($result->image) }}" alt="Avatar" style="width:100%">
                    <div class="containers">
                        <h4 class="pb-8 pt-10 text-center"><b>{{$result->title}}</b></h4>
                        <p class="text-justify">
                          <?php echo html_entity_decode($result->body); ?>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection