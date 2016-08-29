<?php

namespace LawyerSoft\Http\Controllers;

use Illuminate\Http\Request;

use LawyerSoft\Http\Requests;
use LawyerSoft\Lugar;
use LawyerSoft\Http\Requests\LugarCreateRequest;
use LawyerSoft\Http\Requests\LugarUpdateRequest;
use Session;
use Redirect;

class LugarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index()
    {
        $lugares = Lugar::All();
        return view('lugar.index',compact('lugares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lugar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LugarCreateRequest $request)
    {
         Lugar::create([
       'nombre' => $request['nombre'],
            ]);

        return redirect('lugar')->with('message','Lugar de audiencia registrado correctamente');
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
        $lugar = Lugar::find($id);
        return view('lugar.edit',['lugar'=>$lugar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LugarUpdateRequest $request, $id)
    {
        $lugar = Lugar::find($id);
        $lugar->fill($request->all());
        $lugar->save();

        Session::flash('message','Lugar de audiencia modificado correctamente');
        return Redirect::to('lugar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lugar = Lugar::find($id);
        $lugar->delete();
        Session::flash('message','Lugar de audiencia eliminado correctamente');
        return Redirect::to('lugar');
    }
}
