<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asesi extends Model
{
    use HasFactory;
    protected $fillable = ['name','nisn','kelas_id'];
    public function classes()
    {
        return $this->belongsTo('App\Models\Classes');
    }
}
