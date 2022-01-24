<?php

namespace App\Http\Controllers\Admin;

use App\Barang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Alert;

class AddProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add()
    {
        $barangs = Barang::paginate(20);
        return view('admin.add', compact('barangs'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_barang' => 'required',
            'gambar' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'keterangan' => 'required',
            'harga' => 'required'
        ]);

        $data = $request->except(['_token']);
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
        //dd($data);
        Barang::insert($data);

        return redirect('admin')->withSuccess('Produk Sukses ditambahkan');
    }
}
