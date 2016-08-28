@extends('layouts.headerFooter')  

@include ('layouts.menuHeader')

@section('content')

{!!Form::open(['route'=>'tipo.store', 'method'=>'POST'])!!}

	<div class="container" >

		<div class="banner-data">

			<div class=" text-center ">
			<h1>Registro de Tipo de implicado</h1>
		    </div>

		    <br>

		    @include('tipo.forms.tipo')

			<div class="form-group ">
			{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			</div> 

		</div>

	</div>

{!!Form::close()!!}

@stop