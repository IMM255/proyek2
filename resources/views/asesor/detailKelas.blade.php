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



  <h2 class="" style="margin-top: 20px; margin-left: 1em; font-weight: bold">Info Kelas</h2>
  <hr style="width: 90%; margin-top:2em;">

  {{-- Judul Card --}}
  <div class="container">
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($asesis as $asesi )

                  <tr>
                    <th scope="row">{{ $loop->iteration}}</th>
                    <td>{{$asesi->name}}</td>
                    <td><a class="badge badge-pill badge-warning">Belum Diuji</a></td>
                    <td><!-- Large modal -->
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal--{{$asesi->id}}"><i class="fa-solid fa-info"></i></button>
                    </td>
                  </tr>

                  @endforeach
                </tbody>
              </table>
        </div>
      </div>

      @foreach ($asesis as $asesi )
      <div id="modal--{{$asesi->id}}" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="container">
                <h5 style="margin-top: 15px; margin-left: 15px;">Detail Siswa</h5>
                <hr style="margin-top: 15px; margin-left: 15px;">
                <div style="margin-left: 20px; margin-right: 20px">
                    <table class="table table-borderless">
                        <tr>
                            <th style="width: 200px">Nama Siswa</th>
                            <th style="width: 10px">:</th>
                            <td>{{$asesi->name}}</td>
                        </tr>
                        <tr>
                            <th style="width: 200px">Kelas</th>
                            <th style="width: 10px">:</th>
                            <td>{{$nama_kelas}}</td>
                        </tr>
                        <tr>
                            <th style="width: 200px">NISN</th>
                            <th style="width: 10px">:</th>
                            <td>{{$asesi->nisn}}</td>
                        </tr>
                        <tr>
                            <th style="width: 200px">Alamat</th>
                            <th style="width: 10px">:</th>
                            <td>{{$asesi->address}}</td>
                        </tr>
                        <tr>
                            <th style="width: 200px">No Telepon</th>
                            <th style="width: 10px">:</th>
                            <td>{{$asesi->phone}}</td>
                        </tr>
                        <tr>
                            <th style="width: 200px">Jenis Kelamin</th>
                            <th style="width: 10px">:</th>
                            <td>{{$asesi->gender}}</td>
                        </tr>
                        <tr>
                            <th style="width: 200px">Tanggal Lahir</th>
                            <th style="width: 10px">:</th>
                            <td><p>{{$asesi->birth_date}}</p></td>
                        </tr>
                      </table>
                </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      {{-- end of modal --}}
      <div class="row">
        <div class="mx-auto mt-3">
        {{ $asesis->fragment('judul')->links() }}
        </div>
  </div>


@endsection
@section('dataKelas','active')
