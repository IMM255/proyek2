<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = ['nama_kelas','jumlah_siswa'];
    use HasFactory;
    public function asesis()
    {
        return $this->hasMany('App\Models\asesi');
    }
}
