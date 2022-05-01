<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories =  Category::all();
        return view('dashboard.category.list-category',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view('dashboard.category.add-category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $category = new Category();
     
        $category->name =$request->input('name');
       
        $category->description =$request->input('description');
        
         if($request->hasfile('image')) {
             $file = $request->file('image');
             $extension =$file->getClientOriginalExtension();
             $filename = time().".".$extension;
             $file->move('category/',$filename);
             $category->image =$filename;
 
 
         }else{
              }
          
        $category->save();
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::find($id);
        return view('dashboard.category.update-category',compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $categories = Category::find($id);
        
        $categories->name =$request->input('name');
        $categories->description =$request->input('description');


       
      
        if($request->hasfile('image')) {
           
          //image delete from folder

          $image_name = public_path('category/'.$categories->image);
      
          if(file_exists( $image_name)){
              @unlink($image_name);
          }


          $file = $request->file('image');
          $extension =$file->getClientOriginalExtension();
          $filename = time().".".$extension;
          $file->move('category/',$filename);
          $categories->image =$filename;


      }

      
      $categories->save();
      return redirect()->route('dashboard.categoryside.index');
      

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $categories = Category::find($id);
        //image delete from folder

        $image_name = public_path('category/'.$categories->image);
         if(file_exists( $image_name)){
             @unlink($image_name);
        }
        

      
         $categories->delete();
        
       
       return back()->with('message', 'IT WORKS!');
   }
}
