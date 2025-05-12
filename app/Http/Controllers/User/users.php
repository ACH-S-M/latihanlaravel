<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class users extends Controller
{
    function getAdmin(){
        $admin = DB::table('admin')->get();
        return view('admin',["admin" => $admin]);
    }
}
