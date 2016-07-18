@section('menu')
 
 @if( Auth::user()->rols->descripcion == "Administrador")  

    <li><a href="{{ url('usuario') }}">Usuarios</a></li>
    <li><a href="{{ url('ciudad') }}">Ciudades</a></li> 
    <li><a href="{{ url('genero') }}">Géneros</a></li>
    
 @else
    <li><a href="{{ url('abogado') }}">Abogados</a></li>
	<li><a href="{{ url('quienAsigna') }}">Quienes asignan</a></li>

	<li><a href="{{ url('reporte') }}">Reportes</a></li>
@endif

@stop