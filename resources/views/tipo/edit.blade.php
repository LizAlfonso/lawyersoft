@extends('layouts.headerFooter')
@include ('layouts.menuHeader')

@section('content')

{!!Form::model($tipo,['route'=> ['tipo.update',$tipo->idTipo],'method'=>'PUT'])!!}

	<div class="container" >

		<div class="banner-data">

			<div class=" text-center ">
			<h1>Modificar Tipo</h1>
		    </div>

		    <br>

			@include('tipo.forms.tipo')

			<div class="form-group ">
			{!!Form::submit('Modificar',['class'=>'btn btn-success'])!!}
			</div> 

			<div class="clearfix"> </div>

{!!Form::close()!!}

		</div>

	</div>


@stop
