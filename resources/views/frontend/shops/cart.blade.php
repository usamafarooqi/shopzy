@extends('frontend.layouts.app')

@section('content')

<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-15">
                    <h2 class="title text-dark text-capitalize">cart</h2>
                </div>
            </div>
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">cart</li>
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
                <h3 class="title mb-30 pb-25 text-capitalize">Your cart items</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-center" scope="col">Product Image</th>
                                <th class="text-center" scope="col">Product Name</th>
                                
                                <th class="text-center" scope="col">Qty</th>
                                <th class="text-center" scope="col">Price</th>
                                <th class="text-center" scope="col">Sub Total</th>
                                <th class="text-center" scope="col">action</th>
                                <th class="text-center" scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $total = 0 ;
                            //dd($total)
                            @endphp
                            @if(session('cart') !=null)
                            @foreach (session('cart') as $id => $item)
                            @php
                               $sub_total =$item['price'] * $item['quantity']; 
                               $total += $sub_total;
                            @endphp
                            <tr>
                                <th class="text-center" scope="row">
                                    {{-- <img src="{{ asset('frontend/assets/img/product/2.jpg') }}" alt="img"> --}}
                                    <img  src="{{ asset('storage/'.$item['image']) }}" width="200" height="200"  alt="thumbnail" >
                                </th>
                                <td class="text-center">
                                <span class="whish-title">{{ $item['name'] }}</span>
                                </td>
                                <form action="{{ route('update.cart',[$id])}}" method="POST">
                                    @csrf
                                    {{ method_field('PUT') }} 
                                    <td class="text-center">
                                        <div class="product-count style">
                                            <div class="count d-flex justify-content-center">
                                            
                                                <input type="number" name="quantity" min="1" max="10" step="1" value="{{ $item['quantity'] }}">
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
                                            Rs{{ $item['price'] }}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                            Rs{{ $sub_total }}
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('remove',[$id]) }}"> <span class="trash"><i class="fas fa-trash-alt"></i> </span></a>
                                    </td>
                                    <td class="text-center">      
                                        <input type="submit" class="btn theme-btn--dark1 btn--lg" value="Update">
                                    </td>
                                </form>
                            </tr>
                            @endforeach
                            @endif
                           
                        </tbody>
                        <tfoot>
                            <tr>
                                
                            <td colspan="7" style="padding-left:1150px; color:red"><h4>Grand Total:Rs{{ $total }}</h4></td>
                            </tr>
                            <tr>
                            <td class="text-center" colspan="7"  style="padding-left:1050px;">
                                <a href="{{ route('checkout.page') }}" class="btn theme-btn--dark1 btn--lg">Checkout</a>
                            </td>
                            </tr>
                        </tfoot>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product tab end -->
    
@endsection