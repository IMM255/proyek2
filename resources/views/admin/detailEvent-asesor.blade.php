@extends('layouts.admin.master')
@section('title','detailEvent')
@section('halaman','detailEvent')
@section('content')
<div class="container">
    <div class="card card-warning">
        <div class="card-header">
            <h2 class="card-title">SESI B</h2>
            <div class="card-tools">
            </div>
        </div>
        <div class="card-body">
            <table border="0">
                <tr>
                    <td style="width: 250px;">
                        <h6>Kuota Peserta</h6>
                    </td>
                    <th style="width: 20px;">
                        <h6>:</h6>
                    </th>
                    <th style="width: 450px;">
                        <h6>10</h6>
                    </th>
                </tr>
                <tr>
                    <td style="width: 250px;">
                        <h6>Tempat Uji Kompetensi</h6>
                    </td>
                    <th style="width: 20px;">
                        <h6>:</h6>
                    </th>
                    <th style="width: 450px;">
                        <h6>Laboratorium Software</h6>
                    </th>
                </tr>
                <tr>
                    <td style="width: 250px;">
                        <h6>Skema</h6>
                    </td>
                    <th style="width: 20px;">
                        <h6>:</h6>
                    </th>
                    <th style="width: 450px;">
                        <h6><b>B001.234</b></h6>
                    </th>
                </tr>
                <tr>
                    <td style="width: 250px;">
                        <h6>Waktu Pelaksanaan</h6>
                    </td>
                    <th style="width: 20px;">
                        <h6>:</h6>
                    </th>
                    <th style="width: 450px;">
                        <h6>14 September 2023 <b>07.00 WIB</b> - 14 September 2023 <b>15.00 WIB</b></h6>
                    </th>
                </tr>
                <tr>
                    <td style="width: 250px;">
                        <h6>Status Event</h6>
                    </td>
                    <th style="width: 20px;">
                        <h6>:</h6>
                    </th>
                    <th style="width: 450px;"><span class="badge badge-pill badge-warning">Sedang Berjalan</span>
                    </th>
                </tr>
            </table>
            {{-- <h6>Waktu : </h6>
            <h6>Tempat : </h6>
            <h6>Jumlah Asesi : </h6> --}}
        </div>
    </div>
    <a href="{{route('admin.detailEvent');}}" type="button" class="btn btn-sm btn-outline-primary">Edit Data</a>
    <a href="{{route('admin.detailEvent-asesor');}}" type="button" class="btn btn-sm btn-outline-primary">Data Asesor & Asesi</a>
    <a href="#" type="button" class="btn btn-sm btn-outline-primary">Status</a>

    <div class="card" style="margin-top:25px">
        <div class="card-body">
            <label>
                <h4>Info Asesor</h4>
            </label>
            <table border="0">
                <tr>
                    <th style="width: 250px;">
                        Nama
                    </th>
                    <td style="width: 20px;">
                        <h6>:</h6>
                    </td>
                    <td style="width: 450px;">
                        -
                    </td>
                </tr>
                <tr>
                    <th style="width: 250px;">
                        NIP
                    </th>
                    <td style="width: 20px;">
                        <h6>:</h6>
                    </td>
                    <td style="width: 450px;">
                        -
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="card" style="margin-top:25px">
        <div class="card-body">
            <label>
                <h4>Info Asesi</h4>
            </label>
            <table class="table" width="100%">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NISN</th>
                        <th scope="col">Kontak</th>
                        {{-- Status bisa link juga ke detail pengujian lewat modal --}}
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 10; $i++)
                    <tr>
                        <th scope="row">{{$i+1;}}</th>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td><span class="badge badge-pill badge-warning">Belum Diuji</span></td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
        
    </div>
</div>
@endsection
@section('event','active')