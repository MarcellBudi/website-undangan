@extends('layouts.app')

@section('content')
  <section class="bg-gradient-to-r from-cyan-500 to-blue-300 text-gray-800">
    <article class="p-5">
      <div class="bg-white md:w-3/4 mx-auto flex flex-col justify-center items-center rounded-lg space-y-4 p-10">
        <div class="mt-10 flex justify-center">
          <img class="border-8 border-red-200 rounded-full w-1/2" src="{{ URL($gambar[0]->path) }}" alt="">
        </div>
        <div class="text-center leading-7 ">
          <h1 class="font-bold text-xl mb-5">Yay Undangan Sudah Siap🎉</h1>
          <p>Kamu telah berhasil membuat undangan</p>
          <p>Kami turut bahagia atas pernikahan <i> {{ $undangan[0]->title }}</i> !</p>
        </div>
        <div class="w-1/2 grid grid-cols-2 gap-2 text-center">
          <a class="text-white border p-2 bg-blue-400 rounded-lg font-bold hover:bg-blue-500" href="{{ URL('/'.$undangan[0]->slug) }}">Tampilkan Hasil</a>
          <div class="relative rounded-md overflow-hidden">
            <input class="focus:ring-indigo-500 w-full p-2 border focus:border-indigo-500 border-gray-300" type="text" readonly value="{{ URL('/'.$undangan[0]->slug) }}">
            <div class="absolute right-0 top-0 bottom-0 bg-white shadow-md p-2 border">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </article>
  </section>
@endsection