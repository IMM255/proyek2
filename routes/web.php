<?php

use Illuminate\Support\Facades\Route;


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

//INI routes untuk admin

Route::get('/admin', function () {
    return view('admin/dashboard');
});

Route::get('/admin/dashboard', function () {
    return view('admin/dashboard');
})->name('admin/dashboard') ;

Route::get('/admin/data', function () { 
    return view('admin/data');
})->name('admin/data') ;

Route::get('/admin/event', function () { 
    return view('admin/event');
})->name('admin/event') ;

Route::get('/admin/asesor', function () { 
    return view('admin/asesor');
})->name('admin/asesor') ;

Route::get('/admin/asesi', function () { 
    return view('admin/asesi');
})->name('admin/asesi') ;

Route::get('/admin/penilaian', function () { 
    return view('admin/penilaian');
})->name('admin/penilaian') ;

Route::get('/admin/sertifikat', function () { 
    return view('admin/sertifikat');
})->name('admin/sertifikat') ;

//INI routes untuk asesor

Route::get('/asesor', function () { 
    return view('asesor/profile');
})->name('asesor/asesor') ;

Route::get('/asesor/profile', function () { 
    return view('asesor/profile');
})->name('asesor/profile') ;

Route::get('/asesor/penilaian', function () { 
    return view('asesor/penilaian');
})->name('asesor/penilaian') ;

Route::get('/asesor/data-asesi', function () { 
    return view('asesor/data-asesi');
})->name('asesor/data-asesi') ;

//INI routes untuk asesi

Route::get('/asesi', function () { 
    return view('asesi/profile');
})->name('asesi/profile') ;

Route::get('/asesi/profile', function () { 
    return view('asesi/profile');
})->name('asesi/profile') ;

Route::get('/asesi/administrasi', function () { 
    return view('asesi/administrasi');
})->name('asesi/administrasi') ;






