<?php

namespace App\Http\Controllers;
use App\Http\Session;
use Illuminate\Http\Request;
// use Illuminate\Session;
use App\Models\Addproduct;
use App\Models\Product;
use DB;

class Webcontroller extends Controller
{
    public function home(){
        return view('home');
    }

    public function contact()
    {
       return view('contact');
    }

    public function about()
    {
       return view('contact');
    }

    public function rings()
    {
       $ring_list=Addproduct::where('category_id',1)->get();
      //  dd($ring_list);
      
       return view('rings', ['ring_list'=>$ring_list]);
    }

    public function bracelets()
    {
       return view('bracelets');
    }

    public function necklace()
    {

      $necklace_list=Addproduct::where('category_id',3)->get();
      // dd($necklace_list);
       return view('necklace',['necklace_list'=>$necklace_list]);
    }

    public function earring()
    {
      
       return view('earring');
    }

    public function cart()
    {
       return view('cart');
    }



    public function pendants()
    {

      $pendants_list=Addproduct::where('category_id',2)->get();
       return view('pendants',compact('pendants_list'));
    }



    public function details(Request $request ,$id)
    {
      $product_details=Addproduct::where('id',$id)->first();
      $product=Addproduct::where('category_id',$id)->get();
      


      // dd($product);

       return view('details',compact('product_details','product'));
    }

    public function login()
    {
       return view('login');
    }


    public function index()
    {
        return view('cart');
    }


   //  public function addToCart(Request $request, $id)
   //  {
   //      $product = Addproduct::select('select * from products where id='.$id);
   //      $cart = Session::get('cart');
   //      $cart[] = array(
   //          "id" => $product[0]->id,
   //          "product_name" => $product[0]->product_name,
   //          "price" => $product[0]->harga,
   //          "image" => $product[0]->image,
   //          "qty" => 1,
   //      );

   //      Session::put('cart', $cart);
   //      Session::flash('success','barang berhasil ditambah ke keranjang!');
   //      //dd(Session::get('cart'));
   //      return redirect()->back();
   //  }

    
}
