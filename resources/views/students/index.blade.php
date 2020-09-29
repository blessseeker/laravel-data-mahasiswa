@extends('layout/main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <div class="mt-3">
                <h1>Daftar Mahasiswa</h1>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>   
                @endif
                <a href="/students/create" class="btn btn-primary">Tambah data mahasiswa</a>
                <hr>
                <ul class="list-group">
                    @foreach ($students as $std)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      {{$loop->iteration.". ".$std->nama}}
                      <a href="students/{{$std->id}}" class="badge badge-primary badge-pill">detail</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection