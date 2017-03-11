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
       
        $industrias = DB::table('industrias')->join('personal','industrias.id','=','personal.industrias_id')->select('industrias.industria','personal.cargo_personal','personal.nombre_personal','personal.apellido_personal','personal.email_personal','personal.telefono1_personal','personal.telefono2_personal')->get();
        return view ('Consultas.Personal')->withIndustrias($industrias);
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

    public function getConsultaPresidente()
    {
        return view ('Consultas.Presidente');
    }    

    public function getConsultaVentas()
    {
        return view ('Consultas.Ventas');
    }  

    public function getConsultaCompras()
    {
        return view ('Consultas.Compras');
    }  

    public function getConsultaJuridico()
    {
        $industrias = DB::table('industrias')->join('personal','industrias.id','=','personal.industrias_id')->select('industrias.industria','personal.cargo_personal','personal.nombre_personal','personal.apellido_personal','personal.cedula_personal','personal.email_personal','personal.telefono1_personal','personal.telefono2_personal')->where('personal.cargo_personal','=', 'Encargado Juridico')->get();

        return view ('Consultas.Juridico')->withIndustrias($industrias);
    }  

    public function getConsultaSeguridadIndustrial()
    {
        return view ('Consultas.Seguridad_Industrial');
    } 

    public function getConsultaSeguridadIntegral()
    {
        return view ('Consultas.Seguridad_Integral');
    } 

    public function getConsultaOperaciones()
    {
        return view ('Consultas.Operaciones');
    } 


    public function getConsultaTecnologia()
    {
        return view ('Consultas.Tecnologia');
    } 

    public function getConsultaComunicaciones()
    {
        return view ('Consultas.Comunicaciones');
    } 

    public function getConsultaGestionHumana()
    {
        return view ('Consultas.Gestion_Humana');
    } 

    public function getConsultaBienes()
    {
        return view ('Consultas.Bienes');
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
