<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MahasiswaModel;

class MahasiswaController extends Controller
{
    public function tambahMahasiswa()
    {
        return view('form');
    }

    public function simpanMahasiswa(Request $request)
    {
        $santri = MahasiswaModel::create([
            'NIM' => $request->NIM,
            'Nama_Mahasiswa' => $request->Nama_Mahasiswa,
            'Jurusan' => $request->Jurusan,
        ]);

        return redirect()->route('tambahMahasiswa');
    }
}
