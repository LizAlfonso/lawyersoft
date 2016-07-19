@extends('layouts.headerFooter')  

@include ('layouts.menuHeader')

@section('content')

{!!Form::open(['route'=>'genero.store', 'method'=>'POST'])!!}

	<div class="container" >

		<div class="banner-data">

			<div class=" text-center ">
			<h1>Registro de Género</h1>
		    </div>

		    <br>

		    @include('genero.forms.genero')

			<div class="form-group ">
			{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			</div> 

		</div>

	</div>

{!!Form::close()!!}

@stop