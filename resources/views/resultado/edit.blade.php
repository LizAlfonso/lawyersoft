@extends('layouts.headerFooter')
@include ('layouts.menuHeader')

@section('content')

{!!Form::model($resultado,['route'=> ['resultado.update',$resultado->idResultado],'method'=>'PUT'])!!}

	<div class="container" >

		<div class="banner-data">

			<div class=" text-center ">
			<h1>Modificar Resultado de fallo</h1>
		    </div>

		    <br>

			@include('resultado.forms.resultado')

			<div class="form-group ">
			{!!Form::submit('Modificar',['class'=>'btn btn-success'])!!}
			</div> 

			<div class="clearfix"> </div>

{!!Form::close()!!}

		</div>

	</div>


@stop
