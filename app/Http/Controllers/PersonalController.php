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
        $industrias = Auth::user()->industrias_id;

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
            'telefono2_personal2'=>'required',
            'nombre_personal3'=>'required|max:100',
            'apellido_personal3'=>'required|max:100',
            'cedula_personal3'=>'required|max:10',
            'cargo_personal3'=>'required',
            'email_personal3'=>'required|email',
            'direccion_personal3'=>'required',
            'telefono1_personal3'=>'required',
            'telefono2_personal3'=>'required',
            'nombre_personal4'=>'required|max:100',
            'apellido_personal4'=>'required|max:100',
            'cedula_personal4'=>'required|max:10',
            'cargo_personal4'=>'required',
            'email_personal4'=>'required|email',
            'direccion_personal4'=>'required',
            'telefono1_personal4'=>'required',
            'telefono2_personal4'=>'required',
            'nombre_personal5'=>'required|max:100',
            'apellido_personal5'=>'required|max:100',
            'cedula_personal5'=>'required|max:10',
            'cargo_personal5'=>'required',
            'email_personal5'=>'required|email',
            'direccion_personal5'=>'required',
            'telefono1_personal5'=>'required',
            'telefono2_personal5'=>'required',
            'nombre_personal6'=>'required|max:100',
            'apellido_personal6'=>'required|max:100',
            'cedula_personal6'=>'required|max:10',
            'cargo_personal6'=>'required',
            'email_personal6'=>'required|email',
            'direccion_personal6'=>'required',
            'telefono1_personal6'=>'required',
            'telefono2_personal6'=>'required',
            'nombre_personal7'=>'required|max:100',
            'apellido_personal7'=>'required|max:100',
            'cedula_personal7'=>'required|max:10',
            'cargo_personal7'=>'required',
            'email_personal7'=>'required|email',
            'direccion_personal7'=>'required',
            'telefono1_personal7'=>'required',
            'telefono2_personal7'=>'required',
            'nombre_personal8'=>'required|max:100',
            'apellido_personal8'=>'required|max:100',
            'cedula_personal8'=>'required|max:10',
            'cargo_personal8'=>'required',
            'email_personal8'=>'required|email',
            'direccion_personal8'=>'required',
            'telefono1_personal8'=>'required',
            'telefono2_personal8'=>'required',
            'nombre_personal9'=>'required|max:100',
            'apellido_personal9'=>'required|max:100',
            'cedula_personal9'=>'required|max:10',
            'cargo_personal9'=>'required',
            'email_personal9'=>'required|email',
            'direccion_personal9'=>'required',
            'telefono1_personal9'=>'required',
            'telefono2_personal9'=>'required',
            'nombre_personal10'=>'required|max:100',
            'apellido_personal10'=>'required|max:100',
            'cedula_personal10'=>'required|max:10',
            'cargo_personal10'=>'required',
            'email_personal10'=>'required|email',
            'direccion_personal10'=>'required',
            'telefono1_personal10'=>'required',
            'telefono2_personal10'=>'required',
            'nombre_personal11'=>'required|max:100',
            'apellido_personal11'=>'required|max:100',
            'cedula_personal11'=>'required|max:10',
            'cargo_personal11'=>'required',
            'email_personal11'=>'required|email',
            'direccion_personal11'=>'required',
            'telefono1_personal11'=>'required',
            'telefono2_personal11'=>'required',
            ));

        $personal1= new Personal;
        $personal1->industrias_id = $industrias->industrias_id;
        $personal1->nombre_personal = $request->nombre_personal1;
        $personal1->apellido_personal = $request->apellido_personal1;
        $personal1->cedula_personal = $request->cedula_personal1;
        $personal1->cargo_personal = $request->cargo_personal1;
        $personal1->email_personal = $request->email_personal1;
        $personal1->telefono1_personal = $request->telefono1_personal1;
        $personal1->telefono2_personal = $request->telefono2_personal1;
        $personal1->save();

        $personal2= new Personal;
        $personal2->industrias_id = $industrias->industrias_id;
        $personal2->nombre_personal = $request->nombre_personal2;
        $personal2->apellido_personal = $request->apellido_personal2;
        $personal2->cedula_personal = $request->cedula_personal2;
        $personal2->cargo_personal = $request->cargo_personal2;
        $personal2->email_personal = $request->email_personal2;
        $personal2->telefono1_personal = $request->telefono1_personal2;
        $personal2->telefono2_personal = $request->telefono2_personal2;
        $personal2->save();

        $personal3= new Personal;
        $personal3->industrias_id = $industrias->industrias_id;
        $personal3->nombre_personal = $request->nombre_personal3;
        $personal3->apellido_personal = $request->apellido_personal3;
        $personal3->cedula_personal = $request->cedula_personal3;
        $personal3->cargo_personal = $request->cargo_personal3;
        $personal3->email_personal = $request->email_personal3;
        $personal3->telefono1_personal = $request->telefono1_personal3;
        $personal3->telefono2_personal = $request->telefono2_personal3;
        $personal3->save();

        $personal4= new Personal;
        $personal4->industrias_id = $industrias->industrias_id;
        $personal4->nombre_personal = $request->nombre_personal4;
        $personal4->apellido_personal = $request->apellido_personal4;
        $personal4->cedula_personal = $request->cedula_personal4;
        $personal4->cargo_personal = $request->cargo_personal4;
        $personal4->email_personal = $request->email_personal4;
        $personal4->telefono1_personal = $request->telefono1_personal4;
        $personal4->telefono2_personal = $request->telefono2_personal4;
        $personal4->save();

        $personal5= new Personal;
        $personal5->industrias_id = $industrias->industrias_id;
        $personal5->nombre_personal = $request->nombre_personal5;
        $personal5->apellido_personal = $request->apellido_personal5;
        $personal5->cedula_personal = $request->cedula_personal5;
        $personal5->cargo_personal = $request->cargo_personal5;
        $personal5->email_personal = $request->email_personal5;
        $personal5->telefono1_personal = $request->telefono1_personal5;
        $personal5->telefono2_personal = $request->telefono2_personal5;
        $personal5->save();

        $personal6= new Personal;
        $personal6->industrias_id = $industrias->industrias_id;
        $personal6->nombre_personal = $request->nombre_personal6;
        $personal6->apellido_personal = $request->apellido_personal6;
        $personal6->cedula_personal = $request->cedula_personal6;
        $personal6->cargo_personal = $request->cargo_personal6;
        $personal6->email_personal = $request->email_personal6;
        $personal6->telefono1_personal = $request->telefono1_personal6;
        $personal6->telefono2_personal = $request->telefono2_personal6;
        $personal6->save();

        $personal7= new Personal;
        $personal7->industrias_id = $industrias->industrias_id;
        $personal7->nombre_personal = $request->nombre_personal7;
        $personal7->apellido_personal = $request->apellido_personal7;
        $personal7->cedula_personal = $request->cedula_personal7;
        $personal7->cargo_personal = $request->cargo_personal7;
        $personal7->email_personal = $request->email_personal7;
        $personal7->telefono1_personal = $request->telefono1_personal7;
        $personal7->telefono2_personal = $request->telefono2_personal7;
        $personal7->save();

        $personal8= new Personal;
        $personal8->industrias_id = $industrias->industrias_id;
        $personal8->nombre_personal = $request->nombre_personal8;
        $personal8->apellido_personal = $request->apellido_personal8;
        $personal8->cedula_personal = $request->cedula_personal8;
        $personal8->cargo_personal = $request->cargo_personal8;
        $personal8->email_personal = $request->email_personal8;
        $personal8->telefono1_personal = $request->telefono1_personal8;
        $personal8->telefono2_personal = $request->telefono2_personal8;
        $personal8->save();

        $personal9= new Personal;
        $personal9->industrias_id = $industrias->industrias_id;
        $personal9->nombre_personal = $request->nombre_personal9;
        $personal9->apellido_personal = $request->apellido_personal9;
        $personal9->cedula_personal = $request->cedula_personal9;
        $personal9->cargo_personal = $request->cargo_personal9;
        $personal9->email_personal = $request->email_personal9;
        $personal9->telefono1_personal = $request->telefono1_personal9;
        $personal9->telefono2_personal = $request->telefono2_personal9;
        $personal9->save();

        $personal10= new Personal;
        $personal10->industrias_id = $industrias->industrias_id;
        $personal10->nombre_personal = $request->nombre_personal10;
        $personal10->apellido_personal = $request->apellido_personal10;
        $personal10->cedula_personal = $request->cedula_personal10;
        $personal10->cargo_personal = $request->cargo_personal10;
        $personal10->email_personal = $request->email_personal10;
        $personal10->telefono1_personal = $request->telefono1_personal10;
        $personal10->telefono2_personal = $request->telefono2_personal10;
        $personal10->save();

        $personal11= new Personal;
        $personal11->industrias_id = $industrias->industrias_id;
        $personal11->nombre_personal = $request->nombre_personal11;
        $personal11->apellido_personal = $request->apellido_personal11;
        $personal11->cedula_personal = $request->cedula_personal11;
        $personal11->cargo_personal = $request->cargo_personal11;
        $personal11->email_personal = $request->email_personal11;
        $personal11->telefono1_personal = $request->telefono1_personal11;
        $personal11->telefono2_personal = $request->telefono2_personal11;
        $personal11->save();

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
