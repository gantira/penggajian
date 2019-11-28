<?php

namespace App\Http\Controllers;

use App\Absensi;
use Illuminate\Http\Request;
use App\Http\Requests\AbsensiRequest;
use Session;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['absensi'] = Absensi::orderBy('id', 'desc')->get();

        return view('absensi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AbsensiRequest $request)
    {
        if (Absensi::whereUserId($request->user_id)->whereTanggal($request->tanggal)->first()) {
            Session::flash('message', 'User Sudah Melakukan Absen Pada Tanggal Tersebut.'); 

            return redirect()->back();
        }

        Absensi::create($request->all());

        return redirect()->route('absensi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function show(Absensi $absensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function edit(Absensi $absensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absensi $absensi)
    {
        $absensi->fill($request->all())->save();

        Session::flash('message', 'Update Absensi berhasil.'); 

        return redirect()->route('absensi.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absensi $absensi)
    {
        $absensi->delete();

        return redirect()->back(); 
    }
}
