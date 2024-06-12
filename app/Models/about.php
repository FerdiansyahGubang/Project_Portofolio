<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    use HasFactory;
    protected $fillable=['Pengenalan_Singkat','Foto',
    'Skill_Utama',
    'Deskripsi_Skill',
    'Tanggal_Lahir',
    'Website',
    'Nomor_Telepon',
    'Kota',
    'Usia',
    'Tingkat_Kemahiran',
    'Email',
    'Pekerjaan',
    'Deskripsi_Biodata'];

}
