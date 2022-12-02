<?php



use Illuminate\Support\Facades\Route;



use App\Http\Controllers\HomeController;
use App\Http\Controllers\AsesiController;
use App\Http\Controllers\AsesorController;
use App\Http\Controllers\AdminController;

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
    Route::get('/asesor/penilaian', [AsesorController::class, 'penilaian'])->name('asesor.penilaian');
    Route::get('/asesor/data', [AsesorController::class, 'data'])->name('asesor.data');
    Route::get('/asesor/dataSesi', [AsesorController::class, 'dataSesi'])->name('asesor.dataSesi');
    Route::get('/asesor/datakelas', [AsesorController::class, 'dataKelas'])->name('asesor.dataKelas');
    Route::get('/asesor/dataPengujian', [AsesorController::class, 'dataPengujian'])->name('asesor.dataPengujian');

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
    Route::get('/admin/asesor', [AdminController::class, 'asesor'])->name('admin.asesor');
    Route::get('/admin/asesi', [AdminController::class, 'asesi'])->name('admin.asesi');
    Route::get('/admin/penilaian', [AdminController::class, 'penilaian'])->name('admin.penilaian');
    Route::get('/admin/sertifikat', [AdminController::class, 'sertifikat'])->name('admin.sertifikat');


});

