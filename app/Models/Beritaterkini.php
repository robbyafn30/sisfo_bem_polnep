<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beritaterkini extends Model
{
    use HasFactory;
    protected $fillable = ['id','judul_berita','narasi_berita','foto_berita'];
    protected $guareded = [];
    // protected $dates = ['tanggal_berita'];
}
