<?php

namespace LawyerSoft\Http\Controllers;

use Illuminate\Http\Request;

use LawyerSoft\Http\Requests;
use LawyerSoft\Resultado;
use LawyerSoft\Http\Requests\ResultadoCreateRequest;
use LawyerSoft\Http\Requests\ResultadoUpdateRequest;
use Session;
use Redirect;

class ResultadoController extends Controller
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
        $resultados = Resultado::All();
        return view('resultado.index',compact('resultados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resultado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ResultadoCreateRequest $request)
    {
        Resultado::create([
       'nombre' => $request['nombre'],
            ]);

        return redirect('resultado')->with('message','Resultado de fallo registrado correctamente');
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
        $resultado = Resultado::find($id);
        return view('resultado.edit',['resultado'=>$resultado]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ResultadoUpdateRequest $request, $id)
    {
        $resultado = Resultado::find($id);
        $resultado->fill($request->all());
        $resultado->save();

        Session::flash('message','Resultado de fallo modificado correctamente');
        return Redirect::to('resultado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resultado = Resultado::find($id);
        $resultado->delete();
        Session::flash('message','Resultado de fallo eliminado correctamente');
        return Redirect::to('resultado');
    }
}
