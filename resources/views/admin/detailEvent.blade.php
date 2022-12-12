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
                    <td style="width: 250px;"><h6>Kuota Peserta</h6></td>
                    <th style="width: 20px;"><h6>:</h6></th>
                    <th style="width: 450px;"><h6>10</h6></th>
                </tr>
                <tr>
                    <td style="width: 250px;"><h6>Tempat Uji Kompetensi</h6></td>
                    <th style="width: 20px;"><h6>:</h6></th>
                    <th style="width: 450px;"><h6>Laboratorium Software</h6></th>
                </tr>
                <tr>
                    <td style="width: 250px;"><h6>Skema</h6></td>
                    <th style="width: 20px;"><h6>:</h6></th>
                    <th style="width: 450px;"><h6><b>B001.234</b></h6></th>
                </tr>
                <tr>
                    <td style="width: 250px;"><h6>Waktu Pelaksanaan</h6></td>
                    <th style="width: 20px;"><h6>:</h6></th>
                    <th style="width: 450px;"><h6>14 September 2023 <b>07.00 WIB</b> - 14 September 2023 <b>15.00 WIB</b></h6></th>
                </tr>
                <tr>
                    <td style="width: 250px;"><h6>Status Event</h6></td>
                    <th style="width: 20px;"><h6>:</h6></th>
                    <th style="width: 450px;"><span class="badge badge-pill badge-warning">Sedang Berjalan</span>
                    </th>
                </tr>
            </table>
            {{-- <h6>Waktu : </h6>
            <h6>Tempat : </h6>
            <h6>Jumlah Asesi : </h6> --}}
        </div>
    </div>
    <a href="#" type="button" class="btn btn-sm btn-outline-primary">Edit Data</a>
    <a href="{{route('admin.detailEvent-asesor');}}" type="button" class="btn btn-sm btn-outline-primary">Data Asesor & Asesi</a>
    <a href="#" type="button" class="btn btn-sm btn-outline-primary">Status</a>
    <br>
    <div class="card" style="margin-top:25px">
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label>Nama Event</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Kuota Peserta</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Tempat Uji Kompetensi</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Skema</label>
                    <select class="form-control">
                        <option>Skema A001.23</option>
                        <option>Skema B001.23</option>
                        <option>Skema C001.23</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Waktu Pengujian</label>
                    <div class="form-row">
                        <div class="col">
                            <input type="date" class="form-control">
                        </div>
                        <label>-</label>
                        <div class="col">
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    <div class="form-row" style="margin-top: 10px;">
                        <div class="col">
                            <input type="time" class="form-control">
                        </div>
                        <label>-</label>
                        <div class="col">
                            <input type="time" class="form-control">
                        </div>
                    </div>
                </div>
                <button class="btn btn-sm btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
@section('event','active')