<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'tb_tema'; //harus sesuai dgn table pada database
    protected $fillable = ['id', 'judul_tema', 'file_tema'];
}
