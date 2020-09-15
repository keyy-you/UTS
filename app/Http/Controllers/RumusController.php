<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RumusController extends Controller
{
    public function volumetabungfunc(Request $request)
    {
    
    $alasnya = $request->input('tabung');
    $tingginya = $request->input('tabungtinggi');
    $phi = $request->input('phi2');

    $volume = $phi * $alasnya * $tingginya;

    
    return redirect('/')->with('hasil', 'Hasilnya adalah : ' .$volume);
    }
    
    public function volumekerucutfunc(Request $request)
    {
    
    $alasnya1 = $request->input('kerucut');
    $tingginya1 = $request->input('kerucuttinggi');
    $bilangan = 1/3;
    $phi1 = $request->input('phi3');

    $volume1 = $phi1 * $alasnya1 * $tingginya1 / $bilangan;

    
    return redirect('/')->with('hasil1', 'Hasilnya adalah : ' .$volume1);
    }

    public function volumebolafunc(Request $request)
    {
    
    $alasnya2 = $request->input('bola');
   
    $phi2 = $request->input('phi4');
    $bilangan1 = 4/3;
    $volume2 = $phi2 * $alasnya2 / $bilangan1;

    
    return redirect('/')->with('hasil2', 'Hasilnya adalah : ' .$volume2);
    }


}
