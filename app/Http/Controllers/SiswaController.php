<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Ortu;
use App\Guru;

class SiswaController extends Controller
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
        $siswa = Siswa::with('guru')->get();
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = Guru::all();
        return view('siswa.buat', compact('guru'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'Nama'=>'required|max:255',
            'Sekolah'=>'required|max:255',
            'Jenis_Kelamin'=>'required|max:255',
            'id_guru' =>'required|max:255'
        ]);
        $siswa = new Siswa;
        $siswa->Nama = $request->Nama;
        $siswa->Sekolah = $request->Sekolah;
        $siswa->Jenis_Kelamin = $request->Jenis_Kelamin;
        $siswa->id_guru = $request->id_guru;
        $siswa->save();
        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.show',compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        $ortu = Ortu::All();
        return view('siswa.edit', compact('ortu','siswa'));
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
        $this->validate($request,[
            'Nama'=>'required|max:255',
            'Sekolah'=>'required|max:255',
            'Jenis_Kelamin'=>'required|max:255'
        ]);
        $siswa = Siswa::findOrFail($id);
        $siswa->Nama = $request->Nama;
        $siswa->Sekolah = $request->Sekolah;
        $siswa->Jenis_Kelamin = $request->Jenis_Kelamin;
        $siswa->save();
        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('siswa.index');
    }
}
