<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Asesi;
use RealRashid\SweetAlert\Facades\Alert;


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



    //Controller Halaman Detail Kelas


    public function detailKelas($kelas_id){
        $asesis = Asesi::Where('kelas_id',$kelas_id)->orderBy('name')->paginate(10);
        $nama_kelas = Kelas::find($kelas_id)->nama_kelas;
        return view('admin/detailKelas',
                    ['asesis' => $asesis,
                    'nama_kelas' => $nama_kelas,]
                    );
    }







    public function dataPengujian(){
        return view('admin/dataPengujian');
    }





    //Contoller Halaman Data Kelas

    public function dataKelas(){
        $kelases = Kelas::withCount('asesis')->orderBy('nama_kelas')->get();
        return view('admin/dataKelas',['kelases' => $kelases]);
    }


    public function dataKelasCreate(){
        return view('admin.dataKelasCreate');
    }

    public function dataKelasStore(Request $request){
        $validateData = $request->validate([
            'nama_kelas' => 'required',
            'jumlah_siswa' => 'required|min:1|integer',
        ]);
        $kelases = Kelas::create($validateData);
        Alert::Success('Berhasil',"Kelas $request->nama_kelas berhasil ditambahkan");
        return redirect()->Route('admin.dataKelas');
    }

    public function dataKelasDelete(Kelas $kelas)
    {
        $kelas->delete();
        Alert::success('Berhasil', "Kelas $kelas->nama_kelas Telah di hapus");
        return redirect()->Route('admin.dataKelas');

    }

    public function dataKelasEdit(Kelas $kelas)
    {
        return view('admin.dataKelasEdit',compact('kelas'));
    }

    public function dataKelasUpdate(Request $request, Kelas $kelas)
    {
        $validateData = $request->validate([
            'nama_kelas' => 'required',
            'jumlah_siswa' => 'required|min:1|integer',
        ]);

        $kelas->update($validateData);
        Alert::success('Berhasil', "Kelas $request->nama_kelas telah di update");
        return redirect()->Route('admin.dataKelas');
    }


    public function datalKelasCreateAsesis(){
        $kelases = kelas::orderBy('nama_kelas')->get();
        return view('admin.dataKelasCreateAsesis',compact('kelases'));

    }

    public function dataKelasStoreAsesis(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            'nisn' => 'required|integer',
            'kelas_id' => 'required|exists:App\Models\Kelas,id',
        ]);
         Asesi::create($validateData);
        Alert::success('Berhasil',"Siswa $request->name berhasil dibuat");
        return redirect()->Route('admin.dataKelas');

    }

    public function dataKelasEditAsesi(Asesi $asesi){
        $kelases = Kelas::orderBy('nama_kelas')->get();
        return view('admin.dataKelasEditAsesi',[
            'asesi' => $asesi,
            'kelases' => $kelases,
        ]);

    }

    public function dataKelasUpdateAsesi(Request $request, Asesi $asesi)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'nisn' => 'required|integer',
            'kelas_id' => 'required|exists:App\Models\Kelas,id',
        ]);
         $asesi->update($validateData);
        Alert::success('Berhasil',"Siswa $request->name berhasil diubah");
        return redirect()->Route('admin.dataKelas');

    }

    public function dataKelasDeleteAsesi(Asesi $asesi)
    {
        $asesi->delete();
        Alert::success('Berhasil',"data $asesi->name Berhasil dihapus");
        return redirect()->Route('admin.dataKelas');

    }


}
