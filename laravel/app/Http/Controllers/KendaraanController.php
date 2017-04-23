<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kendaraans = \App\Kendaraan::all(); // mengambil semua data kendaraan
 
        return view('crud.kendaraan.view', compact('kendaraans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = \App\User::all();
        return view('crud.kendaraan.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = \Validator::make($request->all(), [
                'nama_kendaraan' => 'required',
                'jenis_kendaraan' => 'required',
                'made_in' => 'required', 
                'pemilik' => 'required'
            ],

        $after_save = [
                'alert' => 'danger',
                'title' => 'Oh wait!',
                'text-1' => 'Ada kesalahan',
                'text-2' => 'Silakan coba lagi.'
            ]);

        if($validate->fails()){
            return redirect()->back()->with('after_save', $after_save);
        }

        $after_save = [
            'alert' => 'success',
            'title' => 'God Job!',
            'text-1' => 'Tambah lagi',
            'text-2' => 'Atau kembali.'
        ];

        $data = [
            'nama_kendaraan' => $request->nama_kendaraan,
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'buatan' => $request->made_in,
            'user_id' => $request->pemilik
        ];

        $store = \App\Kendaraan::insert($data);
        return redirect()->back()->with('after_save', $after_save);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = \App\User::all();
        $showById = \App\kendaraan::find($id);
 
        return view('crud.kendaraan.edit', compact('showById', 'users'));
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
        $validate = \Validator::make($request->all(), [
                'nama_kendaraan' => 'required',
                'jenis_kendaraan' => 'required',
                'made_in' => 'required', 
                'pemilik' => 'required'
            ],

        $after_update = [
                'alert' => 'danger',
                'title' => 'Oh wait!',
                'text-1' => 'Ada kesalahan',
                'text-2' => 'Silakan coba lagi.'
            ]);

        if($validate->fails()){
            return redirect()->back()->with('after_update', $after_update);
        }

        $after_update = [
            'alert' => 'success',
            'title' => 'God Job!',
            'text-1' => 'Update berhasil',
            'text-2' => '.'
        ];

        $data = [
            'nama_kendaraan' => $request->nama_kendaraan,
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'buatan' => $request->made_in,
            'user_id' => $request->pemilik
        ];

        $update = \App\Kendaraan::where('id', $id)->update($data);
        return redirect()->to('kendaraan')->with('after_update', $after_update);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = \App\Kendaraan::findOrFail($id);
        $destroy->delete();
        return redirect()->back()->with('success');
    }
}
