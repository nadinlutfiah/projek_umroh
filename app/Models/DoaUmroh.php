<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoaUmroh extends Model
{
    
    use HasFactory;

    protected $table = 'doaumroh';

    protected $fillable = [
        'nama_doa',
        'deskripsi',
    ];
}