<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsesorController extends Controller
{
    public function __construct()

    {

        $this->middleware('auth');

    }

    public function index(){
        return view('asesor/dashboard');
    }

    public function penilaian(){
        return view('asesor/penilaian');
    }

    public function data(){
        return view('asesor/data');
    }

    public function dataSesi(){
        return view('asesor/dataSesi');
    }

    public function dataKelas(){
        return view('asesor/dataKelas');
    }

    public function detailKelas(){
        return view('asesor/detailKelas');
    }

    public function dataPengujian(){
        return view('asesor/dataPengujian');
    }
}
