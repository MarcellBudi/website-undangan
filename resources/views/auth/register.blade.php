@extends('layouts.app')

@section('content')
<div class="grid md:grid-cols-8">

    <div class="md:flex col-span-5 hidden justify-center items-center bg-blue-900">
        <h1 class="text-white text-xl drop-shadow-xl uppercase font-bold">Welcome to Hadirin.com👋🏻</h1>
    </div>
    <div class="md:col-span-3 flex justify-center px-8 bg-gray-200">
    
        <form class="w-full bg-white shadow-xl rounded px-8 pb-8 mb-5 mt-5 flex flex-col space-y-6" method="POST" action="{{ route('register') }}">
            @csrf
            <h1 class="text-center font-bold text-lg py-4 border-b-2">Daftar</h1>
            <div class="w-full">
                <label class="block text-grey-darker text-sm font-bold mb-2 @error('name') text-red-500 @enderror" for="name">
                {{ __('Nama Lengkap') }}
                </label>
                <input class="shadow border rounded w-full py-2 px-3 text-grey-darker" id="name" type="text" placeholder="nama anda" name="name">
                @error('name')
                    <span class="text-red-600" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div>
                <label class="block text-grey-darker text-sm font-bold mb-2 @error('email') text-red-500 @enderror" for="email">
                {{ __('Email') }}
                </label>
                <input class="shadow border rounded w-full py-2 px-3 text-grey-darker" id="email" type="email" placeholder="contoh@email.com" name="email">
                @error('email')
                    <span class="text-red-600" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div>
                <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
                {{ __('Password') }}
                </label>
                <input class="shadow border rounded w-full py-2 px-3 text-grey-darker" id="password" type="password" placeholder="*****" name="password" required autocomplete="new-password"> 
                @error('password')
                    <span class="text-red-600" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div>
                <label class="block text-grey-darker text-sm font-bold mb-2" for="password-confirm">
                {{ __('Konfirmasi Password') }}
                </label>
                <input class="shadow border rounded w-full py-2 px-3 text-grey-darker" id="password" type="password" placeholder="*****" name="password_confirmation">
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ __('Register') }}</button>
        </form>
    </div>
</div>
@endsection