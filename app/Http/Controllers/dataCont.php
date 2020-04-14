<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dataCont extends Controller
{
    public function show () {
        $mahasiswa = DB::table('mahasiswa')->get();

        return view ('data', ["mahasiswa" => $mahasiswa]);
    }
    public function tambah (Request $req) {
        $nama = $req->nama_mhs;
        $nim = $req->nim_mhs;
        $nilai = $req->nilai_mhs;   
        $prodi = $req->prodi;

        DB::table('mahasiswa')->insert(
            ['nama' => $nama, 'nim' => $nim, 'prodi' => $prodi, 'nilai' => $nilai]
        );

        return redirect('/datanilai');
    }
    public function edit($id){

        $datasiswa = \App\Mahasiswa::find($id);
        return view('edit', compact('datasiswa')); 
    }
    public function update(Request $req, $id){

        $datasiswa = \App\Mahasiswa::find($id);

        $nama = $req->nama_mhs;
        $nim = $req->nim_mhs;
        $nilai = $req->nilai_mhs;   
        $prodi = $req->prodi;

        $datasiswa->update(
            ['nama' => $nama, 'nim' => $nim, 'prodi' => $prodi, 'nilai' => $nilai]
        );

        return redirect('/datanilai');
    }
    public function delete($id){

        $datasiswa = \App\Mahasiswa::find($id);
        $datasiswa->delete();

        return redirect('/datanilai');
    }
    
}

