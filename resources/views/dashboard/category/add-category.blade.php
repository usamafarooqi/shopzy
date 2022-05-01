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
                                    <h4 class="mb-0">Add Category</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('dashboard.categoryside.index') }}">List Category</a></li>
                                            <li class="breadcrumb-item active">Add Category</li>
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
                                        


                                        <form action="{{route('dashboard.categoryside.store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                                        <div class="form-group">
                                                            <label for="productname">Category Name</label>
                                                            <input id="name" name="name" type="text" class="form-control" placeholder="Enter Name">
                                                        </div>
                                                    <div class="row">
                                                      <div class="col-lg-6">
                                                                
                                                         <div class="form-group">
                                                             <label for="productdesc">Category Description</label>
                                                             <textarea class="form-control" id="description" name="description" rows="5" placeholder="Enter Description"></textarea>
                                                                    
                                                         </div>

                                                        </div>
                                                           
                                                        
                                                        
                                                        <div class="col-lg-6">
 

                                                        <div class="form-group">
                                                            
                                                                <div class="widget-content widget-content-area col-xl-4 col-md-4 col-sm-4 col-4">
                                                                <div class="custom-file-container" data-upload-id="myImage1">
                                                                <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                                                <label class="custom-file-container__custom-file">
                                                                <input type="file" class="custom-file-container__custom-file__custom-file-input" name= "image" accept="image/*">
                                                                
                                                                <span class="custom-file-container__custom-file__custom-file-control">Choose file...<span class="custom-file-container__custom-file__custom-file-control__button"> Browse </span></span>
                                                                </label>
                                                                
                                                                <div class="custom-file-container__image-preview" style="background-image"></div>
                                                                </div>
                                                                <div class="col-md-8"> </div>
                                                                </div>
                                                                </div>                                
                                                                
                                                        
                                                        </div>
                                                    </div>

                                                    </div>

                                                    <div class=" mt-4" style="margin-left:750px; margin-bottom:40px">
                                                        <button type="submit" class="btn btn-primary mr-2 waves-effect waves-light">Add Category</button>
                                                        
                                                    </div>
                                                
                                                    </form>  
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

  <!-- File Upload-->
  <script src="{{ asset('dashboard/plugins/file-upload/file-upload-with-preview.min.js') }}"></script>

<script>
var firstUpload = new FileUploadWithPreview('myImage1')
 </script>
    
@endsection