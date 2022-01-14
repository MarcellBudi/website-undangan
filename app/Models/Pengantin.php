<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengantin extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'tb_pengantin'; //harus sesuai dgn table pada database
    protected $fillable = ['id', 'slug', 'title', 'pengantin_pria', 'pengantin_wanita', 'ortu_pengantin_pria', 'ortu_pengantin_wanita', 'alamat', 'tanggal', 'gmaps', 'vidio'];
}
