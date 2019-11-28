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
    {!! Form::label('status', 'Status', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

    <div class="col-md-4">
        {!! Form::select('status', ['Belum Lunas'=>'Belum Lunas', 'Lunas'=>'Lunas'], null, ['class' => $errors->has('status') ? 'form-control is-invalid' : $errors->has('status') ? 'form-control is-invalid' : 'form-control']) !!}
        @if ($errors->has('status'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('status') }}</strong>
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
    {!! Form::label('besar_pinjaman', 'Besar Pinjaman', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

    <div class="col-md-4">
        {!! Form::number('besar_pinjaman', null, ['class' => $errors->has('besar_pinjaman') ? 'form-control is-invalid' : $errors->has('besar_pinjaman') ? 'form-control is-invalid' : 'form-control']) !!}
        @if ($errors->has('besar_pinjaman'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('besar_pinjaman') }}</strong>
            </span>
        @endif
    </div>
</div>


<div class="form-group row">
    {!! Form::label('keterangan', 'Keterangan', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

    <div class="col-md-4">
        {!! Form::text('keterangan', 'keterangan..', ['class' => $errors->has('keterangan') ? 'form-control is-invalid' : $errors->has('keterangan') ? 'form-control is-invalid' : 'form-control']) !!}
        @if ($errors->has('keterangan'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('keterangan') }}</strong>
            </span>
        @endif
    </div>
</div>
