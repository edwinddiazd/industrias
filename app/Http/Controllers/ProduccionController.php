<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;

use App\Industrias;

use App\Producto;

use App\Produccion;

use Session;

class ProduccionController extends Controller
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
        //
        $data = Auth::user()->industrias_id;
        $industrias = Industrias::find($data);

         $this->validate($request,array(
            'produccion'=>'required',
            'costo_b'=>'required',
            'costo_d'=>'required',
            'sele_product'=>'required',
            )); 

        $pduc= new Produccion;
        $pduc->produccion = $request->produccion;
        $pduc->bolivares = $request->costo_b;
        $pduc->dolares=$request->costo_d;
        $pduc->industrias_id = $industrias->id;
        $pduc->productos_id = $request ->sele_product;
        $pduc->save();

        Session::flash('success','Datos guardados satisfactoriamente');

        return redirect('/Reg_Produccions');
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
