<?php

namespace App\Http\Controllers;

use App\Divisi;
use Illuminate\Http\Request;
use Session;
use App\Http\Requests\DivisiRequest;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['divisi'] = Divisi::all();

        return view('divisi.index', $data);
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
    public function store(DivisiRequest $request)
    {
        Divisi::create($request->all());

        return redirect()->route('divisi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function show(Divisi $divisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function edit(Divisi $divisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function update(DivisiRequest $request, Divisi $divisi)
    {
        $divisi->fill($request->all())->save();

        Session::flash('message', 'Update Divisi berhasil.'); 

        return redirect()->route('divisi.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Divisi $divisi)
    {
        $divisi->delete();

        return redirect()->back();  
    }
}
