@extends('layouts.frontend.app')

@section('content')
<div class="shop-grid-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="single-product-item">
                    <div class="single-product-image">
                        <a href="#"><img src="{{ asset('frontend/img/product/1.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-product-text">
                        <h4><a href="{{ route('product-details',1) }}">Title Product Here</a></h4>
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
                        <h4><a href="{{ route('product-details',1) }}">Title Product Here</a></h4>
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
                        <h4><a href="{{ route('product-details',1) }}">Title Product Here</a></h4>
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
                        <a href="#"><img src="{{ asset('frontend/img/product/4.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-product-text">
                        <h4><a href="{{ route('product-details',1) }}">Title Product Here</a></h4>
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
                        <a href="#"><img src="{{ asset('frontend/img/product/5.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-product-text">
                        <h4><a href="{{ route('product-details',1) }}">Title Product Here</a></h4>
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
                        <a href="#"><img src="{{ asset('frontend/img/product/4.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-product-text">
                        <h4><a href="{{ route('product-details',1) }}">Title Product Here</a></h4>
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
                        <a href="#"><img src="{{ asset('frontend/img/product/6.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-product-text">
                        <h4><a href="{{ route('product-details',1) }}">Title Product Here</a></h4>
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
                        <a href="#"><img src="{{ asset('frontend/img/product/1.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-product-text">
                        <h4><a href="{{ route('product-details',1) }}">Title Product Here</a></h4>
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
                        <a href="#"><img src="{{ asset('frontend/img/product/1.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-product-text">
                        <h4><a href="{{ route('product-details',1) }}">Title Product Here</a></h4>
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
                        <h4><a href="{{ route('product-details',1) }}">Title Product Here</a></h4>
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
                        <h4><a href="{{ route('product-details',1) }}">Title Product Here</a></h4>
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
                        <a href="#"><img src="{{ asset('frontend/img/product/4.jpg') }}" alt=""></a>
                    </div>
                    <div class="single-product-text">
                        <h4><a href="{{ route('product-details',1) }}">Title Product Here</a></h4>
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
@endsection