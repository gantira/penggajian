<?php

namespace App\Http\Controllers;

use App\Laporan;
use App\JurnalUmum;
use App\BukuBesarKas;
use App\BukuBesarGaji;
use Illuminate\Http\Request;
use Session;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['laporan'] = Laporan::all();

        return view('laporan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data['laporan'] = Laporan::whereBetween('created_at', [$request->tanggal_awal, $request->tanggal_akhir])->get();

        return view('laporan.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cek = Laporan::whereUserId($request->user_id)->whereBulan($request->bulan)->whereTahun($request->tahun)->first();

        $laporan = Laporan::firstOrCreate(['user_id'=>$request->user_id, 'bulan'=>$request->bulan, 'tahun'=>$request->tahun], $request->all());


        if (! $cek) {
            Session::flash('message', 'Gaji Karyawan Berhasil.'); 
            // jurnal
            $laporan->jurnalUmum()->create(['keterangan'=>'Gaji', 'debit'=> $request->gaji_bersih]);
            $laporan->jurnalUmum()->create(['keterangan'=>'Kas', 'kredit'=> $request->gaji_bersih]);
            // buku besar kas
            $laporan->bukuBesarKas()->create(['keterangan'=>'Gaji', 'kredit'=> $request->gaji_bersih, 'saldo'=> $request->gaji_bersih + BukuBesarKas::sum('kredit') ]); 
            // buku besar gaji
            $laporan->bukuBesarGaji()->create(['keterangan'=>'Kas', 'debit'=> $request->gaji_bersih, 'saldo'=> $request->gaji_bersih + BukuBesarGaji::sum('debit') ]);

        } else {
            Session::flash('message', 'Karyawan atas nama ' . $laporan->user->name . ' sudah gajian bulan ini pada tanggal ' . $laporan->created_at->format('d, F Y')); 
        }

        return back();

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $laporan)
    {
        //
    }
}
