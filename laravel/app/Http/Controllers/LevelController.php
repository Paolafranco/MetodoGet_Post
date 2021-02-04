<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Level;
use DB ;

class LevelController extends Controller
{
    public function level(){
        $product =DB::table('levels')->get();
        return view('level', compact('product'));
}
}
