<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;
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
        $kelases = Kelas::withCount('asesis')->orderBy('nama_kelas')->get();
        return view('asesor/dataKelas',['kelases' => $kelases]);
    }

    public function detailKelas($kelas_id){
        $asesis = Asesi::Where('kelas_id',$kelas_id)->orderBy('name')->paginate(10);
        $nama_kelas = Kelas::find($kelas_id)->nama_kelas;
        return view('asesor/detailKelas',
                    ['asesis' => $asesis,
                    'nama_kelas' => $nama_kelas,]
                    );
    }

    public function dataPengujian(){
        return view('asesor/dataPengujian');
    }
}
