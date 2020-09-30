@extends('layout/main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <div class="mt-3">
                <h1>Daftar Mahasiswa</h1>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jurusan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswa as $mhs)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$mhs->nama}}</td>
                            <td>{{$mhs->email}}</td>
                            <td>{{$mhs->jurusan}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection