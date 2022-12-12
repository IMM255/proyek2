<?php



use Illuminate\Support\Facades\Route;



use App\Http\Controllers\HomeController;
use App\Http\Controllers\AsesiController;
use App\Http\Controllers\AsesorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerSertifikasiController;

/*

|--------------------------------------------------------------------------

| Web Routes

|--------------------------------------------------------------------------

|

| Here is where you can register web routes for your application. These

| routes are loaded by the RouteServiceProvider within a group which

| contains the "web" middleware group. Now create something great!

|

*/



Route::get('/', function () {

    return view('auth/login');

});



Auth::routes();



/*------------------------------------------

--------------------------------------------

All Normal Users Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:user'])->group(function () {



    Route::get('/asesi/administrasi', [AsesiController::class, 'index'])->name('asesi.home');

    Route::get('/asesi/profile', [AsesiController::class, 'profile'])->name('asesi.profile');
    Route::get('/asesi/formulir', [AsesiController::class, 'formulir'])->name('asesi.formulir');

});



/*------------------------------------------

--------------------------------------------

All Admin Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:asesor'])->group(function () {



    Route::get('/asesor/home', [AsesorController::class, 'index'])->name('asesor.home');
    Route::get('/asesor/profile', [AsesorController::class, 'profile'])->name('asesor.profile');
    Route::get('/asesor/data', [AsesorController::class, 'data'])->name('asesor.data');
    Route::get('/asesor/dataSesi', [AsesorController::class, 'dataSesi'])->name('asesor.dataSesi');
    Route::get('/asesor/datakelas', [AsesorController::class, 'dataKelas'])->name('asesor.dataKelas');
    Route::get('/asesor/dataPengujian', [AsesorController::class, 'dataPengujian'])->name('asesor.dataPengujian');
    Route::get('/asesor/detailkelas/{kelas_id}', [AsesorController::class, 'detailKelas'])->name('asesor.detailKelas');


});



/*------------------------------------------

--------------------------------------------

All Admin Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:admin'])->group(function () {



    Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.home');
    Route::get('/admin/data', [AdminController::class, 'data'])->name('admin.data');
    Route::get('/admin/event', [AdminController::class, 'event'])->name('admin.event');
    Route::get('/admin/detailEvent', [AdminController::class, 'detailEvent'])->name('admin.detailEvent');
    Route::get('/admin/detailEvent-asesor', [AdminController::class, 'detailEventasesor'])->name('admin.detailEvent-asesor');
    Route::get('/admin/Manajemen-Akun', [AdminController::class, 'akun'])->name('admin.Manajemen-Akun');
    Route::get('/admin/penilaian', [AdminController::class, 'penilaian'])->name('admin.penilaian');
    Route::get('/admin/sertifikat', [AdminController::class, 'sertifikat'])->name('admin.sertifikat');
    Route::get('/admin/dataSesi', [adminController::class, 'dataSesi'])->name('admin.dataSesi');

    Route::get('/admin/datakelas', [adminController::class, 'dataKelas'])->name('admin.dataKelas');

    Route::get('/admin/dataPengujian', [adminController::class, 'dataPengujian'])->name('admin.dataPengujian');
    Route::get('/admin/detailkelas/{kelas_id}', [adminController::class, 'detailKelas'])->name('admin.detailKelas');

    Route::get('/admin/dataKelas/tambah',[adminController::class,'dataKelasCreate'])->name('dataKelas.create');
    Route::post('/admin/datakelas/tambah/form',[adminController::class,'dataKelasStore'])->name('dataKelas.store');
    Route::get('/admin/datakelas/{kelas}/edit',[adminController::class,'dataKelasedit']) ->name('dataKelas.edit');
    Route::patch('/admin/datakelas/{kelas}',[adminController::class,'dataKelasUpdate']) ->name('dataKelas.update');
    Route::delete('/admin/datakelas/{kelas}',[adminController::class,'dataKelasDelete']) ->name('dataKelas.delete');

    Route::get('/admin/datakelas/tambahSiswa', [adminController::class, 'datalKelasCreateAsesis'])->name('dataKelas.createAsesis');
    Route::post('/admin/datakelas/tambahAsesis/form',[adminController::class,'dataKelasStoreAsesis'])->name('dataKelas.storeAsesis');

    Route::get('/admin/detailKelas/{asesi}/edit',[adminController::class,'dataKelaseditAsesi']) ->name('dataKelas.editAsesis');
    Route::patch('/admin/detailKelas/{asesi}',[adminController::class,'dataKelasUpdateAsesi']) ->name('dataKelas.updateAsesis');
    Route::delete('/admin/detailKelas/{asesi}',[adminController::class,'dataKelasDeleteAsesi']) ->name('dataKelas.deleteAsesis');





});

Route::middleware(['auth', 'user-access:managerSertifikasi'])->group(function () {


    Route::get('/managerSertifikasi/home', [ManagerSertifikasiController::class, 'index'])->name('managerSertifikasi.home');

});
