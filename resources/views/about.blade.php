@extends('layout/main')

@section('title', 'Tentang saya')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <div class="mt-3">
                <h1>Saya {{$nama}}</h1>
            </div>
        </div>
    </div>
</div>
@endsection