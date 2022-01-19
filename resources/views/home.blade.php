@extends('layouts.app')

@section('content')

<section class="flex text-left md:flex-row flex-col pt-20 h-screen">
    <div class="md:basis-1/2 basis-1/2 px-28">
        <h1 class="text-3xl md:text-6xl font-bold">Website Undangan Pernikahan Online</h1>
        <p class="pt-10 text-xl leading-8"> Undang orang-orang terdekat dalam momen kebahagiaan pernikahan Anda dengan cara yang unik dan menarik menggunakan hadirin.com. Coba sekarang juga, GRATIS!</p>
        <p class="text-xl text-gray-500 leading-8">Bukan . Sekedar . Gambar</p>
    </div>
    <div class="md:basis-1/2 basis-1/2 mt-10 md:mt-0 px-28 md:-px-28">
        <img class="md:h-3/4 h-1/2 mx-auto ml-20" src="{{ URL('images/ilustrasi-pernikahan.jpg') }}" alt="">
    </div>
</section>

<section class="md:mt-20 mt-28 flex flex-col md:flex-row text-left bg-gray-100 py-10">
    <div class="md:basis-1/4 pl-10">
        <h1 class="font-bold text-4xl">Mengapa Harus Punya Website Undangan?</h1>
    </div>
    <div class="md:basis-1/4">
        <h1 class="font-bold text-2xl px-9 pt-10 md:pt-0">Mudah Dibagikan</h1>
        <p class=" pt-3.5 px-9">Hanya dengan link, undangan digital bisa dibagikan keseluruh kontak lengkap dengan nama tamu undangan</p>
    </div>
    <div class="md:basis-1/4">
        <h1 class="font-bold text-2xl px-9 pt-5 md:pt-0">Info & Fitur Lengkap</h1>
        <p class=" pt-3.5 px-9">Semua informasi ditampilkan dalam undangan dengan fitur peta lokasi, galeri pre wedding, countdown timer, hingga cerita cinta Anda</p>
    </div>
    <div class="md:basis-1/4">
        <h1 class="font-bold text-2xl px-9 pt-5 md:pt-0">Unik & Kekinian</h1>
        <p class=" pt-3.5 px-9">Di era serba digital seperti saat ini, website undangan bisa menjadi pilihan undangan yang unik dan menarik namun tetap fungsional</p>
    </div>
</section>


<section class="mt-20">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#F3F4F6" fill-opacity="1" d="M0,128L80,117.3C160,107,320,85,480,112C640,139,800,213,960,224C1120,235,1280,181,1360,154.7L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>
    <section class="text-center h-max flex flex-col md:flex-row bg-gray-100">
        <div class="basis-1/2">
            <img class="w-2/3 mx-auto md:mx-0 md:w-full" src="{{ URL('images/gambar-pernikahan.jpg') }}" alt="">
        </div>
        <div class="basis-1/2 text-left ml-10  md:mr-20 mt-10 md:mt-0">
            <h1 class="font-bold text-5xl md:text-6xl leading-snug ">Alasan Memilih<br>Hadirin</h1>
            <h2 class="text-lg pt-7 leading-8">Kami hadir sebagai layanan untuk membuat website undangan online pernikahan gratis semudah bermain media sosial.</h2>
                <div class="mt-5">
                    <div class="flex bg-white py-6 px-6 rounded-md relative w-11/12 md:w-full">
                        <div class="absolute basis-1/12 p-2 rounded-full bg-gray-100 flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                            </svg>
                        </div>
                        <div class="basis-11/12 pl-14">
                            <h1 class="font-bold text-lg">Mudah dan Murah</h1>
                            <p>Hanya perlu waktu 5 menit untuk membuat website undangan pernikahan online menggunakan hadirin.com. Anda bisa mencobanya secara gratis dan websitemu akan aktif hingga 1 tahun kedepan.</p>
                        </div>
                    </div>
                    <div class="flex bg-white py-6 px-6 rounded-md relative my-3.5 w-11/12 md:w-full">
                        <div class="absolute basis-1/12 p-2 rounded-full bg-gray-100 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        </div>
                        <div class="basis-11/12 pl-14">
                            <h1 class="font-bold text-lg">Banyak Pilihan Tema</h1>
                            <p>Tersedia banyak pilihan tema yang bisa di sesuaikan dengan selera Anda. Masih kurang? tenang, kami juga memiliki layanan untuk permintaan tema eksklusif.</p>
                        </div>
                    </div>
                    <div class="flex bg-white py-6 px-6 rounded-md relative w-11/12 md:w-full">
                        <div class="absolute basis-1/12 p-2 rounded-full bg-gray-100 flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div class="basis-11/12 pl-14">
                            <h1 class="font-bold text-lg">Tim Support Responsif</h1>
                            <p>Tidak perlu menunggu lama, selesaikan masalah Anda dengan cepat secara real time melalui live chat whatsapp bersama tim support kami.</p>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#F3F4F6" fill-opacity="1" d="M0,128L80,117.3C160,107,320,85,480,112C640,139,800,213,960,224C1120,235,1280,181,1360,154.7L1440,128L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>
