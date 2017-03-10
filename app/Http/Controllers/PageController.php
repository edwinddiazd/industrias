<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Industrias;

use App\Personal;

class PageController extends Controller
{
    
    public function getIndex ()
    {
        return view ('home');
    }

    public function getReg_Personal ()
    {
        return view ('Reg_Personal');
    }


    public function getProducto ()
    {
        return view ('Producto');
    }

    public function getConsultaPersonal ()
    {
       
        $personals = Personal::all();
        return view ('Consulta_Personal')->withPersonals($personals);
    }

    public function getAliados ()
    {
        return view ('Aliados');
    }

    public function getBroker ()
    {
        return view ('Broker');
    }

    public function getProyeccion ()
    {
        return view ('Proyeccion');
    }

    public function getExportacion ()
    {
        return view ('Exportacion');
    }

    public function getAlianzas ()
    {
        return view ('Alianzas');
    }

    public function getRegistroIndustrias ()
    {
        return view ('Registro_Industrias');
    }

    public function getConsulta ()
    {
        return view ('Consulta');
    } 

    public function getConsulta_Presidente()
    {
        return view ('Consulta_Presidente');
    }    

    public function getConsulta_Encargado_ventas()
    {
        return view ('Consulta_Encargado_ventas');
    }  

    public function getConsulta_Encargado_compras()
    {
        return view ('Consulta_Encargado_compras');
    }  

    public function getConsulta_Encargado_juridico()
    {
        return view ('Consulta_Encargado_juridico');
    }  

    public function getConsulta_Encargado_Seguridad_industrial()
    {
        return view ('Consulta_Encargado_Seguridad_industrial');
    } 

    public function getConsulta_Encargado_Seguridad_integral()
    {
        return view ('Consulta_Encargado_Seguridad_integral');
    } 

    public function getConsulta_Encargado_operaciones()
    {
        return view ('Consulta_Encargado_operaciones');
    } 


    public function getConsulta_Encargado_Tecnologia()
    {
        return view ('Consulta_Encargado_Tecnologia');
    } 

    public function getConsulta_Encargado_Comunicaciones()
    {
        return view ('Consulta_Encargado_Comunicaciones');
    } 

    public function getConsulta_Encargado_Gestion_humana()
    {
        return view ('Consulta_Encargado_Gestion_humana');
    } 

    public function getConsulta_Encargado_Bienes()
    {
        return view ('Consulta_Encargado_Bienes');
    } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
