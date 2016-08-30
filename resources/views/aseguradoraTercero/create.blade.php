@extends('layouts.headerFooter')  

@include ('layouts.menuHeader')

@section('content')

{!!Form::open(['route'=>'aseguradoraTercero.store', 'method'=>'POST'])!!}

	<div class="container" >

		<div class="banner-data">

			<div class=" text-center ">
			<h1>Registro de Aseguradora de tercero</h1>
		    </div>

		    <br>

		    @include('aseguradoraTercero.forms.aseguradoraTercero')

			<div class="form-group ">
			{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			</div> 

		</div>

	</div>

{!!Form::close()!!}

@stop