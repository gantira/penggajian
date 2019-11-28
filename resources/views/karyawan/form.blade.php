<div class="form-group row">
	{!! Form::label('nip', 'Nip Karyawan', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

	<div class="col-md-4">
    	{!! Form::text('nip', null, ['class' => $errors->has('nip') ? 'form-control is-invalid' : $errors->has('nip') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Nip Karyawan', 'maxlength'=>16]) !!}
	    @if ($errors->has('nip'))
	        <span class="invalid-feedback">
	            <strong>{{ $errors->first('nip') }}</strong>
	        </span>
	    @endif
    </div>
</div>

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
	{!! Form::label('pendidikan', 'Pendidikan', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

	<div class="col-md-4">
    	{!! Form::text('pendidikan', null, ['class' => $errors->has('pendidikan') ? 'form-control is-invalid' : $errors->has('pendidikan') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Pendidikan']) !!}
	    @if ($errors->has('pendidikan'))
	        <span class="invalid-feedback">
	            <strong>{{ $errors->first('pendidikan') }}</strong>
	        </span>
	    @endif
    </div>
</div>

<div class="form-group row">
	{!! Form::label('kota_lahir', 'Kota lahir', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

	<div class="col-md-4">
    	{!! Form::text('kota_lahir', null, ['class' => $errors->has('kota_lahir') ? 'form-control is-invalid' : $errors->has('kota_lahir') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Kota lahir']) !!}
	    @if ($errors->has('kota_lahir'))
	        <span class="invalid-feedback">
	            <strong>{{ $errors->first('kota_lahir') }}</strong>
	        </span>
	    @endif
    </div>
</div>

<div class="form-group row">
	{!! Form::label('tgl_lahir', 'Tanggal Lahir', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

	<div class="col-md-4">
		{!! Form::date('tgl_lahir', \Illuminate\Support\Carbon::now()->addYear(-30), ['class' => $errors->has('tgl_lahir') ? 'form-control is-invalid' : $errors->has('tgl_lahir') ? 'form-control is-invalid' : 'form-control']) !!}
	    @if ($errors->has('tgl_lahir'))
	        <span class="invalid-feedback">
	            <strong>{{ $errors->first('tgl_lahir') }}</strong>
	        </span>
	    @endif
    </div>
</div>

<div class="form-group row">
	{!! Form::label('tgl_masuk', 'Tanggal Masuk', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

	<div class="col-md-4">
		{!! Form::date('tgl_masuk', \Illuminate\Support\Carbon::now(), ['class' => $errors->has('tgl_masuk') ? 'form-control is-invalid' : $errors->has('tgl_masuk') ? 'form-control is-invalid' : 'form-control']) !!}
	    @if ($errors->has('tgl_masuk'))
	        <span class="invalid-feedback">
	            <strong>{{ $errors->first('tgl_masuk') }}</strong>
	        </span>
	    @endif
    </div>
</div>

<div class="form-group row">
	{!! Form::label('jk', 'Jenis Kelamin', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

	<div class="col-md-4">
		{!! Form::select('jk', ['Laki-Laki'=>'Laki-Laki', 'Perempuan'=>'Perempuan'], isset($jk) ? $karyawan->jk : null, ['class' => $errors->has('jk') ? 'form-control is-invalid' : $errors->has('jk') ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'']) !!}
	    @if ($errors->has('jk'))
	        <span class="invalid-feedback">
	            <strong>{{ $errors->first('jk') }}</strong>
	        </span>
	    @endif
    </div>
</div>

<div class="form-group row">
	{!! Form::label('agama', 'Agama', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

	<div class="col-md-4">
		{!! Form::select('agama', ['Islam'=>'Islam', 'Kristen'=>'Kristen', 'Katholik'=>'Katholik', 'Hindu'=>'Hindu', 'Budha'=>'Budha'], isset($agama) ? $karyawan->agama : null, ['class' => $errors->has('agama') ? 'form-control is-invalid' : $errors->has('agama') ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'']) !!}
	    @if ($errors->has('agama'))
	        <span class="invalid-feedback">
	            <strong>{{ $errors->first('agama') }}</strong>
	        </span>
	    @endif
    </div>
</div>

<div class="form-group row">
	{!! Form::label('status', 'Status', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

	<div class="col-md-4">
		{!! Form::select('status', ['Menikah'=>'Menikah', 'Belum Menikah'=>'Belum Menikah'], isset($status) ? $karyawan->status : null, ['class' => $errors->has('status') ? 'form-control is-invalid' : $errors->has('status') ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'']) !!}
	    @if ($errors->has('status'))
	        <span class="invalid-feedback">
	            <strong>{{ $errors->first('status') }}</strong>
	        </span>
	    @endif
    </div>
</div>

<div class="form-group row">
	{!! Form::label('alamat', 'Alamat', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
	<div class="col-md-4">
		{!! Form::textarea('alamat', null, ['class' => $errors->has('alamat') ? 'form-control is-invalid' : $errors->has('alamat') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Alamat', 'rows' => '3']) !!}
	    @if ($errors->has('alamat'))
	        <span class="invalid-feedback">
	            <strong>{{ $errors->first('alamat') }}</strong>
	        </span>
	    @endif
	</div>
</div>

<div class="form-group row">
	{!! Form::label('image', 'Foto', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

	<div class="col-md-4">
		{!! Form::file('image', ['class' => $errors->has('image') ? 'form-control is-invalid' : $errors->has('image') ? 'form-control is-invalid' : 'form-control']) !!}
	    @if ($errors->has('image'))
	        <span class="invalid-feedback">
	            <strong>{{ $errors->first('image') }}</strong>
	        </span>
	    @endif
    </div>
</div>

<div class="form-group row">
	{!! Form::label('jenis_karyawan', 'Jenis Karyawan', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

	<div class="col-md-4">
		{!! Form::select('jenis_karyawan', ['Tetap'=>'Tetap', 'Sementara'=>'Sementara'], null, ['class' => $errors->has('jenis_karyawan') ? 'form-control is-invalid' : $errors->has('jenis_karyawan') ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'']) !!}
    @if ($errors->has('jenis_karyawan'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('jenis_karyawan') }}</strong>
        </span>
    @endif
    </div>
</div>

<div class="form-group row">
	{!! Form::label('divisi', 'Divisi', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

	<div class="col-md-4">
		{!! Form::select('divisi_id', App\Divisi::pluck('name', 'id'), null, ['class' => $errors->has('divisi_id') ? 'form-control is-invalid' : $errors->has('divisi_id') ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'']) !!}
    @if ($errors->has('divisi_id'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('divisi_id') }}</strong>
        </span>
    @endif
    </div>
</div>

<div class="form-group row">
	{!! Form::label('jabatan', 'Jabatan', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

	<div class="col-md-4">
		{!! Form::select('jabatan_id', App\Jabatan::pluck('name', 'id'), null, ['class' => $errors->has('jabatan_id') ? 'form-control is-invalid' : $errors->has('jabatan_id') ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'']) !!}
	    @if ($errors->has('jabatan_id'))
	        <span class="invalid-feedback">
	            <strong>{{ $errors->first('jabatan_id') }}</strong>
	        </span>
	    @endif
    </div>
</div>

<div class="form-group row">
	{!! Form::label('email', 'Email', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

	<div class="col-md-4">
    	{!! Form::email('email', null, ['class' => $errors->has('email') ? 'form-control is-invalid' : $errors->has('email') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Email']) !!}
	    @if ($errors->has('email'))
	        <span class="invalid-feedback">
	            <strong>{{ $errors->first('email') }}</strong>
	        </span>
	    @endif
    </div>
</div>

<div class="form-group row">
	{!! Form::label('password', 'Password', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

	<div class="col-md-4">
    	{!! Form::password('password', ['class' => $errors->has('password') ? 'form-control is-invalid' : $errors->has('password') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Password']) !!}
	    @if ($errors->has('password'))
	        <span class="invalid-feedback">
	            <strong>{{ $errors->first('password') }}</strong>
	        </span>
	    @endif
    </div>
</div>

<div class="form-group row">
	{!! Form::label('password_confirmation', 'Confirm Password', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

	<div class="col-md-4">
    	{!! Form::password('password_confirmation', ['class' => $errors->has('password_confirmation') ? 'form-control is-invalid' : $errors->has('password_confirmation') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Confirm Password']) !!}
	    @if ($errors->has('password_confirmation'))
	        <span class="invalid-feedback">
	            <strong>{{ $errors->first('password_confirmation') }}</strong>
	        </span>
	    @endif
    </div>
</div>
