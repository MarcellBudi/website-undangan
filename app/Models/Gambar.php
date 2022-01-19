<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'tb_gambar'; //harus sesuai dgn table pada database
    protected $fillable = ['id_pengantin', 'nama_gambar', 'tipe_gambar', 'path'];
}
