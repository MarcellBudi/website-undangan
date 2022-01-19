@extends('layouts.app')

@section('content')


<section class="flex text-left pt-28  bg-gray-100 pb-52">
    <div class="md:basis-1/2 px-28">
        <h1 class="text-4xl md:text-7xl font-bold">Tentang</h1>
        <p class="pt-10 text-xl leading-8">Hallo perkenalkan kami hadirin.com, platform website undangan pernikahan online di Indonesia.</p>
    </div>
    <div class="md:basis-1/2">
        
    </div>
</section>
<section class="flex flex-col md:flex-row text-left mt-40 mb-20">
    <div class="md:basis-1/2 md:px-28 px-20">
        <h1 class="text-3xl md:text-6xl leading-tight font-bold">Platform undangan pernikahan online.</h1>
    </div>
    <div class="md:basis-1/2 md:px-32 px-20 pt-10 md:pt-0">
        <h1 class="text-xl leading-9">hadirin.com adalah platform undangan pernikahan online dan digital yang dapat dibagikan secara online kepada seluruh tamu undangan dimanapun dan kapanpun. Hadirin.com menyediakan jasa undangan pernikahan online gratis dan berkualitas.</h1>
    </div>
</section>
<section class="my-40">
    <div>
        <figure class="">
            <img class="items-center mx-auto rounded-md w-80" src="{{ URL('images/ilustrasi-pernikahan.jpg') }}" alt="">
        </figure>
    </div>
</section>
<section class="mx-auto">
    <div class="flex mx-auto flex-col md:ml-52  w-3/4 md:flex-row">
        <div class="basis-1/2 md:pl-10 ">
            <h1 class="text-xl font-bold">Riset Oriented</h1>
            <h2 class="pt-5">Hadirin benar-benar meriset bagaimana kemudahan penggunaan bagi user dan biaya yang murah untuk membuat undangan online semudah bermain sosmed.</h2>
        </div>
        <div class="basis-1/2 md:px-10 py-10 md:py-0">
            <h1 class="text-xl font-bold">Support System</h1>
            <h2 class="pt-5">Hadirin senantiasa membantu semua customer kami apabila terdapat kendala baik teknis maupun non teknis. Waktu kami membantu customer 24/7, no tidur-tidur club.</h2>
        </div>
        <div class="basis-1/2 md:pr-10">
            <h1 class="text-xl font-bold">Accept Advice</h1>
            <h2 class="pt-5">Hadirin sangat terbuka akan masukan, kritikan dan permintaan penambahan fitur dari customer, agar kami semakin baik lagi kedepanya.</h2>
        </div>
    </div>
    <div class="flex mx-auto flex-col md:ml-52  w-3/4 md:flex-row md:mt-20 md:mb-32 mb-20">
        <div class="basis-1/2 md:pl-10 mt-10 md:mt-0">
            <h1 class="text-xl font-bold">Technology Innovation</h1>
            <h2 class="pt-5">Hadirin sangat fokus pada teknologi untuk memastikan undangan dapat di akses pada mobile dan desktop dengan cepat dan sesuai harapan.</h2>
        </div>
        <div class="basis-1/2 md:px-10 py-10 md:py-0">
            <h1 class="text-xl font-bold">Maintain Privacy</h1>
            <h2 class="pt-5">Hadirin memberikan keleluasaan untuk kamu mengisi informasi undangan online yang akan dibagikan secara mandiri. Seperti tamu undangan, waktu, alamat, foto, video dan quote. Sehingga membuat privasimu dapat terjaga.</h2>
        </div>
        <div class="basis-1/2 md:pr-10">
            <h1 class="text-xl font-bold">Young People</h1>
            <h2 class="pt-5">Hadirin 100% terdiri dari anak muda yang mempunyai passion di dunia kreatif industri, baik wedding, design dan web development, sehingga kami senantiasa memberikan ide-ide baru untuk kita.</h2>
        </div>
    </div>
</section>

<a href="{{ route('whatsapp') }}" rel="noopener noreferrer" target="_blank" class="bg-green-500 p-4 fixed bottom-5 right-5 rounded-full animate-bounce z-40">
    <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
</a>

@endsection