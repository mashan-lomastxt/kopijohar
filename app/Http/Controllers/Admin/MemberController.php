<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class MemberController extends Controller
{
    public function index(){
        $users = DB::select('select * from users');
        return view('dashboard.admin.sidebar.member.user', ['users'=>$users]);
    }

    public function tambah(){
        return view('dashboard.admin.sidebar.member.tambah');
    }

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

        return redirect()->route('member.index')->with(['success' => 'Data berhasil ditambah']);
    }

    public function edit($id){
        $users = User::find($id);
        return view('dashboard.admin.sidebar.member.edit', ['users'=>$users]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|unique:users,name,'.$id,
            'email' => 'required|email',
            'password' => 'required|min:5|max:15',
            
        ]);
        
        $dataUpdate = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];

        User::where('id', $id)->update($dataUpdate);

        Return redirect()->route('member.index');
    }

    public function delete($id){
        $users = User::find($id);
        $users->delete();

        return redirect()->route('member.index')->with(['success' => 'Data berhasil dihapus']);
    }
}
