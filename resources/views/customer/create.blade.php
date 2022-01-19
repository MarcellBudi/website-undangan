@extends('layouts.app')

@section('content')

<div class="py-10 px-5 flex justify-center bg-gray-200 min-h-screen">
  <form class="w-full md:w-1/2" action="{{ URL('/invitation') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="shadow-xl overflow-hidden rounded-md px-4 py-5 bg-white sm:p-6">
      <div class="py-6 mb-5 border-b-2">
        <h1 class="text-center text-2xl font-bold text-gray-800">Buat Undangan 📝</h1>
      </div>
      <div class="grid grid-cols-6 gap-6">

        <div class="col-span-6">
          <label for="email-address" class="block text-sm font-medium text-gray-700">Judul Acara</label>
          <input type="text" name="judul_acara" id="email-address" autocomplete="email" class="mt-1 focus:ring-indigo-500 block w-full shadow-sm sm:text-sm p-2 border focus:border-indigo-500 border-gray-300 rounded-md" placeholder="Asep & Santi" required>
        </div>

        <div class="col-span-6 sm:col-span-3">
          <label for="pengantin-pria" class="block text-sm font-medium text-gray-700">Nama Pengantin Pria</label>
          <input type="text" name="pengantin_pria" id="pengantin-pria" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 block w-full shadow-sm sm:text-sm p-2 border focus:border-indigo-500 border-gray-300 rounded-md" placeholder="Asep" required>
        </div>

        <div class="col-span-6 sm:col-span-3">
          <label for="pengantin_wanita" class="block text-sm font-medium text-gray-700">Nama Pengantin Wanita</label>
          <input type="text" name="pengantin_wanita" id="pengantin-wanita" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 block w-full shadow-sm sm:text-sm p-2 border focus:border-indigo-500 border-gray-300 rounded-md" placeholder="Santi" required>
        </div>

        <div class="col-span-6">
          <label for="ortu-pengantin-pria" class="block text-sm font-medium text-gray-700">Orang Tua Pengantin Pria</label>
          <input type="text" name="ortu_pengantin_pria" id="ortu-pengantin-pria" autocomplete="family-name" placeholder="Nama Ayah & Ibu" class="mt-1 focus:ring-indigo-500 block w-full shadow-sm sm:text-sm p-2 border focus:border-indigo-500 border-gray-300 rounded-md" required>
        </div>

        <div class="col-span-6">
          <label for="ortu-pengantin-wanita" class="block text-sm font-medium text-gray-700">Orang Tua Pengantin Wanita</label>
          <input type="text" name="ortu_pengantin_wanita" id="ortu-pengantin-wanita" autocomplete="family-name" placeholder="Nama Ayah & Ibu" class="mt-1 focus:ring-indigo-500 block w-full shadow-sm sm:text-sm p-2 border focus:border-indigo-500 border-gray-300 rounded-md" required>
        </div>

        <div class="col-span-6">
          <label for="alamat-acara" class="block text-sm font-medium text-gray-700">Alamat Acara</label>
          <input type="text" name="alamat_acara" id="alamat-acara" autocomplete="family-name" placeholder="Alamat Acara Pernikahan" class="mt-1 focus:ring-indigo-500 block w-full shadow-sm sm:text-sm p-2 border focus:border-indigo-500 border-gray-300 rounded-md" required>
        </div>

        <div class="col-span-6 sm:col-span-3">
          <label for="tanggal-acara" class="block text-sm font-medium text-gray-700">Tanggal Acara</label>
          <input type="date" name="tanggal_acara" id="tanggal-acara" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 block w-full shadow-sm sm:text-sm p-2 border focus:border-indigo-500 border-gray-300 rounded-md" required>
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
          <input type="text" name="link_gmaps" id="link-gmaps" autocomplete="link-gmaps" class="mt-1 focus:ring-indigo-500 block w-full shadow-sm sm:text-sm p-2 border focus:border-indigo-500 border-gray-300 rounded-md" placeholder="url: google maps" required>
          <a href="maps.google.com" target="_blank"  class="text-xs text-blue-600 hover:underline" >Kunjungi Google Maps</a>
        </div>
        <div class="col-span-6">
          <label for="link-video" class="block text-sm font-medium text-gray-700">Link Video Prewedding <span class="font-normal text-gray-400">(disarankan: youtube)</span></label>
          <input type="text" name="link_video" id="link-video" autocomplete="link-video" class="mt-1 focus:ring-indigo-500 block w-full shadow-sm sm:text-sm p-2 border focus:border-indigo-500 border-gray-300 rounded-md" placeholder="url: video " required>
        </div>

        {{-- Foto Pertama --}}
        <div class="col-span-3">
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
          "/ name="foto_utama" required>
        </div>
        
        {{-- Foto Kedua --}}
        <div class="col-span-3">
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
          " name="foto_galeri[]" multiple required/>
        </div>

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
          "/ name="foto_pengantin_pria" required>
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

      </div>
      <div class="mt-5 py-3 bg-gray-50 text-right mb-3">
        <button type="submit" class="inline-flex justify-center py-2 px-5 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Buat
        </button>
      </div>
  </form>
</div>

@endsection