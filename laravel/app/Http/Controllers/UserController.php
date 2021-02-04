<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use DB ;

class UserController extends Controller
{
    public function user(){
            $product =DB::table('users')->get();
            return view('user', compact('product'));
    }
}
