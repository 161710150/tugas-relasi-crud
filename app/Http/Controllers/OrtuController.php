<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ortu;
use App\Siswa;

class OrtuController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ortu = Ortu::All();
        return view('ortu.index', compact('ortu')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Siswa::All();
        return view('ortu.buat', compact('siswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nama'=>'required|unique:ortus|max:255',
            'Jenis_Kelamin'=>'required|max:255',
            'Usia'=>'required|max:255',
            'id_siswas'=>'required|max:255'
        ]);
        $ortu = new ortu;
        $ortu->Nama = $request->Nama;
        $ortu->Jenis_Kelamin = $request->Jenis_Kelamin;
        $ortu->Usia = $request->Usia;
        $ortu->id_siswas = $request->id_siswas;
        $ortu->save();
        return redirect()->route('ortu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ortu = Ortu::findOrFail($id);
        return view('ortu.show',compact('ortu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ortu = Ortu::findOrFail($id);
        $select = Ortu::findOrFail($id)->id_siswas;
        $siswa = Siswa::All();
        return view('ortu.edit', compact('siswa','ortu','select'));
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
        $request->validate([
            'Nama'=>'required|max:255',
            'Jenis_Kelamin'=>'required|max:255',
            'Usia'=>'required|max:255',
            'id_siswas'=>'required|max:255'
        ]);
        $ortu = Ortu::findOrFail($id);
        $ortu->Nama = $request->Nama;
        $ortu->Jenis_Kelamin = $request->Jenis_Kelamin;
        $ortu->Usia = $request->Usia;
        $ortu->id_siswas = $request->id_siswas;
        $ortu->save();
        return redirect()->route('ortu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ortu = Ortu::findOrFail($id);
        $ortu->delete();
        return redirect()->route('ortu.index');
    }
}
