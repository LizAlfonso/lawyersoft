<?php

namespace LawyerSoft\Http\Controllers;

use Illuminate\Http\Request;

use LawyerSoft\Http\Requests;
use LawyerSoft\Tipo;
use LawyerSoft\Http\Requests\TipoCreateRequest;
use LawyerSoft\Http\Requests\TipoUpdateRequest;
use Session;
use Redirect;

class TipoController extends Controller
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
        $tipos = Tipo::All();
        return view('tipo.index',compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoCreateRequest $request)
    {
        Tipo::create([
       'nombre' => $request['nombre'],
            ]);

        return redirect('tipo')->with('message','Tipo de implicado registrado correctamente');
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
        $tipo = Tipo::find($id);
        return view('tipo.edit',['tipo'=>$tipo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TipoUpdateRequest $request, $id)
    {
        $tipo = Tipo::find($id);
        $tipo->fill($request->all());
        $tipo->save();

        Session::flash('message','Tipo de implicado modificado correctamente');
        return Redirect::to('tipo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo = Tipo::find($id);
        $tipo->delete();
        Session::flash('message','Tipo de implicado eliminado correctamente');
        return Redirect::to('tipo');
    }
}
