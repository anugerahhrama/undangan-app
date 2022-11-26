<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Undangan extends Model
{
    protected $fillable = [
        'id_user',
        'hari',
        'tanggal',
        'bulan',
        'tahun',
        'judul_acara',
        'id_tema',
        'deskripsi',
        'id_kategori'
    ];
    use HasFactory;
}
