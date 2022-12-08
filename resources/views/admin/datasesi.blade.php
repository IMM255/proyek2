@extends('layouts.admin.master')
@section('title','DataSesi')
@section('halaman','Data Sesi')
@section('content')
    <div class="col-mb-3">
        <div class="card card-success">
          <div class="card-header">
            <h2 class="card-title">SESI A</h2>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
              </button>
            </div>
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <h6>Waktu : </h6>
            <h6>Tempat : </h6>
            <h6>Jumlah Asesi : </h6>
          </div>
          <!-- /.card-body -->
          <a href="#" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
        <!-- /.card -->
      </div>


@endsection
@section('dataSesi','active')
