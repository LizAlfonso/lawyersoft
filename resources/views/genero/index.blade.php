@extends('layouts.headerFooter')

@section('content')
@include ('layouts.menuHeader') 
@include ('layouts.scripts')
@include ('dataTable.scriptDataTable2')

<div class="container">

	<div class="banner-data">

		<h1><center>Lista de Géneros</center></h1>
          <br>
          
		  <div class="col-md-9">
		  </div>
		  <div>

		  {!!link_to_route('genero.create', $title = 'Nuevo registro',null,$attributes = ['class'=>'btn btn-primary'])!!}
          
          </div>
          <br>

		  <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">

				<thead>

				<tr><th>Género</th><th>Operación</th></tr>

				</thead>

				 <tbody>

					@foreach($generos as $genero)
					 
						<tr><td>{{$genero->descripcion}}</td>
						<td> <div class="twoColumns col-md-10">
						{!!link_to_route('genero.edit', $title = 'Modificar', $parameters = $genero->idGenero, $attributes = ['class'=>'btn btn-success'])!!}

						{!!Form::open(['route'=> ['genero.destroy',$genero->idGenero],'method'=>'DELETE'])!!}
			            {!!Form::button('Eliminar',['class'=>'btn btn-danger'])!!}
                        {!!Form::close()!!} 
                        </div></td></tr>
					  
					@endforeach

				</tbody>

			</table>
				
	</div>

</div>

@stop

