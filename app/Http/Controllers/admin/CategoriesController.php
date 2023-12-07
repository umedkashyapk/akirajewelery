<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoriesController extends Controller
{
   public function Categories(Request $request){
      
      
      $Category_list =Category::get();
   //   dd($Category_list);
    return view('admin.categories', compact('Category_list'));
   }
}
