@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center">
    
    <form class="w-1/2 bg-orange-200 shadow-xl rounded px-8 pt-6 pb-8 mb-4 mt-10 flex flex-col space-y-6" method="POST" action="{{ route('register') }}">
        @csrf
        <h1 class=" text-xl text-center my-10 font-bold">Welcum To Register Page!!!</h1>
        <div>
            <label class="block text-grey-darker text-sm font-bold mb-2 @error('name') text-red-500 @enderror" for="name">
            {{ __('Nama') }}
            </label>
            <input class="shadow border rounded w-full py-2 px-3 text-grey-darker" id="name" type="text" placeholder="nama anda" name="name">
            @error('name')
                <span class="text-red-500" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div>
            <label class="block text-grey-darker text-sm font-bold mb-2 @error('email') text-red-500 @enderror" for="email">
            {{ __('Email') }}
            </label>
            <input class="shadow border rounded w-full py-2 px-3 text-grey-darker" id="email" type="email" placeholder="email anda" name="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
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
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div>
            <label class="block text-grey-darker text-sm font-bold mb-2" for="password-confirm">
            {{ __('Confirm Password') }}
            </label>
            <input class="shadow border rounded w-full py-2 px-3 text-grey-darker" id="password" type="password" placeholder="*****" name="password_confirmation">
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ __('Register') }}</button>
    </form>
</div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection