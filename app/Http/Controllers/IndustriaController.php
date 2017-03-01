<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Industrias;

use Session;

class IndustriaController extends Controller
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
        return view('Industria.create');
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
            'industria'=>'required|max:255',
            'direccion_industria'=>'required',
            'rif_industria'=>'required|max:15',
            'telefono1_industria'=>'required',
            'telefono2_industria'=>'required'
            ));
        $industria= new Industrias;
        $industria->industria = $request->industria;
        $industria->direccion_industria = $request->direccion_industria;
        $industria->rif_industria = $request->rif_industria;
        $industria->telefono1_industria = $request->telefono1_industria;
        $industria->telefono2_industria = $request->telefono2_industria;
        $industria->save();

        Session::flash('success','Datos guardados satisfactoriamente');

        return redirect()->route('Industria.show',$industria->id);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $industria=Industrias::find($id);
        return view ('Industria.show')->with('industria',$industria);
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
