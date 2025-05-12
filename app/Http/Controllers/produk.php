<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class produk extends Controller
{
    function getProduk(){
        $products = DB::table('produk')->where('id_produk',12)->first();
        return view('welcome')->with("produk",$products);
    }
}
