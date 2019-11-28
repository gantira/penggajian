<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Divisi;
use App\Jabatan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['karyawan'] = User::role('karyawan')->orderBy('id', 'desc')->get();
        $data['divisi'] = Divisi::orderBy('id', 'desc')->get();
        $data['jabatan'] = Jabatan::orderBy('id', 'desc')->get();

        return view('home', $data);
    }
}
