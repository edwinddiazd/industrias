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
            'nombre_personal1'=>'required|max:100',
            'apellido_personal1'=>'required|max:100',
            'cedula_personal1'=>'required|max:10',
            'cargo_personal1'=>'required',
            'email_personal1'=>'required|email',
            'direccion_personal1'=>'required',
            'telefono1_personal1'=>'required',
            'telefono2_personal1'=>'required',
            'nombre_personal2'=>'required|max:100',
            'apellido_personal2'=>'required|max:100',
            'cedula_personal2'=>'required|max:10',
            'cargo_personal2'=>'required',
            'email_personal2'=>'required|email',
            'direccion_personal2'=>'required',
            'telefono1_personal2'=>'required',
            'telefono2_personal2'=>'required'
            ));

        $personal1= new Personal;
        $personal1->industrias_id = $request->industrias_id;
        $personal1->nombre_personal = $request->nombre_personal1;
        $personal1->apellido_personal = $request->apellido_personal1;
        $personal1->cedula_personal = $request->cedula_personal1;
        $personal1->cargo_personal = $request->cargo_personal1;
        $personal1->email_personal = $request->email_personal1;
        $personal1->telefono1_personal = $request->telefono1_personal1;
        $personal1->telefono2_personal = $request->telefono2_personal1;
        $personal1->save();

        $personal2= new Personal;
        $personal2->industrias_id = $request->industrias_id;
        $personal2->nombre_personal = $request->nombre_personal2;
        $personal2->apellido_personal = $request->apellido_personal2;
        $personal2->cedula_personal = $request->cedula_personal2;
        $personal2->cargo_personal = $request->cargo_personal2;
        $personal2->email_personal = $request->email_personal2;
        $personal2->telefono1_personal = $request->telefono1_personal2;
        $personal2->telefono2_personal = $request->telefono2_personal2;
        $personal2->save();

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
