@section('menu')
 
 @if( Auth::user()->rols->nombre == "Administrador")  

    <li><a href="{{ url('estadoAudiencia') }}">Estados</a></li>
    <li><a href="{{ url('lugar') }}">Lugares</a></li>
    <li><a href="{{ url('tipo') }}">Tipos</a></li>
    <li><a href="{{ url('ciudad') }}">Ciudades</a></li> 
    <li><a href="{{ url('genero') }}">Géneros</a></li>
    <li><a href="{{ url('usuario') }}">Usuarios</a></li>
    
 @else

 	<li><a href="{{ url('reporte') }}">Reportes</a></li>
    <li><a href="{{ url('abogado') }}">Abogados</a></li>
	<li><a href="{{ url('quienAsigna') }}">Quienes asignan</a></li>
@endif

@stop