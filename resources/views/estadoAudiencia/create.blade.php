@extends('layouts.headerFooter')  

@include ('layouts.menuHeader')

@section('content')

{!!Form::open(['route'=>'estadoAudiencia.store', 'method'=>'POST'])!!}

	<div class="container" >

		<div class="banner-data">

			<div class=" text-center ">
			<h1>Registro de Estado de audiencia</h1>
		    </div>

		    <br>

		    @include('estadoAudiencia.forms.estadoAudiencia')

			<div class="form-group ">
			{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			</div> 

		</div>

	</div>

{!!Form::close()!!}

@stop