<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function doLogin(Request $request){
        $request->validate([
            'email' => 'required|email|exists:admins,email',
            'password' => 'required|min:5|max:15'
        ],[
            'email.exists' => 'Email tidak terdaftar'
        ]);
        
        $check = $request->only('email', 'password');
        if(Auth::guard('admin')->attempt($check)){
            return redirect()->route('admin.home')->with('Success','Login to Admin Dashboard');
        }else{
            return redirect()->back()->with('Error','Login Failed');
        }
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }

}
