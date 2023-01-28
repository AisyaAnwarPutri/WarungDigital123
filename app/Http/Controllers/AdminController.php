<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // mengambil data dari database
        // $produk = DB::table('produk')->get();
        // $pesanan = DB::table('pesanan')->get();
        // $pesanan_detail = DB::table('pesanan_detail')->get();
        return view('admin/admin');
    }
}
