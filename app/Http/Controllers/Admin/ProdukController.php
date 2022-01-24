<?php

namespace App\Http\Controllers\Admin;

use App\Barang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Alert;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $barang = Barang::where('id', $id)->first();

        return view('admin.edit', compact('barang'));
    }
    public function update(Request $request, $id)
    {

        $barangs = Barang::where('id', $id)->first();
        $barangs->nama_barang = $request->nama_barang;
        $barangs->harga = $request->harga;
        $barangs->stok = $request->stok;
        $barangs->keterangan = $request->keterangan;
        $barangs->gambar = $request->gambar;

        $barangs->update();


        return redirect('admin')->withSuccess('Produk Sukses diupdate');;
    }

    public function delete($id)
    {
        $barangs = Barang::where('id', $id)->first();

        $barangs->update();


        $barangs->delete();


        return redirect('admin')->with('errors', 'Produk Sukses dihapus');
    }
}
