<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arsipankajian extends Model
{
    protected $fillable = ['id','judul','thumbnail','dokumen'];
    protected $guareded = [];
    use HasFactory;
}
