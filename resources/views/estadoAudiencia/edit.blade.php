@extends('layouts.headerFooter')
@include ('layouts.menuHeader')

@section('content')

{!!Form::model($estadoAudiencia,['route'=> ['estadoAudiencia.update',$estadoAudiencia->idEstadoAudiencia],'method'=>'PUT'])!!}

	<div class="container" >

		<div class="banner-data">

			<div class=" text-center ">
			<h1>Modificar Estado de audiencia</h1>
		    </div>

		    <br>

			@include('estadoAudiencia.forms.estadoAudiencia')

			<div class="form-group ">
			{!!Form::submit('Modificar',['class'=>'btn btn-success'])!!}
			</div> 

			<div class="clearfix"> </div>

{!!Form::close()!!}

		</div>

	</div>


@stop
