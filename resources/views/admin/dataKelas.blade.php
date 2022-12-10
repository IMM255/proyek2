@extends('layouts.admin.master')
@section('title','Data Kelas')
@section('halaman','Data Kelas')
@section('content')
  <h3 class="" style="margin-top: 20px; margin-left: 1em; font-weight: bold">Daftar Kelas</h3>
  <hr style="width: 90%; margin-top:2em;">

  <div class="text-end pt-5 pb-4">
    <a href="{{route ('dataKelas.create')}}" class="btn btn-info">Tambah Kelas</a>
    </a>
  </div>



  <div class="row row-cols-1 row-cols-md-4 g-4" style="margin-top:2em; margin-left: 1em; margin-right: 1em;">
    {{-- card   --}}

    @foreach ($kelases as $kelas)

    <div class="col">
      <div class="btn-group btn-action">
        <a href="{{route('dataKelas.edit',['kelas' => $kelas->id])}}"
          class="btn btn-primary d-inline-block" title="Edit Jurusan">
          <i class="fa fa-edit fa-fw"></i>
        </a>
      </div>
      <form action="{{route('dataKelas.delete',['kelas' => $kelas->id])}}" method="POST">
         @method('DELETE')
         @csrf
        <button type="submit" class="btn btn-danger shadow-none btn-hapus"
        title="Hapus Jurusan" data-name="{{$kelas->nama_kelas}}" data-table="kelas">
          <i class="fa fa-trash fa-fw"></i>
      </button>
      </form>
      <div class="card">
        <img src="https://www.pngkit.com/png/detail/211-2112950_google-classroom-icon-circle.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 style="text-align: center">{{$kelas->nama_kelas}}</h4>
          <hr style="margin-top: 10px">
          <p class="card-text" style="margin-top: 20px; text-align: center; font-weight: bold">Jumlah Siswa</p>
          <p class="card-text" style="text-align: center;">{{$kelas->Jumlah_siswa}}</p>
          <a href="{{route('admin.detailKelas',['kelas_id' => $kelas->id]) }}" class="btn btn-primary stretched-link">Detail</a>
        </div>
      </div>
    </div>

    {{-- end card  --}}

    @endforeach

  </div>


@endsection
@section('dataKelas','active')
