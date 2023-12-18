<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
Use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        $data['title']= 'Dashboard User';
        $data['posts'] = $mahasiswas;
        return view('mahasiswa.index',$data);
    }
    
    public function create()
    {
        $data['title']= 'Creata Data';
        return view('mahasiswa.create',$data);
    }

    public function store(Request $request) { 

        $request->validate([ 
            'nama' => 'required|string|max:255', 
            'alamat' => 'required|string|max:255', 
            'tanggal_lahir' => 'required|date'
        ]);
        
        Mahasiswa::create([ 
            'nama' => $request->input('nama'), 
            'alamat' => $request->input('alamat'), 
            'tanggal_lahir' => $request->input('tanggal_lahir'), 
        ]); 

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil disimpan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
        ]);

        $mahasiswa = Mahasiswa::find($id);

        $mahasiswa->nama = $request->input('nama');
        $mahasiswa->alamat = $request->input('alamat');
        $mahasiswa->tanggal_lahir = $request->input('tanggal_lahir');
        $mahasiswa->save();

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);

        if ($mahasiswa) {
            $mahasiswa->delete();

            return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus.');
        } else {
            return redirect()->route('mahasiswa.index')->with('error', 'Data mahasiswa tidak ditemukan.');
        }
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }
    


}
