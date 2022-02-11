<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function create(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5|max:15',
            'cpassword' => 'required|same:password'
        ],[
            'cpassword.required'=> 'The comfirm field is required.',
            'cpassword.same'=> 'The comfirm password and password must match'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('user.login');
    }

    public function doLogin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:15'
        ]);
        
        $check = $request->only('email', 'password');
        if(Auth::guard('web')->attempt($check)){
            return redirect()->route('user.home')->with('Success','Login Berhasil');
        }else{
            return redirect()->back()->with('Error','Login Gagal');
        }
    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect('/');
    }

}
