<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Productos;

use App\Industrias;

use Session;

use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
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
            'producto'=>'required',
            'tipo_producto'=>'required',
            'unidad_producto' => 'required',
            'descripcion_producto' => 'required|max:400',
        ));

        $productos = new Productos; 
        $productos->producto = $request->producto;
        $productos->tipo_producto = $request->tipo_producto;
        $productos->descripcion_producto = $request->descripcion_producto;
        $productos->unidad_producto = $request->unidad_producto;
        $productos->save();

        $idusuario = Auth::user();
        $idindustrias = Industrias::find($idusuario->industrias_id);
        $idindustrias->Prod_Indus()->attach($productos);


        Session::flash('success','Datos guardados satisfactoriamente');

        return redirect('Dashboard');
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
