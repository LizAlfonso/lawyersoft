@extends('layouts.headerFooter')
@include ('layouts.menuHeader') 
@section('content')
@include ('layouts.scripts')
@include ('dataTable.scriptDataTable2')

<div class="container">

	<div class="banner-data">

		<h1><center>Lista de Aseguradoras de terceros</center></h1>
          <br>
          
		  <div class="col-md-9">
		  </div>
		  <div>

		  {!!link_to_route('aseguradoraTercero.create', $title = 'Nuevo registro',null,$attributes = ['class'=>'btn btn-primary'])!!}
          
          </div>
          <br>

		  <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">

				<thead>

				<tr><th>Nombre de Aseguradora de tercero</th><th>Operación</th></tr>

				</thead>

				 <tbody>

					@foreach($aseguradoraTerceros as $aseguradoraTercero)
					 
						<tr><td>{{$aseguradoraTercero->nombre}}</td>
						<td> <div class="twoColumns col-md-12">
						{!!link_to_route('aseguradoraTercero.edit', $title = 'Modificar', $parameters = $aseguradoraTercero->idAseguradoraTercero, $attributes = ['class'=>'btn btn-success'])!!}

						{!!Form::open(['route'=> ['aseguradoraTercero.destroy',$aseguradoraTercero->idAseguradoraTercero],'method'=>'DELETE'])!!}
			            {!!Form::button('Eliminar',['class'=>'btn btn-danger'])!!}
                        {!!Form::close()!!} 
                        </div></td></tr>
					  
					@endforeach

				</tbody>

			</table>
				
	</div>

</div>

@stop