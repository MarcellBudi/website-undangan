@extends('layouts.app')

@section('content')
<div class="grid md:grid-cols-8 min-h-screen">
    <div class="md:flex col-span-5 hidden justify-center items-center bg-blue-900">
        <h1 class="text-white text-xl drop-shadow-xl uppercase font-bold">
            Welcome to Hadirin.com👋🏻
        </h1>
    </div>
    <div class="md:col-span-3 flex justify-center p-10 bg-blue-200">
        <form class="w-full shadow-xl rounded px-8 flex flex-col bg-white pt-5" method="POST" action="{{ route('login') }}">
            <h1 class="text-center font-bold text-lg py-4 border-b-2">Login</h1>
            @csrf
            <div class="py-4 mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="email">
            {{ __('E-Mail Address') }}
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="email" type="email" placeholder="Email Anda" name="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="mb-6">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
                {{ __('Password') }}
                </label>
                <input class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3" id="password" type="password" placeholder="********" name="password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="items-center flex justify-between mb-5">
                <div>
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
                </div>

                @if (Route::has('password.request'))
                <a class="inline-block hover:underline text-sm text-blue hover:text-blue-darker" href="{{ route('password.request') }}">
                    Forgot Password?
                </a>
                @endif
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ __('Login') }}</button>
        </form>
    </div>
</div>
@endsection