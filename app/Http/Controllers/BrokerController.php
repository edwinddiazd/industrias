<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;

use App\Industrias;

use App\Broker;

use Session;

class BrokerController extends Controller
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

        $data = Auth::user()->industrias_id;
        $industrias = Industrias::find($data);

         $this->validate($request,array(
            'nombre'=>'required|max:255',
            'pasaporte'=>'required',
            'direccion'=>'required|max:400',
            'correo'=>'required',
            'tlf1'=>'required',
            'tlf2'=>'required',
            ));
        $brok= new Broker;
        $brok->nombre = $request->nombre;
        $brok->pasaporte = $request->pasaporte;
        $brok->direccion = $request->direccion;
        $brok->correo = $request->correo;
        $brok->tlf1 = $request->tlf1;
        $brok->tlf2 = $request->tlf2;
        $brok->industrias_id = $industrias->id;
        $brok->save();


        Session::flash('success','Datos guardados satisfactoriamente');
       return redirect('/Brokers');
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
