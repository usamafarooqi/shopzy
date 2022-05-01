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
                                    <h4 class="mb-0">Add Product</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('dashboard.categoryside.index') }}">List Category</a></li>
                                            <li class="breadcrumb-item active">Add Product</li>
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
                                        


                                        <form action="{{route('dashboard.product.store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                                         
                                                  <div class="row">
                                                     <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Select  Category</label>
                                                            <select class="form-control show-tick" name="category_id">
                                                                <option value="">Select  Category </option>
                                                                @foreach ($categories as $category)
                                                                 <option value="{{$category->id}}">{{$category->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                     

                                                  
                                                    <div class="col-lg-6">
                                                       <div class="form-group">
                                                           <label for="productname">Product Name</label>
                                                           <input id="productName" name="productName" type="text" class="form-control" placeholder="Enter Product Name">
                                                       </div>
                                                   </div>
                                                 </div>  

                                                 <div class="row">
                                                    <div class="col-lg-6">
                                                       <div class="form-group">
                                                           <label for="productname">Enter Short Description </label>
                                                           <textarea class="form-control" id="shortDescription" name="shortDescription" rows="2" placeholder="Enter Short Description"></textarea>
                                                       </div>
                                                   </div>
                                                  

                                                 
                                                    <div class="col-lg-6">
                                                       <div class="form-group">
                                                           <label for="productname">Enter Long Description </label>
                                                           <textarea class="form-control" id="longDescription" name="longDescription" rows="2" placeholder="Enter Long Description"></textarea>
                                                       </div>
                                                   </div>
                                                 </div> 

                                                    <div class="row">
                                                      <div class="col-lg-6">       
                                                         <div class="form-group">
                                                             <label for="productdesc">Price</label>
                                                             <input id="price" name="price" type="text" class="form-control" placeholder="Enter Price">
                                                         </div>     
                                                      </div>
                                                    

                                                    
                                                        <div class="col-lg-6">       
                                                           <div class="form-group">
                                                               <label for="productdesc">Discount</label>
                                                               <input id="discount" name="discount" type="text" class="form-control" placeholder="Enter Discount">
                                                           </div>     
                                                        </div>
                                                      </div> 


                                                      <div class="row">
                                                       <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <div class="widget-content widget-content-area col-xl-6 col-md-6 col-sm-6 col-6">
                                                                <div class="custom-file-container" data-upload-id="myImage1">
                                                                <label>Upload Product Image <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                                                <label class="custom-file-container__custom-file">
                                                                <input type="file" class="custom-file-container__custom-file__custom-file-input" name= "image[]" multiple>
                                                                
                                                                <span class="custom-file-container__custom-file__custom-file-control">Choose file...<span class="custom-file-container__custom-file__custom-file-control__button"> Browse </span></span>
                                                                </label>
                                                                
                                                                <div class="custom-file-container__image-preview" style="background-image"></div>
                                                                </div>
                                                                <div class="col-md-8"> </div>
                                                                </div>
                                                          </div>
                                                        </div>
                                                      </div>

                                                      <div class="row">
                                                        <div class="col-lg-12">       
                                                           <div class="form-group">
                                                             <div><a href="#" class="btn btn-info addRow" style="margin-left:800px; margin-bottom:10px">Add More Attribute</a></div>
                                                              <div class="attribute">
                                                               {{-- <div style="float:left; width:40%"><input type="text" class="form-control"  id="name" name="name[]" placeholder="Enter Name "></div>
                                                               <div style="float:left; width:40%; padding-left:20px"><input type="text" class="form-control" id="value" name="value[]" placeholder="Enter value "></div>
                                                               <div style="float:left; width:10%; padding-left:20px"><a href="#" class="btn btn-danger remove" >Delete</a></div> --}}
                                                             </div>                                                            
                                                           </div>     
                                                        </div>
                                                      </div>


                                                      <div class="row">
                                                        <div class="col-lg-12">       
                                                           <div class="form-group">

                                                           <div><a href="#" class="btn btn-info addColor" style="margin-left:800px; margin-top:20px; margin-bottom:20px">Add Colors And Sizes</a></div>
                                                           <div class="color">
                                                            {{-- <div style="padding-left:800px"><a href="#" class="btn btn-danger remove">Delete</a></div>
                                                             <div style="width: 100%" class="form-group">
                                                             <div style="float: left; width:10%"><label style="padding-top:10px">Color Name</label></div>
                                                             <div style="float: left; width:45%; padding-left:10px"><input type="text" class="form-control" id="colorName" name="colorName[]" placeholder="Enter Color Name"></div>
                                                             <div style="float: left; width:45%; padding-left:10px">
                                                              <div class="form-group">            
                                                                <div class="widget-content widget-content-area col-xl-6 col-md-4 col-sm-4 col-4">
                                                                <div class="custom-file-container" data-upload-id="myImage1">
                                                                <label>Upload(Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                                                <label class="custom-file-container__custom-file">
                                                                <input type="file" class="custom-file-container__custom-file__custom-file-input" name= "colorImages[]" multiple>                                              
                                                                <span class="custom-file-container__custom-file__custom-file-control">Choose file...<span class="custom-file-container__custom-file__custom-file-control__button"> Browse </span></span>
                                                                </label>                                                                
                                                                <div class="custom-file-container__image-preview" style="background-image"></div>
                                                                </div>
                                                                <div class="col-md-8"> </div>
                                                                </div>
                                                                </div> 
                                                             </div>
                                                             
                                                           </div>
                                                             
                                                           <div>

                                                           <div style="width: 100%; float: left;" class="form-group">
                                                            <div style="float: left; width:10%"><label>X-Small</label></div>
                                                            <div style="float: left; width:45%; padding-left:10px"><input type="text" class="form-control" id="xSmallSku" name="xSmallSku[]" placeholder="Enter X-Small SKU"></div>
                                                            <div style="float: left; width:45%; padding-left:10px"><input type="text" class="form-control" id="xSmallQuantity" name="xSmallQuantity[]" placeholder="Enter X-Small Quantity"></div>
                                                           </div>

                                                           <div style="width: 100%; float: left;" class="form-group">
                                                            <div style="float: left; width:10%"><label>Small</label></div>
                                                            <div style="float: left; width:45%; padding-left:10px"><input type="text" class="form-control" id="smallSku" name="smallSku[]" placeholder="Enter Small SKU"></div>
                                                            <div style="float: left; width:45%; padding-left:10px"><input type="text" class="form-control" id="smallQuantity" name="smallQuantity[]" placeholder="Enter Small Quantity"></div>
                                                           </div>

                                                           <div style="width: 100%; float: left;" class="form-group">
                                                            <div style="float: left; width:10%"><label>Medium</label></div>
                                                            <div style="float: left; width:45%; padding-left:10px"><input type="text" class="form-control" id="mediumSku" name="mediumSku[]" placeholder="Enter Medium SKU"></div>
                                                            <div style="float: left; width:45%; padding-left:10px"><input type="text" class="form-control" id="mediumQuantity" name="mediumQuantity[]" placeholder="Enter Medium Quantity"></div>
                                                           </div>

                                                           <div style="width: 100%; float: left;" class="form-group">
                                                            <div style="float: left; width:10%"><label>Large</label></div>
                                                            <div style="float: left; width:45%; padding-left:10px"><input type="text" class="form-control" id="largeSku" name="largeSku[]" placeholder="Enter Large SKU"></div>
                                                            <div style="float: left; width:45%; padding-left:10px"><input type="text" class="form-control" id="largeQuantity" name="largeQuantity[]" placeholder="Enter Large Quantity"></div>
                                                           </div>

                                                           <div style="width: 100%; float: left;" class="form-group">
                                                            <div style="float: left; width:10%"><label>X-Large</label></div>
                                                            <div style="float: left; width:45%; padding-left:10px"><input type="text" class="form-control" id="xLargeSku" name="xLargeSku[]" placeholder="Enter X-Large SKU"></div>
                                                            <div style="float: left; width:45%; padding-left:10px"><input type="text" class="form-control" id="xLargeQuantity" name="xLargeQuantity[]" placeholder="Enter X-Large Quantity"></div>
                                                           </div>

                                                           <div style="width: 100%; float: left;" class="form-group">
                                                            <div style="float: left; width:10%"><label>XX-Large</label></div>
                                                            <div style="float: left; width:45%; padding-left:10px"><input type="text" class="form-control" id="xxLargeSku" name="xxLargeSku[]" placeholder="Enter XX-Large SKU"></div>
                                                            <div style="float: left; width:45%; padding-left:10px"><input type="text" class="form-control" id="xxLargeQuantity" name="xxLargeQuantity[]" placeholder="Enter XX-Large Quantity"></div>
                                                           </div>

                                                           <div style="width: 100%; float: left;" class="form-group">
                                                            <div style="float: left; width:10%"><label>XXX-Large</label></div>
                                                            <div style="float: left; width:45%; padding-left:10px"><input type="text" class="form-control" id="xxxLargeSku" name="xxxLargeSku[]" placeholder="Enter XXX-Large SKU"></div>
                                                            <div style="float: left; width:45%; padding-left:10px"><input type="text" class="form-control" id="xxxLargeQuantity" name="xxxLargeQuantity[]" placeholder="Enter XXX-Large Quantity"></div>
                                                           </div>

                                                           </div> --}}

                                                           </div>
                                                           </div>     
                                                        </div>
                                                      </div>


                                                      <div class="row">
                                                        <div class="col-lg-12">       
                                                           <div class="form-group">
                                                            <div><a href="#" class="btn btn-info addTag" style="margin-left:800px; margin-bottom:10px">Add More Tags</a></div>
                                                             <div class="tag">
                                                               {{-- <div style="float:left; width:70%"><input type="text" class="form-control"  id="tag" name="tag[]" placeholder="Enter Product Tag"></div>
                                                               <div style="float:left; width:10%; padding-left:20px"><a href="#" class="btn btn-danger remove" >Delete</a></div> --}}
                                                             </div>
                                                           </div>     
                                                        </div>
                                                      </div>

                                                     


                                                     
                                                      

                                                <div class="row">
                                                 <div class="col-lg-12">
                                                    <div class="form-group">
                                                       <div class=" mt-4" style="margin-left:800px; margin-bottom:20px">
                                                        <button type="submit" class="btn btn-primary mr-2 waves-effect waves-light">Add Product</button>
                                                       </div>
                                                    </div>
                                                 </div>
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

<script type="text/javascript">
    $('.addRow').on('click', function(){
     addRow();
    });

    function addRow(){
        var div =  '<div>'+
                          '<div style="float:left; width:40%"><input type="text" class="form-control"  id="name" name="name[]" placeholder="Enter Name "></div>'+
                          '<div style="float:left; width:40%; padding-left:20px"><input type="text" class="form-control" id="value" name="value[]" placeholder="Enter value "></div>'+
                          '<div style="float:left; width:10%; padding-left:20px"><a href="#" class="btn btn-danger remove" >Delete</a></div>'+
                          '</div>';  

                    $('.attribute').append(div);
        
    };

          $('.attribute').on('click','.remove',function(){
            $(this).parent().parent().remove();
           });
</script>

<script type="text/javascript">
    $('.addColor').on('click', function(){
     addColor();
    });

    function addColor(){
        var div =  '<div>'+
                         '<div style="padding-left:800px"><a href="#" class="btn btn-danger remove">Delete</a></div>'+
                          '<div style="width: 100%" class="form-group">'+
                          '<div style="float: left; width:10%"><label style="padding-top:10px">Color Name</label></div>'+
                          '<div style="float: left; width:45%; padding-left:10px"><input type="text" class="form-control" id="colorName" name="colorName[]" placeholder="Enter Color Name"></div>'+
                          '<div style="float: left; width:45%; padding-left:10px">'+
                          '<div class="form-group">'+            
                          '<div class="widget-content widget-content-area col-xl-6 col-md-4 col-sm-4 col-4">'+
                          '<div class="custom-file-container" data-upload-id="myImage1">'+
                          '<label>Upload(Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>'+
                          '<label class="custom-file-container__custom-file">'+
                          '<input type="file" class="custom-file-container__custom-file__custom-file-input" name= "colorImages[]" multiple>'+                                             
                          '<span class="custom-file-container__custom-file__custom-file-control">Choose file...<span class="custom-file-container__custom-file__custom-file-control__button"> Browse </span></span>'+
                          '</label>'+                                                               
                          '<div class="custom-file-container__image-preview" style="background-image"></div>'+
                          '</div>'+
                           '<div class="col-md-8"> </div>'+
                           '</div>'+
                           '</div>'+ 
                           '</div>'+
                           
                            '</div>'+
                                                             
                            '<div>'+

                             '<div style="width: 100%; float: left;" class="form-group">'+
                             '<div style="float: left; width:10%"><label>X-Small</label></div>'+
                             '<div style="float: left; width:45%; padding-left:10px"><input type="text" class="form-control" id="xSmallSku" name="xSmallSku[]" placeholder="Enter X-Small SKU"></div>'+
                             '<div style="float: left; width:45%; padding-left:10px"><input type="text" class="form-control" id="xSmallQuantity" name="xSmallQuantity[]" placeholder="Enter X-Small Quantity"></div>'+
                             '</div>'+

                              '<div style="width: 100%; float: left;" class="form-group">'+
                              '<div style="float: left; width:10%"><label>Small</label></div>'+
                              '<div style="float: left; width:45%; padding-left:10px"><input type="text" class="form-control" id="smallSku" name="smallSku[]" placeholder="Enter Small SKU"></div>'+
                              '<div style="float: left; width:45%; padding-left:10px"><input type="text" class="form-control" id="smallQuantity" name="smallQuantity[]" placeholder="Enter Small Quantity"></div>'+
                              '</div>'+

                              '<div style="width: 100%; float: left;" class="form-group">'+
                              '<div style="float: left; width:10%"><label>Medium</label></div>'+
                              '<div style="float: left; width:45%; padding-left:10px"><input type="text" class="form-control" id="mediumSku" name="mediumSku[]" placeholder="Enter Medium SKU"></div>'+
                              '<div style="float: left; width:45%; padding-left:10px"><input type="text" class="form-control" id="mediumQuantity" name="mediumQuantity[]" placeholder="Enter Medium Quantity"></div>'+
                              '</div>'+

                              '<div style="width: 100%; float: left;" class="form-group">'+
                              '<div style="float: left; width:10%"><label>Large</label></div>'+
                              '<div style="float: left; width:45%; padding-left:10px"><input type="text" class="form-control" id="largeSku" name="largeSku[]" placeholder="Enter Large SKU"></div>'+
                              '<div style="float: left; width:45%; padding-left:10px"><input type="text" class="form-control" id="largeQuantity" name="largeQuantity[]" placeholder="Enter Large Quantity"></div>'+
                              '</div>'+

                              '<div style="width: 100%; float: left;" class="form-group">'+
                              '<div style="float: left; width:10%"><label>X-Large</label></div>'+
                              '<div style="float: left; width:45%; padding-left:10px"><input type="text" class="form-control" id="xLargeSku" name="xLargeSku[]" placeholder="Enter X-Large SKU"></div>'+
                              '<div style="float: left; width:45%; padding-left:10px"><input type="text" class="form-control" id="xLargeQuantity" name="xLargeQuantity[]" placeholder="Enter X-Large Quantity"></div>'+
                              '</div>'+

                              '<div style="width: 100%; float: left;" class="form-group">'+
                              '<div style="float: left; width:10%"><label>XX-Large</label></div>'+
                              '<div style="float: left; width:45%; padding-left:10px"><input type="text" class="form-control" id="xxLargeSku" name="xxLargeSku[]" placeholder="Enter XX-Large SKU"></div>'+
                              '<div style="float: left; width:45%; padding-left:10px"><input type="text" class="form-control" id="xxLargeQuantity" name="xxLargeQuantity[]" placeholder="Enter XX-Large Quantity"></div>'+
                              '</div>'+

                              '<div style="width: 100%; float: left;" class="form-group">'+
                              '<div style="float: left; width:10%"><label>XXX-Large</label></div>'+
                               '<div style="float: left; width:45%; padding-left:10px"><input type="text" class="form-control" id="xxxLargeSku" name="xxxLargeSku[]" placeholder="Enter XXX-Large SKU"></div>'+
                               '<div style="float: left; width:45%; padding-left:10px"><input type="text" class="form-control" id="xxxLargeQuantity" name="xxxLargeQuantity[]" placeholder="Enter XXX-Large Quantity"></div>'+
                                '</div>'+

                                '</div>'+

                                '</div>';

                    $('.color').append(div);
        
    };

          $('.color').on('click','.remove',function(){
            $(this).parent().parent().remove();
           });
</script>

<script type="text/javascript">
    $('.addTag').on('click', function(){
        addTag();
    });

    function addTag(){
        var div =  '<div>'+
                      '<div style="float:left; width:70%"><input type="text" class="form-control"  id="tag" name="tag[]" placeholder="Enter Product Tag"></div>'+
                      '<div style="float:left; width:10%; padding-left:20px"><a href="#" class="btn btn-danger remove" >Delete</a></div>'+
                      '</div>';

                    $('.tag').append(div);
        
    };

          $('.tag').on('click','.remove',function(){
            $(this).parent().parent().remove();
           });
</script>


    
@endsection