@extends('layouts.admin.master')
@section('title','Manajemen Akun')
@section('content')
{{-- Konten --}}

<div class="container">
    <h3>Manajemen Akun</h3>
    <hr>
    <div class="row row-cols-1 row-cols-sm-5 g-4" style="margin-top:2em; margin-left: 1em; margin-right: 1em;">
        {{-- card --}}
        <div class="col">
            <div class="card">
                <img src="https://img.freepik.com/free-vector/graphic-design-geometric-wallpaper_52683-34399.jpg?w=996&t=st=1670151965~exp=1670152565~hmac=a1b713f2103f20af09bb3eb98557b14f046c22451b128c3a8092931d256f7f4b"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 style="text-align: center">Akun Asesor</h5>
                    <a href="#" class="btn btn-sm btn-primary stretched-link">Detail</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="https://img.freepik.com/free-vector/graphic-design-geometric-wallpaper_52683-34399.jpg?w=996&t=st=1670151965~exp=1670152565~hmac=a1b713f2103f20af09bb3eb98557b14f046c22451b128c3a8092931d256f7f4b"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 style="text-align: center">Manajer Sertifikasi</h5>
                    <a href="#" class="btn btn-sm btn-primary stretched-link">Detail</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="https://img.freepik.com/free-vector/graphic-design-geometric-wallpaper_52683-34399.jpg?w=996&t=st=1670151965~exp=1670152565~hmac=a1b713f2103f20af09bb3eb98557b14f046c22451b128c3a8092931d256f7f4b"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 style="text-align: center">Akun Asesi</h5>
                    <a href="#" class="btn btn-sm btn-primary stretched-link">Detail</a>
                </div>
            </div>
        </div>
        {{-- end card --}}
    </div>

    <h3 style="margin-top: 100px; margin-bottom: 50px">
        <center>Daftar Akun</center>
    </h3>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Pengguna</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td><span class="badge badge-pill badge-success">Aktif</span></td>
                    <td>
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                            data-target=".bd-example-modal-lg">Detail</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td><span class="badge badge-pill badge-danger">Nonaktif</span></td>
                    <td>
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                            data-target=".bd-example-modal-lg">Detail</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- End of Konten --}}

    <!-- Large modal -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="container">
                    <h4 style="margin-left: 10px; margin-top: 10px;">Detail Akun</h4>
                    <hr style="margin-left: 10px; margin-top: 10px;">
                    <div class="container">
                        <form >
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Nama Pengguna</label>
                                <label for="staticEmail" class="col-sm-1 col-form-label">:</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value="Mark">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                <label for="staticEmail" class="col-sm-1 col-form-label">:</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value="email@example.com">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Status</label>
                                <label for="staticEmail" class="col-sm-1 col-form-label">:</label>
                                <div class="col-sm-8">
                                    <td><span class="badge badge-pill badge-success">Nonaktif</span></td>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Peran</label>
                                <label for="staticEmail" class="col-sm-1 col-form-label">:</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value="Asesor">
                                </div>
                            </div>
                        </form>
                    </div>
                    <hr style="margin-left: 10px; margin-top: 10px;">
                    <a href="#" class="btn btn-sm btn-primary">Detail</a>
                </div>
            </div>
        </div>
    </div>

    @endsection
    @section('Manajemen-Akun','active')
