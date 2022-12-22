<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Midsemester extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul', 'isi', 'penulis', 'keterangan', 'tahun_terbit'
    ];
}
