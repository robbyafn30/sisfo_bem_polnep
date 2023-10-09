<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumentasikegiatan extends Model
{
    protected $fillable = ['id','nama','tanggal','foto_kegiatan'];
    protected $guareded = [];
    use HasFactory;
}
