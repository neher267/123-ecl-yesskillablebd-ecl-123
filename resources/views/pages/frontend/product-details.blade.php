@extends('layouts.frontend.app')

@section('content')
<!--Product Details Area Start--> 
<div class="product-details-area section-top-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="product-details-image">
                    <img src="{{ asset('frontend/img/details/3.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="product-details-content">
                    <form action="#" method="post">
                        <h2>Title Product Here</h2>
                        <div class="product-name-rating">
                            <h5>Book</h5>
                            <div class="single-item-rating">
                               <i class="zmdi zmdi-star"></i>
                               <i class="zmdi zmdi-star"></i>
                               <i class="zmdi zmdi-star"></i>
                               <i class="zmdi zmdi-star"></i>
                               <i class="zmdi zmdi-star-half"></i>
                           </div>
                        </div>
                        <p>There are many variations of passages of Lorepsumavable, but the majority have suffered alteration in some form, by injected humour, </p>
                        <div class="qty">
                            <span>Qty</span>
                            <input type="text" name="qty" id="qty" maxlength="12" value="2" class="input-text qty">
                        </div>
                        <h1 class="p-price">$60</h1>
                        <button type="button" class="button-default">ADD TO CART</button>
                        <span>Share this product</span>
                        <div class="social-links">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-google-old"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Product Details Area--> 
<!--Online Product Area Start-->
<div class="product-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3>Related Product</h3>
                        <p>There are many variations of passages</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="single-product-item">
                    <div class="single-product-image">
                        <a href="#"><img src="{{ asset('frontend/img/product/1.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-product-text">
                        <h4><a href="#">Title Product Here</a></h4>
                        <h5>Book</h5>
                        <div class="product-price">
                            <h3>$ 28</h3>
                           <div class="single-item-rating">
                               <i class="zmdi zmdi-star"></i>
                               <i class="zmdi zmdi-star"></i>
                               <i class="zmdi zmdi-star"></i>
                               <i class="zmdi zmdi-star"></i>
                               <i class="zmdi zmdi-star-half"></i>
                           </div>
                        </div>
                        <div class="product-buttons">
                            <button type="button" class="button-default cart-btn">ADD TO CART</button>
                            <button type="button" class="button-default"><i class="zmdi zmdi-favorite"></i></button>
                            <button type="button" class="button-default"><i class="zmdi zmdi-refresh-alt"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="single-product-item">
                    <div class="single-product-image">
                        <a href="#"><img src="{{ asset('frontend/img/product/2.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-product-text">
                        <h4><a href="#">Title Product Here</a></h4>
                        <h5>Book</h5>
                        <div class="product-price">
                            <h3>$ 28</h3>
                           <div class="single-item-rating">
                               <i class="zmdi zmdi-star"></i>
                               <i class="zmdi zmdi-star"></i>
                               <i class="zmdi zmdi-star"></i>
                               <i class="zmdi zmdi-star"></i>
                               <i class="zmdi zmdi-star-half"></i>
                           </div>
                        </div>
                        <div class="product-buttons">
                            <button type="button" class="button-default cart-btn">ADD TO CART</button>
                            <button type="button" class="button-default"><i class="zmdi zmdi-favorite"></i></button>
                            <button type="button" class="button-default"><i class="zmdi zmdi-refresh-alt"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="single-product-item">
                    <div class="single-product-image">
                        <a href="#"><img src="{{ asset('frontend/img/product/3.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-product-text">
                        <h4><a href="#">Title Product Here</a></h4>
                        <h5>Book</h5>
                        <div class="product-price">
                            <h3>$ 28</h3>
                           <div class="single-item-rating">
                               <i class="zmdi zmdi-star"></i>
                               <i class="zmdi zmdi-star"></i>
                               <i class="zmdi zmdi-star"></i>
                               <i class="zmdi zmdi-star"></i>
                               <i class="zmdi zmdi-star-half"></i>
                           </div>
                        </div>
                        <div class="product-buttons">
                            <button type="button" class="button-default cart-btn">ADD TO CART</button>
                            <button type="button" class="button-default"><i class="zmdi zmdi-favorite"></i></button>
                            <button type="button" class="button-default"><i class="zmdi zmdi-refresh-alt"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 hidden-sm">
                <div class="single-product-item">
                    <div class="single-product-image">
                        <a href="#"><img src="{{ asset('frontend/img/product/4.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-product-text">
                        <h4><a href="#">Title Product Here</a></h4>
                        <h5>Book</h5>
                        <div class="product-price">
                            <h3>$ 28</h3>
                           <div class="single-item-rating">
                               <i class="zmdi zmdi-star"></i>
                               <i class="zmdi zmdi-star"></i>
                               <i class="zmdi zmdi-star"></i>
                               <i class="zmdi zmdi-star"></i>
                               <i class="zmdi zmdi-star-half"></i>
                           </div>
                        </div>
                        <div class="product-buttons">
                            <button type="button" class="button-default cart-btn">ADD TO CART</button>
                            <button type="button" class="button-default"><i class="zmdi zmdi-favorite"></i></button>
                            <button type="button" class="button-default"><i class="zmdi zmdi-refresh-alt"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="pagination-content number">
                    <ul class="pagination">
                        <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li class="current"><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Online Product Area-->
@endsection