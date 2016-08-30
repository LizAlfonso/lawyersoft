@extends('layouts.headerFooter')
@include ('layouts.menuHeader')

@section('content')

{!!Form::model($aseguradoraTercero,['route'=> ['aseguradoraTercero.update',$aseguradoraTercero->idAseguradoraTercero],'method'=>'PUT'])!!}

	<div class="container" >

		<div class="banner-data">

			<div class=" text-center ">
			<h1>Modificar Aseguradora de tercero</h1>
		    </div>

		    <br>

			@include('aseguradoraTercero.forms.aseguradoraTercero')

			<div class="form-group ">
			{!!Form::submit('Modificar',['class'=>'btn btn-success'])!!}
			</div> 

			<div class="clearfix"> </div>

{!!Form::close()!!}

		</div>

	</div>


@stop
