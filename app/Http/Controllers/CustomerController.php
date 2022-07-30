<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengantin;
use App\Models\Tema;
use App\Models\Gambar;
use Illuminate\Support\Facades\Auth;
use DB;

class CustomerController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index($user_id) {
        if ($user_id == Auth::user()->id) {
            $pengantin = DB::table('tb_pengantin')->where('id_user', $user_id)->get();
            return view('customer.index' ,compact('pengantin'));
        }
        else {
            return redirect('/');
        }
    }
    
    public function create($user_id) {
        if ($user_id == Auth::user()->id) {
            $tema = Tema::all(); 
            return view('customer.create', compact('tema'));
        }
        else {
            return redirect('/');
        }
    }

    public function store(Request $request) {

        // dd($request->all());
        $user_id = Auth::user()->id;

        $slug = \Str::slug($request->judul_acara);

        $is_slug_taken = DB::table('tb_pengantin')->where('slug', $slug)->get();
        if (count($is_slug_taken) > 0) {
            return redirect()->back();
        }

        // data pengantin
        $pengantin = new Pengantin();
        $pengantin->slug = $slug;
        $pengantin->title = $request->judul_acara;
        $pengantin->id_user = $user_id;
        $pengantin->id_tema = $request->id_tema;
        $pengantin->pengantin_pria = $request->pengantin_pria;
        $pengantin->pengantin_wanita = $request->pengantin_wanita;
        $pengantin->ortu_pengantin_pria = $request->ortu_pengantin_pria;
        $pengantin->ortu_pengantin_wanita = $request->ortu_pengantin_wanita;
        $pengantin->alamat = $request->alamat_acara;
        $pengantin->tanggal = $request->tanggal_acara;
        $pengantin->gmaps = $request->link_gmaps;
        $pengantin->video = $request->link_video;

        $pengantin->save();

        // data gambar utama
        $gambar_utama = new Gambar();
        $gambar_utama->id_pengantin = $pengantin->id;
        $gambar_utama->nama_gambar = $request->foto_utama;
        $gambar_utama->tipe_gambar = 'utama';
        $gambar_utama->path = $request->foto_utama;
        $gambar_utama->save();
        if (!empty($request->file('foto_utama'))) {
            $nama = md5($gambar_utama->id);
            $folder = 'storage/prewedding';
            $extension = $request->file('foto_utama')->getClientOriginalExtension();
            $file = $nama.".".$extension;
            if (file_exists($folder.'/'.$file)) {
                unlink($folder."/".$file);
            }
            if ($request->file('foto_utama')->move($folder, $file)) {
                $gambar_utama->nama_gambar = $nama;
                $gambar_utama->path = $folder."/".$file;
                $gambar_utama->save();
            }
        }

        // data gambar galeri
        $req_gambar_galeri = $request->foto_galeri;
        foreach ($req_gambar_galeri as $key => $g){
            $gambar_galeri = new Gambar();
            $gambar_galeri->id_pengantin = $pengantin->id;
            $gambar_galeri->nama_gambar = $g;
            $gambar_galeri->tipe_gambar = 'gallery';
            $gambar_galeri->path = $g;
            $gambar_galeri->save();
            if (!empty($request->file('foto_galeri')[$key])) {
                $nama = md5($gambar_galeri->id);
                $folder = 'storage/prewedding';
                $extension = $request->file('foto_galeri')[$key]->getClientOriginalExtension();
                $file = $nama.".".$extension;
                if (file_exists($folder.'/'.$file)) {
                    unlink($folder."/".$file);
                }
                if ($request->file('foto_galeri')[$key]->move($folder, $file)) {
                    $gambar_galeri->nama_gambar = $nama;
                    $gambar_galeri->path = $folder."/".$file;
                    $gambar_galeri->save();
                }
            }
        }

        // gambar pengantin pria
        $gambar_pengantin_pria = new Gambar();
        $gambar_pengantin_pria->id_pengantin = $pengantin->id;
        $gambar_pengantin_pria->nama_gambar = $request->foto_pengantin_pria;
        $gambar_pengantin_pria->tipe_gambar = 'pengantin_pria';
        $gambar_pengantin_pria->path = $request->foto_pengantin_pria;
        $gambar_pengantin_pria->save();

        if (!empty($request->file('foto_pengantin_pria'))) {
            $nama = md5($gambar_pengantin_pria->id);
            $folder = 'storage/prewedding';
            $extension = $request->file('foto_pengantin_pria')->getClientOriginalExtension();
            $file = $nama.".".$extension;
            if (file_exists($folder.'/'.$file)) {
                unlink($folder."/".$file);
            }
            if ($request->file('foto_pengantin_pria')->move($folder, $file)) {
                $gambar_pengantin_pria->nama_gambar = $nama;
                $gambar_pengantin_pria->path = $folder."/".$file;
                $gambar_pengantin_pria->save();
            }
        }

        // gambar pengantin wanita
        $gambar_pengantin_wanita = new Gambar();
        $gambar_pengantin_wanita->id_pengantin = $pengantin->id;
        $gambar_pengantin_wanita->nama_gambar = $request->foto_pengantin_wanita;
        $gambar_pengantin_wanita->tipe_gambar = 'pengantin_wanita';
        $gambar_pengantin_wanita->path = $request->foto_pengantin_wanita;
        $gambar_pengantin_wanita->save();

        if (!empty($request->file('foto_pengantin_wanita'))) {
            $nama = md5($gambar_pengantin_wanita->id);
            $folder = 'storage/prewedding';
            $extension = $request->file('foto_pengantin_wanita')->getClientOriginalExtension();
            $file = $nama.".".$extension;
            if (file_exists($folder.'/'.$file)) {
                unlink($folder."/".$file);
            }
            if ($request->file('foto_pengantin_wanita')->move($folder, $file)) {
                $gambar_pengantin_wanita->nama_gambar = $nama;
                $gambar_pengantin_wanita->path = $folder."/".$file;
                $gambar_pengantin_wanita->save();
            }
        }

        return redirect(URL('/invitation/'.$pengantin->id.'/finish/'.$slug));
    }

    public function finish($user_id, $slug) {
        // if ($user_id == Auth::user()->id) {
            $undangan = DB::table('tb_pengantin')->where('slug', $slug)->get();
            $gambar = DB::table('tb_gambar')->where('id_pengantin', $undangan[0]->id)->get();
            return view('customer.finish', compact('undangan', 'gambar'));
        // }
        // else {
        //     return redirect('/');
        // }
    }

    public function edit($user_id, $pengantin_id) {
        if ($user_id == Auth::user()->id) {
            $pengantin = Pengantin::where('id', $pengantin_id)->get();
            $gambar_utama = Gambar::where(['id_pengantin' => $pengantin_id, 'tipe_gambar' => 'utama'])->first();
            $gambar_gallery = Gambar::where(['id_pengantin' => $pengantin_id, 'tipe_gambar' => 'gallery'])->get();
            $gambar_pria = Gambar::where(['id_pengantin' => $pengantin_id, 'tipe_gambar' => 'pengantin_pria'])->first();
            $gambar_wanita = Gambar::where(['id_pengantin' => $pengantin_id, 'tipe_gambar' => 'pengantin_wanita'])->first();
            $tema = Tema::all();
            return view('customer.edit', compact('tema', 'pengantin', 'gambar_utama', 'gambar_gallery', 'gambar_pria', 'gambar_wanita'));
            // return view('customer.edit', compact('tema', 'pengantin'));
        }
        else {
            return redirect('/');
        }
    }
    
    public function update(Request $request) {
        $user_id = Auth::user()->id;
        $slug = \Str::slug($request->judul_acara);
        // dd($request->all());
        $pengantin = Pengantin::find($request->pengantin_id);
        $pengantin->slug = $slug;
        $pengantin->title = $request->judul_acara;
        $pengantin->id_user = $user_id;
        $pengantin->id_tema = $request->id_tema;
        $pengantin->pengantin_pria = $request->pengantin_pria;
        $pengantin->pengantin_wanita = $request->pengantin_wanita;
        $pengantin->ortu_pengantin_pria = $request->ortu_pengantin_pria;
        $pengantin->ortu_pengantin_wanita = $request->ortu_pengantin_wanita;
        $pengantin->alamat = $request->alamat_acara;
        $pengantin->tanggal = $request->tanggal_acara;
        $pengantin->gmaps = $request->link_gmaps;
        $pengantin->video = $request->link_video;

        $pengantin->update();

        // 
        if ($request->foto_utama) {
            // dd($request->foto_utama);
            $gambar_utama = Gambar::find($request->gambar_utama_id);
            $gambar_utama->id_pengantin = $request->pengantin_id;
            $gambar_utama->nama_gambar = $request->foto_utama;
            $gambar_utama->tipe_gambar = 'utama';
            $gambar_utama->path = $request->foto_utama;
            if (!empty($request->file('foto_utama'))) {
                $nama = md5($gambar_utama->id);
                $folder = 'storage/prewedding';
                $extension = $request->file('foto_utama')->getClientOriginalExtension();
                $file = $nama.".".$extension;
                if (file_exists($folder.'/'.$file)) {
                    unlink($folder."/".$file);
                }
                if ($request->file('foto_utama')->move($folder, $file)) {
                    $gambar_utama->nama_gambar = $nama;
                    $gambar_utama->path = $folder."/".$file;
                    $gambar_utama->save();
                }
            }
            $gambar_utama->save();
        }
        
        if ($request->foto_galeri_1) {
            // dd($request->foto_galeri_1);
            // $array_objek = json_decode($request->gambar_gallery);
            $galeri_before = Gambar::where(['id_pengantin' => $request->pengantin_id, 'tipe_gambar' => 'gallery'])->get();
            // dd($galeri_before[0]);
            $gambar_galeri = Gambar::find($galeri_before[0]->id);
            // dd($gambar_galeri);
            $gambar_galeri->id_pengantin = $request->pengantin_id;
            $gambar_galeri->nama_gambar = $request->foto_galeri_1;
            $gambar_galeri->tipe_gambar = 'gallery';
            $gambar_galeri->path = $request->foto_galeri_1;
            $gambar_galeri->save();
            if (!empty($request->file('foto_galeri_1'))) {
                $nama = md5($gambar_galeri->id);
                $folder = 'storage/prewedding';
                $extension = $request->file('foto_galeri_1')->getClientOriginalExtension();
                $file = $nama.".".$extension;
                if (file_exists($folder.'/'.$file)) {
                    unlink($folder."/".$file);
                }
                if ($request->file('foto_galeri_1')->move($folder, $file)) {
                    $gambar_galeri->nama_gambar = $nama;
                    $gambar_galeri->path = $folder."/".$file;
                    $gambar_galeri->save();
                }
            }
            $gambar_galeri->save();
        }

        if ($request->foto_galeri_2) {
            $galeri_before = Gambar::where(['id_pengantin' => $request->pengantin_id, 'tipe_gambar' => 'gallery'])->get();
            if (count($galeri_before) > 1) {
                $gambar_galeri = Gambar::find($galeri_before[1]->id);
            }
            else {
                $gambar_galeri = new Gambar();
            }
            $gambar_galeri->id_pengantin = $request->pengantin_id;
            $gambar_galeri->nama_gambar = $request->foto_galeri_2;
            $gambar_galeri->tipe_gambar = 'gallery';
            $gambar_galeri->path = $request->foto_galeri_2;
            $gambar_galeri->save();
            if (!empty($request->file('foto_galeri_2'))) {
                $nama = md5($gambar_galeri->id);
                $folder = 'storage/prewedding';
                $extension = $request->file('foto_galeri_2')->getClientOriginalExtension();
                $file = $nama.".".$extension;
                if (file_exists($folder.'/'.$file)) {
                    unlink($folder."/".$file);
                }
                if ($request->file('foto_galeri_2')->move($folder, $file)) {
                    $gambar_galeri->nama_gambar = $nama;
                    $gambar_galeri->path = $folder."/".$file;
                    $gambar_galeri->save();
                }
            }
            $gambar_galeri->save();
        }

        if ($request->foto_galeri_3) {
            $galeri_before = Gambar::where(['id_pengantin' => $request->pengantin_id, 'tipe_gambar' => 'gallery'])->get();
            // dd($galeri_before[0]);
            if (count($galeri_before) > 2) {
                $gambar_galeri = Gambar::find($galeri_before[2]->id);
            }
            else {
                $gambar_galeri = new Gambar();
            }
            $gambar_galeri->id_pengantin = $request->pengantin_id;
            $gambar_galeri->nama_gambar = $request->foto_galeri_3;
            $gambar_galeri->tipe_gambar = 'gallery';
            $gambar_galeri->path = $request->foto_galeri_3;
            $gambar_galeri->save();
            if (!empty($request->file('foto_galeri_3'))) {
                $nama = md5($gambar_galeri->id);
                $folder = 'storage/prewedding';
                $extension = $request->file('foto_galeri_3')->getClientOriginalExtension();
                $file = $nama.".".$extension;
                if (file_exists($folder.'/'.$file)) {
                    unlink($folder."/".$file);
                }
                if ($request->file('foto_galeri_3')->move($folder, $file)) {
                    $gambar_galeri->nama_gambar = $nama;
                    $gambar_galeri->path = $folder."/".$file;
                    $gambar_galeri->save();
                }
            }
            $gambar_galeri->save();
        }

        if ($request->foto_galeri_4) {
            // dd($request->foto_galeri_1);
            // $array_objek = json_decode($request->gambar_gallery);
            $galeri_before = Gambar::where(['id_pengantin' => $request->pengantin_id, 'tipe_gambar' => 'gallery'])->get();
            // dd($galeri_before[0]);
            if (count($galeri_before) > 3) {
                $gambar_galeri = Gambar::find($galeri_before[3]->id);
            }
            else {
                $gambar_galeri = new Gambar();
            }
            $gambar_galeri->id_pengantin = $request->pengantin_id;
            $gambar_galeri->nama_gambar = $request->foto_galeri_4;
            $gambar_galeri->tipe_gambar = 'gallery';
            $gambar_galeri->path = $request->foto_galeri_4;
            $gambar_galeri->save();
            if (!empty($request->file('foto_galeri_4'))) {
                $nama = md5($gambar_galeri->id);
                $folder = 'storage/prewedding';
                $extension = $request->file('foto_galeri_4')->getClientOriginalExtension();
                $file = $nama.".".$extension;
                if (file_exists($folder.'/'.$file)) {
                    unlink($folder."/".$file);
                }
                if ($request->file('foto_galeri_4')->move($folder, $file)) {
                    $gambar_galeri->nama_gambar = $nama;
                    $gambar_galeri->path = $folder."/".$file;
                    $gambar_galeri->save();
                }
            }
            $gambar_galeri->save();
        }
        
        if ($request->foto_pengantin_pria) {
            // dd($request->foto_pengantin_pria);
            $gambar_pengantin_pria = Gambar::find($request->gambar_pria_id);
            $gambar_pengantin_pria->id_pengantin = $request->pengantin_id;
            $gambar_pengantin_pria->nama_gambar = $request->foto_pengantin_pria;
            $gambar_pengantin_pria->tipe_gambar = 'pengantin_pria';
            $gambar_pengantin_pria->path = $request->foto_pengantin_pria;
            if (!empty($request->file('foto_pengantin_pria'))) {
                $nama = md5($gambar_pengantin_pria->id);
                $folder = 'storage/prewedding';
                $extension = $request->file('foto_pengantin_pria')->getClientOriginalExtension();
                $file = $nama.".".$extension;
                if (file_exists($folder.'/'.$file)) {
                    unlink($folder."/".$file);
                }
                if ($request->file('foto_pengantin_pria')->move($folder, $file)) {
                    $gambar_pengantin_pria->nama_gambar = $nama;
                    $gambar_pengantin_pria->path = $folder."/".$file;
                    $gambar_pengantin_pria->save();
                }
            }
            $gambar_pengantin_pria->save();
        }
        
        if ($request->foto_pengantin_wanita) {
            // dd($request->foto_pengantin_wanita);
            $gambar_pengantin_wanita = Gambar::find($request->gambar_wanita_id);
            $gambar_pengantin_wanita->id_pengantin = $request->pengantin_id;
            $gambar_pengantin_wanita->nama_gambar = $request->foto_pengantin_wanita;
            $gambar_pengantin_wanita->tipe_gambar = 'pengantin_wanita';
            $gambar_pengantin_wanita->path = $request->foto_pengantin_wanita;
            if (!empty($request->file('foto_pengantin_wanita'))) {
                $nama = md5($gambar_pengantin_wanita->id);
                $folder = 'storage/prewedding';
                $extension = $request->file('foto_pengantin_wanita')->getClientOriginalExtension();
                $file = $nama.".".$extension;
                if (file_exists($folder.'/'.$file)) {
                    unlink($folder."/".$file);
                }
                if ($request->file('foto_pengantin_wanita')->move($folder, $file)) {
                    $gambar_pengantin_wanita->nama_gambar = $nama;
                    $gambar_pengantin_wanita->path = $folder."/".$file;
                    $gambar_pengantin_wanita->save();
                }
            }
            $gambar_pengantin_wanita->save();
        }

        return redirect(URL('/invitation/'.$user_id));
    }

    public function hapus($user_id, $pengantin_id) {
        if ($user_id == Auth::user()->id) {
            $data_pengantin = Pengantin::find($pengantin_id);
            $data_gambar = Gambar::where('id_pengantin', $pengantin_id)->get();
            // dd($data_gambar);
            foreach ($data_gambar as $key => $g) {
                if (file_exists($data_gambar[$key]->path)) {
                    unlink($data_gambar[$key]->path);
                }
                $data_gambar[$key]->delete();
            }
            $data_pengantin->delete();
            return redirect(URL('/invitation/'.$user_id)); 
        }
        else {
            return redirect('/');
        }
    }   

}