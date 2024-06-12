<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kemahiran extends Model
{
    use HasFactory;
    protected $fillable = ['Jenis_Kemahiran','Tahun','Tempat','Deskripsi_Kemahiran'];
}
