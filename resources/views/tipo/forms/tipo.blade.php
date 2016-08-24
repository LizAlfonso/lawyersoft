<div class="form-group list-group">
	{!!Form::label('descripcion','Nombre *')!!}
	{!!Form::text('descripcion',null,['class'=> 'form-control','placeholder'=>'Ingrese el nombre del tipo de implicado'])!!}

	@if ($errors->has('descripcion'))
        <span class="list-group-item list-group-item-danger">
             <strong>{{ $errors->first('descripcion') }}</strong>
	    </span>
    @endif
</div>