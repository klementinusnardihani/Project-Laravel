@extends('main')

@section('Judul')
    Edit Data 
@endsection

@section('isi')
    <div class="container">
        <div class="row mt-4">
            <h2>Edit Data</h2>
        </div>      
        <div class="row">           
            <div class="col-lg-12">
                <form action="/datanilai/{{$datasiswa->id}}/update" method="POST"> <!-- mengatur route tanbah data-->
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label for="nama">Nama</label>
                    <input name="nama_mhs" type="text" class="form-control" id="nama" aria-describedby="nama" placeholder="Masukan nama" value="{{$datasiswa->nama}}"> <!--$datasiswa untuk menampung data yang diedit-->
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input name="nim_mhs" type="double" class="form-control" id="nama" aria-describedby="nim" placeholder="Masukan NIM"  value="{{$datasiswa->nim}}">
                    </div>
                    <div class="form-group">
                        <label for="prodi">Program Studi</label>
                        <select class="custom-select" name="prodi" id="prodi" required>
                            <option value="">Pilih...</option>
                            <option value="Pendidikan Teknik Informatika"
                                @if ($datasiswa-> prodi == "Pendidikan Teknik Informatika")
                                    selected
                                @endif>Pendidikan Teknik Informatika</option>
                            <option value="Manajemen Informasi"
                                @if ($datasiswa-> prodi == "Manajemen Informasi")
                                    selected
                                @endif>Manajemen Informatika</option>
                            <option value="Sistem Informasi"
                                @if ($datasiswa-> prodi == "Sistem Informasi")
                                    selected
                                @endif>Sistem Informasi</option>
                            <option value="Ilmu Komputer"
                                @if ($datasiswa-> prodi == "Ilmu Komputer")
                                    selected
                                @endif>Ilmu Komputer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nilai">Nilai</label>
                        <input name="nilai_mhs" type="double" class="form-control" id="nilai" aria-describedby="nilai" placeholder="Masukan nilai"  value="{{$datasiswa->nilai}}">
                    </div>                             
                    <button type="submit" class="btn btn-info">Update</button>
                </form>
            </div>
        </div>
       

    </div>

@endsection