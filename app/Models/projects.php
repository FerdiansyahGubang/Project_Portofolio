<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    use HasFactory;
    protected $fillable = ['Deskripsi_Singkat','Foto_Project','Judul_Project',
    'Deskripsi_Project','Link_Project'];
}
