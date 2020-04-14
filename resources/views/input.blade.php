@extends('main')

@section('judul')
    Input Form
@endsection

@section('isi')
    <div class="container mt-4">
        <div class="jumbotron">
            <h2>Input Nilai Mahasiswa</h2>
            <br>
            <form action="{{url('/prosesform')}}" class="was-validated" method="POST">
                {{ csrf_field() }}
    
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" placeholder="Masukan nama..." name="nama_mhs" required>
                        <div class="valid-feedback">Mantap!.</div>
                        <div class="invalid-feedback">Hayooo....! Pilih mana: Isi atau uang jajan dipotong</div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <input type="double" class="form-control" id="nim" placeholder="Masukan Nim..." name="nim_mhs" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prodi" class="col-sm-2 col-form-label">Program Studi</label>
                    <div class="col-sm-10">
                        <select class="custom-select" name="prodi" id="prodi" required>
                            <option value="">Pilih...</option>
                            <option value="Pendidikan Teknik Informatika">Pendidikan Teknik Informatika</option>
                            <option value="Manajemen Informasi">Manajemen Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Ilmu Komputer">Ilmu Komputer</option>
                          </select>
                        <div class="valid-feedback">Sip!</div>
                        <div class="invalid-feedback"> Please select a valid state.</div>
                    </div>
                </div>  
                <div class="form-group row">
                    <label for="nilai" class="col-sm-2 col-form-label">Nilai</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="nilai" placeholder="Masukan nilai..." name="nilai_mhs" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="btn col-sm-5">
                    <button type="submit" name="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection