<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alarm;

class AlarmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alarms	=	Alarm::all();
		return view ('Alarm.index')->with('arrayalarms', $alarms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Alarm.create');
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
            $alarm = new Alarm;
            $alarm->name = $request->name;
            $alarm->mark = $request->mark;
            $alarm->model = $request->model;
            $alarm->tecnology = $request->tecnology;
            $alarm->imagen = $request->imagen;
            $alarm->cost = $request->cost;
            $alarm->save();
            return redirect('/alarmsadmin');
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
        $alarm = Alarm::findOrFail($id);
		return view('/alarm/edit')->with('alarm',$alarm);
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
            'tecnology' => 'required',
            'imagen' => 'required',
            'cost' => 'required',
        ]);
        Alarm::whereId($id)->update($validatedData);

        return redirect('/alarmsadmin')->with('success', 'Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alarm = Alarm::find($id);
        $alarm->delete();
        return redirect('/alarmsadmin');
    }
    public function catalog(){
        $catalog = Alarm::all();
        return view ("Alarm.catalog",['arrayalarms'=> $catalog]);
    }
}
