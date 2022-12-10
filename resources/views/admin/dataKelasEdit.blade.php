@extends('layouts.admin.master')
@section('content')
<div class="pt-3">
    <h1 class="h2">Edit Kelas</h1>
</div>
<hr>

<form  method= "POST" action="{{route ('dataKelas.update',['kelas' =>$kelas->id] ) }}">
    @method('PATCH')
    @csrf
<div class="row mb-3">
  <label for="nama_kelas" class="col-md-3 col-form-label text-md-end">
    Nama Kelas </label>
  <div class="col-md-4">
    <input id="nama_kelas" type="text"
    class="form-control @error('nama_kelas') is-invalid @enderror"
    name="nama_kelas" value="{{ old('nama_kelas') ?? $kelas->nama_kelas ?? '' }}"
    autofocus>
    @error('nama_kelas')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>

<div class="row mb-3">
  <label for="jumlah_siswa" class="col-md-3 col-form-label text-md-end">
    Jumlah Siswa </label>
  <div class="col-md-4">
    <input id="jumlah_siswa" type="text"
    class="form-control @error('jumlah_siswa') is-invalid @enderror w-25"
    name="jumlah_siswa" autofocus
    value="{{ old('jumlah_siswa') ?? $kelas->jumlah_siswa ?? '' }}">
    @error('jumlah_siswa')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>

<div class="row">
  <div class="col-md-6 offset-md-3">
    <button type="submit" class="btn btn-primary">Update</button>
  </div>
</div>
</form>
@endsection
