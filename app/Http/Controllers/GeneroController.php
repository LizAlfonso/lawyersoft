<?php

namespace LawyerSoft\Http\Controllers;

use Illuminate\Http\Request;

use LawyerSoft\Http\Requests;
use LawyerSoft\Genero;
use LawyerSoft\Http\Requests\GeneroCreateRequest;
use LawyerSoft\Http\Requests\GeneroUpdateRequest;
use Session;
use Redirect;

class GeneroController extends Controller
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
        $generos = Genero::All();
        return view('genero.index',compact('generos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('genero.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GeneroCreateRequest $request)
    {
        Genero::create([
       'nombre' => $request['nombre'],
            ]);

        return redirect('genero')->with('message','Género registrado correctamente');
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
        $genero = Genero::find($id);
        return view('genero.edit',['genero'=>$genero]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GeneroUpdateRequest $request, $id)
    {
        $genero = Genero::find($id);
        $genero->fill($request->all());
        $genero->save();

        Session::flash('message','Género modificado correctamente');
        return Redirect::to('genero');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $genero = Genero::find($id);
        $genero->delete();
        Session::flash('message','Género eliminado correctamente');
        return Redirect::to('genero');
    }
}
