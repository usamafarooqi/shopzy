@extends('frontend.layouts.app')

@section('content')

<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-15">
                    <h2 class="title text-dark text-capitalize">Wishlist</h2>
                </div>
            </div>
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->
<section class="whish-list-section theme1 pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title mb-30 pb-25 text-capitalize">Wishlist</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-center" scope="col">Product Image</th>
                                <th class="text-center" scope="col">Product Name</th>
                                <th class="text-center" scope="col">Stock Status</th>
                                <th class="text-center" scope="col">Qty</th>
                                <th class="text-center" scope="col">Price</th>
                                <th class="text-center" scope="col">action</th>
                                <th class="text-center" scope="col">Single View</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $total = 0 ;
                            //dd($total)
                            @endphp
                            @if(session('wishlist') !=null)
                            @foreach (session('wishlist') as $id => $items)
                            @php
                               $sub_total =$items['price'] * $items['quantity']; 
                               $total += $sub_total;
                            @endphp
                            <tr>
                                <th class="text-center" scope="row">
                                    {{-- <img src="{{ asset('frontend/assets/img/product/2.jpg') }}" alt="img"> --}}
                                    <img  src="{{ asset('storage/'.$items['image']) }}" width="200" height="200"  alt="thumbnail" >
                                </th>
                                <td class="text-center">
                                    <span class="whish-title">{{ $items['name'] }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="badge badge-danger position-static">In Stock</span>
                                </td>
                                <td class="text-center">
                                    <div class="product-count style">
                                        <div class="count d-flex justify-content-center">
                                            <input type="number" min="1" max="10" step="1" value="{{ $items['quantity'] }}">
                                            {{-- <div class="button-group">
                                                <button class="count-btn increment"><i
                                                        class="fas fa-chevron-up"></i></button>
                                                <button class="count-btn decrement"><i
                                                        class="fas fa-chevron-down"></i></button>
                                            </div> --}}
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="whish-list-price">
                                        {{ $items['price'] }}
                                    </span></td>

                                <td class="text-center">
                                    <a href="{{ route('remove.wishlist',[$id]) }}"> <span class="trash"><i class="fas fa-trash-alt"></i> </span></a>
                                </td>
                                <td class="text-center">
                                <a href="{{ route('shop.single',[$id]) }}" class="btn theme-btn--dark1 btn--lg">Single Product</a>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                            {{-- <tr>
                                <th class="text-center" scope="row">
                                    <img src="{{ asset('frontend/assets/img/product/4.jpg') }}" alt="img">
                                </th>
                                <td class="text-center">
                                    <span class="whish-title">Originals Kaval Windbreaker</span>
                                </td>
                                <td class="text-center">
                                    <span class="badge badge-danger position-static">In Stock</span>
                                </td>
                                <td class="text-center">
                                    <div class="product-count style">
                                        <div class="count d-flex justify-content-center">
                                            <input type="number" min="1" max="10" step="1" value="1">
                                            <div class="button-group">
                                                <button class="count-btn increment"><i
                                                        class="fas fa-chevron-up"></i></button>
                                                <button class="count-btn decrement"><i
                                                        class="fas fa-chevron-down"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="whish-list-price">
                                        $38.24
                                    </span>
                                </td>

                                <td class="text-center">
                                    <a href="#"> <span class="trash"><i class="fas fa-trash-alt"></i> </span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn theme-btn--dark1 btn--lg">buy now</a>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center" scope="row">
                                    <img src="{{ asset('frontend/assets/img/product/6.jpg') }}" alt="img">

                                </th>
                                <td class="text-center">
                                    <span class="whish-title">New Balance Arishi</span>
                                </td>
                                <td class="text-center">
                                    <span class="badge badge-danger position-static">In Stock</span>
                                </td>
                                <td class="text-center">
                                    <div class="product-count style">
                                        <div class="count d-flex justify-content-center">
                                            <input type="number" min="1" max="10" step="1" value="1">
                                            <div class="button-group">
                                                <button class="count-btn increment"><i
                                                        class="fas fa-chevron-up"></i></button>
                                                <button class="count-btn decrement"><i
                                                        class="fas fa-chevron-down"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="whish-list-price">
                                        $38.24
                                    </span></td>

                                <td class="text-center">
                                    <a href="#"> <span class="trash"><i class="fas fa-trash-alt"></i> </span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn theme-btn--dark1 btn--lg">buy now</a>
                                </td>
                            </tr> --}}
                        </tbody>
                        {{-- <tfoot>
                            <tr>
                                
                            <td colspan="7" style="padding-left:1150px; color:red"><h4>Grand Total:Rs{{ $total }}</h4></td>
                            </tr>
                            <tr>
                            <td class="text-center" colspan="7"  style="padding-left:1050px;">
                                <a href="#" class="btn theme-btn--dark1 btn--lg">Checkout</a>
                            </td>
                            </tr>
                        </tfoot> --}}
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product tab end -->
    
@endsection