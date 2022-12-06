<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Asesi;

class AsesorController extends Controller
{
    public function __construct()

    {

        $this->middleware('auth');

    }

    public function index(){
        return view('asesor/dashboard');
    }

    public function profile(){
        return view('asesor/profile');
    }

    public function data(){
        return view('asesor/data');
    }

    public function dataSesi(){
        return view('asesor/dataSesi');
    }

    public function dataKelas(){
        $classes = Classes::withCount('asesis')->orderBy('nama_kelas')->get();
        return view('asesor/dataKelas',['classes' => $classes]);
    }

    public function detailKelas($class_id){
        $asesis = Asesi::Where('classes_id',$class_id)->orderBy('name')->paginate(10);
        $nama_kelas = Classes::find($class_id)->nama_kelas;
        return view('asesor/detailKelas',
                    ['asesis' => $asesis,
                    'nama_kelas' => $nama_kelas,]
                    );
    }

    public function dataPengujian(){
        return view('asesor/dataPengujian');
    }
}
