<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengantin;
use App\Models\Tema;
use App\Models\Gambar;
use DB;

class InviteController extends Controller
{
    public function index($slug)
    {
        $undangan = DB::table('tb_pengantin')->where('slug', $slug)->first();
        $themes = DB::table('tb_tema')->where('id', $undangan->id_tema)->first();
        $gambar_utama = DB::table('tb_gambar')->where(['id_pengantin' => $undangan->id, 'tipe_gambar' => 'utama'])->first();
        $gambar_pengantin_pria = DB::table('tb_gambar')->where(['id_pengantin' => $undangan->id, 'tipe_gambar' => 'pengantin_pria'])->first();
        $gambar_pengantin_wanita = DB::table('tb_gambar')->where(['id_pengantin' => $undangan->id, 'tipe_gambar' => 'pengantin_wanita'])->first();
        $gambar_galeri = DB::table('tb_gambar')->where(['id_pengantin' => $undangan->id, 'tipe_gambar' => 'gallery'])->get();

        return view('themes.'.$themes->judul_tema, compact('undangan', 'gambar_utama', 'gambar_pengantin_pria', 'gambar_pengantin_wanita', 'gambar_galeri'));
    }
}
