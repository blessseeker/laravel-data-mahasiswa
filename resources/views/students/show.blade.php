@extends('layout/main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <div class="mt-3">
                <h1>Detail Mahasiswa</h1>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">{{$student->nama}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{$student->nrp}}</h6>
                      <p class="card-text">{{$student->email}}.</p>
                      <p class="card-text">{{$student->jurusan}}.</p>
                      <button type="submit" class="btn btn-primary">Ubah</button>
                      <button type="submit" class="btn btn-danger">Hapus</button>
                      <a href="#" class="card-link">Kembali</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection