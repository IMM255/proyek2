<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $class = Classes::withCount('asesis')->orderBy('name')->get();
        return view('asesor/dataKelas');
    }
}
