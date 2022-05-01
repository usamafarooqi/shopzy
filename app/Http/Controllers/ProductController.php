<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\ProductImage;
use App\ProductAttribute;
use App\ProductColor;
use App\ProductSize;
use App\Tag;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('dashboard.product.all-product',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories =  Category::all();
        return view('dashboard.product.add-product',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
       
        $product = new Product();

        $product->category_id = $request->category_id;
        $product->name = $request->productName;
        $product->short_description =$request->shortDescription;
        $product->long_description = $request->longDescription;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->save();
        


        if($request->image != null)
        {
            for($i = 0; $i < count($request->image);$i++)
            {
                $snap = "";
                if ($request->image[$i]) 
                {
                    $path = $request->image[$i];
                    $target = 'public/Products';
                    $snap = Storage::putFile($target, $path);
                    $snap = substr($snap, 7, strlen($snap) - 7);
                } 
                else 
                {
                    $snap = "";
                }

                $image = new ProductImage();
                $image->product_id = $product->id;
                $image->image = $snap;
                $image->save();
            }
        }

        if($request->name != null && $request->value != null)
        {
            for($i = 0 ; $i < count($request->name);$i++)
            {
                $attribute = new ProductAttribute();
                $attribute->product_id = $product->id;
                $attribute->name = $request->name[$i];
                $attribute->value = $request->value[$i];
                $attribute->save();
            }
        }

        
       
        if($request->colorName != null)
        {
            for($i = 0;$i < count($request->colorName);$i++)
            {

                $color = new ProductColor();
                $color->product_id = $product->id;
                $color->color = $request->colorName[$i];

                $snap = "";
                if ($request->colorImages[$i])
                {
                    $path = $request->colorImages[$i];
                    $target = 'public/Products';
                    $snap = Storage::putFile($target, $path);
                    $snap = substr($snap, 7, strlen($snap) - 7);
                }
                else
                {
                    $snap = "";
                }

                $color->image = $snap;
                $color->save();

                if($request->xSmallSku[$i] != null && $request->xSmallQuantity[$i] != null)
                {
                    $size = new ProductSize();
                    $size->product_color_id = $color->id;
                    $size->size = 'x_small';
                    $size->quantity = $request->xSmallQuantity[$i];
                    $size->sku = $request->xSmallSku[$i];
                    $size->save();
                }

                if($request->smallSku[$i] != null && $request->smallQuantity[$i] != null)
                {
                    $size = new ProductSize();
                    $size->product_color_id = $color->id;
                    $size->size = 'small';
                    $size->quantity = $request->smallQuantity[$i];
                    $size->sku = $request->smallSku[$i];
                    $size->save();
                }
                if($request->mediumSku[$i] != null && $request->mediumQuantity[$i] != null)
                {
                    $size = new ProductSize();
                    $size->product_color_id = $color->id;
                    $size->size = 'medium';
                    $size->quantity = $request->mediumQuantity[$i];
                    $size->sku = $request->mediumSku[$i];
                    $size->save();
                }
                if($request->largeSku[$i] != null && $request->largeQuantity[$i] != null)
                {
                    $size = new ProductSize();
                    $size->product_color_id = $color->id;
                    $size->size = 'large';
                    $size->quantity = $request->largeQuantity[$i];
                    $size->sku = $request->largeSku[$i];
                    $size->save();
                }
                if($request->xLargeSku[$i] != null && $request->xLargeQuantity[$i] != null)
                {
                    $size = new ProductSize();
                    $size->product_color_id = $color->id;
                    $size->size = 'x_large';
                    $size->quantity = $request->xLargeQuantity[$i];
                    $size->sku = $request->xLargeSku[$i];
                    $size->save();
                }
                if($request->xxLargeSku[$i] != null && $request->xxLargeQuantity[$i] != null)
                {
                    $size = new ProductSize();
                    $size->product_color_id = $color->id;
                    $size->size = 'xx_large';
                    $size->quantity = $request->xxLargeQuantity[$i];
                    $size->sku = $request->xxLargeSku[$i];
                    $size->save();
                }
                if($request->xxxLargeSku[$i] != null && $request->xxxLargeQuantity[$i] != null)
                {
                    $size = new ProductSize();
                    $size->product_color_id = $color->id;
                    $size->size = 'xxx_large';
                    $size->quantity = $request->xxxLargeQuantity[$i];
                    $size->sku = $request->xxxLargeSku[$i];
                    $size->save();
                }
            }
        }

        
       

        if($request->tag != null)
        {
            for($i = 0 ; $i < count($request->tag);$i++)
            {
                $productTag = new Tag();
                $productTag->product_id = $product->id;
                $productTag->tag = $request->tag[$i];
            
                $productTag->save();
            }
        }


         return back();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('dashboard.product.product-detail',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories =  Category::all();
        return view('dashboard.product.update-product',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $product = Product::findOrFail($id);
        $product->category_id = $request->category_id;
        $product->name = $request->productName;
        $product->short_description =$request->shortDescription;
        $product->long_description = $request->longDescription;
        $product->price = $request->price;
        $product->discount = $request->discount;
       
        if($request->image != null)
        {
            ProductImage::where('product_id' , $product->id)->delete();
            for($i = 0; $i < count($request->image);$i++)
            {
                $snap = "";
                if ($request->hasFile('image'))
                {
                    //For image Delete code
                    $path = public_path('storage/'.$product->image);
                    if (file_exists($path))
                
                        @unlink($path);
                    }
                    //end
                    if ($request->image[$i])
                    {
                        $path = $request->image[$i];
                        $target = 'public/Products';
                        $snap = Storage::putFile($target, $path);
                        $snap = substr($snap, 7, strlen($snap) - 7);
                    }
                    else
                    {
                        $snap = "";
                    }
                }
                $image = new ProductImage();
                $image->product_id = $product->id;
                $image->image = $snap;
                $image->save();
            }
        

        $product->update();
        
        if(ProductAttribute::where('product_id',$product->id)->get() != null)
        {
            ProductAttribute::where('product_id',$product->id)->delete();
        }
        if($request->name != null && $request->value != null)
        {
            for($i = 0 ; $i < count($request->name);$i++)
            {
                $attribute = new ProductAttribute();
                $attribute->product_id = $product->id;
                $attribute->name = $request->name[$i];
                $attribute->value = $request->value[$i];
                $attribute->save();
            }
        }
         
        if(ProductColor::where('product_id',$product->id)->get() != null)
        {
            $color = ProductColor::where('product_id',$product->id)->get();
            //dd($color[0]->id);
            for($i = 0; $i < count($color);$i++)
            {
                ProductSize::where('product_color_id' , $color[$i]->id)->delete();
            }
            ProductColor::where('product_id' , $product->id)->delete();
        }
        if($request->colorName != null)
        {
            for($i = 0;$i < count($request->colorName);$i++)
            {

                $color = new ProductColor();
                $color->product_id = $product->id;
                $color->color = $request->colorName[$i];

                $snap = "";
                if (isset($request->colorImages[$i]))
                {
                    $path = $request->colorImages[$i];
                    $target = 'public/Products';
                    $snap = Storage::putFile($target, $path);
                    $snap = substr($snap, 7, strlen($snap) - 7);
                }
                else
                {
                    $snap =  "";
                }

                // $snap = "";
                // if ($request->previouscolorpic[$i] != null)
                // {
                //     $path = $request->previouscolorpic[$i];
                //     $target = 'public/Products';
                //     $snap = Storage::putFile($target, $path);
                //     $snap = substr($snap, 7, strlen($snap) - 7);
                // }
                // else
                // {
                //     $snap = "";
                // }

                $color->image = $snap;
                $color->save();
       
        
                if($request->xSmallSku[$i] != null && $request->xSmallQuantity[$i] != null)
                {
                    $size = new ProductSize();
                    $size->product_color_id = $color->id;
                    $size->size = 'x_small';
                    $size->quantity = $request->xSmallQuantity[$i];
                    $size->sku = $request->xSmallSku[$i];
                    $size->save();
                }

                if($request->smallSku[$i] != null && $request->smallQuantity[$i] != null)
                {
                    $size = new ProductSize();
                    $size->product_color_id = $color->id;
                    $size->size = 'small';
                    $size->quantity = $request->smallQuantity[$i];
                    $size->sku = $request->smallSku[$i];
                    $size->save();
                }
                if($request->mediumSku[$i] != null && $request->mediumQuantity[$i] != null)
                {
                    $size = new ProductSize();
                    $size->product_color_id = $color->id;
                    $size->size = 'medium';
                    $size->quantity = $request->mediumQuantity[$i];
                    $size->sku = $request->mediumSku[$i];
                    $size->save();
                }
                if($request->largeSku[$i] != null && $request->largeQuantity[$i] != null)
                {
                    $size = new ProductSize();
                    $size->product_color_id = $color->id;
                    $size->size = 'large';
                    $size->quantity = $request->largeQuantity[$i];
                    $size->sku = $request->largeSku[$i];
                    $size->save();
                }
                if($request->xLargeSku[$i] != null && $request->xLargeQuantity[$i] != null)
                {
                    $size = new ProductSize();
                    $size->product_color_id = $color->id;
                    $size->size = 'x_large';
                    $size->quantity = $request->xLargeQuantity[$i];
                    $size->sku = $request->xLargeSku[$i];
                    $size->save();
                }
                if($request->xxLargeSku[$i] != null && $request->xxLargeQuantity[$i] != null)
                {
                    $size = new ProductSize();
                    $size->product_color_id = $color->id;
                    $size->size = 'xx_large';
                    $size->quantity = $request->xxLargeQuantity[$i];
                    $size->sku = $request->xxLargeSku[$i];
                    $size->save();
                }
                if($request->xxxLargeSku[$i] != null && $request->xxxLargeQuantity[$i] != null)
                {
                    $size = new ProductSize();
                    $size->product_color_id = $color->id;
                    $size->size = 'xxx_large';
                    $size->quantity = $request->xxxLargeQuantity[$i];
                    $size->sku = $request->xxxLargeSku[$i];
                    $size->save();
                }
            }
        }

        
       
        if(Tag::where('product_id',$product->id)->get() != null)
        {
            Tag::where('product_id',$product->id)->delete();
        }
        if($request->tag != null)
        {
            for($i = 0 ; $i < count($request->tag);$i++)
            {
                $productTag = new Tag();
                $productTag->product_id = $product->id;
                $productTag->tag = $request->tag[$i];
            
                $productTag->save();
            }
        }


        return redirect()->route('dashboard.product.index');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $product = Product::find($id);
        if(ProductAttribute::where('product_id' , $product->id)->get() != null)
        {
            ProductAttribute::where('product_id' , $product->id)->delete();
        }
        if(Tag::where('product_id' , $product->id)->get() != null)
        {
            Tag::where('product_id' , $product->id)->delete();
        }
        if(ProductImage::where('product_id' , $product->id)->get() != null)
        {
            $images = ProductImage::where('product_id' , $product->id)->get();
            for($i = 0; $i < count($images);$i++)
            {
                //For image Delete code
                $path = public_path('storage/'.$images[$i]->image);
                if (file_exists($path))
                {
                    @unlink($path);
                }
            }
            ProductImage::where('product_id' , $product->id)->delete();
        }

        if(ProductColor::where('product_id',$product->id)->get() != null)
        {
            $color = ProductColor::where('product_id',$product->id)->get();
        
            for($i = 0; $i < count($color);$i++)
            {
                 //For image Delete code
                 $path = public_path('storage/'.$color[$i]->image);
                 if (file_exists($path))
                 {
                     @unlink($path);
                 }
                ProductSize::where('product_color_id' , $color[$i]->id)->delete();
            }
            ProductColor::where('product_id' , $product->id)->delete();
        }


       

         
        $product->delete();
        
       
       return back()->with('message', 'IT WORKS!');
   }
    
}
