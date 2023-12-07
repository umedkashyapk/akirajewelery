<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\controller;
use Illuminate\Http\Request;
use App\Models\Addproduct;

class ProductController extends Controller
{
    public function products_list(){

      $product_list = Addproduct::get();
    //   dd($product_list);


        return view('admin.product_list' , ['product_list'=>$product_list]);
    }

     







}


