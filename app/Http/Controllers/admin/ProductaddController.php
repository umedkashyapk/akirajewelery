<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Addproduct;
use App\Models\Category;
use DB;

class ProductaddController extends Controller
{
    public function product_add(){
      
        return view('admin.product');
    }

    public function store(Request $request){

        $request->validate ([
            'product_name' => 'required|',
            'description' => 'required',
            'price' => 'required',
            'discounts' => 'required',
            'availability' => 'required',
            'tax' => 'required',
            'Category'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|'
          ]);
          
          
        //   dd($request);
    

        $category = $request->Category;
        
        // dd($category);

       if($category == 1){
        $category = 'Ring';
       }elseif($category == 2){
        $category = 'pendants';
       }elseif($category == 3){
        $category = 'necklace';
       }elseif($category == 4){
        $category = 'bracelets';
       }elseif($category == 5){
        $category = 'earrings';
       }elseif($category == 6){
        $category = 'custos_items';
       }
        
       $imageName = time().'.'.request()->image->getClientOriginalExtension();
       request()->image->move(public_path('admin/product'), $imageName);
       
        
    //    dd($imageName);

        
            $Products=Addproduct::insert([
                'titel'=>$request->product_name,
                'category_id'=> $request->Category,
                'category'  => $category,
                'description' => $request->description,
                'price' => $request->price,
                'discounts'=>$request->discounts,
                'availability'=>$request->availability,
                'tax'=>$request->tax,
                'image'=>$imageName,
                ]);
                
                
                


                return redirect()->route('product_add')->with([
                    'message' => 'Product added successfully!', 
                    'status' => 'success']);
                // dd($Products);die;






           
          
    }
}
