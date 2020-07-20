<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccessControl;

class AccesscontrolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accesscontrol	=	AccessControl::all();
		return view ('Access.index')->with('arrayaccesscontrols', $accesscontrol);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Access.create');
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
            $accesscontrol = new AccessControl;
            $accesscontrol->name = $request->name;
            $accesscontrol->mark = $request->mark;
            $accesscontrol->model = $request->model;
            $accesscontrol->imagen = $request->imagen;
            $accesscontrol->cost = $request->cost;
            $accesscontrol->save();
            return redirect('/accesscontrolsadmin');
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
        $accesscontrol = AccessControl::findOrFail($id);
		return view('/Access/edit')->with('accesscontrol',$accesscontrol);
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
        ]);
        AccessControl::whereId($id)->update($validatedData);

        return redirect('/accesscontrolsadmin')->with('success', 'Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $accesscontrol = AccessControl::find($id);
        $accesscontrol->delete();
        return redirect('/accesscontrolsadmin');
    }
    public function catalog(){
        $catalog = AccessControl::all();
        return view ("Access.catalog",['arrayaccesscontrols'=> $catalog]);
    }
}
