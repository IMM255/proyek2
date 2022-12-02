@extends('layouts.asesor.asesor')
@section('title','Data-asesi')
@section('halaman','Data-asesi')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Responsive Hover Table</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>NISN</th>
                <th>Nama</th>
                <th>Tes Lisan</th>
                <th>Tes Langsung</th>
                <th>Tes tulis</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>183</td>
                <td>John Doe</td>
                <td>
                     <div class="btn-group">
                    <button type="button" class="btn btn-default">FR</button>
                    <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                      <span class="sr-only">Toggle Dropdown</span>
                      <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="#">FR.IA.03</a>
                      </div>
                    </button>
                    </div>
                </td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">FR</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                          <span class="sr-only">Toggle Dropdown</span>
                          <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" href="#">FR.IA.03</a>
                          </div>
                        </button>
                        </div>
                </td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">FR</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                          <span class="sr-only">Toggle Dropdown</span>
                          <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" href="#">FR.IA.03</a>
                          </div>
                        </button>
                        </div>
                </td>
              </tr>
              <tr>
                <td>219</td>
                <td>Alexander Pierce</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">FR</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                          <span class="sr-only">Toggle Dropdown</span>
                          <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" href="#">FR.IA.03</a>
                          </div>
                        </button>
                    </div>
                </td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">FR</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                          <span class="sr-only">Toggle Dropdown</span>
                          <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" href="#">FR.IA.03</a>
                          </div>
                        </button>
                        </div>
                </td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">FR</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                          <span class="sr-only">Toggle Dropdown</span>
                          <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" href="#">FR.IA.03</a>
                          </div>
                        </button>
                        </div>
                </td>
              </tr>


            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection
@section('data-asesi','active')
