<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function index()
    {
         
        // $user = DB::table('users')->get();
        
        $user = DB::table('users')->select('username', 'email')->get();
        return response()->json([
            'status' => 'success',
            'message'=> 'user berhasil diambil',
            'data'=> $user,
        ],200);
    }
}
