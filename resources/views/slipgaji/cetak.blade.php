<!DOCTYPE html>
<html>
<head>
	<title>Slip Gaji</title>
</head>
<body onload="window.print()">
	<center>
	<div class="text-center">
		<img src="{{ asset('images/barry.png') }}" width="300px"> <br>
		{!! config('app.name') !!} 
	</div>
	</center>

	<hr>
	<table width="100%">
		<tr>
			<td>
				<label class="col-md-4">Nip Karyawan</label>
			</td>
			<td> : </td>
			<td>{!! $karyawan->nip !!}</td>
			<td>
				<label class="col-md-4">Divisi</label>
			<td> : </td>
			<td>{!! $karyawan->divisi->name !!}</td>
		</tr>
		<tr>
			<td>
				<label class="col-md-4">Nama Karyawan</label>
			</td>
			<td> : </td>
			<td>{!! $karyawan->name !!}</td>
			<td>
				<label class="col-md-4">Jabatan</label>
			<td> : </td>
			<td>{!! $karyawan->jabatan->name !!}</td>
		</tr>
	</table>
	<br>
	</table>
			<table width="100%">
				<tr>
					<th width="5%" align="left">No</th>
					<th align="left">Keterangan</th>
					<th align="right">Jumlah</th>
					<th width="1px"></th>
				</tr>
				<tr>
					<td>1.</td>
					<td>Gaji Pokok</td>
					<td align="right">Rp. {!! number_format($karyawan->jabatan->gapok) !!}</td>
					<td></td>
				</tr>
				<tr>
					<td>2.</td>
					<td>Tunjangan</td>
					<td align="right">Rp. {!! number_format($karyawan->jabatan->tunjangan) !!}</td>
					<td></td>
				</tr>
				<tr>
					<td>3.</td>
					<td>Lembur</td>
					<td align="right">Rp. {!! number_format($karyawan->jabatan->lembur) !!}</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><hr></td>
					<td>(+)</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td align="right">Rp. {!! number_format($karyawan->jabatan->gapok + $karyawan->jabatan->tunjangan + $karyawan->jabatan->lembur) !!}</td>
					<td></td>
				</tr>
				<tr>
					<td>4.</td>
					<td>Pinjaman</td>
					<td align="right">Rp. {!! number_format($karyawan->pinjaman->sum('besar_pinjaman')) !!}</td>
					<td></td>
				</tr>
				<tr>
					<td>5.</td>
					<td>PPH</td>
					<td align="right">Rp. {!! number_format(($karyawan->jabatan->gapok + $karyawan->jabatan->tunjangan + $karyawan->lembur()->totalLembur($karyawan->id)*$karyawan->jabatan->lembur - $karyawan->pinjaman()->totalpinjaman($karyawan->id)) * 0.05) !!}</td>
					<td></td>
				</tr>
				<tr>
					<td>6.</td>
					<td>BPJS</td>
					<td align="right">Rp. {!! number_format(($karyawan->jabatan->gapok + $karyawan->jabatan->tunjangan + $karyawan->lembur()->totalLembur($karyawan->id)*$karyawan->jabatan->lembur - $karyawan->pinjaman()->totalpinjaman($karyawan->id)) * 0.02) !!}</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><hr></td>
					<td>(-)</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td align="right">Rp. {!! number_format(($karyawan->jabatan->gapok + $karyawan->jabatan->tunjangan + $karyawan->lembur()->totalLembur($karyawan->id)*$karyawan->jabatan->lembur - $karyawan->pinjaman()->totalpinjaman($karyawan->id) - ($karyawan->jabatan->gapok + $karyawan->jabatan->tunjangan + $karyawan->lembur()->totalLembur($karyawan->id)*$karyawan->jabatan->lembur - $karyawan->pinjaman()->totalpinjaman($karyawan->id)) * 0.05) - ($karyawan->jabatan->gapok + $karyawan->jabatan->tunjangan + $karyawan->lembur()->totalLembur($karyawan->id)*$karyawan->jabatan->lembur - $karyawan->pinjaman()->totalpinjaman($karyawan->id)) * 0.02) !!}</td>
					<td></td>
				</tr>

				<tfoot>

				</tfoot>
			</table>
			<br>
			<br>
			<br>
			<table width="100%">
				<tr>
					<td width="50%">
						Penerima <br><br><br><br>
						{!! $karyawan->name !!}
					</td>
					<td width="50%" align="right">
						{!! \Carbon\Carbon::now()->format('d F Y') !!}<br><br><br><br>
						Slip Gaji
					</td>
				</tr>
			</table>


</body>
</html>