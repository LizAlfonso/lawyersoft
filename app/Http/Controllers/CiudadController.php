<?php

namespace LawyerSoft\Http\Controllers;

use Illuminate\Http\Request;

use LawyerSoft\Http\Requests;
use LawyerSoft\Ciudad;
use LawyerSoft\Http\Requests\CiudadCreateRequest;
use LawyerSoft\Http\Requests\CiudadUpdateRequest;
use Session;
use Redirect;

class CiudadController extends Controller
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
        $ciudades = Ciudad::All();
        return view('ciudad.index',compact('ciudades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ciudad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CiudadCreateRequest $request)
    {
        Ciudad::create([
       'nombre' => $request['nombre'],
            ]);

        return redirect('ciudad')->with('message','Ciudad registrada correctamente');
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
        $ciudad = Ciudad::find($id);
        return view('ciudad.edit',['ciudad'=>$ciudad]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CiudadUpdateRequest $request, $id)
    {
        $ciudad = Ciudad::find($id);
        $ciudad->fill($request->all());
        $ciudad->save();

        Session::flash('message','Ciudad modificada correctamente');
        return Redirect::to('ciudad');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ciudad = Ciudad::find($id);
        $ciudad->delete();
        Session::flash('message','Ciudad eliminada correctamente');
        return Redirect::to('ciudad');
    }
}
