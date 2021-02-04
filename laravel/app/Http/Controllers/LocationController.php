<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function Location(Request $ingresar){
        $arreglo = [
            'name'=>$ingresar->query('Grupo1', 'Grupo2')
    ];
       return view('location')->with($arreglo);

    }
}
