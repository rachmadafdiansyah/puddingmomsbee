<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Barang;
use App\Pesanan;
use App\User;
use App\PesananDetail;
use Auth;
use Alert;

class editPesananController extends Controller
{
    public function index($id)
    {
        $pesanan = Pesanan::where('id', $id)->first();

        return view('admin.editpesanan', compact('pesanan'));
    }

    public function update(Request $request, $id)
    {
        $pesanan = Pesanan::where('id', $id)->first();

        $pesanan->status = $request->status;
        $pesanan->update();


        return redirect('pesanan')->withSuccess('Produk Sukses diupdate');
    }
}
