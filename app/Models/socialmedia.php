<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class socialmedia extends Model
{
    use HasFactory;
    protected $fillable = ['Jenis_Social_Media','Link_Social_Media'];
}
