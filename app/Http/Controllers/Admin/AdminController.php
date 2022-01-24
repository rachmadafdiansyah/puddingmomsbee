<?php

namespace App\Http\Controllers\Admin;

use App\Barang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Alert;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $barangs = Barang::paginate(20);
        return view('admin.dashboard', compact('barangs'))->withSuccess('Login sebagai admin');
    }
}
