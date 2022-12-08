<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Asesi;


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

    public function dataSesi(){
        return view('admin/dataSesi');
    }

    public function dataKelas(){
        $classes = Classes::withCount('asesis')->orderBy('nama_kelas')->get();
        return view('admin/dataKelas',['classes' => $classes]);
    }

    public function detailKelas($class_id){
        $asesis = Asesi::Where('classes_id',$class_id)->orderBy('name')->paginate(10);
        $nama_kelas = Classes::find($class_id)->nama_kelas;
        return view('admin/detailKelas',
                    ['asesis' => $asesis,
                    'nama_kelas' => $nama_kelas,]
                    );
    }



}
