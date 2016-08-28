@extends('layouts.headerFooter')

@section('content')
@include ('layouts.menuHeader') 
@include ('layouts.scripts')
@include ('dataTable.scriptDataTable2')

<div class="container">

	<div class="banner-data">

		<h1><center>Lista de Tipos de implicado</center></h1>
          <br>
          
		  <div class="col-md-9">
		  </div>
		  <div>

		  {!!link_to_route('tipo.create', $title = 'Nuevo registro',null,$attributes = ['class'=>'btn btn-primary'])!!}
          
          </div>
          <br>

		  <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">

				<thead>

				<tr><th>Nombre del Tipo de implicado</th><th>Operación</th></tr>

				</thead>

				 <tbody>

					@foreach($tipos as $tipo)
					 
						<tr><td>{{$tipo->nombre}}</td>
						<td> <div class="twoColumns col-md-12">
						{!!link_to_route('tipo.edit', $title = 'Modificar', $parameters = $tipo->idTipo, $attributes = ['class'=>'btn btn-success'])!!}

						{!!Form::open(['route'=> ['tipo.destroy',$tipo->idTipo],'method'=>'DELETE'])!!}
			            {!!Form::button('Eliminar',['class'=>'btn btn-danger'])!!}
                        {!!Form::close()!!} 
                        </div></td></tr>
					  
					@endforeach

				</tbody>

			</table>
				
	</div>

</div>

@stop

