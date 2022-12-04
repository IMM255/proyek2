<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()

    {

        $this->middleware('auth');

    }

    public function index(){
        return view('admin/dashboard');
    }

    public function data(){
        return view('admin/data');
    }

    public function event(){
        return view('admin/event');
    }

    public function akun(){
        return view('admin/manajemenAkun');
    }

    public function penilaian(){
        return view('admin/penilaian');
    }

    public function sertifikat(){
        return view('admin/sertifikat');
    }



}
