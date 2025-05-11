<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class users extends Controller
{
    function getAdmin(){
        $admin = DB::table('admin')->get();
        return view('admin',["admin" => $admin]);
    }
}
