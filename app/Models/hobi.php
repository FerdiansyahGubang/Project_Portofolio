<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hobi extends Model
{
    use HasFactory;
    protected $fillable = ['Jenis_Hobi','Deskripsi_Hobi','Tingkat_Kegemaran'];
}
