@extends('layouts.app')

@section('content')
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col container mx-auto py-5">
  @if (count($pengantin) > 0)
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                id
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Judul
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Tema
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Pengantin Pria
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Pengantin Wanita
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Gallery
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Alamat Acara
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Tanggal Acara
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Google Maps
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Video Prewedding
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Action
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
          @foreach ($pengantin as $p)
          @php 
            $gambar_utama = \App\Models\Gambar::where(['id_pengantin' => $p->id, 'tipe_gambar' => 'utama'])->first();
            $gambar_pria = \App\Models\Gambar::where(['id_pengantin' => $p->id, 'tipe_gambar' => 'pengantin_pria'])->first();
            // dd($gambar_pria);
            $gambar_wanita = \App\Models\Gambar::where(['id_pengantin' => $p->id, 'tipe_gambar' => 'pengantin_wanita'])->first();
            $gambar_galeri = \App\Models\Gambar::where(['id_pengantin' => $p->id, 'tipe_gambar' => 'gallery'])->get();
            $tema = \App\Models\Tema::where(['id' => $p->id_tema])->first();
            // $gambaran = \App\Models\Gambar::where(['id_pengantin' => $p->id, 'tipe_gambar' => 'pengantin_wanita'])->first();
            // dd($gambaran->path);
          @endphp
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{ $p->id }}</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="{{ URL($gambar_utama->path) }}" alt="">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                      {{ $p->title }}
                    </div>
                    <div class="text-sm text-gray-500">
                      <a href="{{ URL($p->slug) }}">{{ URL($p->slug) }}</a>
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{ $tema->judul_tema }}</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="{{ URL($gambar_pria->path) }}" alt="">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                      {{ $p->pengantin_pria }}
                    </div>
                    <div class="text-sm text-gray-500">
                      {{ $p->ortu_pengantin_pria }}
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="{{ URL($gambar_wanita->path) }}" alt="">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                      {{ $p->pengantin_wanita }}
                    </div>
                    <div class="text-sm text-gray-500">
                      {{ $p->ortu_pengantin_wanita }}
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900 flex items-center gap-2">
                  @foreach ($gambar_galeri as $gg)
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="{{ URL($gg->path) }}">
                  </div>
                  @endforeach
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{ $p->alamat }}</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{ $p->tanggal }}</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{ $p->gmaps }}</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{ $p->video }}</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-4">
                <a href="{{ URL('/'.Auth::user()->id.'/edit/'.$p->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                <a href="{{ URL('/'.Auth::user()->id.'/hapus/'.$p->id) }}" class="text-red-600 hover:text-red-900">Hapus</a>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>
  @else
  <div class="py-5 text-center">
    Ups, anda belum membuat undangan apapun 
    <a href="{{ route('create-invitation', Auth::user()->id) }}" class="underline text-blue-600">
      Buat Sekarang
    </a>
  </div>
  @endif
</div>

@endsection
