<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;
    protected $fillable = ['id','nomor','subjek','perihal','tgl_surat','tgl_ket_surat','dokumen','keterangan'];
    protected $guareded = [];
}
