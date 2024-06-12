<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendidikan extends Model
{
    use HasFactory;
    protected $fillable = ['Jenjang','Nama_Sekolah','Alamat_Sekolah','Tahun',
    'Deskripsi_Singkat'];
}
