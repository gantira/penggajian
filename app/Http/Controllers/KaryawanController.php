<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\KaryawanRequest;
use Session;
use File;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['karyawan'] = User::role('karyawan')->get();

        return view('karyawan.index', $data);
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
    public function store(KaryawanRequest $request)
    {
        $requestData = $request->except('roles');

        if ($request->file('image')) {
            $destinationPath = public_path('upload/users/');
            $fileName = time() . '-' . str_slug($request->name) .'.'. $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move($destinationPath, $fileName);
            $requestData['image'] = $fileName;
        }
        
        $user = User::create($requestData);
        $user->assignRole('karyawan');
        
        return redirect()->route('karyawan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->except('password');
        
        $user = User::findOrFail($id);

        if ($request->file('image')) {
            $this->delete_image($user->image);
            
            $destinationPath = public_path('upload/users/');
            $fileName = time() . '-' . str_slug($request->name) .'.'. $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move($destinationPath, $fileName);
            $requestData['image'] = $fileName;
        }

        $user->update($requestData);

        return redirect()->route('karyawan.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        $this->delete_image($user->image);

        return redirect()->back();  
    }

    public function delete_image($value='')
    {
        $image_path = public_path('upload/users/'. $value);

        if (File::exists($image_path) && $value != 'user.png') {
            File::delete($image_path);
        }
    }
}
