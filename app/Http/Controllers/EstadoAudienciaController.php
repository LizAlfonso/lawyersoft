<?php

namespace LawyerSoft\Http\Controllers;

use Illuminate\Http\Request;

use LawyerSoft\Http\Requests;
use LawyerSoft\EstadoAudiencia;
use LawyerSoft\Http\Requests\EstadoAudienciaCreateRequest;
use LawyerSoft\Http\Requests\EstadoAudienciaUpdateRequest;
use Session;
use Redirect;

class EstadoAudienciaController extends Controller
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
        $estadoAudiencias = EstadoAudiencia::All();
        return view('estadoAudiencia.index',compact('estadoAudiencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estadoAudiencia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstadoAudienciaCreateRequest $request)
    {
        EstadoAudiencia::create([
       'nombre' => $request['nombre'],
            ]);

        return redirect('estadoAudiencia')->with('message','Estado de audiencia registrado correctamente');
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
        $estadoAudiencia = EstadoAudiencia::find($id);
        return view('estadoAudiencia.edit',['estadoAudiencia'=>$estadoAudiencia]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EstadoAudienciaUpdateRequest $request, $id)
    {
        $estadoAudiencia = EstadoAudiencia::find($id);
        $estadoAudiencia->fill($request->all());
        $estadoAudiencia->save();

        Session::flash('message','Estado de audiencia modificado correctamente');
        return Redirect::to('estadoAudiencia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estadoAudiencia = EstadoAudiencia::find($id);
        $estadoAudiencia->delete();
        Session::flash('message','Estado de audiencia eliminado correctamente');
        return Redirect::to('estadoAudiencia');
    }
}
