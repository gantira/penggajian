<div class="form-group row">
	{!! Form::label('name', 'Nama', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

	<div class="col-md-4">
    	{!! Form::text('name', null, ['class' => $errors->has('name') ? 'form-control is-invalid' : $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Nama']) !!}
    	@if ($errors->has('name'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
	{!! Form::label('gapok', 'Gaji Pokok', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

	<div class="col-md-4">
    	{!! Form::number('gapok', null, ['class' => $errors->has('gapok') ? 'form-control is-invalid' : $errors->has('gapok') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Gaji Pokok (Rp)', 'autocomplete' => 'off']) !!}
    	@if ($errors->has('gapok'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('gapok') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
	{!! Form::label('tunjangan', 'Tunjangan', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

	<div class="col-md-4">
    	{!! Form::number('tunjangan', null, ['class' => $errors->has('tunjangan') ? 'form-control is-invalid' : $errors->has('tunjangan') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Tunjangan (Rp)', 'autocomplete' => 'off']) !!}
    	@if ($errors->has('tunjangan'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('tunjangan') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
	{!! Form::label('lembur', 'Lembur', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

	<div class="col-md-4">
    	{!! Form::number('lembur', null, ['class' => $errors->has('lembur') ? 'form-control is-invalid' : $errors->has('lembur') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Lembur (Rp) *PerJam', 'autocomplete' => 'off']) !!}
    	@if ($errors->has('lembur'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('lembur') }}</strong>
            </span>
        @endif
    </div>
</div>