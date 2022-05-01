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
                                    <h4 class="mb-0">Order Detail</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href=" {{ route('dashboard.index') }} ">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Order Detail</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Order Detail</h4>
                                        <p class="card-title-desc" style="margin-left:700px" >
                                            {{-- <a href="#"><button class="btn btn-primary">New Order</button></a> --}}
                                        </p>
        
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            
                                            <thead>
                                               
                                            <tr>
                                                
                                                <th>Product Name</th>
                                                <th>Quantity</th>
                                                <th>Price </th>
                                                
                                                <th>Color</th>
                                                
                                                
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                               @foreach ($order->orderDetail as $orderD)
                                            <tr>
                                            <td>{{ $orderD->product->name }}</td>
                                            <td>{{ $orderD->quantity }}</td>
                                            <td>PKR {{ $orderD->price }}</td>
                                            
                                            <td>{{ $orderD->color }}</td>
                                           
                                           
                                            {{-- <td><a href="{{ route('dashboard.categoryside.edit',$category->id) }}"><i class=" fas fa-user-edit"></i></a></td>

                                            
                                            <form id="delete-{{ $category->id }}" action="{{ route('dashboard.categoryside.destroy',$category->id) }}" method="POST" style="display: none;">
                                                @method('DELETE')
                                                @csrf
                                                <td> <a  href="javascript:;" onclick="confirmDelete('{{ $category->id }}')"><i class=" fas fa-trash-alt"></i></a></td>
                                            </form> --}}
                                            </tr>
                                            @endforeach

                                           
                                            
                                            
                                            </tbody>
                                        </table>
                                        
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            <div style="float: left;">Thanks for your business</div>
                                            <div style="float: left; padding-left:700px">
                                                <div>
                                                    <table class="table" style="border-collapse:collapse" >
                                                      
                                                        {{-- <tr>
                                                            <td>Subtotal:</td>
                                                        <td ><h6 style="padding-left:90px">PKR </h6></td>
                                                        </tr> --}}
                                                        
                                                        <tr>
                                                            <td>Tax:</td>
                                                            <td><h6  style="padding-left:90px">Tax are included in product price</h6></td>
                                                        </tr>
                                                        <tr>
                                                            <td >Total Order Amount:</td>
                                                        <td><h6  style="padding-left:90px">PKR {{ $order->total_price }}</h6></td>
                                                        </tr>
                                                       
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div style="float: left">
                                            <h5 style="color:red">Buyer Information</h5>
                                            <h5>{{ $order->orderByGuest->billing_first_name }}</h5>
                                            <h5>{{ $order->orderByGuest->billing_email }}</h5>
                                            <h5>{{ $order->orderByGuest->billing_phone_no }}</h5>
                                        </div>
                                        <div style="float: left; padding-left:500px">
                                        <h5 style="color:red">Order Information</h5>
                                        <h5>{{ $order->orderByGuest->billing_address }}</h5>
                                        <h5>{{ $order->orderByGuest->billing_city }}</h5>
                                        <h5>{{ $order->total_price }}</h5>
                                        <h5>{{ $order->orderByGuest->billing_country }}</h5>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            <div style="float: left">
                                                <h5 style="color:red">Shipping Address </h5>
                                                @if($order->orderByGuest->shipping_first_name !=null)
                                                <h5>{{ $order->orderByGuest->shipping_first_name }}</h5>
                                                <h5>{{ $order->orderByGuest->shipping_email }}</h5>
                                                <h5>{{ $order->orderByGuest->shipping_address }}</h5>
                                                <h5>{{ $order->orderByGuest->shipping_phone_no }}</h5>
                                                @else 
                                                Shipping address are not different
                                                @endif
                                            </div>
                                        <div style="float: left;padding-left:450px">
                                            <h5 style="color:red">Billing Address </h5>
                                            <h5>{{ $order->orderByGuest->billing_first_name }}</h5>
                                            <h5>{{ $order->orderByGuest->billing_email }}</h5>
                                            <h5>{{ $order->orderByGuest->billing_address }}</h5>
                                            <h5>{{ $order->orderByGuest->billing_phone_no }}</h5>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div style="float: left">
                                            <h5 style="color:red">Payment Method</h5>
                                            <h5>Cash on delivery</h5>
                                        </div>
                                        <div style="float: left;padding-left:510px">
                                            <a href="{{ route('dashboard.all.order') }}"><button class="btn btn-info">Back To My Order</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        
                        
        
                                          

                                                
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