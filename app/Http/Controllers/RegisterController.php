<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Industrias;

use App\Productos;

use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function getReg_Personal ()
    {
        $data = Auth::user()->industrias_id;
        $industrias = Industrias::find($data);
        return view ('Reg_Personal')->withIndustrias($industrias);
    }
    public function getReg_Materias ()
    {
        return view ('Reg_Materias');
    }

    public function getCapacidads ()
    {
        $produs = Productos::all();
        $data = Auth::user()->industrias_id;
        $industrias = Industrias::find($data);
        return view ('Capacidad')->withIndustrias($industrias)->withProductos($produs);
    }

    public function getSolmats ()
    {
        $produs = Productos::all();
        $mats = Materias::all();
        return view ('Solmat')->withMaterias($mats)->withProductos($produs);
    }

    public function getReg_Proyeccion ()
    {
        $produs = Productos::all();
        $data = Auth::user()->industrias_id;
        $industrias = Industrias::find($data);
        return view ('Reg_Proyeccion')->withIndustrias($industrias)->withProductos($produs);
    }
    public function getReg_Produccion ()
    {
        $produs = Productos::all();
        $data = Auth::user()->industrias_id;
        $industrias = Industrias::find($data);
        return view ('Reg_Produccion')->withIndustrias($industrias)->withProductos($produs);
    }
    





}
