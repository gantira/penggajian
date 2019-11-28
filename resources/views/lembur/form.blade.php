<div class="form-group row">
    {!! Form::label('user_id', 'Karyawan', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

    <div class="col-md-4">
        <select name="user_id" class="{!! $errors->has('user_id') ? 'form-control is-invalid' : $errors->has('user_id') ? 'form-control is-invalid' : 'form-control' !!}">
            @foreach (App\User::role('karyawan')->get() as $row)
            <option value="{!! $row->id !!}">{!! $row->nip !!} ({!! $row->name !!})</option>
            @endforeach
        </select>
        @if ($errors->has('user_id'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('user_id') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    {!! Form::label('tanggal', 'Tanggal', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

    <div class="col-md-4">
        {!! Form::date('tanggal', Carbon\Carbon::now(), ['class' => $errors->has('tanggal') ? 'form-control is-invalid' : $errors->has('tanggal') ? 'form-control is-invalid' : 'form-control']) !!}
        @if ($errors->has('tanggal'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('tanggal') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    {!! Form::label('lama_lembur', 'Lama Lembur', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

    <div class="col-md-4">
        {!! Form::select('lama_lembur', ['1'=>'1 Jam', '2'=>'2 Jam'],  null, ['class' => $errors->has('lama_lembur') ? 'form-control is-invalid' : $errors->has('lama_lembur') ? 'form-control is-invalid' : 'form-control', 'placeholder'=> '']) !!}
        @if ($errors->has('lama_lembur'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('lama_lembur') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    {!! Form::label('keterangan', 'Keterangan', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

    <div class="col-md-4">
        {!! Form::text('keterangan', 'Lembur..', ['class' => $errors->has('keterangan') ? 'form-control is-invalid' : $errors->has('keterangan') ? 'form-control is-invalid' : 'form-control']) !!}
        @if ($errors->has('keterangan'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('keterangan') }}</strong>
            </span>
        @endif
    </div>
</div>
