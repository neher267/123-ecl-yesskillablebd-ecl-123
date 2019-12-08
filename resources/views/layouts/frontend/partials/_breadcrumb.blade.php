<style type="text/css">
    .breadcrumb-banner-area {
    background: rgba(0, 0, 0, 0) url(<?php echo is_object($image) ? asset($image->background):asset("frontend/img/banner/$image") ?>) no-repeat scroll 0 0;
    background-size: 100% 100%;
}
</style>

<div class="breadcrumb-banner-area about-area-plc">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    @if(is_object($image))
                    <h2 class="text-center" style="font-size: 32px;"> {{ $image->name }} </h2>
                    @else
                    <h1 class="text-center uc"> {{ $title }} </h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb text-center">
                            <li><a href="index.html">Home</a></li>
                            <li class="uc"> {{ $title }} </li>
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>