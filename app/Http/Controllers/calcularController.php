<?php

namespace App\Http\Controllers;

use App\Models\duenio;
use App\Models\propiedades;
use Illuminate\Http\Request;
use Illuminate\Support\Composer;

class calcularController extends Controller
{

    public function todosDuenios(){
        $duenios = duenio::all();
        return view('welcome', compact('duenios'));
    }
    public function todasPropiedades(){
        $propiedades = propiedades::all();
        return view('propiedades', compact('propiedades'));
    }

    public function calcularValor(int $piso, float $area){
        $valorImpuesto = 0.1;
        if ($piso>1 && $piso<13) {
            for ($i=0; $i < $piso; $i++) { 
                $valorImpuesto += 0.1;
            }
            $valorMetroCuadrado = 1500 + (1500 * $valorImpuesto);
            $total = number_format(($area * $valorMetroCuadrado),2);
        }else 
                $total = number_format(($area * 1500),2);

        Return view('calcular', ['total'=> $total,]);
    }


    public function showProperties($idDuenio)
    {
        $duenio = Duenio::find($idDuenio);
        if (!$duenio) {
            abort(404, 'Dueño no encontrado');
        }

        $propiedades = $duenio->propiedades;
        return view('propiedades-dueños', ['duenio' => $duenio, 'propiedades' => $propiedades]);
    }
}
