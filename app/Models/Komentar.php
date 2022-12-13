<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $fillable = [
        'nama', 'email', 'pesan'
    ];
    use HasFactory;
}
