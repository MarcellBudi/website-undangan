@extends('layouts.app')

@section('content')
<div class="py-10 px-5 flex justify-center bg-gray-200 min-h-screen">
  <form class="w-full md:w-1/2" action="{{ URL('/invitation/edit') }}" method="POST" enctype="multipart/form-data">
    @foreach ($pengantin as $p)

    <input type="hidden" name="pengantin_id" value="{{ $p->id }}">
    <input type="hidden" name="gambar_utama_id" value="{{ $gambar_utama->id }}">
    @php
    $i = 0;
    @endphp
    {{-- @foreach ($gambar_gallery as $gg)
        <input type="hidden" name="{{ 'gambar_galeri_id_'.$i }}" value="{{ $gambar_gallery[$i]->id }}">
      @php
      $i++;
      @endphp
    @endforeach --}}
    {{-- <input type="hidden" name="{{ 'gambar_galeri' }}" value="{{ $gambar_gallery }}"> --}}
    <input type="hidden" name="gambar_pria_id" value="{{ $gambar_pria->id }}">
    <input type="hidden" name="gambar_wanita_id" value="{{ $gambar_wanita->id }}">
    {{ csrf_field() }}
    <div class="shadow-xl overflow-hidden rounded-md px-4 py-5 bg-white sm:p-6">
      <div class="py-6 mb-5 border-b-2">
        <h1 class="text-center text-2xl font-bold text-gray-800">Edit Undangan 📝</h1>
      </div>
      <div class="grid grid-cols-6 gap-6">

        <div class="col-span-6">
          <label for="email-address" class="block text-sm font-medium text-gray-700">Judul Acara</label>
          <input type="text" name="judul_acara" id="email-address" autocomplete="email" class="mt-1 focus:ring-indigo-500 block w-full shadow-sm sm:text-sm p-2 border focus:border-indigo-500 border-gray-300 rounded-md" placeholder="Asep & Santi" required value="{{ $p->title }}">
        </div>

        <div class="col-span-6 sm:col-span-3">
          <label for="pengantin-pria" class="block text-sm font-medium text-gray-700">Nama Pengantin Pria</label>
          <input type="text" name="pengantin_pria" id="pengantin-pria" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 block w-full shadow-sm sm:text-sm p-2 border focus:border-indigo-500 border-gray-300 rounded-md" placeholder="Asep" required value="{{ $p->pengantin_pria }}">
        </div>

        <div class="col-span-6 sm:col-span-3">
          <label for="pengantin_wanita" class="block text-sm font-medium text-gray-700">Nama Pengantin Wanita</label>
          <input type="text" name="pengantin_wanita" id="pengantin-wanita" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 block w-full shadow-sm sm:text-sm p-2 border focus:border-indigo-500 border-gray-300 rounded-md" placeholder="Santi" required value="{{ $p->pengantin_wanita }}">
        </div>

        <div class="col-span-6">
          <label for="ortu-pengantin-pria" class="block text-sm font-medium text-gray-700">Orang Tua Pengantin Pria</label>
          <input type="text" name="ortu_pengantin_pria" id="ortu-pengantin-pria" autocomplete="family-name" placeholder="Nama Ayah & Ibu" class="mt-1 focus:ring-indigo-500 block w-full shadow-sm sm:text-sm p-2 border focus:border-indigo-500 border-gray-300 rounded-md" required value="{{ $p->ortu_pengantin_pria }}">
        </div>

        <div class="col-span-6">
          <label for="ortu-pengantin-wanita" class="block text-sm font-medium text-gray-700">Orang Tua Pengantin Wanita</label>
          <input type="text" name="ortu_pengantin_wanita" id="ortu-pengantin-wanita" autocomplete="family-name" placeholder="Nama Ayah & Ibu" class="mt-1 focus:ring-indigo-500 block w-full shadow-sm sm:text-sm p-2 border focus:border-indigo-500 border-gray-300 rounded-md" required value="{{ $p->ortu_pengantin_wanita }}">
        </div>

        <div class="col-span-6">
          <label for="alamat-acara" class="block text-sm font-medium text-gray-700">Alamat Acara</label>
          <input type="text" name="alamat_acara" id="alamat-acara" autocomplete="family-name" placeholder="Alamat Acara Pernikahan" class="mt-1 focus:ring-indigo-500 block w-full shadow-sm sm:text-sm p-2 border focus:border-indigo-500 border-gray-300 rounded-md" required value="{{ $p->alamat }}">
        </div>

        <div class="col-span-6 sm:col-span-3">
          <label for="tanggal-acara" class="block text-sm font-medium text-gray-700">Tanggal Acara</label>
          <input type="date" name="tanggal_acara" id="tanggal-acara" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 block w-full shadow-sm sm:text-sm p-2 border focus:border-indigo-500 border-gray-300 rounded-md" required value="{{ $p->tanggal }}">
        </div>

        <div class="col-span-6 sm:col-span-3">
          <label for="theme" class="block text-sm font-medium text-gray-700">Pilih Tema</label>
          <select id="theme" name="id_tema" autocomplete="theme-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            @foreach ($tema as $t)
            <option value="{{ $t->id }}">{{ $t->judul_tema }}</option>
            @endforeach
          </select>
        </div>

        <div class="col-span-6">
          <label for="link-gmaps" class="block text-sm font-medium text-gray-700">Link Lokasi Google Maps</label>
          <input type="text" name="link_gmaps" id="link-gmaps" autocomplete="link-gmaps" class="mt-1 focus:ring-indigo-500 block w-full shadow-sm sm:text-sm p-2 border focus:border-indigo-500 border-gray-300 rounded-md" placeholder="url: google maps" required value="{{ $p->gmaps }}">
          <a href="maps.google.com" target="_blank"  class="text-xs text-blue-600 hover:underline" >Kunjungi Google Maps</a>
        </div>
        <div class="col-span-6">
          <label for="link-video" class="block text-sm font-medium text-gray-700">Link Video Prewedding <span class="font-normal text-gray-400">(disarankan: youtube)</span></label>
          <input type="text" name="link_video" id="link-video" autocomplete="link-video" class="mt-1 focus:ring-indigo-500 block w-full shadow-sm sm:text-sm p-2 border focus:border-indigo-500 border-gray-300 rounded-md" placeholder="url: video " required value="{{ $p->video }}">
        </div>

        {{-- Foto Pertama --}}
        <div class="col-span-6">
          <label for="foto-utama" class="block text-sm font-medium text-gray-700">
            Foto Utama
            <span class="font-normal text-gray-400">(upload max: 1)</span>
          </label>
          <input id="foto-utama" type="file" class="mt-1 block w-full text-sm text-slate-500
            file:mr-4 file:py-2 file:px-4
            file:rounded file:border-0
            file:text-sm file:font-semibold
            file:bg-blue-100 file:text-blue-700
            hover:file:bg-blue-200
          "/ name="foto_utama">
        </div>
        
        {{-- Foto Kedua --}}
        {{-- <div class="col-span-3">
          <label for="foto-galeri" class="block text-sm font-medium text-gray-700">
            Foto Gallery
            <span class="font-normal text-gray-400">(upload max: 4)</span>
          </label>
          <input id="foto-galeri" type="file" class="mt-1 block w-full text-sm text-slate-500

            file:mr-4 file:py-2 file:px-4
            file:rounded file:border-0
            file:text-sm file:font-semibold
            file:bg-blue-100 file:text-blue-700
            hover:file:bg-blue-200
          " name="foto_galeri[]" multiple/>
        </div> --}}

        <div class="col-span-3">
          <label for="foto-pengantin-pria" class="block text-sm font-medium text-gray-700">
            Foto Pengantin Pria
            <span class="font-normal text-gray-400">(upload max: 1)</span>
          </label>
          <input id="foto-pengantin-pria" type="file" class="mt-1 block w-full text-sm text-slate-500
            file:mr-4 file:py-2 file:px-4
            file:rounded file:border-0
            file:text-sm file:font-semibold
            file:bg-blue-100 file:text-blue-700
            hover:file:bg-blue-200
          "/ name="foto_pengantin_pria">
        </div>
        
        {{-- Foto Kedua --}}
        <div class="col-span-3">
          <label for="foto-pengantin_wanita" class="block text-sm font-medium text-gray-700">
            Foto Pengantin Wanita
            <span class="font-normal text-gray-400">(upload max: 1)</span>
          </label>
          <input id="foto-pengantin_wanita" type="file" class="mt-1 block w-full text-sm text-slate-500

            file:mr-4 file:py-2 file:px-4
            file:rounded file:border-0
            file:text-sm file:font-semibold
            file:bg-blue-100 file:text-blue-700
            hover:file:bg-blue-200
          " name="foto_pengantin_wanita"/>
        </div>

        <div class="col-span-6">
          <label for="foto-galery" class="block text-sm font-medium text-gray-700">
            Foto Gallery
          </label>
          <div class="grid grid-cols-8 gap-2">      
            <div class="col-span-2">
              <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                  <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600 justify-center">
                    <label for="foto-galeri-1" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                      <span>Upload a file</span>
                      <input id="foto-galeri-1" name="foto_galeri_1" type="file" class="sr-only">
                    </label>
                  </div>
                  <p class="text-xs text-gray-500">
                    Gallery 1
                  </p>
                </div>
              </div>
            </div>
            <div class="col-span-2">
              <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                  <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600 justify-center">
                    <label for="foto-galeri-2" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                      <span>Upload a file</span>
                      <input id="foto-galeri-2" name="foto_galeri_2" type="file" class="sr-only">
                    </label>
                  </div>
                  <p class="text-xs text-gray-500">
                    Gallery 2
                  </p>
                </div>
              </div>
            </div>
            <div class="col-span-2">
              <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                  <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600 justify-center">
                    <label for="foto-galeri-3" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                      <span>Upload a file</span>
                      <input id="foto-galeri-3" name="foto_galeri_3" type="file" class="sr-only">
                    </label>
                  </div>
                  <p class="text-xs text-gray-500">
                    Gallery 3
                  </p>
                </div>
              </div>
            </div>
            <div class="col-span-2">
              <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                  <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600 justify-center">
                    <label for="foto-galeri-4" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                      <span>Upload a file</span>
                      <input id="foto-galeri-4" name="foto_galeri_4" type="file" class="sr-only">
                    </label>
                  </div>
                  <p class="text-xs text-gray-500">
                    Gallery 4
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="mt-5 py-3 bg-gray-50 text-right mb-3">
        <button type="submit" class="inline-flex justify-center py-2 px-5 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Edit
        </button>
      </div>
      @endforeach
  </form>
</div>

@endsection