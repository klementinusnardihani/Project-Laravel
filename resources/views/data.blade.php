@extends('main')

@section('Judul')
    Rekapitulasi Data 
@endsection

@section('isi')
    <div class="container mt-4">

        <!--Class row mengatur button tambah data-->
        
        <div class="row">
            <div class="col">
                <h2>Rekapitulasi Data</h2>
            </div>
            <div class="col">
                 <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                    Tambah Data
                </button>
            
            </div>
          
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/datanilai/tambah" method="POST"> <!-- mengatur route tambah data-->
                            {{ csrf_field() }}

                            <div class="form-group">
                              <label for="nama">Nama</label>
                              <input name="nama_mhs" type="text" class="form-control" id="nama" aria-describedby="nama" placeholder="Masukan nama">
                            </div>
                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input name="nim_mhs" type="double" class="form-control" id="nama" aria-describedby="nim" placeholder="Masukan NIM">
                            </div>
                            <div class="form-group">
                                <label for="prodi">Program Studi</label>
                                <select class="custom-select" name="prodi" id="prodi" required>
                                    <option value="">Pilih...</option>
                                    <option value="Pendidikan Teknik Informatika">Pendidikan Teknik Informatika</option>
                                    <option value="Manajemen Informasi">Manajemen Informatika</option>
                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                    <option value="Ilmu Komputer">Ilmu Komputer</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nilai">Nilai</label>
                                <input name="nilai_mhs" type="double" class="form-control" id="nilai" aria-describedby="nilai" placeholder="Masukan nilai">
                            </div>                             
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div> 
                </div>   
            </div>
        </div>
        
        <table class="table table-striped">
            <thead>
              <tr class="table-info">
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Program Studi</th>
                <th scope="col">Nilai</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $no = 0;
                @endphp
                @foreach ($mahasiswa as $mhs)
                    <tr>
                        <td>{{ ++$no }}</td>
                        <td>{{ $mhs->nama }}</td>
                        <td>{{ $mhs->nim }}</td>
                        <td>{{ $mhs->prodi }}</td>
                        <td>{{ $mhs->nilai }}</td>
                        <td>
                            <a href="/datanilai/{{$mhs->id}}/edit" class="btn btn-warning btn-sm" >Edit</a>
                            <a href="/datanilai/{{$mhs->id}}/delete" class="btn btn-danger btn-sm" >Delete</a>
                        </td>
                       
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
@endsection