<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Students::all();
        return response()->json([
            'students' => $students
        ]);
    }
    public function show($id)
    {
        $Students = Students::find($id);
        if (!$Students) {
            return response()->json([
                'message' => 'Students tidak ditemukan'
            ], 404);
        }
        return response()->json(['data' => $Students]);
    }
    public function store(Request $request)
    {
        $Students = Students::create([
            'nama'     => $request->input('nama'),
            'jurusan'  => $request->input('jurusan'),
            'angkatan' => $request->input('angkatan'),
        ]);

        return response()->json([
            'message' => 'Students berhasil dibuat',
            'student' => $Students
        ], 201);
    }
    public function update(Request $request, $id)
    {
        $Students = Students::find($id);

        if (!$Students) {
            return response()->json([
                'message' => 'Students tidak ditemukan'
            ], 404);
        }
        // return $request->input;
        $Students->nama    = $request->input('nama');
        $Students->jurusan = $request->input('jurusan');
        $Students->angkatan = $request->input('angkatan');
        $Students->save();

        return response()->json([
            'message' => 'Students berhasil diperbarui',
            'student' => $Students
        ], 200);
    }
    public function destroy($id)
    {
        $Students = Students::find($id);
        $Students->delete();

        return response()->json([
            'message' => 'Students berhasil dihapus'
        ], 200);
    }
    
}
