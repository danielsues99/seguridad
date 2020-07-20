<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Camara;

class CamaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $camaras	=	Camara::all();
		return view ('Camara.index')->with('arraycamaras', $camaras);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Camara.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $camara = new Camara;
            $camara->name = $request->name;
            $camara->mark = $request->mark;
            $camara->model = $request->model;
            $camara->resolution = $request->resolution;
            $camara->tecnology = $request->tecnology;
            $camara->imagen = $request->imagen;
            $camara->cost = $request->cost;
            $camara->save();
            return redirect('/camarasadmin');
            }
            catch(\App\Exceptions\NotFoundmonException $e)
            {
                return $e->getMessage();
            }
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
        $camara = Camara::findOrFail($id);
		return view('/camara/edit')->with('camara',$camara);
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
        $validatedData = $request->validate([
            'name' => 'required',
            'mark' => 'required',
            'model' => 'required',
            'resolution' => 'required',
            'tecnology' => 'required',
            'imagen' => 'required',
            'cost' => 'required',
        ]);
        Camara::whereId($id)->update($validatedData);

        return redirect('/camarasadmin')->with('success', 'Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $camara = Camara::find($id);
        $camara->delete();
        return redirect('/camarasadmin');
    }
    public function catalog(){
        $catalog = Camara::all();
        return view ("Camara.catalog",['arraycamaras'=> $catalog]);
    }
}
