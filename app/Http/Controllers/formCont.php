<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class formCont extends Controller
{
     //menampilkan hasil inputan
     public function ambilData(Request $req){
        $nama = $req->nama_mhs;
        $nim = $req->nim_mhs;
        $nilai = $req->nilai_mhs;
        $cek = $req;    
        $prodi = $req->prodi;

        DB::table('mahasiswa')->insert(
            ['nama' => $nama, 'nim' => $nim, 'prodi' => $prodi, 'nilai' => $nilai]
        );

        //cek lulus
        if ($nilai > 70) {
            $cek = "Selamat Anda Lulus!.";

        } else {
            $cek = "Opps!. Anda tidak lulus.";
        }

        return view('hasil', ['var_nama'=>$nama, 'var_nim'=>$nim,  'var_prodi'=>$prodi, 'var_nilai'=>$nilai,
         'var_cek'=>$cek]);
    }
}