<?php

namespace App\Http\Controllers;

use App\Models\SIswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = siswa::all();
        return view('siswa.index',compact(['siswa']));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        // dd($request->except(['_token','submit']));
        Siswa::create($request->except(['_token','submit']));
        return redirect('/siswa');
    }

    public function edit($id)
    {
        $siswa = siswa::find($id);
        return view('siswa.edit', compact(['siswa']));
    }

    public function update($id, Request $request)
    {
        $siswa = siswa::find($id);
        $siswa->update($request->except(['_token','submit']));
        return redirect('/siswa');
    }
    public function destroy($id)
    {
        $siswa = siswa::find($id);
        $siswa->delete();
        return redirect('/siswa');
    }
}
