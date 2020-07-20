<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Intercom;

class IntercomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $intercom	=	Intercom::all();
		return view ('Intercom.index')->with('arrayintercoms', $intercom);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Intercom.create');
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
            $intercom = new Intercom;
            $intercom->name = $request->name;
            $intercom->mark = $request->mark;
            $intercom->model = $request->model;
            $intercom->imagen = $request->imagen;
            $intercom->cost = $request->cost;
            $intercom->description = $request->description;
            $intercom->save();
            return redirect('/intercomsadmin');
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
        $intercom = Intercom::findOrFail($id);
		return view('Intercom.show')->with('intercom',$intercom);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $intercom = Intercom::findOrFail($id);
		return view('/Intercom/edit')->with('intercom',$intercom);
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
            'imagen' => 'required',
            'cost' => 'required',
            'description' => 'required',
        ]);
        Intercom::whereId($id)->update($validatedData);

        return redirect('/intercomsadmin')->with('success', 'Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $intercom = Intercom::find($id);
        $intercom->delete();
        return redirect('/intercomsadmin');
    }
    public function catalog(){
        $catalog = Intercom::all();
        return view ("Intercom.catalog",['arrayintercoms'=> $catalog]);
    }
}
