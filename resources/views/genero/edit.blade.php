@extends('layouts.headerFooter')
@include ('layouts.menuHeader')

@section('content')

{!!Form::model($genero,['route'=> ['genero.update',$genero->idGenero],'method'=>'PUT'])!!}

	<div class="container" >

		<div class="banner-data">

			<div class=" text-center ">
			<h1>Modificar Género</h1>
		    </div>

		    <br>

			@include('genero.forms.genero')

			<div class="form-group ">
			{!!Form::submit('Modificar',['class'=>'btn btn-success'])!!}
			</div> 

			<div class="clearfix"> </div>

{!!Form::close()!!}

		</div>

	</div>


@stop
