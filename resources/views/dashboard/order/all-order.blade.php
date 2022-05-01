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
                                    <h4 class="mb-0">All Order</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href=" {{ route('dashboard.index') }} ">Dashboard</a></li>
                                            <li class="breadcrumb-item active">All Order</li>
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
        
                                        <h4 class="card-title">All Order </h4>
                                        <p class="card-title-desc" style="margin-left:700px" >
                                            {{-- <a href="#"><button class="btn btn-primary">New Order</button></a> --}}
                                        </p>
        
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Order_id</th>
                                                <th>Name</th>
                                                <th>Quantity</th>
                                                <th>Total price </th>
                                                <th>Status</th>
                                                <th>Order Notes</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                               @foreach ($orders as $order)
                                            <tr>
                                            <td>{{ $order->id }}</td>
                                            <td>{{ $order->orderByGuest->billing_first_name }}</td>
                                            <td>{{ $order->quantity }}</td>
                                            <td>{{ $order->total_price }}</td>
                                            <td>{{ $order->status }}</td>
                                            <td>{{ $order->orderNotes }}</td>
                                            <td><a href="{{ route('dashboard.single.order',$order->id) }}"><i class="far fa-eye"></i></a></td>
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
{{-- @section('scripts')

<script type="text/javascript">
    function confirmDelete(id){
    let choice = confirm("Are You sure, You want to Delete this record ?")
    if(choice){
    document.getElementById('delete-'+id).submit();
    }
    }
    </script>
    
    
    
@endsection --}}