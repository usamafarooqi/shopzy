@extends('frontend.layouts.app')

@section('content')

<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme3 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="shop-grid-3-column.html">Bags & Shoes</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Originals Windbreaker  Winter Jacket</li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product-single start -->
<section class="product-single theme3 pt-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="position-relative">
                    <span class="badge badge-danger top-right">New</span>
                </div>
                <div class="product-sync-init mb-20">
                    @foreach ($product->productImage as $image)
                    <div class="single-product">
                        <div class="product-thumb">
                            {{-- <img src="{{ asset('frontend/assets/img/single-product/1.jpg') }}" alt="product-thumb"> --}}
                            <img src="{{ asset('storage/'.$image->image) }}" width="586" height="586" alt="Product img">
                        </div>
                    </div>
                    @endforeach
                    
                    {{-- <!-- single-product end -->
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="{{ asset('frontend/assets/img/single-product/2.jpg') }}" alt="product-thumb">
                           
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="{{ asset('frontend/assets/img/single-product/3.jpg') }}" alt="product-thumb">
                           
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="{{ asset('frontend/assets/img/single-product/4.jpg') }}" alt="product-thumb">
                           
                        </div>
                    </div> --}}
                    <!-- single-product end -->
                </div>

                <div class="product-sync-nav single-product">
                    @foreach ($product->productImage as $image)
                    <div class="single-product">
                        <div class="product-thumb">
                            <a href="javascript:void(0)">  <img src="{{ asset('storage/'.$image->image) }}" width="103" height="103" alt="Product img"></a>
                        </div>
                    </div>
                    @endforeach
                    {{-- <!-- single-product end -->
                    <div class="single-product">
                        <div class="product-thumb">
                            <a href="javascript:void(0)"> <img src="{{ asset('frontend/assets/img/single-product/2.2x.jpg') }}"
                                    alt="product-thumb"></a>
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="single-product">
                        <div class="product-thumb">
                            <a href="javascript:void(0)"><img src="{{ asset('frontend/assets/img/single-product/3.2x.jpg') }}"
                                    alt="product-thumb"></a>
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="single-product">
                        <div class="product-thumb">
                            <a href="javascript:void(0)"><img src="{{ asset('frontend/assets/img/single-product/4.2x.jpg') }}"
                                    alt="product-thumb"></a>
                        </div>
                    </div> --}}
                    <!-- single-product end -->
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-md-0">
               
                <div class="single-product-info">
                    <div class="single-product-head">
                    <h2 class="title mb-20">{{ $product->name }}</h2>
                        {{-- <div class="star-content mb-20">
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <a href="#" id="write-comment"><span class="ml-2"><i class="far fa-comment-dots"></i></span>
                                Read reviews <span>(1)</span></a>
                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter"><span class="edite"><i
                                        class="far fa-edit"></i></span> Write a review</a>
                        </div> --}}
                    </div>
                    <div class="product-body mb-40">
                        <div class="d-flex align-items-center mb-30">
                            <h6 class="product-price mr-20"><del class="del">$23.90</del>
                                <span class="onsale">Rs:{{ $product->price }}</span></h6>
                            <span class="badge position-static bg-dark rounded-0">{{ $product->discount }}%</span>
                        </div>
                        {{-- <p>Block out the haters with the fresh adidas® Originals Kaval Windbreaker Jacket.</p> --}}
                        <ul>
                            <li>{{ $product->short_description }}</li>
                            <li>{{ $product->long_description }}</li>
                            {{-- <li>Plain-woven jacket specifically constructed for freedom of movement.</li> --}}
                        </ul>
                    </div>
                    <div class="product-footer">
                        <div class="product-count style d-flex flex-column flex-sm-row mt-30 mb-30">
                            {{-- <div class="count d-flex">
                                <input type="number" min="1" max="10" step="1" value="1">
                                <div class="button-group">
                                    <button class="count-btn increment"><i class="fas fa-chevron-up"></i></button>
                                    <button class="count-btn decrement"><i class="fas fa-chevron-down"></i></button>
                                </div>
                            </div> --}}
                            <div>
                            <a href="{{ route('add.cart',$product->id) }}"> <button class="btn theme-btn--dark3 btn--xl mt-5 mt-sm-0 rounded-5">
                                    <span class="mr-2"><i class="ion-android-add"></i></span>
                                    Add to cart
                                </button></a>
                            </div>
                        </div>
                        <div class="addto-whish-list">
                            <a href="{{ route('wishlist',$product->id) }}"><i class="icon-heart"></i> Add to wishlist</a>
                            {{-- <a href="#"><i class="icon-shuffle"></i> Add to compare</a> --}}
                        </div>
                        <div class="pro-social-links mt-10">
                            <ul class="d-flex align-items-center">
                                <li class="share">Share</li>
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-google"></i></a></li>
                                <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product-single end -->
