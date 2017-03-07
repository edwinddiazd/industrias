<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Personal;

use App\Industrias;

use Session;






class PersonalController extends Controller
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
            'nombre_personal'=>'required|max:100',
            'apellido_personal'=>'required|max:100',
            'cedula_personal'=>'required|max:10',
            'cargo_personal'=>'required',
            'email_personal'=>'required|email',
            'direccion_personal'=>'required',
            'telefono1_personal'=>'required',
            'telefono2_personal'=>'required'
            ));

        $personal= new Personal;
        $personal->industrias_id = $request->industrias_id;
        $personal->nombre_personal = $request->nombre_personal;
        $personal->apellido_personal = $request->apellido_personal;
        $personal->cedula_personal = $request->cedula_personal;
        $personal->cargo_personal = $request->cargo_personal;
        $personal->email_personal = $request->email_personal;
        $personal->telefono1_personal = $request->telefono1_personal;
        $personal->telefono2_personal = $request->telefono2_personal;
        $personal->save();

        Session::flash('success','Datos guardados satisfactoriamente');
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
