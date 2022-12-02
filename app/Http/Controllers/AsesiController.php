<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsesiController extends Controller
{
    public function __construct()

    {

        $this->middleware('auth');

    }

    public function index(){
        return view('asesi/administrasi');
    }

    public function profile(){
        return view('asesi/profile');
    }

    public function formulir(){
        return view('asesi/formulir');
    }
}