</section>

<section class="my-9">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FCA5A5" fill-opacity="1" d="M0,192L120,208C240,224,480,256,720,250.7C960,245,1200,203,1320,181.3L1440,160L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
<section class="flex bg-red-300 flex-col md:flex-row">
<div class="basis-1/2 px-9 justify-content-center items-center pt-20">
            <h1 class="font-bold text-5xl leading-snug text-white">3 Langkah Mudah Menggunakan Hadirin</h1>
            <h2 class="text-2xl pt-7  leading-8 pr-12 text-white">Cukup lakukan 3 langkah untuk buat website undangan pernikahanmu sendiri. Wujudkan undangan pernikahan impian Anda bersama kami.</h2>
        </div>
<section class="">
    <div class="container px-6 py-10 mx-auto">
        <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
            <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl bg-white">
                <span class="inline-block text-blue-500 dark:text-blue-400 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                    </svg>
                </span>
                <h1 class="text-2xl font-semibold capitalize text-black">Register</h1>
                <p class="text-gray-500 dark:text-gray-500">
                    Isi alamat website yang diinginkan, email dan password akun milik Anda, kemudian lakukan aktivasi akun
                </p>
                <a href="#" class="inline-flex p-2 text-blue-500 capitalize transition-colors duration-200 transform bg-blue-100 rounded-full dark:bg-blue-500 dark:text-white hover:underline hover:text-white dark:hover:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>
            </div>
            <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl bg-white">
                <span class="inline-block text-blue-500 dark:text-blue-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>
                </span>
                <h1 class="text-2xl font-semibold capitalize text-black">Buat Undangan</h1>
                <p class="text-gray-500 dark:text-gray-500">
                    Buat undangan Anda dengan Judul Acara, Nama Pengantin Pria dan Wanita, Orang Tua Pengantin Pria dan Wanita, Alamat Acara, Tanggal Acara, Pilih Tema, Link Lokasi Google Maps, Link Video Prewedding, Foto Utama, dan Foto Gallery
                </p>
                <a href="#" class="inline-flex p-2 text-blue-500 capitalize transition-colors duration-200 transform bg-blue-100 rounded-full dark:bg-blue-500 dark:text-white hover:underline hover:text-white dark:hover:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>
            </div>
            <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl bg-white">
                <span class="inline-block text-blue-500 dark:text-blue-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                    </svg>
                </span>
                <h1 class="text-2xl font-semibold capitalize text-black">Bagikan Link</h1>
                <p class="text-gray-500 dark:text-gray-500">
                    Website undangan pernikahan online sudah siap dibagikan ke seluruh tamu undangan
                </p>
                <a href="#" class="inline-flex p-2 text-blue-500 capitalize transition-colors duration-200 transform bg-blue-100 rounded-full dark:bg-blue-500 dark:text-white hover:underline hover:text-white dark:hover:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    </section>
        
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FCA5A5" fill-opacity="1" d="M0,32L120,53.3C240,75,480,117,720,138.7C960,160,1200,160,1320,160L1440,160L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>
</section>


<a href="{{ route('whatsapp') }}" rel="noopener noreferrer" target="_blank" class="bg-green-500 p-4 fixed bottom-5 right-5 rounded-full animate-bounce z-40">
    <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
</a>


@endsection
