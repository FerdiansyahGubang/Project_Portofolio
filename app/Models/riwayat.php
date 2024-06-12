<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayat extends Model
{
    use HasFactory;
    protected $fillable = ['Riwayat_Singkat','Nama','Deskripsi_Singkat','Alamat','No_HP'
    ,'Email'];
}
