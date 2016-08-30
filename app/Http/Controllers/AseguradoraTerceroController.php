<?php

namespace LawyerSoft\Http\Controllers;

use Illuminate\Http\Request;

use LawyerSoft\Http\Requests;
use LawyerSoft\AseguradoraTercero;
use LawyerSoft\Http\Requests\AseguradoraTerceroCreateRequest;
use LawyerSoft\Http\Requests\AseguradoraTerceroUpdateRequest;
use Session;
use Redirect;

class AseguradoraTerceroController extends Controller
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
        $aseguradoraTerceros = AseguradoraTercero::All();
        return view('aseguradoraTercero.index',compact('aseguradoraTerceros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aseguradoraTercero.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AseguradoraTerceroCreateRequest $request)
    {
        AseguradoraTercero::create([
       'nombre' => $request['nombre'],
            ]);

        return redirect('aseguradoraTercero')->with('message','Aseguradora de tercero registrada correctamente');
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
        $aseguradoraTercero = AseguradoraTercero::find($id);
        return view('aseguradoraTercero.edit',['aseguradoraTercero'=>$aseguradoraTercero]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AseguradoraTerceroUpdateRequest $request, $id)
    {
        $aseguradoraTercero = AseguradoraTercero::find($id);
        $aseguradoraTercero->fill($request->all());
        $aseguradoraTercero->save();

        Session::flash('message','Aseguradora de tercero modificada correctamente');
        return Redirect::to('aseguradoraTercero');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aseguradoraTercero = AseguradoraTercero::find($id);
        $aseguradoraTercero->delete();
        Session::flash('message','Aseguradora de tercero eliminada correctamente');
        return Redirect::to('aseguradoraTercero');
    }
}
