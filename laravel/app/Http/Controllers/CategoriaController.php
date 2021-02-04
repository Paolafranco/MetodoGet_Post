<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function Categoria(Request $ingresar){
        $arreglo = [
            'name'=>$ingresar->query('Paola', 'Elizabeth')
    ];
       return view('categoria')->with($arreglo);

    }
}
