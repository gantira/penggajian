<?php

namespace App\Http\Controllers;

use App\JurnalUmum;
use Illuminate\Http\Request;

class JurnalUmumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['jurnalUmum'] = JurnalUmum::all();

        return view('jurnalumum.index', $data);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JurnalUmum  $jurnalUmum
     * @return \Illuminate\Http\Response
     */
    public function show(JurnalUmum $jurnalUmum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JurnalUmum  $jurnalUmum
     * @return \Illuminate\Http\Response
     */
    public function edit(JurnalUmum $jurnalUmum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JurnalUmum  $jurnalUmum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JurnalUmum $jurnalUmum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JurnalUmum  $jurnalUmum
     * @return \Illuminate\Http\Response
     */
    public function destroy(JurnalUmum $jurnalUmum)
    {
        //
    }
}
