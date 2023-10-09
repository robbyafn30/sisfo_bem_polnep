<?php

namespace App\Models;

use App\Models\Jurusan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Layanan extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama','nim','jurusan_id','email','keterangan','jenis'];
    protected $guareded = [];

    public function jurusan(){
        return $this->belongsTo(Jurusan::class);
    }
}
