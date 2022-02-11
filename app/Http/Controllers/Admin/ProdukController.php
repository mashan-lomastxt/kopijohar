<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index(){
        $produks = DB::select('select * from produks');
        return view('dashboard.admin.sidebar.produk.produk', ['produks' => $produks]);
    }

    public function tambah(){
        return view('dashboard.admin.sidebar.produk.tambah');
    }

    public function create(Request $request){
        $request->validate([
            'name' => 'required|unique:produks,name',
            'kategori' => 'required|unique:kategories,kategori',
            'harga' => 'required|integer'
        ]);

        $produk = new Produk();
        $produk->name = $request->name;
        $produk->kategori = $request->kategories;
        $produk->harga = $request->harga;
        $data = $produk->save();
            if($data){
                return redirect()->back()->with('Success','Data Berhasil di tambah');
            }else{
                return redirect()->back()->with('Error','Data Gagal ditambahkan');
        }
    }

    public function edit($id){
        $produks = Produk::find($id);
        return view('dashboard.admin.sidebar.produk.edit', ['produks' => $produks]);
    }

    public function delete($id){
        $produks = Produk::find($id);
        $produks->delete();

        return redirect()->route('produk.index')->with(['success' => 'Data berhasil dihapus']);
    }
}
