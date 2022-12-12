@extends('layouts.admin.master')
@section('title','Event')
@section('halaman','Event')
@section('content')
<div class="container">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary me-md-2" type="button" data-toggle="modal" data-target="#tambahEvent"><i
                class="fa-solid fa-circle-plus"></i>Tambah Event</button>
    </div>
    <br>
    <div class="col-mb-3">
        {{-- card event --}}
        <div class="card card-success">
            <div class="card-header">
                <h2 class="card-title">SESI A</h2>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
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
                        <th style="width: 450px;"><h6><b>A001.234</b></h6></th>
                    </tr>
                    <tr>
                        <td style="width: 250px;"><h6>Waktu Pelaksanaan</h6></td>
                        <th style="width: 20px;"><h6>:</h6></th>
                        <th style="width: 450px;"><h6>12 September 2023 <b>07.00 WIB</b> - 12 September 2023 <b>15.00 WIB</b></h6></th>
                    </tr>
                    <tr>
                        <td style="width: 250px;"><h6>Status Event</h6></td>
                        <th style="width: 20px;"><h6>:</h6></th>
                        <th style="width: 450px;"><span class="badge badge-pill badge-success">Sudah Selesai</span>
                        </th>
                    </tr>
                </table>
                {{-- <h6>Waktu : </h6>
                <h6>Tempat : </h6>
                <h6>Jumlah Asesi : </h6> --}}
            </div>
            <div class="card-body">
                <a href="{{route('admin.detailEvent');}}" type="button" class="btn btn-sm btn-primary">Detail</a>
                <button type="button" class="btn btn-sm btn-danger">Hapus</button>
            </div>
        </div>
        {{-- end of card event --}}
        {{-- card event --}}
        <div class="card card-warning">
            <div class="card-header">
                <h2 class="card-title">SESI B</h2>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
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
            <div class="card-body">
                <a href="{{route('admin.detailEvent');}}" type="button" class="btn btn-sm btn-primary">Detail</a>
                <button type="button" class="btn btn-sm btn-danger">Hapus</button>
            </div>
        </div>
        {{-- end of card event --}}
        {{-- card event --}}
        <div class="card card-warning">
            <div class="card-header">
                <h2 class="card-title">SESI C</h2>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
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
                        <th style="width: 450px;"><h6><b>C001.234</b></h6></th>
                    </tr>
                    <tr>
                        <td style="width: 250px;"><h6>Waktu Pelaksanaan</h6></td>
                        <th style="width: 20px;"><h6>:</h6></th>
                        <th style="width: 450px;"><h6>15 September 2023 <b>07.00 WIB</b> - 15 September 2023 <b>15.00 WIB</b></h6></th>
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
            <div class="card-body">
                <a href="{{route('admin.detailEvent');}}" type="button" class="btn btn-sm btn-primary">Detail</a>
                <button type="button" class="btn btn-sm btn-danger">Hapus</button>
            </div>
        </div>
        {{-- end of card event --}}
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahEvent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
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
                            <div class="form-row">
                                <div class="col">
                                    <input type="time" class="form-control">
                                </div>
                                <label>-</label>
                                <div class="col">
                                    <input type="time" class="form-control">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('event','active')