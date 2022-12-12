@extends('layouts.admin.master')
@section('content')
<div class="pt-3">
    <h1 class="h2">Tambah Siswa</h1>
</div>
<hr>

<form method="POST" action="{{route ('dataKelas.storeAsesis')}}">
    @csrf
    <div class="row mb-3">
        <label for="nama" class="col-md-3 col-form-label text-md-end">
            Nama</label>
        <div class="col-md-4">
            <input id="nama" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                value="{{ old('name') ?? $asesis->name ?? '' }}" autofocus>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="nisn" class="col-md-3 col-form-label text-md-end">
            Nisn</label>
        <div class="col-md-4">
            <input id="nisn" type="text" class="form-control @error('nisn') is-invalid @enderror" name="nisn"
                value="{{ old('nisn') ?? $asesis->nisn ?? '' }}" autofocus>
            @error('nisn')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="kelas_id" class="col-md-3 col-form-label text-md-end">
            Kelas </label>
        <div class="col-md-4">
            <select name="kelas_id" id="kelas_id" class="form-select @error('kelas_id') is-invalid @enderror">
                @foreach ($kelases as $kelas)
                @if ($kelas->id == (old('kelas_id') ?? $mahasiswa->kelas_id ?? ''))
                <option value="{{ $kelas->id }}" selected>{{ $kelas->nama_kelas }}</option>
                @else
                <option value="{{ $kelas->id }}">{{ $kelas->nama_kelas }}</option>
                @endif
                @endforeach
            </select>
            @error('kelas_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </div>
</form>
@endsection
