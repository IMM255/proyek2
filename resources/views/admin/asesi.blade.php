@extends('layouts.admin.master')
@section('title','Tambah-Asesi')
@section('halaman','Tambah Asesi')
@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Asesi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="NamaLengkap">Nama Lengkap</label>
                    <input type="text" class="form-control" id="NamaLengkap" placeholder="Nama Lengkap">
                  </div>
                <div class="form-group">
                    <label >Tanggal Lahir : </label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input  type="date" id="tanggal"  name="tanggal_lahir" required/>
                   <label id="label_tanggal_lahir" style="font-size:10px;color: red;"></label><br/>
                  </div>
                </div>  
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="Telpn">No.Telpn</label>
                    <input type="text" class="form-control" id="Telpn" placeholder="No Telepon">
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection
@section('asesi','active')