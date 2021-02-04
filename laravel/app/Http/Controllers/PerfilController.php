<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function Perfil(Request $ingresar){
        $arreglo = [
            'name'=>$ingresar->query('Grupo1', 'Grupo2'),
            'descripcion'=>$ingresar->query('1', '2')
    ];
       return view('perfil')->with($arreglo);

    }
}
