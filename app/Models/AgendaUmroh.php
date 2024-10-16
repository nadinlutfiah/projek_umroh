<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgendaUmroh extends Model
{
    use HasFactory;

    protected $table = 'agenda_umroh';

    protected $fillable = [
        'nama_paket',
        'tanggal_berangkat',
        'tanggal_pulang',
        'harga',
        'deskripsi',
    ];
}
