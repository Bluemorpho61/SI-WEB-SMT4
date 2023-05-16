@extends('layouts.app')

@section('content')
    <div class="flex flex-row h-screen">
        <div class="w-1/2" style="background-image: url({{ asset('untuk-landing.jpeg') }})">
            <div class="flex flex-col justify-center items-center h-screen">
                <div class="w-1/2">
                    <div class="flex flex-col justify-center items-left stroke-slate-200">
                        <div class="text-2xl font-bold brightness-200 text-logo-color mb-2">DevHunt_</div>
                        <div class="text-sm text-white mb-6">Wujudkan ide digitalisasi anda</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/2">
            <div class="flex flex-col justify-center items-center h-screen">
                <div class="w-1/2">
                    <div class="flex flex-col justify-center items-left">
                        <div class="text-2xl font-bold text-gray-700 mb-2">Registrasi</div>
                        <div class="text-sm text-gray-500 mb-6">Silahkan masukkan e-mail beserta password untuk melakukan
                            pendaftaran </div>
                    </div>
                    <form method="POST" action="/auth/register">
                        @csrf
                        <div class="flex flex-col mb-6">
                            <label for="email" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">Email</label>
                            <div class="relative">
                                <input id="email" type="email"
                                    class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded border border-gray-200 focus:outline-none focus:bg-white focus:border-gray-300"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M10 12a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col mb-6">
                            <label for="password"
                                class="mb-1 text-xs sm:text-sm tracking-wide text gray-600">Password</label>
                            <div class="relative">
                                <input id="password" type="text"
                                    class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded border border-gray-200 focus:outline-none focus:bg-white focus:border-gray-300"
                                    name="password" required autocomplete="current-password">
                                <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M10 12a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8z" />
                                    </svg>
                                </div>
                            </div>
                            <label for="kon_password" class="">Konfirmasi Password</label>
                            <div class="relative">
                                <input type="text" id="kon_password"
                                    class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded border-gray-200 focus:outline-none focus:bg-white focus:border-gray-300 error @error('kon_password') is-invalid @enderror">
                            </div>

                            <a href="{{ route('autentikasi') }}" class="font-bold">Sudah punya akun?</a>

                            <div class="flex justify-center mt-4">
                                <button class="bg-green-700 w-32 h-11 rounded-xl text-white font-bold text-xl"
                                    type="submit">Register</button>
                            </div>
                    </form>

                    <div class="mt-4 flex justify-center">
                        <a type="button" href="{{route('regisdev')}}"
                            class="bg-blue-500 w-60 rounded-xl h-11 text-white text-lg flex justify-center font-bold">
                            <p class="mt-2">
                                Daftar Sebagai
                                Developer
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
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
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

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
    </div>
</div> --}}
@endsection
