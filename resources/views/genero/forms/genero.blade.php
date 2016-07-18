<div class="form-group list-group">
	{!!Form::label('descripcion','Género *')!!}
	{!!Form::text('descripcion',null,['class'=> 'form-control','placeholder'=>'Ingrese el género'])!!}

	@if ($errors->has('descripcion'))
        <span class="list-group-item list-group-item-danger">
             <strong>{{ $errors->first('descripcion') }}</strong>
	    </span>
    @endif
</div>