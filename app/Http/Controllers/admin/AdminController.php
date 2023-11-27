<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use db;
use Illuminate\Http\RedirectResponse;

 

class AdminController extends Controller
{
    public function admin_login()
    {
       return view('admin.admin_login');
    }
    
  

    public function login(Request $request){

        $request->validate([
          'email' => 'required|email|exists:admins,email',
          'password' => 'required|min:6',
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // return redirect('admin/dashboard');
            return redirect()->route('dashboard');
            }else{
                Session::flash('error-message','Invalid Email or Password');
                return back();
            }
       
    }

   

    public function logout(){
        Auth::guard('admin')->logout();
          return redirect('admin/login');
          
      }
    
}
// if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
//     return redirect()->route('dashboard');
// }else{
//     Session::flash('error-message','Invalid Email or Password');
//     return back();
// }
