<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Kategories;

class KategoriesController extends Controller
{

    public function index(){
        $kategories = DB::select('select * from kategories');
        return view('dashboard.admin.sidebar.kategori.kategori', ['kategories' => $kategories]);
    }

    public function create(Request $request){
        $request->validate([
            'name' => 'required|unique:kategories,name'
        ]);

        $kategories = new Kategories();
        $kategories->name = $request->name;
        $data = $kategories->save();
            if($data){
                return redirect()->back()->with('Success','Data Berhasil di tambah');
            }else{
                return redirect()->back()->with('Error','Data Gagal ditambahkan');
        }
    }

    public function edit($id){
        $kategories = Kategories::find($id);
        return view('dashboard.admin.sidebar.kategori.edit', ['kategories' => $kategories]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|unique:kategories,name,'.$id
        ]);
        
        $dataUpdate = [
            'name' => $request->name
        ];

        Kategories::where('id', $id)->update($dataUpdate);

        Return redirect()->route('kategori.index')->with(['success' => 'Data berhasil diubah']);
    }

    public function delete($id){
        $kategori = Kategories::find($id);
        $kategori->delete();

        return redirect()->route('kategori.index')->with(['success' => 'Data berhasil dihapus']);

    }

}
