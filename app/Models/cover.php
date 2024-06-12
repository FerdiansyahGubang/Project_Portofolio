<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cover extends Model
{
    use HasFactory;
    protected $fillable = ['title','foto','content1','content2'];
}
