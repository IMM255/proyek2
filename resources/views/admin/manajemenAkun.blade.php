@extends('layouts.admin.master')
@section('title','Manajemen Akun')
@section('content')
{{-- Konten --}}

<div class="container">
    <h3>Manajemen Akun</h3>
    <hr>
    <div class="row row-cols-1 row-cols-sm-3 g-4" style="margin-top:2em; margin-left: 1em; margin-right: 1em;">
    {{-- card --}}
    <div class="col">
        <div class="card">
            <img src="https://img.freepik.com/free-vector/graphic-design-geometric-wallpaper_52683-34399.jpg?w=996&t=st=1670151965~exp=1670152565~hmac=a1b713f2103f20af09bb3eb98557b14f046c22451b128c3a8092931d256f7f4b"
                class="card-img-top" alt="...">
            <div class="card-body">
                <h4 style="text-align: center">XII RPL 1</h4>
                <a href="{{route('asesor.detailKelas');}}" class="btn btn-primary stretched-link">Detail</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="https://img.freepik.com/free-vector/graphic-design-geometric-wallpaper_52683-34399.jpg?w=996&t=st=1670151965~exp=1670152565~hmac=a1b713f2103f20af09bb3eb98557b14f046c22451b128c3a8092931d256f7f4b"
                class="card-img-top" alt="...">
            <div class="card-body">
                <h4 style="text-align: center">XII RPL 1</h4>
                <a href="{{route('asesor.detailKelas');}}" class="btn btn-primary stretched-link">Detail</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="https://img.freepik.com/free-vector/graphic-design-geometric-wallpaper_52683-34399.jpg?w=996&t=st=1670151965~exp=1670152565~hmac=a1b713f2103f20af09bb3eb98557b14f046c22451b128c3a8092931d256f7f4b"
                class="card-img-top" alt="...">
            <div class="card-body">
                <h4 style="text-align: center">XII RPL 1</h4>
                <a href="{{route('asesor.detailKelas');}}" class="btn btn-primary stretched-link">Detail</a>
            </div>
        </div>
    </div>
    {{-- end card --}}
    </div>
    {{-- End of Konten --}}

    @endsection
    @section('Manajemen-Akun','active')
