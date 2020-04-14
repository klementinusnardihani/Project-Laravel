@extends('main')

@section('Judul')
    Hasil 
@endsection

@section('isi')
    <div class="container mt-4">
        <div class="jumbotron">
            <h1 class="display-3">Hasil Input</h1>
            <hr>
            <h3>Nama            : <h2> <strong>{{$var_nama}}</strong> </h2> </h3> <br>
            <h3>NIM             : <h2> <strong>{{$var_nim}}</strong> </h2> </h3> <br>
            <h3>Program Studi   : <h2> <strong>{{$var_prodi}}</strong> </h2></h3> <br>
            <h3>Nilai           : <h2> <strong>{{$var_nilai}}</strong> </h2> </h3> <br>
            <h3>Keterangan      : <h2> <strong>{{$var_cek}}</strong> </h2></h3>
        </div>
    </div> 
@endsection