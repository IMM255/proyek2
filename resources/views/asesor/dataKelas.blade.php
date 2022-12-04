@extends('layouts.asesor.asesor')
@section('title','Data Kelas')
@section('halaman','Data Kelas')
@section('content')
{{-- <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table> --}}



  <h3 class="" style="margin-top: 20px; margin-left: 1em; font-weight: bold">Daftar Kelas</h3>
  <hr style="width: 90%; margin-top:2em;">

  <div class="row row-cols-1 row-cols-md-4 g-4" style="margin-top:2em; margin-left: 1em; margin-right: 1em;">
    {{-- card --}}
    <div class="col">
      <div class="card">
        <img src="https://www.pngkit.com/png/detail/211-2112950_google-classroom-icon-circle.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 style="text-align: center">XII RPL 1</h4>
          <hr style="margin-top: 10px">
          <p class="card-text" style="margin-top: 20px; text-align: center; font-weight: bold">Jumlah Siswa</p>
          <p class="card-text" style="text-align: center;">20</p>
          <a href="{{route('asesor.detailKelas');}}" class="btn btn-primary stretched-link">Detail</a>
        </div>
      </div>
    </div>
    {{-- end card --}}
    {{-- card --}}
    <div class="col">
        <div class="card">
          <img src="https://www.pngkit.com/png/detail/211-2112950_google-classroom-icon-circle.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 style="text-align: center">XII RPL 1</h4>
            <hr style="margin-top: 10px">
            <p class="card-text" style="margin-top: 20px; text-align: center; font-weight: bold">Jumlah Siswa</p>
            <p class="card-text" style="text-align: center;">20</p>
            <a href="{{route('asesor.detailKelas');}}" class="btn btn-primary stretched-link">Detail</a>
          </div>
        </div>
      </div>
      {{-- end card --}}
      {{-- card --}}
    <div class="col">
        <div class="card">
          <img src="https://www.pngkit.com/png/detail/211-2112950_google-classroom-icon-circle.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 style="text-align: center">XII RPL 1</h4>
            <hr style="margin-top: 10px">
            <p class="card-text" style="margin-top: 20px; text-align: center; font-weight: bold">Jumlah Siswa</p>
            <p class="card-text" style="text-align: center;">20</p>
            <a href="{{route('asesor.detailKelas');}}" class="btn btn-primary stretched-link">Detail</a>
          </div>
        </div>
      </div>
      {{-- end card --}}

  </div>


@endsection
@section('dataKelas','active')
