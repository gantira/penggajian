<?php

namespace App\Http\Controllers;

use App\User;
use App\Lembur;
use Illuminate\Http\Request;
use Session;

class LemburController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['lembur'] = Lembur::all();

        return view('lembur.index', $data);
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
        if (Lembur::whereUserId($request->user_id)->whereTanggal($request->tanggal)->first()) {
            Session::flash('message', 'User Sudah Lembur Pada Tanggal Tersebut.'); 

            return redirect()->back();
        }

        Lembur::create($request->all());
        
        return redirect()->route('lembur.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lembur  $lembur
     * @return \Illuminate\Http\Response
     */
    public function show(Lembur $lembur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lembur  $lembur
     * @return \Illuminate\Http\Response
     */
    public function edit(Lembur $lembur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lembur  $lembur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lembur $lembur)
    {
        $lembur->fill($request->all())->save();

        Session::flash('message', 'Update Lembur berhasil.'); 

        return redirect()->route('lembur.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lembur  $lembur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lembur $lembur)
    {
        $lembur->delete();

        return redirect()->back();  
    }
}