<!-- product tab start -->
<div class="product-tab theme3 bg-white pt-60 pb-80">
    <div class="container">
        <div class="product-tab-nav">
            <div class="row align-items-center">
                <div class="col-12">
                    <nav class="product-tab-menu single-product">
                        <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                    role="tab" aria-controls="pills-home" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                    role="tab" aria-controls="pills-profile" aria-selected="false">Product Details</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                    role="tab" aria-controls="pills-contact" aria-selected="false">Reviews</a>
                            </li> --}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- product-tab-nav end -->
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="pills-tabContent">
                    <!-- first tab-pane -->
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <div class="single-product-desc">
                            <ul>
                                <li>
                                   {{ $product->short_description  }}
                                </li>
                                <li>
                                    {{ $product->long_description  }}
                                </li>
                                {{-- <li>
                                    Regular fit is eased, but not sloppy, and perfect for any activity.
                                </li>
                                <li>
                                    Plain-woven jacket specifically constructed for freedom of movement.
                                </li>
                                <li>
                                    Soft fleece lining delivers lightweight warmth.
                                </li>
                                <li>
                                    Attached drawstring hood.
                                </li>
                                <li>
                                    Full-length zip closure.
                                </li>
                                <li>
                                    Long sleeves with stretch cuffs.
                                </li>
                                <li>
                                    Side hand pockets.
                                </li>
                                <li>
                                    Brand graphics at left chest and back.
                                </li>
                                <li>
                                    Straight hem.
                                </li>
                                <li>
                                    Shell: 100% nylon;<br>Lining: 100% polyester.
                                </li>
                                <li>
                                    Machine wash, tumble dry.
                                </li>
                                <li>
                                    Imported.
                                </li>
                                <li>
                                    <div>Product measurements were taken using size MD. Please note that
                                        measurements may vary by size.</div>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                    <!-- second tab-pane -->
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="single-product-desc">
                            <div class="studio-thumb">
                                <a href="#"><img class="mb-30" src="{{ asset('frontend/assets/img/stodio.jpg') }}" alt="studio-thumb"></a>
                                {{-- <h6 class="mb-2">Reference <small>demo_1</small> </h6>
                                <h6>In stock <small>300 Items</small> </h6>
                                <h3>Data sheet</h3> --}}
                            </div>
                            <div class="product-features">
                                <table class="table table-nowrap mb-0">
                                    <thead>
                                        <th  scope="row" style="width: 400px;">Name</th>
                                        <th scope="row" style="width: 400px;">value</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($product->productAttribute as $attribute)
                                        <tr>
                                            <td>{{ $attribute->name }}</td>
                                            <td>{{ $attribute->value }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{-- <ul>
                                    <li><span>Compositions</span></li>
                                    <li><span>Cotton</span></li>
                                    <li><span>Paper Type</span></li>
                                    <li><span>Doted</span></li>
                                    <li><span>Color</span></li>
                                    <li><span>Black</span></li>
                                    <li><span>Size</span></li>
                                    <li><span>L</span></li>
                                    <li><span>Frame Size</span></li>
                                    <li><span>40x60cm</span></li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                    <!-- third tab-pane -->
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="single-product-desc">
                            <div class="grade-content">
                                <span class="grade">Grade </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <h6 class="sub-title">test</h6>
                                <p>23/09/2020</p>
                                <h4 class="title">test</h4>
                                <p>test</p>
                            </div>
                            <hr class="hr">
                            <div class="grade-content">
                                <span class="grade">Grade </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <h6 class="sub-title">Hastheme</h6>
                                <p>23/09/2020</p>
                                <h4 class="title">demo</h4>
                                <p>ok !</p>
                                <a href="#" class="btn theme-btn--dark3 theme-btn--dark3-sm btn--sm rounded-5 mt-15"
                                    data-toggle="modal" data-target="#exampleModalCenter">Write your review !</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product tab end -->
<!-- new arrival section start -->
<section class="theme3 bg-white pb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-30">
                    <h2 class="title text-dark text-capitalize">You might also like</h2>
                    <p class="text mt-10">Add Related products to weekly line up
                    </p>
                </div>
            </div>
            <div class="col-12">
                <div class="product-slider-init slick-nav">
                    {{-- <div class="slider-item"> --}}
                        @if($mustLike !=null)
                        @for($i = 0; $i<count($mustLike); $i++) 
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="{{ route('shop.single',$mustLike[$i]->id) }}">
                                            {{-- <img class="first-img" src="{{ asset('frontend/assets/img/new-products/1.jpg') }}" alt="thumbnail">
                                            <img class="second-img" src="{{ asset('frontend/assets/img/new-products/1.1.jpg') }}"
                                                alt="thumbnail"> --}}
                                                <img  src="{{ asset('storage/'.$mustLike[$i]->productImage->first()->image) }}" width="360" height="360"  alt="thumbnail" >
                                        </a>
                                        <!-- product links -->
                                        <ul class="product-links d-flex justify-content-center">
                                            <li>
                                                <a href="{{ route('wishlist',$mustLike[$i]->id) }}">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="add to wishlist" class="icon-heart"> </span>
                                                </a>
                                            </li>
                                            {{-- <li>
                                                <a href="#" data-toggle="modal" data-target="#compare">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Add to compare" class="icon-shuffle"></span>
                                                </a>
                                            </li> --}}
                                            <li>
                                                <a href="{{ route('shop.single',$mustLike[$i]->id) }}" data-toggle="modal" data-target="#quick-view">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Quick view" class="icon-magnifier"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                        <div class="product-desc" style="padding-left:85px">
                                        <h3 class="title"><a href="shop-grid-4-column.html">{{ $mustLike[$i]->name }}</a></h3>
                                            {{-- <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div> --}}
                                          </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div style="float: left"><h6 class="product-price">Rs:{{ $mustLike[$i]->price }}</h6></div>
                                                <div style="float: left; margin-left:90px;"><button style="margin-left:80px" class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button></div>
                                            </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                        @endif
                   {{-- -- </div> --}}
                    <!-- slider-item end -->
                    {{-- <div class="slider-item">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="{{ asset('frontend/assets/img/new-products/2.jpg') }}" alt="thumbnail">
                                        </a>
                                        <!-- product links -->
                                        <ul class="product-links d-flex justify-content-center">
                                            <li>
                                                <a href="wishlist.html">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="add to wishlist" class="icon-heart"> </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#compare">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Add to compare" class="icon-shuffle"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#quick-view">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Quick view" class="icon-magnifier"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">New Balance
                                                    Fresh Foam Kaymin from new zeland</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price">$11.90</h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-success top-left">-10%</span>
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="{{ asset('frontend/assets/img/new-products/3.jpg') }}" alt="thumbnail">
                                        </a>
                                        <!-- product links -->
                                        <ul class="product-links d-flex justify-content-center">
                                            <li>
                                                <a href="wishlist.html">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="add to wishlist" class="icon-heart"> </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#compare">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Add to compare" class="icon-shuffle"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#quick-view">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Quick view" class="icon-magnifier"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">Juicy
                                                    Couture
                                                    Tricot Logo Stripe Jacket</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price"> $21.51</h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="{{ asset('frontend/assets/img/new-products/4.jpg') }}" alt="thumbnail">
                                            <img class="second-img" src="{{ asset('frontend/assets/img/new-products/4.1.jpg') }}"
                                                alt="thumbnail">
                                        </a>
                                        <!-- product links -->
                                        <ul class="product-links d-flex justify-content-center">
                                            <li>
                                                <a href="wishlist.html">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="add to wishlist" class="icon-heart"> </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#compare">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Add to compare" class="icon-shuffle"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#quick-view">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Quick view" class="icon-magnifier"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">Juicy
                                                    Couture
                                                    Tricot Logo Stripe Jacket</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price"><del class="del">$23.90</del>
                                                    <span class="onsale">$21.51</span></h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="{{ asset('frontend/assets/img/new-products/5.jpg') }}" alt="thumbnail">
                                        </a>
                                        <!-- product links -->
                                        <ul class="product-links d-flex justify-content-center">
                                            <li>
                                                <a href="wishlist.html">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="add to wishlist" class="icon-heart"> </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#compare">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Add to compare" class="icon-shuffle"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#quick-view">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Quick view" class="icon-magnifier"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                                    Men's
                                                    Slim Fit Shirt Short Sleeve...</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price">$11.90</h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="{{ asset('frontend/assets/img/new-products/6.jpg') }}" alt="thumbnail">
                                        </a>
                                        <!-- product links -->
                                        <ul class="product-links d-flex justify-content-center">
                                            <li>
                                                <a href="wishlist.html">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="add to wishlist" class="icon-heart"> </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#compare">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Add to compare" class="icon-shuffle"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#quick-view">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Quick view" class="icon-magnifier"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                                    Men's
                                                    Slim Fit Shirt Short Sleeve...</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price"><del class="del">$23.90</del>
                                                    <span class="onsale">$21.51</span></h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- slider-item end -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- new arrival section end -->
<!-- new arrival section start -->
<section class="theme3 bg-white pb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-30">
                    <h2 class="title text-dark text-capitalize">Other Products </h2>
                    <p class="text mt-10">Many other products are available in this category </p>
                </div>
            </div>
            <div class="col-12">
                <div class="product-slider-init slick-nav">
                    <!-- slider-item end -->
                    {{-- <div class="slider-item"> --}}
                        @if($otherProduct !=null)
                        @for($i = 0; $i<count($otherProduct); $i++) 
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-right">New</span>
                                       <a href="{{ route('shop.single',$otherProduct[$i]->id) }}">
                                            {{-- <img class="first-img" src="{{ asset('frontend/assets/img/new-products/2.jpg') }}" alt="thumbnail"> --}}
                                            <img  src="{{ asset('storage/'.$otherProduct[$i]->productImage->first()->image) }}" width="360" height="360"  alt="thumbnail" >
                                            
                                        </a>
                                        <!-- product links -->
                                        <ul class="product-links d-flex justify-content-center">
                                            <li>
                                                <a href="{{ route('wishlist',$otherProduct[$i]->id) }}">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="add to wishlist" class="icon-heart"> </span>
                                                </a>
                                            </li>
                                            {{-- <li>
                                                <a href="#" data-toggle="modal" data-target="#compare">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Add to compare" class="icon-shuffle"></span>
                                                </a>
                                            </li> --}}
                                            <li>
                                                <a href="{{ route('shop.single',$otherProduct[$i]->id) }}" data-toggle="modal" data-target="#quick-view">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Quick view" class="icon-magnifier"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                        <div class="product-desc" style="padding-left:75px">
                                        <h3 class="title"><a href="shop-grid-4-column.html">{{ $otherProduct[$i]->name }}</a></h3>
                                            {{-- <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div> --}}
                                        </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div style="float: left"><h6 class="product-price">Rs:{{ $otherProduct[$i]->price }}</h6></div>
                                                <div style="float: left; margin-left:90px;"><button style="margin-left:80px" class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button></div>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                        @endif
                    {{-- </div> --}}
                    {{-- <div class="slider-item">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="{{ asset('frontend/assets/img/new-products/1.jpg') }}" alt="thumbnail">
                                            <img class="second-img" src="{{ asset('frontend/assets/img/new-products/1.1.jpg') }}"
                                                alt="thumbnail">
                                        </a>
                                        <!-- product links -->
                                        <ul class="product-links d-flex justify-content-center">
                                            <li>
                                                <a href="wishlist.html">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="add to wishlist" class="icon-heart"> </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#compare">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Add to compare" class="icon-shuffle"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#quick-view">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Quick view" class="icon-magnifier"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                                    Men's Slim Fit Shirt Short Sleeve...</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price">$11.90</h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-success top-left">-10%</span>
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="{{ asset('frontend/assets/img/new-products/3.jpg') }}" alt="thumbnail">
                                        </a>
                                        <!-- product links -->
                                        <ul class="product-links d-flex justify-content-center">
                                            <li>
                                                <a href="wishlist.html">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="add to wishlist" class="icon-heart"> </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#compare">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Add to compare" class="icon-shuffle"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#quick-view">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Quick view" class="icon-magnifier"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">Juicy
                                                    Couture
                                                    Tricot Logo Stripe Jacket</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price"> $21.51</h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="{{ asset('frontend/assets/img/new-products/4.jpg') }}" alt="thumbnail">
                                            <img class="second-img" src="{{ asset('frontend/assets/img/new-products/4.1.jpg') }}"
                                                alt="thumbnail">
                                        </a>
                                        <!-- product links -->
                                        <ul class="product-links d-flex justify-content-center">
                                            <li>
                                                <a href="wishlist.html">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="add to wishlist" class="icon-heart"> </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#compare">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Add to compare" class="icon-shuffle"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#quick-view">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Quick view" class="icon-magnifier"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">Juicy
                                                    Couture
                                                    Tricot Logo Stripe Jacket</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price"><del class="del">$23.90</del>
                                                    <span class="onsale">$21.51</span></h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="{{ asset('frontend/assets/img/new-products/5.jpg') }}" alt="thumbnail">
                                        </a>
                                        <!-- product links -->
                                        <ul class="product-links d-flex justify-content-center">
                                            <li>
                                                <a href="wishlist.html">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="add to wishlist" class="icon-heart"> </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#compare">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Add to compare" class="icon-shuffle"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#quick-view">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Quick view" class="icon-magnifier"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                                    Men's
                                                    Slim Fit Shirt Short Sleeve...</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price">$11.90</h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="{{ asset('frontend/assets/img/new-products/6.jpg') }}" alt="thumbnail">
                                        </a>
                                        <!-- product links -->
                                        <ul class="product-links d-flex justify-content-center">
                                            <li>
                                                <a href="wishlist.html">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="add to wishlist" class="icon-heart"> </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#compare">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Add to compare" class="icon-shuffle"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#quick-view">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Quick view" class="icon-magnifier"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                                    Men's
                                                    Slim Fit Shirt Short Sleeve...</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price"><del class="del">$23.90</del>
                                                    <span class="onsale">$21.51</span></h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- slider-item end -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- new arrival section end -->
    
@endsection