<?php

namespace LawyerSoft\Http\Controllers;

use Illuminate\Http\Request;

use LawyerSoft\Http\Requests;

class FrontController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['only' => 'principal']);
    }
    
    public function index()
    {
    	return view('index');

    }

    public function principal()
    { 	         
        return view('principal');     
    }

}
