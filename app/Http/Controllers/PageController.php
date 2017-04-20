<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Industrias;

use App\Personal;

use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    
    public function getIndex ()
    {
        return view ('home');
    }

    public function getReg_Personal ()
    {
        $data = Auth::user()->id;
        $industrias = Industrias::find($data);
        return view ('Reg_Personal')->withIndustrias($industrias);
    }

    public function getDashboard ()
    {
        $data = Auth::user()->id;
        $industrias = Industrias::find($data);
        return view ('Dashboard')->withIndustrias($industrias);
    }

    public function getProducto ()
    {

        return view ('Producto');
    }

    public function getReg_Materias ()
    {
        return view ('Reg_Materias');
    }

    public function getCapacidads ()
    {
        $prod = Productos::all();
        $data = Auth::user()->id;
        $industrias = Industrias::find($data);
        return view ('Capacidad')->withIndustrias($industrias)->withProductos($prod);
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
        $data = Auth::user()->id;
        $industrias = Industrias::find($data);
        return view ('Broker')->withIndustrias($industrias);
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

    public function getRegistro ()
    {
        return view ('Registro_Industrias');
    }

    public function getConsulta ()
    {
        return view ('Consulta');
    } 

    public function getConsultaPresidente()
    {
        $industrias = DB::table('industrias')->join('personal','industrias.id','=','personal.industrias_id')->select('industrias.industria','personal.cargo_personal','personal.nombre_personal','personal.apellido_personal','personal.cedula_personal','personal.email_personal','personal.telefono1_personal','personal.telefono2_personal')->where('personal.cargo_personal','=', 'Presidente')->get();
        return view ('Consultas.Presidente')->withIndustrias($industrias);
    }    

    public function getConsultaVentas()
    {
        $industrias = DB::table('industrias')->join('personal','industrias.id','=','personal.industrias_id')->select('industrias.industria','personal.cargo_personal','personal.nombre_personal','personal.apellido_personal','personal.cedula_personal','personal.email_personal','personal.telefono1_personal','personal.telefono2_personal')->where('personal.cargo_personal','=', 'Encargado Compras')->get();

        return view ('Consultas.Ventas')->withIndustrias($industrias);
    }  

    public function getConsultaCompras()
    {
        $industrias = DB::table('industrias')->join('personal','industrias.id','=','personal.industrias_id')->select('industrias.industria','personal.cargo_personal','personal.nombre_personal','personal.apellido_personal','personal.cedula_personal','personal.email_personal','personal.telefono1_personal','personal.telefono2_personal')->where('personal.cargo_personal','=', 'Encargado Compras')->get();

        return view ('Consultas.Compras')->withIndustrias($industrias);
    }  

    public function getConsultaJuridico()
    {
        $industrias = DB::table('industrias')->join('personal','industrias.id','=','personal.industrias_id')->select('industrias.industria','personal.cargo_personal','personal.nombre_personal','personal.apellido_personal','personal.cedula_personal','personal.email_personal','personal.telefono1_personal','personal.telefono2_personal')->where('personal.cargo_personal','=', 'Encargado Juridico')->get();

        return view ('Consultas.Juridico')->withIndustrias($industrias);
    }  

    public function getConsultaSeguridadIndustrial()
    {
        $industrias = DB::table('industrias')->join('personal','industrias.id','=','personal.industrias_id')->select('industrias.industria','personal.cargo_personal','personal.nombre_personal','personal.apellido_personal','personal.cedula_personal','personal.email_personal','personal.telefono1_personal','personal.telefono2_personal')->where('personal.cargo_personal','=', 'Encargado Seguridad Industrial')->get();
        return view ('Consultas.Seguridad_Industrial')->withIndustrias($industrias);
    } 

    public function getConsultaSeguridadIntegral()
    {
        $industrias = DB::table('industrias')->join('personal','industrias.id','=','personal.industrias_id')->select('industrias.industria','personal.cargo_personal','personal.nombre_personal','personal.apellido_personal','personal.cedula_personal','personal.email_personal','personal.telefono1_personal','personal.telefono2_personal')->where('personal.cargo_personal','=', 'Encargado Seguridad Integral')->get();
        return view ('Consultas.Seguridad_Integral')->withIndustrias($industrias);
    } 

    public function getConsultaOperaciones()
    {
        $industrias = DB::table('industrias')->join('personal','industrias.id','=','personal.industrias_id')->select('industrias.industria','personal.cargo_personal','personal.nombre_personal','personal.apellido_personal','personal.cedula_personal','personal.email_personal','personal.telefono1_personal','personal.telefono2_personal')->where('personal.cargo_personal','=', 'Encargado Operaciones')->get();
        return view ('Consultas.Operaciones')->withIndustrias($industrias);
    } 


    public function getConsultaTecnologia()
    {
        $industrias = DB::table('industrias')->join('personal','industrias.id','=','personal.industrias_id')->select('industrias.industria','personal.cargo_personal','personal.nombre_personal','personal.apellido_personal','personal.cedula_personal','personal.email_personal','personal.telefono1_personal','personal.telefono2_personal')->where('personal.cargo_personal','=', 'Encargado Tecnologia')->get();
        return view ('Consultas.Tecnologia')->withIndustrias($industrias);
    } 

    public function getConsultaComunicaciones()
    {
        $industrias = DB::table('industrias')->join('personal','industrias.id','=','personal.industrias_id')->select('industrias.industria','personal.cargo_personal','personal.nombre_personal','personal.apellido_personal','personal.cedula_personal','personal.email_personal','personal.telefono1_personal','personal.telefono2_personal')->where('personal.cargo_personal','=', 'Encargado Comunicaciones')->get();        
        return view ('Consultas.Comunicaciones')->withIndustrias($industrias);
    } 

    public function getConsultaGestionHumana()
    {
        $industrias = DB::table('industrias')->join('personal','industrias.id','=','personal.industrias_id')->select('industrias.industria','personal.cargo_personal','personal.nombre_personal','personal.apellido_personal','personal.cedula_personal','personal.email_personal','personal.telefono1_personal','personal.telefono2_personal')->where('personal.cargo_personal','=', 'Encargado Bienes')->get();
        return view ('Consultas.Gestion_Humana')->withIndustrias($industrias);
    } 

    public function getConsultaBroker_Consul()
    {
        $industrias = DB::table('industrias')->join('Broker','industrias.id','=','Broker.industrias_id')->select('industrias.industria','Broker.nombre','Broker.pasaporte','Broker.direccion','Broker.correo','Broker.tlf1','Broker.tlf2')->get();
        return view ('Consultas.Broker_Consul')->withIndustrias($industrias);
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
