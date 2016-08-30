@extends('layouts.headerFooter')  

@include ('layouts.menuHeader')

@section('content')

{!!Form::open(['route'=>'resultado.store', 'method'=>'POST'])!!}

	<div class="container" >

		<div class="banner-data">

			<div class=" text-center ">
			<h1>Registro de Resultado de fallo</h1>
		    </div>

		    <br>

		    @include('resultado.forms.resultado')

			<div class="form-group ">
			{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			</div> 

		</div>

	</div>

{!!Form::close()!!}

@stop