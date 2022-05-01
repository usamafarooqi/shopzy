@extends('dashboard.layouts.app')

@section('content')

 <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Product Details</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                            <li class="breadcrumb-item active">Product Details</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-5">
                                                <div class="product-detail">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            @foreach ($product->productImage as $image)
                                                            
                                                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> 
                                                                <a class="nav-link active" id="product-1-tab" data-toggle="pill" href="#product-1" role="tab">
                                                                    {{-- <img src="{{ asset('dashboard/assets/images/product/img-1.png') }}" alt="" class="img-fluid mx-auto d-block tab-img rounded"> --}}
                                                                    <img src="{{ asset('storage/'.$image->image) }}" width="48" height="48" alt="Product img">
                                                                </a>
                                                               
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                        <div class="col-md-8 col-9">
                                                            <div class="tab-content" id="v-pills-tabContent">
                                                                <div class="tab-pane fade show active" id="product-1" role="tabpanel">
                                                                    <div class="product-img">
                                                                        <img src="{{ asset('storage/'.$product->productImage->first()->image) }}" alt="" class="img-fluid mx-auto d-block" data-zoom="assets/images/product/img-1.png">
                                                                    </div>
                                                                </div>
                                                               
                                                                {{-- <div class="tab-pane fade" id="product-2" role="tabpanel">
                                                                    <div class="product-img">
                                                                        <img src="{{ asset('dashboard/assets/images/product/img-5.png') }}" alt="" class="img-fluid mx-auto d-block">
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="product-3" role="tabpanel">
                                                                    <div class="product-img">
                                                                        <img src="{{ asset('dashboard/assets/images/product/img-3.png') }}" alt="" class="img-fluid mx-auto d-block">
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="product-4" role="tabpanel">
                                                                    <div class="product-img">
                                                                        <img src="{{ asset('dashboard/assets/images/product/img-4.png') }}" alt="" class="img-fluid mx-auto d-block">
                                                                    </div>
                                                                </div> --}}
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end product img -->
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="mt-4 mt-xl-3">
                                                <a href="#" class="text-primary">{{ $product->category->first()->name }}</a>
                                                    <h5 class="mt-1 mb-3">{{ $product->name }}</h5>
                                                    <h5 class="mt-2">{{ $product->price }} <span class="text-danger font-size-12 ml-2">{{ $product->discount }}%OFF</span></h5>
                                                    <hr class="my-4">
                                                    <div class="row">
                                                    <div class="col-md-12"> 
                                                    @for ($i = 0;$i < count($product->productColor);$i++)          
                                                        <button class="accordion"><div><div style="float: left;">{{ $product->productColor[$i]->color }}</div> <div style="float: left; padding-left:360px;"><img src="{{ asset('storage/'.$product->productColor[$i]->image) }}" style="width:35px; height:40px;"  alt="Product img"></div></div></button>
                                                        <div class="panel">
                                                        <p>
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                    <th>Size</th>
                                                                    <th>Sku</th>
                                                                    <th>Quantity</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($product->productColor[$i]->productSize as $size)                                                                        
                                                                    <tr>
                                                                    <td>{{ $size->size }}</td>
                                                                    <td>{{ $size->sku }}</td>
                                                                    <td>{{ $size->quantity }}</td>
                                                                    </tr>
                                                                    {{-- <tr>
                                                                    <td>John</td>
                                                                    <td>Doe</td>
                                                                    <td>john@example.com</td>
                                                                    </tr>
                                                                    <tr>
                                                                    <td>John</td>
                                                                    <td>Doe</td>
                                                                    <td>john@example.com</td>
                                                                    </tr> --}}
                                                                    @endforeach
                                                                    
                                                                </tbody>
                                                                </table>
                                                        </p>
                                                        </div>
                                                    @endfor
                                                        
                                                    </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="mt-4">
                                            <h5 class="font-size-14 mb-3">Product description: </h5>
                                            <div class="product-desc">
                                                <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                                    <li class="nav-item">
                                                      <a class="nav-link" id="desc-tab" data-toggle="tab" href="#desc" role="tab">Description</a>
                                                    </li>
                                                    <li class="nav-item">
                                                      <a class="nav-link active" id="specifi-tab" data-toggle="tab" href="#specifi" role="tab">Specifications</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content border border-top-0 p-4">
                                                    <div class="tab-pane fade" id="desc" role="tabpanel">
                                                        <div>
                                                            <h6>Short Description: </h6>
                                                            <p>{{ $product->short_description }}</p>
                                                            <h6>Long Description:</h6>
                                                            <p>{{ $product->long_description }}</p>

                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade show active" id="specifi" role="tabpanel">
                                                        <div class="table-responsive">
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
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                   
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                            
                        </div>
                        

                        <!-- end row -->

                        
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Nazox.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

@endsection

@section('scripts')
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;
    
    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
          panel.style.display = "none";
        } else {
          panel.style.display = "block";
        }
      });
    }
    </script>
@endsection