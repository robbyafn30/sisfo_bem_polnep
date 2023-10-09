<?php

namespace App\Models;

use App\Models\Jabatan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kepengurusan extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama','nim','jurusan_id','jabatan_id','kementerian_id','departemen','tanggal_lahir','no_hp','foto','instagram'];
    protected $guareded = [];

    public function jurusan(){
        return $this->belongsTo(Jurusan::class);
    }

    public function jabatan(){
        return $this->belongsTo(Jabatan::class);
    }

    public function kementerian(){
        return $this->belongsTo(Kementerian::class);
    }
}
