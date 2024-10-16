<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TugasPersiapanUmroh extends Model
{
    use HasFactory;

    // Field yang diizinkan untuk mass assignment
    protected $fillable = [
        'nama_tugas',
        'deskripsi',
        'sudah',
        'tidakTerpenuhi',
        'dikerjakanRekan',
    ];
}
