<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\ProductImage;
use App\OrderByGuest;

class frontendController extends Controller
{
    //frontend

    public function indexPage()
    {
        $womenShoes = Product::where('category_id',2)->get();
        $menShoes = Product::where('category_id',1)->get();
        $casualShoes = Product::where('category_id',3)->get();
        $product = Product::latest()->take(6)->get();
        return view('frontend.index',compact('womenShoes','menShoes','casualShoes','product'));
    }
    public function shopList()
    {
        $allProducts = Product::all();
        return view('frontend.shops.shopPage',compact('allProducts'));
    }
    public function shopSingle($id)
    {
        $product = Product::find($id);
        $mustLike = Product::latest()->take(6)->get();
        $otherProduct = Product::all();
    
        return view('frontend.shops.shop-single',compact('product','mustLike','otherProduct'));
    }

    public function addToCart($id)
    {
        $product = Product::find($id);
        $cart = session()->has('cart') ? session()->get('cart') : null;
        //dd($cart);
        if(!$cart){
            $cart = [
                   $product->id =>[
                       'id' => $product->id,
                       'name'   => $product->name,
                       'quantity'   => 1,
                       'price'   => $product->price,
                       'image'   => $product->productImage->first()->image
                   ]
            ];
            session()->put('cart',$cart);
            return back();
        }

                if(isset($cart[$product->id])){
                $cart[$product->id]['quantity']++;
                session()->put('cart',$cart);
                return back();
                }

                $cart[$product->id] = [
                            'id' => $product->id,
                            'name'   => $product->name,
                            'quantity'   => 1,
                            'price'   => $product->price,
                            'image'   => $product->productImage->first()->image
                            ];
                            session()->put('cart',$cart);
                            return back();
    }

    public function removeFromCart($id)
    {
         $cart = session()->get('cart');
         if(isset($cart[$id])){
             unset($cart[$id]);
             session()->put('cart',$cart);
         }
        return back();
    }
      
    public function updateCart(Request $request, $id)
    {
        $cart = session()->has('cart') ? session()->get('cart') : null;
        $product = Product::findOrFail($id);
        //dd($request->all());
        if($cart){
            if(array_key_exists($product->id , $cart))
            {
                $products = $cart[$product->id];
            }
        }
        //dd($products);
        $products['quantity'] = $request->quantity;
        $cart[$product->id] = $products;
        session()->put('cart',$cart);
        return back();
    }

    public function addToWishlist($id)
    {
        
        $product = Product::find($id);
       
        $wishlist = session()->has('wishlist') ? session()->get('wishlist') : null;
        //dd($cart);
        if(!$wishlist){
            $wishlist = [
                   $product->id =>[
                       'id' => $product->id,
                       'name'   => $product->name,
                       'quantity'   => 1,
                       'price'   => $product->price,
                       'image'   => $product->productImage->first()->image
                   ]
            ];
            session()->put('wishlist',$wishlist);
           // dd($wishlist);
            return back();
        }

                if(isset($wishlist[$product->id])){
                $wishlist[$product->id]['quantity']++;
                session()->put('wishlist',$wishlist);
                return back();
                }

                $wishlist[$product->id] = [
                            'id' => $product->id,
                            'name'   => $product->name,
                            'quantity'   => 1,
                            'price'   => $product->price,
                            'image'   => $product->productImage->first()->image
                            ];
                            session()->put('wishlist',$wishlist);
                            return back();


       
    }

    public function removeFromWishlist($id)
    {
         $wishlist = session()->get('wishlist');
         if(isset($wishlist[$id])){
             unset($wishlist[$id]);
             session()->put('wishlist',$wishlist);
         }
        return back();
    }

    public function aboutUs()
    {
        return view('frontend.shops.about-us');
    }
    public function cartPage()
    {
        return view('frontend.shops.cart');
    }
    public function checkoutPage()
    {
        return view('frontend.shops.checkout');
    }
    public function loginPage()
    {
        return view('frontend.pages.login');
    }
    public function registerPage()
    {
        return view('frontend.pages.register');
    }
   
    public function accountPage()
    {
        return view('frontend.pages.myaccount');
    }
    public function wishlistPage()
    {
        return view('frontend.pages.wishlist');
    }
    public function contactPage()
    {
        return view('frontend.contact.contact');
    }
   
}
