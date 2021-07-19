<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
use Alert;
use App\User;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswa = Mahasiswa::with(['user'])->get(); //select * from mahasiswa
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create(){
        $user = User::all();
        return view('mahasiswa.create',compact('user'));
    }

    public function store(Request $request){

        Mahasiswa::create($request->all());
        alert()->success('Success','Data Mahasiswa berhasil Di simpan !');
        return redirect()->route('mahasiswa');
    }

    public function edit($id){
        $user = User::all();
        $mhs = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mhs','user'));
    }

    public function update(Request $request, $id){
        $mhs = Mahasiswa::find($id);
        $mhs->update($request->all());
        toast('Yeay Data Mahasiswa Berhasil Di Edit','success');
        return redirect()->route('mahasiswa');
    }

    public function destroy($id){
        $mhs = Mahasiswa::find($id);
        $mhs->delete();
        alert()->warning('Yeay Data Mahasiswa Berhasil Di Hapus ','success');
        return redirect()->route('mahasiswa');
    }
}