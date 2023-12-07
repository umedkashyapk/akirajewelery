<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class OrdersController extends Controller
{
   public function orders_list(){
    return view('admin.orders_list');
   }
}
