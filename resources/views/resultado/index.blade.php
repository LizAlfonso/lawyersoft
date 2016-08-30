@extends('layouts.headerFooter')
@include ('layouts.menuHeader') 
@section('content')
@include ('layouts.scripts')
@include ('dataTable.scriptDataTable2')

<div class="container">

	<div class="banner-data">

		<h1><center>Lista de Resultados de fallo</center></h1>
          <br>
          
		  <div class="col-md-9">
		  </div>
		  <div>

		  {!!link_to_route('resultado.create', $title = 'Nuevo registro',null,$attributes = ['class'=>'btn btn-primary'])!!}
          
          </div>
          <br>

		  <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">

				<thead>

				<tr><th>Nombre de Resultado de fallo</th><th>Operación</th></tr>

				</thead>

				 <tbody>

					@foreach($resultados as $resultado)
					 
						<tr><td>{{$resultado->nombre}}</td>
						<td> <div class="twoColumns col-md-12">
						{!!link_to_route('resultado.edit', $title = 'Modificar', $parameters = $resultado->idResultado, $attributes = ['class'=>'btn btn-success'])!!}

						{!!Form::open(['route'=> ['resultado.destroy',$resultado->idResultado],'method'=>'DELETE'])!!}
			            {!!Form::button('Eliminar',['class'=>'btn btn-danger'])!!}
                        {!!Form::close()!!} 
                        </div></td></tr>
					  
					@endforeach

				</tbody>

			</table>
				
	</div>

</div>

@stop