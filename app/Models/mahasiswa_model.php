<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa_model extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $guarded=['id'];
}
