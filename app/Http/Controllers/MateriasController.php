<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Materias;

use App\Industrias;

use Session;

use Illuminate\Support\Facades\Auth;

class MateriasController extends Controller
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
            'nombre'=>'required',
            'descripcion'=>'required|max:400',
            'unidad' => 'required',
        ));

        $materias = new Materias; 
        $materias->nombre = $request->nombre;
        $materias->descripcion = $request->descripcion;
        $materias->unidad = $request->unidad;
        $materias->save();

        $idusuario = Auth::user();
        $idindustrias = Industrias::find($idusuario->industrias_id);
        $idindustrias->MateriasPrimas()->attach($materias);


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
