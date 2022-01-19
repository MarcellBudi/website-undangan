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
        $undangan = DB::table('tb_pengantin')->where('slug', $slug)->get();
        $themes = DB::table('tb_tema')->where('id', $undangan[0]->id_tema)->get();

        return view('themes.'.$themes[0]->judul_tema);
    }
}
