<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Sol_Mat;

use Illuminate\Support\Facades\Auth;

use App\Industrias;

use App\Producto;

use DB;

use Session;

class SolmatController extends Controller
{
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
        $this->validate($request,array(
            'criticidad'=>'required',
            'capacidad'=>'required',
            'materias_id'=>'required',
            'productos_id'=>'required',
            )); 
        $data = Auth::user()->industrias_id;
        $indus = Industrias::find($data);



        $solicitud = new Sol_Mat;
        $solicitud->industrias_id = $indus->id;
        $solicitud->materias_id = $request->materias_id;
        $solicitud->productos_id = $request->productos_id;
        $solicitud->criticidad_producto = $request->criticidad;
        $solicitud->capacidad = $request->capacidad;
        $solicitud->solicitud = $request->solicitud;
        $solicitud->save();

        Session::flash('success','Datos guardados satisfactoriamente');

        return redirect('/Solmats');

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
