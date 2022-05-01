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
                                    <h4 class="mb-0">Products</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                            <li class="breadcrumb-item active">Products</li>
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
                                        <div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div>
                                                        <h5>SHOES </h5>
                                                        <ol class="breadcrumb p-0 bg-transparent mb-2">
                                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Fashion</a></li>
                                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Brand</a></li>
                                                            <li class="breadcrumb-item active">Shoes</li>
                                                        </ol>
                                                    </div>
                                                </div>
            
                                                <div class="col-md-6">
                                                    <div class="form-inline float-md-right">
                                                        <div class="search-box ml-2">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control rounded" placeholder="Search...">
                                                                <i class="mdi mdi-magnify search-icon"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            <ul class="list-inline my-3 ecommerce-sortby-list">
                                                <li class="list-inline-item"><span class="font-weight-medium font-family-secondary">Sort by:</span></li>
                                                <li class="list-inline-item active"><a href="#">Popularity</a></li>
                                                <li class="list-inline-item"><a href="#">Newest</a></li>
                                                <li class="list-inline-item"><a href="#">Discount</a></li>
                                            </ul>

                                            <div class="row no-gutters">
                                                @foreach ($products as $product)  
                                                    <div class="col-xl-4 col-sm-6">
                                                        <div class="product-box">                                             
                                                            <div class="product-img">
                                                                <div style="float: left">
                                                                    <a  href="#" onclick="confirmDelete('{{ $product->id }}')"> <i class=" fas fa-trash-alt"></i></a>
                                                                    <form id="delete-{{ $product->id }}" action="{{ route('dashboard.product.destroy',$product->id) }}" method="POST" style="display: none;">
                                                                        @method('DELETE')
                                                                        @csrf
                                                                     
                                                                    </form>

                                                                </div>
                                                                <div  style="margin-left:300px; float: left;">
                                                                    <a href="{{ route('dashboard.product.edit',$product->id) }}">
                                                                        <i class=" fas fa-user-edit"></i>
                                                                    </a>
                                                                </div>
                                                                
                                                            <a href="{{ route('dashboard.product.show',$product->id) }}"><img src="{{ asset('storage/'.$product->productImage->first()->image) }}" style="height: 200px; width: 200px;" alt="" class="img-fluid mx-auto d-block"></a>
                                                            </div>
                                                            <div class="text-center">
                                                                <p class="font-size-12 mb-1">{{ $product->category->name }} </p>
                                                                <h5 class="font-size-15"><a href="#" class="text-dark">{{ $product->name }}</a></h5>
                                                                <h5 class="mt-3 mb-0">Rs:{{ $product->price }}</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>

                                           
                                        </div>
                                    </div>
                                </div>
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

<script type="text/javascript">
    function confirmDelete(id){
    let choice = confirm("Are You sure, You want to Delete this record ?")
    if(choice){
    document.getElementById('delete-'+id).submit();
    }
    }
    </script>

@endsection