@extends('layouts.asesi.asesi')
@section('title','administrasi')
@section('halaman','administrasi')
@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">FORMULIR PERMOHONAN SERTIFIKASI KOMPETENSI</h3>
              </div>
              
              <form role="form">
                <div class="card-body">
                <h4>Data Pribadi </h4>
                <div class="form-group">
                    <label for="nis">NIS</label>
                    <input type="text" class="form-control" id="email" placeholder="Email">
                  </div>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
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
                    <label>Jenis Kelamin</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="jk">
                          <label class="form-check-label">Laki-laki</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="jk" checked>
                          <label class="form-check-label">Perempuan</label>
                        </div>
                    </div>
                <div class="form-group">
                    <label for="tempatlahir">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempatlahir" placeholder="Tempat Lahir">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="Telpn">No.Telpn</label>
                    <input type="text" class="form-control" id="Telpn" placeholder="No Telepon">
                  </div>

                 <h4>Data Pendidikan</h4>

                 <div class="form-group">
                        <label>Select</label>
                        <select class="form-control">
                            <option value="1">SD</option>
                            <option value="2">SMP</option>
                            <option value="3">SMA/SMK/Sederajat</option>
                            <option value="4">D2</option>
                            <option value="5">D3</option>
                            <option value="6">D4</option>
                            <option value="7">S1</option>
                            <option value="8">S2</option>
                            <option value="9">S3</option>
                            <option value="10">D1</option>
                    </select>
                </div>

                 <div class="form-group">
                    <label for="sekolah">Nama Sekolah</label>
                    <input type="text" class="form-control" id="sekolah" placeholder="Nama Sekolah">
                  </div>

                  <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" placeholder="Jurusan">
                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
</form>
</div>

@endsection
@section('administrasi','active')