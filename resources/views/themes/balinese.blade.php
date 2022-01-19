<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Kampret & Dedemit</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <style>
    body {
      background-image: url("{{ URL('images/bg.png') }}");
      background-size: cover;
      background-position: center;
    }
    * {
      color: white;
      font-family: 'Playfair Display', serif;
    }
  </style>
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <section class="h-screen md:w-1/2 mx-auto">
      <div class="text-center mt-56 leading-10">
        <h3 class="text-xl">We Are Getting Married</h3>
        <h1 class="text-2xl pb-6">Thursday, 04 March 2021</h1>
        <h2 class="text-7xl">ANGGI 
        <h2 class="text-3xl py-5">&</h2> 
        <h2 class="text-7xl">GUNA</h2>
      </div>
      <!-- http://127.0.0.1:8000/balinese NI LINKNY -->
      <!-- hover:bg-black md:text-white -->
  </section>
  <section class="mt-28 mb-20 ">
    <div class="text-center">
      <h1 class="text-3xl">Informasi</h1>
      <h2 class="py-10 px-10 md:px-72">Acara ini diselenggarakan dengan mematuhi protokol pencegahan penularan COVID-19 dan bagi undangan diharapkan dapat mengikutinya</h2>
    </div>
    <div class="text-center">
      <h1 class="text-lg py-10">Om Swastyastu</h1>
      <h2 class="text=md px-10 md:px-72">Atas Asung Kertha Wara Nugraha Ida Sang Hyang Widhi Wasa/ Tuhan Yang Maha Esa, kami bermaksud mengundang Bapak/Ibu/Saudara/I. pada Upacara Manusa Yadnya Pawiwahan putra putri kami.</h2>
    </div>
  </section>
  <section class="mt-48">
    <div class="text-center">
      <h1 class="text-2xl">BRIDE & GROOM</h1>
      <h2 class="py-5 text-lg">Om Swastiastu</h2>
      <h3 class="text-md px-10">Atas Asung Kertha Wara Nugraha Ida Sang Hyang Widhi Wasa / Tuhan Yang Maha Esa,</h3>
      <h3 class="text-md px-10">Kami Bermaksud menyelenggarakan upacara Manusa Yadnya (Pawiwahan) Putra Putri Kami</h3>
    </div>
    <div class="mt-20 flex justify-center space-x-16 items-center flex-col md:flex-row md:mr-9">
      {{-- {{ URL(storage/prewedding/38b3eff8baf56627478ec76a704e9b52.jpg) }} --}}
        <figure class="text-center md:pl-32">
          <img class="w-60 rounded-full mx-auto" src="{{ URL('storage/prewedding/38b3eff8baf56627478ec76a704e9b52.jpg') }}" alt="">
          <h1 class="text-center pt-5 text-xl">Guna</h1>
          <h2 class="py-5">Putra dari Pasangan<br> I Nyoman Adnyana & Ni Made Puspawati</h2>
          <h2>Br. Penestanan Kaja, Ds. Sayan, Kec. Ubud, Kab. Gianyar</h2>
          </a>
        </figure>
        <figure class="text-center pt-24 md:pb-24 pr-16 md:pr-14 px-auto">
          <img class="w-60 rounded-full mx-auto" src="{{ URL('storage/prewedding/38b3eff8baf56627478ec76a704e9b52.jpg') }}" alt="">
          <h1 class="text-center pt-5 text-xl">Anggi</h1>
          <h2 class="py-5">Putra dari Pasangan<br> I Nyoman Adnyana & Ni Made Puspawati</h2>
          <h2>Br. Penestanan Kaja, Ds. Sayan, Kec. Ubud, Kab. Gianyar</h2>
        </figure>
    </div>
  </section>
  <section class="text-center mt-40 border-2 w-80 mx-auto border-solid border-green my-20">
      <div>
        <h1 class="mb-5 text-3xl pt-5">PAWIWAHAN</h1>
        <h3 class="text-lg">Monday, 01 March 2021</h3>
        <h3 class="text-md">12:00 - 23:59 WITA</h3>
        <h4 class="my-5 text-bold">Br. Penestanan Kaja, Sayan, Ubud
        Jl Cempaka Putih no.16</h4>
      </div>
  </section>
  <section class="container mt-40 w-6/12 mx-auto">
    <div class="">
      <h1 class="text-center text-3xl">OUR GALLERY</h1>
      <figure class="flex gap-5 flex-wrap justify-center items-center my-20">
        <img class="w-60 rounded-sm" src="{{ URL('storage/prewedding/38b3eff8baf56627478ec76a704e9b52.jpg') }}" alt="">   
      </figure>
    </div>
  </section>
  <section class="mt-52 text-center my-10 px-10">
    <div>
      <h1 class="my-5 text-lg">"Atas kehadiran dan doa restunya kami sekeluarga mengucapkan terimakasih"</h1>
      <h2 class="text-2xl">OM SANTIH, SANTIH, SANTIH OM</h2>
    </div>
  </section>
  <section class="text-center mt-48">
    <div class="">
      <h1><a href="/" class="text-md font-bold text-white">Hadirin.com</a></h1>
      <h2 class="text-sm">Website Undangan Pernikahan Online</h2>
    </div>
  </section>
</body>
</html>