<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Industrias;

use App\Personal;

use App\Productos;

use App\Materias;

use App\Proyeccion;

use App\Produccion;

use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    
    public function getIndex ()
    {
        return view ('home');
    }

    public function getReg_Personal ()
    {
        $data = Auth::user()->industrias_id;
        $industrias = Industrias::find($data);
        return view ('Reg_Personal')->withIndustrias($industrias);
    }

    public function getDashboard ()
    {
        $data = Auth::user()->industrias_id;
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

    public function getConsultaPersonal ()
    {
       
        $industrias = DB::table('industrias')->join('personal','industrias.id','=','personal.industrias_id')->select('industrias.industria','personal.cargo_personal','personal.nombre_personal','personal.apellido_personal','personal.email_personal','personal.telefono1_personal','personal.telefono2_personal')->get();
        return view ('Consultas.Personal')->withIndustrias($industrias);
    }

    public function getConsultaProductos_consul ()
    {
         /*Aqui estoy haciendo un query serio, dentro de este query lo q estoy haciendo es 
        1- llamar a la tabla proyeccion para meter la informacion dentro de la variable $proys mediante el comabdo DB::table('nombre de la tabla')
        2- unirle o pegarle (->join) la informacion de la tabla industrias con la condicion de q el id de la tabla industrias ('industrias.id' y recuerda q el punto indica pertenencia a la tabla, en este caso seria el id que pertenece a la tabla industrias, tambien recuerda que me refiero a id como columna de la tabla no como titulo del valor) coincida con el industrias_id de la tabla proyeccion
        3- repito el procedimiendo para las tablas de productos, de capacidad y de produccion.
        4- con ->select selecciono las columnas que necesito para mostrar la informacion de la consulta, en este caso necesito el nombre de la industria, el nombre del producto, la unidad del producto, la capacidad instalada, la capacidad operativa, la proyeccion, la produccion y los precios en bs y en $
        5- toda esa informacion va a estar guardada en la variable $proys, y se la pasamos a la vista para q se construya la tabla a mostrar */
        $nue = DB::table('proyeccions')->join('industrias','industrias.id','=','proyeccions.industrias_id')->join('productos','productos.id','=','proyeccions.productos_id')->join('produccions','produccions.productos_id','=','proyeccions.productos_id')->select('industrias.industria','proyeccions.proyeccion','productos.producto','productos.descripcion_producto','produccions.produccion','productos.unidad_producto','productos.tipo_producto')->get();
        return view ('Consultas.Productos_consul')->withNuev($nue);
    }

    public function getConsultaSubproduc ()
    {
        $subp=DB::table('produccions')->join('industrias','industrias.id','=','produccions.industrias_id')->join('productos','productos.id','=','produccions.productos_id')->join('proyeccions','proyeccions.productos_id','=','produccions.productos_id')->select('industrias.industria','productos.tipo_producto','productos.producto','produccions.produccion','produccions.bolivares','produccions.dolares','productos.unidad_producto','proyeccions.capacidad','proyeccions.proyeccion')->where('productos.tipo_producto','=','Sub Producto')->get();

        return view ('Consultas.Subproduc')->withSub($subp);
    }

    public function getConsultaSemiproduc ()
    {
        $semi=DB::table('produccions')->join('industrias','industrias.id','=','produccions.industrias_id')->join('productos','productos.id','=','produccions.productos_id')->join('proyeccions','proyeccions.productos_id','=','produccions.productos_id')->select('industrias.industria','productos.tipo_producto','productos.producto','produccions.produccion','produccions.bolivares','produccions.dolares','productos.unidad_producto','proyeccions.capacidad','proyeccions.proyeccion')->where('productos.tipo_producto','=','Semi-Terminado')->get();

        return view ('Consultas.Semiproduc')->withSemip($semi);
    }

    public function getConsultaTerminado ()
    {
        $termi=DB::table('produccions')->join('industrias','industrias.id','=','produccions.industrias_id')->join('productos','productos.id','=','produccions.productos_id')->join('proyeccions','proyeccions.productos_id','=','produccions.productos_id')->select('industrias.industria','productos.tipo_producto','productos.producto','produccions.produccion','produccions.bolivares','produccions.dolares','productos.unidad_producto','proyeccions.capacidad','proyeccions.proyeccion')->where('productos.tipo_producto','=','Terminado')->get();

        return view ('Consultas.Terminado')->withTer($termi);
    }

    public function getConsultaMateriP()
    {
        $solmp=DB::table('solmat')->join('industrias','industrias.id','=','solmat.industrias_id')->join('materias','materias.id','=','solmat.materias_id')->select('industrias.industria','materias.nombre','materias.descripcion','materias.unidad')->get();

        return view ('Consultas.MateriaP')->withSmp($solmp);  
    }

    public function getBroker ()
    {
        $data = Auth::user()->industrias_id;
        $industrias = Industrias::find($data);
        return view ('Broker')->withIndustrias($industrias);
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
        $industrias = DB::table('industrias')->join('Broker','industrias.id','=','Broker.industrias_id')->select('industrias.industria','Broker.nombre','Broker.pasaporte','Broker.direccion','Broker.web','Broker.tlf1','Broker.tlf2')->get();
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
