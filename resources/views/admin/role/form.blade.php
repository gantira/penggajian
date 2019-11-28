<div class="form-group row">
	{!! Form::label('name', 'Name', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

	<div class="col-md-4">
    	{!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('permissions', 'Permission', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

    <div class="col-md-4">
        {!! Form::select('permissions[]', $permissions, isset($row) ? $row->permissions->pluck('name','name') : null, ['class' => 'form-control', 'multiple']) !!}
    </div>
</div>